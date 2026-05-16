<?php

namespace EddSoftwareLicensingStubs\Tests;

use PHPUnit\Framework\TestCase;

class StubSyntaxTest extends TestCase {

	private string $stubsFile;

	protected function setUp(): void {
		$this->stubsFile = __DIR__ . '/../edd-software-licensing-stubs.php';
	}

	public function testStubFileExists(): void {
		$this->assertFileExists( $this->stubsFile, 'Stub file should exist' );
	}

	public function testStubFileIsReadable(): void {
		$this->assertFileIsReadable( $this->stubsFile, 'Stub file should be readable' );
	}

	public function testStubFileHasValidSyntax(): void {
		$output   = array();
		$exitCode = 0;
		exec( 'php -l ' . escapeshellarg( $this->stubsFile ) . ' 2>&1', $output, $exitCode );

		$this->assertEquals( 0, $exitCode, 'Stub file should have valid PHP syntax: ' . implode( "\n", $output ) );
	}

	public function testNoStrayCodeStatements(): void {
		$stubContent = file_get_contents( $this->stubsFile );
		$this->assertNotFalse( $stubContent, 'Stub file should be readable' );

		$this->assertDoesNotMatchRegularExpression(
			'/^\s*\$\w+\s*=.*\$this->/m',
			$stubContent,
			'Should not have stray $this references at namespace level'
		);

		$this->assertDoesNotMatchRegularExpression(
			'/^\s*\$\w+\s*=\s*apply_filters\(/m',
			$stubContent,
			'Should not have stray apply_filters calls at namespace level'
		);
	}

	public function testEddSlVersionConstant(): void {
		$this->assertTrue( defined( 'EDD_SL_VERSION' ), 'EDD_SL_VERSION should be defined' );

		/** @var string $version */
		$version = EDD_SL_VERSION;

		$this->assertMatchesRegularExpression(
			'/^\d+\.\d+(\.\d+)?(\.\d+)?/',
			$version,
			'EDD_SL_VERSION should be in semantic version format'
		);
	}

	public function testAllEddSlConstantsExist(): void {
		$requiredConstants = array(
			'EDD_SL_VERSION',
			'EDD_SL_PLUGIN_FILE',
			'EDD_SL_PLUGIN_DIR',
			'EDD_SL_PLUGIN_URL',
		);

		foreach ( $requiredConstants as $constant ) {
			$this->assertTrue(
				defined( $constant ),
				"$constant should be defined"
			);
		}
	}

	/**
	 * Core EDD SL classes used by every consumer.
	 */
	public function testCoreClassesExist(): void {
		$classes = array(
			'EDD_Software_Licensing' => 'License manager singleton',
			'EDD_SL_Download'        => 'EDD SL download wrapper',
			'EDD_SL_License'         => 'License entity',
		);

		foreach ( $classes as $class => $description ) {
			$this->assertTrue(
				class_exists( $class ),
				"$class ($description) should exist"
			);
		}
	}

	/**
	 * Singleton accessor function.
	 */
	public function testCoreFunctionsExist(): void {
		$this->assertTrue(
			function_exists( 'edd_software_licensing' ),
			'edd_software_licensing() should exist'
		);
	}
}
