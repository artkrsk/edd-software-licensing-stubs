# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

PHPStan stubs for EDD Software Licensing — the commercial add-on for Easy Digital Downloads. The stubs are auto-generated from upstream plugin source using `php-stubs/generator`.

EDD core stubs live in their own repo: `arts/easy-digital-downloads-stubs` (https://github.com/artkrsk/easy-digital-downloads-stubs). This package depends on it transitively so EDD core types referenced by SL resolve when both stub files are loaded.

## Commands

```bash
# Run all tests (PHPUnit + PHPStan + PHPCS)
composer test

# Individual test commands
composer test:phpunit    # Run PHPUnit tests
composer test:phpstan    # Run PHPStan analysis (uses tests/phpstan.neon)
composer test:cs         # Run PHP CodeSniffer
composer test:cs:fix     # Auto-fix coding style issues

# Generate stubs (requires EDD_SL_PATH env var)
composer generate

# Regenerate CHANGELOG from git history (requires git-cliff installed)
composer changelog
```

## CHANGELOG Management

The CHANGELOG is automatically generated using [git-cliff](https://git-cliff.org).

**Requirements:**
- git-cliff must be installed: `brew install git-cliff` (macOS) or see [installation docs](https://git-cliff.org/docs/installation)
- Configuration: `cliff.toml`

**Commit Message Format:**
Follow conventional commits for automatic CHANGELOG categorization (same conventions as the other `arts/*-stubs` packages).

## Generating Stubs

The `generate.php` script requires the `EDD_SL_PATH` environment variable pointing at a local EDD Software Licensing source tree.

Set it via `.env` file (copy from `.env.example`) or export directly.

**Note:** EDD Software Licensing is a commercial add-on distributed by Sandhills Development; it is not available on WordPress.org. There is no `generate.yml` workflow — regenerate locally with `composer generate` and push a `v*` tag to trigger the release.

## Architecture

### Key Files
- `edd-software-licensing-stubs.php` - Generated output file containing all EDD SL stubs
- `generate.php` - Stub generation script with post-processing identical to the EDD core stubs pipeline (`removeStrayCodeStatements`, `neutralizeAbstractMethods`, `addSelfContainedConstants`, `fixMissingTypeStubs`). The missing-types fixer preloads `arts/easy-digital-downloads-stubs` so any EDD core type SL references resolves cleanly.

### GitHub Workflows
- `integrate.yml` — CI tests on push/PR (PHPUnit + PHPStan + PHPCS)
- `release.yml` — Creates a GitHub Release with auto-generated notes when a `v*` tag is pushed
- `claude.yml` / `claude-code-review.yml` — Claude Code integration for issues / PRs

There is no auto-`generate.yml` (unlike the EDD core repo) because EDD SL isn't on WordPress.org — regeneration is a local `composer generate` against a maintainer's `EDD_SL_PATH`, then committing and pushing a `v*` tag to trigger `release.yml`.

## Coding Standards

Uses WordPress-Core coding standards with exceptions for:
- Modern file naming (PSR-4 style)
- camelCase function/variable names
