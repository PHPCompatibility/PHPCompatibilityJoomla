[![Latest Stable Version](https://poser.pugx.org/phpcompatibility/phpcompatibility-joomla/v/stable.png)](https://packagist.org/packages/phpcompatibility/phpcompatibility-joomla)
[![Latest Unstable Version](https://poser.pugx.org/phpcompatibility/phpcompatibility-joomla/v/unstable.png)](https://packagist.org/packages/phpcompatibility/phpcompatibility-joomla)
[![License](https://poser.pugx.org/phpcompatibility/phpcompatibility-joomla/license.png)](https://github.com/PHPCompatibility/PHPCompatibilityJoomla/blob/master/LICENSE)
[![Build Status](https://github.com/PHPCompatibility/PHPCompatibilityJoomla/workflows/CI/badge.svg?branch=master)](https://github.com/PHPCompatibility/PHPCompatibilityJoomla/actions)

# PHPCompatibilityJoomla

Using PHPCompatibilityJoomla, you can analyse the codebase of a Joomla-based project for PHP cross-version compatibility.


## What's in this repo ?

A ruleset for PHP_CodeSniffer to check for PHP cross-version compatibility issues in projects based on the Joomla CMS.

This Joomla specific ruleset prevents false positives from the [PHPCompatibility standard](https://github.com/PHPCompatibility/PHPCompatibility) by excluding back-fills and poly-fills which are provided by Joomla.


## Requirements

* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
    * PHP 5.3+ for use with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) 2.3.0+.
    * PHP 5.4+ for use with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) 3.0.2+.

    Use the latest stable release of PHP_CodeSniffer for the best results.
    The minimum _recommended_ version of PHP_CodeSniffer is version 2.6.0.
* [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility) 9.0.0+.
* [PHPCompatibilityParagonie](https://github.com/PHPCompatibility/PHPCompatibilityParagonie) 1.0.0+.
* [PHPCompatibilityPasswordCompat](https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat) 1.0.0+.
* [PHPCompatibilitySymfony](https://github.com/PHPCompatibility/PHPCompatibilitySymfony) 1.0.0+.


## Installation instructions

The only supported installation method is via [Composer](https://getcomposer.org/).

If you don't have a Composer plugin installed to manage the `installed_paths` setting for PHP_CodeSniffer, run the following from the command-line:
```bash
composer require --dev dealerdirect/phpcodesniffer-composer-installer:"^0.7" phpcompatibility/phpcompatibility-joomla:*
composer install
```

If you already have a Composer PHP_CodeSniffer plugin installed, run:
```bash
composer require --dev phpcompatibility/phpcompatibility-joomla:*
composer install
```

Next, run:
```bash
vendor/bin/phpcs -i
```
If all went well, you will now see that the `PHPCompatibility`, `PHPCompatibilityJoomla` and several other PHPCompatibility standards are installed for PHP_CodeSniffer.


## How to use

Now you can use the following command to inspect your code:
```bash
./vendor/bin/phpcs -p . --standard=PHPCompatibilityJoomla
```

By default, you will only receive notifications about deprecated and/or removed PHP features.

To get the most out of the PHPCompatibilityJoomla standard, you should specify a `testVersion` to check against. That will enable the checks for both deprecated/removed PHP features as well as the detection of code using new PHP features.

The minimum PHP requirement of the Joomla project at this time is PHP 5.3.10. If you want to enforce this, either add `--runtime-set testVersion 5.3-` to your command-line command or add `<config name="testVersion" value="5.3-"/>` to your [custom ruleset](https://github.com/PHPCompatibility/PHPCompatibility#using-a-custom-ruleset).

For example:
```bash
# For a project which should be compatible with PHP 5.3 and higher:
./vendor/bin/phpcs -p . --standard=PHPCompatibilityJoomla --runtime-set testVersion 5.3-
```

For more detailed information about setting the `testVersion`, see the README of the generic [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility#sniffing-your-code-for-compatibility-with-specific-php-versions) standard.


### Testing PHP files only

By default PHP_CodeSniffer will analyse PHP, JavaScript and CSS files. As the PHPCompatibility sniffs only target PHP code, you can make the run slightly faster by telling PHP_CodeSniffer to only check PHP files, like so:
```bash
./vendor/bin/phpcs -p . --standard=PHPCompatibilityJoomla --extensions=php --runtime-set testVersion 5.3-
```

## License

All code within the PHPCompatibility organisation is released under the GNU Lesser General Public License (LGPL). For more information, visit https://www.gnu.org/copyleft/lesser.html


## Changelog

### 2.1.2 - 2021-02-15

- The recommended version of the [Composer PHPCS plugin] is now `^0.7.0`, which offers compatibility with Composer 2.0.
- The ruleset is now also tested against PHP 7.4 and 8.0.
    Note: full PHP 7.4 support is only available in combination with PHP_CodeSniffer >= 3.5.6.
    Note: runtime PHP 8.0 support is only available in combination with PHP_CodeSniffer >= 3.5.7, full support is expected in PHP_CodeSniffer 3.6.0.

### 2.1.1 - 2019-08-29

- The recommended version of the [Composer PHPCS plugin] is now `^0.5.0`.

### 2.1.0 - 2018-12-16

* Ruleset: Updated for the PHP 7.1 polyfill which is included in Joomla 3.9.
* The ruleset is now also tested against PHP 7.3.
    Note: full PHP 7.3 support is only available in combination with PHP_CodeSniffer 2.9.2 or 3.3.1+ due to an incompatibility within PHP_CodeSniffer itself.

### 2.0.0 - 2018-10-07

- Ruleset: Updated for Joomla 3.9.
- Ruleset: Updated for compatibility with PHPCompatibility 9.0+.
- Composer: Added dependencies for the dedicated polyfill-based PHPCompatibility rulesets.
- CI: Added a test for the ruleset.
- Readme: Removed the installation instructions for a non-Composer based install.

### 1.0.0 - 2018-07-17

Initial release of the PHPCompatibilityJoomla ruleset.

[Composer PHPCS plugin]: https://github.com/Dealerdirect/phpcodesniffer-composer-installer/
