<?php
/*
 * Test file to run PHP_CodeSniffer against to make sure the polyfills are correctly excluded.
 *
 * This file should only test the polyfills provided by Joomla itself.
 * The polyfills provided via dependencies will be tested via the repo containing
 * the dedicated ruleset(s) for those dependencies.
 */
class ABC extends CallbackFilterIterator {}
class DEF implements JsonSerializable {}
