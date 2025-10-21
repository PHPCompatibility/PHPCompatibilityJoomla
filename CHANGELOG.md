# Changelog for PHPCompatibilityJoomla

All notable changes to this project will be documented in this file.

This projects adheres to [Semantic Versioning](https://semver.org/) and [Keep a CHANGELOG](https://keepachangelog.com/).

## [2.1.5] - 2025-10-18

This is a maintenance release.

* The ruleset now includes schema tags.
* General housekeeping and maintenance.

## [2.1.4] - 2025-01-16

This is a maintenance release.

* The recommended version of the [Composer PHPCS plugin] is now `^1.0.0`.
* README: Fixed some broken badges.
* General housekeeping and maintenance. Including a contribution by [@fredden].

## [2.1.3] - 2022-10-25

* README: Updated the installation instructions for [compatibility with Composer >= 2.2][composer22announce].
* Composer: The package will now identify itself as a static analysis tool. Thanks [@GaryJones]!
* Other housekeeping and minor documentation updates.

[composer22announce]: https://blog.packagist.com/composer-2-2/#more-secure-plugin-execution

## [2.1.2] - 2021-02-15

* The recommended version of the [Composer PHPCS plugin] is now `^0.7.0`, which offers compatibility with Composer 2.0.
* The ruleset is now also tested against PHP 7.4 and 8.0.
    Note: full PHP 7.4 support is only available in combination with PHP_CodeSniffer >= 3.5.6.
    Note: runtime PHP 8.0 support is only available in combination with PHP_CodeSniffer >= 3.5.7, full support is expected in PHP_CodeSniffer 3.6.0.

## [2.1.1] - 2019-08-29

* The recommended version of the [Composer PHPCS plugin] is now `^0.5.0`.

## [2.1.0] - 2018-12-16

* Ruleset: Updated for the PHP 7.1 polyfill which is included in Joomla 3.9.
* The ruleset is now also tested against PHP 7.3.
    Note: full PHP 7.3 support is only available in combination with PHP_CodeSniffer 2.9.2 or 3.3.1+ due to an incompatibility within PHP_CodeSniffer itself.

## [2.0.0] - 2018-10-07

* Ruleset: Updated for Joomla 3.9.
* Ruleset: Updated for compatibility with PHPCompatibility 9.0+.
* Composer: Added dependencies for the dedicated polyfill-based PHPCompatibility rulesets.
* CI: Added a test for the ruleset.
* Readme: Removed the installation instructions for a non-Composer based install.

## 1.0.0 - 2018-07-17

Initial release of the PHPCompatibilityJoomla ruleset.

[Composer PHPCS plugin]: https://github.com/PHPCSStandards/composer-installer/

[2.1.5]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/2.1.4...2.1.5
[2.1.4]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/2.1.3...2.1.4
[2.1.3]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/2.1.2...2.1.3
[2.1.2]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/2.1.1...2.1.2
[2.1.1]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/2.1.0...2.1.1
[2.1.0]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/2.0.0...2.1.0
[2.0.0]:        https://github.com/PHPCompatibility/PHPCompatibilityJoomla/compare/1.0.0...2.0.0

[@fredden]:   https://github.com/fredden
[@GaryJones]: https://github.com/GaryJones
