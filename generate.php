#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use StubsGenerator\{StubsGenerator, Finder};
use Dotenv\Dotenv;

// Helper function for colored output
function color( string $text, string $color ): string {
	$colors = array(
		'green'  => "\033[32m",
		'red'    => "\033[31m",
		'yellow' => "\033[33m",
		'reset'  => "\033[0m",
	);

	return ( $colors[ $color ] ?? '' ) . $text . $colors['reset'];
}

// Extract the Version: header from EDD SL's main plugin file.
function extractSlVersion( string $eddSlPath ): string {
	// EDD SL's main file is `edd-software-licenses.php` (singular `licenses`, not `licensing`).
	$candidates = array(
		$eddSlPath . '/edd-software-licenses.php',
		$eddSlPath . '/edd-software-licensing.php',
	);

	$mainFile = null;
	foreach ( $candidates as $candidate ) {
		if ( file_exists( $candidate ) ) {
			$mainFile = $candidate;
			break;
		}
	}

	if ( null === $mainFile ) {
		throw new \Exception( "EDD Software Licensing main file not found in {$eddSlPath}" );
	}

	$content = file_get_contents( $mainFile );

	if ( preg_match( '/^\s*\*\s*Version:\s*(.+)$/m', $content, $matches ) ) {
		return trim( $matches[1] );
	}

	throw new \Exception( "Could not extract version from {$mainFile}" );
}

// Load .env configuration (optional - CI sets env vars directly)
$dotenv = Dotenv::createImmutable( __DIR__ );
$dotenv->safeLoad();

$envEddSlPath = getenv( 'EDD_SL_PATH' );
$eddSlPath    = $envEddSlPath ? $envEddSlPath : ( $_ENV['EDD_SL_PATH'] ?? null );

if ( empty( $eddSlPath ) ) {
	echo color( "Error: EDD_SL_PATH environment variable is required.\n", 'red' );
	echo "Please create .env file or set the environment variable.\n";
	echo "See .env.example for template.\n";
	exit( 1 );
}

if ( ! is_dir( $eddSlPath ) ) {
	echo color( "Error: EDD Software Licensing source not found at $eddSlPath\n", 'red' );
	echo "Please update EDD_SL_PATH in .env file.\n";
	exit( 1 );
}

echo color( "Generating stubs from: $eddSlPath\n", 'yellow' );

// 1. Generate stubs
$finder = Finder::create()
	->in( $eddSlPath )
	->exclude( array( 'vendor', 'tests', 'node_modules', 'build', 'assets', 'languages', 'libraries', 'samples', 'templates', 'views' ) )
	// EDD SL bundles a copy of Parsedown directly in includes/ — skip it (markdown
	// renderer with PHP 8 deprecation warnings, irrelevant to the EDD SL type surface).
	->notName( 'Parsedown.php' )
	->sortByName();

$generator = new StubsGenerator( StubsGenerator::DEFAULT );
$result    = $generator->generate( $finder );
$content   = $result->prettyPrint();

// 2. Remove stray code statements (code outside functions/classes)
$content = removeStrayCodeStatements( $content );

// 2.5. Strip `abstract` from method declarations so concrete child classes that the
// stub generator emits without method bodies don't trigger PHP's "must implement"
// fatal at parse time.
$content = neutralizeAbstractMethods( $content );

// 2.6. Inject @property docblocks for classes that expose protected properties via
// __get/__set/__isset magic — PHPStan can't infer the public surface from source
// alone, so consumers hit `protected.access` errors at level max without this.
$content = addMagicPropertyDocblocks( $content );

// 3. Extract version from source
$slVersion = extractSlVersion( $eddSlPath );

// 4. Add self-contained constants with extracted version
$content = addSelfContainedConstants( $content, $slVersion );

// 4.5. Add empty stubs for parent classes / interfaces / traits referenced from the
// stub file but missing from the scan (typically deps not in our Finder scope).
$content = fixMissingTypeStubs( $content );

// 5. Write final output
file_put_contents( __DIR__ . '/edd-software-licensing-stubs.php', $content );

echo color( "✓ Stubs generated successfully\n", 'green' );
echo color( "  EDD Software Licensing: $slVersion\n", 'green' );

// ---------------------------------------------------------------------------
// Helper functions
// ---------------------------------------------------------------------------

/**
 * Iteratively detect classes / interfaces / traits the stub file references but doesn't
 * define, and append empty stubs for them so the file can be `require_once`'d without
 * triggering "Class X not found" fatals.
 *
 * The preload chain loads the EDD core stubs alongside WordPress / WP-CLI stubs so any
 * EDD core type SL references resolves cleanly.
 *
 * Adapted from arts/elementor-stubs's fixMissingParentStubs pattern.
 */
function fixMissingTypeStubs( string $content ): string {
	$max_passes = 30;

	for ( $pass = 0; $pass < $max_passes; $pass++ ) {
		$tmp = tempnam( sys_get_temp_dir(), 'edd_sl_stubs_' );
		file_put_contents( $tmp, $content );

		$preload = array(
			__DIR__ . '/vendor/autoload.php',
			__DIR__ . '/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
			__DIR__ . '/vendor/php-stubs/wp-cli-stubs/wp-cli-stubs.php',
			__DIR__ . '/vendor/arts/easy-digital-downloads-stubs/easy-digital-downloads-stubs.php',
		);

		$requires = '';
		foreach ( $preload as $stub ) {
			if ( file_exists( $stub ) ) {
				$requires .= sprintf( 'require_once %s; ', var_export( $stub, true ) );
			}
		}
		$check_script = $requires . sprintf( 'require_once %s;', var_export( $tmp, true ) );

		$output_lines = array();
		exec(
			'php -d memory_limit=2G -r ' . escapeshellarg( $check_script ) . ' 2>&1',
			$output_lines,
			$exit_code
		);
		unlink( $tmp );

		$output = implode( "\n", $output_lines );

		$has_error = ( 0 !== $exit_code )
			|| ( false !== strpos( $output, 'Fatal error' ) )
			|| ( false !== strpos( $output, 'PHP Fatal' ) );

		if ( ! $has_error ) {
			break;
		}

		$changed = false;

		if ( preg_match_all( '/(Class|Interface|Trait) "([^"]+)" not found/', $output, $matches, PREG_SET_ORDER ) ) {
			$seen = array();
			foreach ( $matches as $match ) {
				$kind = strtolower( $match[1] );
				$fqcn = $match[2];
				$key  = $kind . ':' . $fqcn;
				if ( isset( $seen[ $key ] ) ) {
					continue;
				}
				$seen[ $key ] = true;

				$parts      = explode( '\\', ltrim( $fqcn, '\\' ) );
				$short_name = array_pop( $parts );
				$namespace  = implode( '\\', $parts );

				if ( '' === $namespace ) {
					$content .= "\nnamespace {\n\t{$kind} {$short_name} {}\n}\n";
				} else {
					$content .= "\nnamespace {$namespace} {\n\t{$kind} {$short_name} {}\n}\n";
				}
				$changed = true;
				echo color( "  → Added empty {$kind} stub for missing reference: {$fqcn}\n", 'yellow' );
			}
		}

		if ( ! $changed ) {
			echo color( "Warning: stub file still has parse errors after $pass passes:\n", 'yellow' );
			echo $output . "\n";
			break;
		}
	}

	return $content;
}

/**
 * Inject @property docblocks for known classes whose protected properties are exposed
 * publicly via __get/__set/__isset magic on a parent. PHPStan can't resolve magic
 * property access from source visibility alone — without this, every external read of
 * e.g. `$license->key` at level max fails with `protected.access`.
 *
 * Keyed by class short-name; each entry is an ordered map of property-name → PHPStan
 * type expression. Order is preserved in the emitted docblock for stable diffs.
 */
function addMagicPropertyDocblocks( string $content ): string {
	$targets = array(
		'EDD_SL_License' => array(
			'_ID'              => 'int|null',
			'exists'           => 'bool|null',
			'parent'           => 'int|null',
			'post_parent'      => 'int|null',
			'name'             => 'string|null',
			'key'              => 'string|null',
			'license_key'      => 'string|null',
			'user_id'          => 'int|null',
			'customer_id'      => 'int|null',
			'customer'         => '\EDD_Customer|null',
			'payment_id'       => 'int|null',
			'payment_ids'      => 'array<int>|null',
			'cart_index'       => 'int|null',
			'download'         => '\EDD_SL_Download|null',
			'download_id'      => 'int|null',
			'price_id'         => 'int|false|null',
			'activation_limit' => 'int|null',
			'sites'            => 'array<string>|null',
			'activation_count' => 'int|null',
			'date_created'     => 'string|null',
			'expiration'       => 'int|string|null',
			'is_lifetime'      => 'bool|null',
			'status'           => 'string|null',
			'post_status'      => 'string|null',
			'old_status'       => 'string|null',
			'child_licenses'   => 'array<EDD_SL_License>|null',
		),
	);

	foreach ( $targets as $class => $properties ) {
		$lines = array(
			'    /**',
			'     * The protected properties below are exposed publicly via __get / __set / __isset',
			'     * magic on the parent — declared here as @property so PHPStan can resolve them at',
			'     * level max without `protected.access` errors.',
			'     *',
		);
		foreach ( $properties as $name => $type ) {
			$lines[] = sprintf( '     * @property %s $%s', $type, $name );
		}
		$lines[]  = '     */';
		$docblock = implode( "\n", $lines ) . "\n";
		$pattern  = '/^(\s*)class\s+' . preg_quote( $class, '/' ) . '\b/m';
		$content  = preg_replace_callback(
			$pattern,
			function ( $matches ) use ( $docblock ) {
				return $docblock . $matches[0];
			},
			$content,
			1
		);
	}

	return $content;
}

/**
 * Convert `abstract <visibility> function foo(...): T;` declarations into
 * `<visibility> function foo(...): T {}`. Preserves visibility, parameter list, and
 * return type so PHPStan's bootstrap of the stubs still sees a typed signature, but
 * removes the contract obligation PHP enforces at class-parse time.
 */
function neutralizeAbstractMethods( string $content ): string {
	return preg_replace_callback(
		'/abstract\s+((?:public|protected|private)(?:\s+static)?\s+function\s+\w+\s*\([^)]*\)(?:\s*:\s*[?\w\\\\|]+)?)\s*;/',
		function ( $matches ) {
			return $matches[1] . ' {}';
		},
		$content
	);
}

/**
 * Inject the EDD SL constants at the top of the stubs file so consumers don't have
 * to define them separately to satisfy `defined(...)` checks.
 */
function addSelfContainedConstants( string $content, string $slVersion ): string {
	$content = preg_replace( '/namespace \{\s*\}/', '', $content );
	$content = preg_replace( '/^<\?php.*?\n/s', "<?php\n\n", $content );

	$constants = <<<CONSTANTS
namespace {
	// EDD Software Licensing constants
	if (!defined('EDD_SL_VERSION')) {
		define('EDD_SL_VERSION', '{$slVersion}');
	}
	if (!defined('EDD_SL_PLUGIN_FILE')) {
		define('EDD_SL_PLUGIN_FILE', __FILE__);
	}
	if (!defined('EDD_SL_PLUGIN_DIR')) {
		define('EDD_SL_PLUGIN_DIR', plugin_dir_path(EDD_SL_PLUGIN_FILE));
	}
	if (!defined('EDD_SL_PLUGIN_URL')) {
		define('EDD_SL_PLUGIN_URL', plugins_url('/', EDD_SL_PLUGIN_FILE));
	}
}

CONSTANTS;

	return preg_replace( '/^(namespace )/m', $constants . '$1', $content, 1 );
}

/**
 * Remove stray code statements that appear in namespace blocks outside of
 * class/function definitions. StubsGenerator occasionally includes these.
 */
function removeStrayCodeStatements( string $content ): string {
	$lines  = explode( "\n", $content );
	$output = array();

	foreach ( $lines as $line ) {
		// Skip stray code that uses $this outside object context.
		if ( preg_match( '/^\s*\$\w+\s*=.*\$this->/', $line ) ) {
			continue;
		}

		// Skip stray apply_filters calls at top level.
		if ( preg_match( '/^\s*\$\w+\s*=\s*apply_filters\(/', $line ) ) {
			continue;
		}

		// Skip standalone `define(...)` and `\define(...)` calls at namespace level.
		if ( preg_match( '/^\s*\\\\?define\s*\(/', $line ) ) {
			continue;
		}

		// Skip stray variable assignments at namespace level — typically template-style
		// procedural code that references variables only defined by the including context.
		if ( preg_match( '/^\s{0,4}\$\w+\s*=/', $line ) ) {
			continue;
		}

		$output[] = $line;
	}

	$content = implode( "\n", $output );

	// Remove empty namespace blocks that only contain doc comments.
	$content = preg_replace(
		'/namespace\s+[\w\\\\]+\s*\{\s*\/\*\*[^*]*\*+(?:[^*\/][^*]*\*+)*\/\s*\}/s',
		'',
		$content
	);

	// Clean up triple+ blank lines.
	$content = preg_replace( '/\n{3,}/', "\n\n", $content );

	return $content;
}
