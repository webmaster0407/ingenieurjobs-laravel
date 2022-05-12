<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

$valid = true;
$error = '';

// Server components verification to prevent error during the installation process
// These verifications are always make, including during the installation process
if (!extension_loaded('json')) {
	$error .= "<strong>ERROR:</strong> The requested PHP extension json is missing from your system.<br />";
	$valid = false;
}
if ($valid) {
	$requiredPhpVersion = _getComposerRequiredPhpVersion();
	if (!version_compare(PHP_VERSION, $requiredPhpVersion, '>=')) {
		$error .= "<strong>ERROR:</strong> PHP " . $requiredPhpVersion . " or higher is required.<br />";
		$valid = false;
	}
}
if (!extension_loaded('mbstring')) {
	$error .= "<strong>ERROR:</strong> The requested PHP extension mbstring is missing from your system.<br />";
	$valid = false;
}
if (!empty(ini_get('open_basedir'))) {
	$error .= "<strong>ERROR:</strong> Please disable the <strong>open_basedir</strong> setting to continue.<br />";
	$valid = false;
}

// These verifications are always make, except during the installation process
if (_appInstallFilesExist()) {
	if (!_funcEnabled('escapeshellarg')) {
		$error .= "<strong>ERROR:</strong> The PHP escapeshellarg() function must be enabled.<br />";
		$valid = false;
	}
	if (!_funcEnabled('exec')) {
		$error .= "<strong>ERROR:</strong> The PHP exec() function must be enabled.<br />";
		$valid = false;
	}
}

if (!$valid) {
	echo '<pre>' . $error . '</pre>';
	exit();
}

// Remove the bootstrap/cache files before making upgrade
if (_updateIsAvailable()) {
	$cachedFiles = [
		realpath(__DIR__ . '/../bootstrap/cache/packages.php'),
		realpath(__DIR__ . '/../bootstrap/cache/services.php'),
	];
	foreach ($cachedFiles as $file) {
		if (file_exists($file)) {
			unlink($file);
		}
	}
}

// Remove unsupported bootstrap/cache files
$unsupportedCachedFiles = [
	realpath(__DIR__ . '/../bootstrap/cache/config.php'),
	realpath(__DIR__ . '/../bootstrap/cache/routes.php'),
];
foreach ($unsupportedCachedFiles as $file) {
	if (file_exists($file)) {
		unlink($file);
	}
}

// Load Laravel Framework
require 'main.php';


// ==========================================================================================
// THESE FUNCTIONS WILL RUN BEFORE LARAVEL LIBRARIES
// ==========================================================================================

/**
 * Get the composer.json required PHP version
 *
 * @return array|string|string[]|null
 */
function _getComposerRequiredPhpVersion()
{
	$version = null;
	
	$filePath = realpath(__DIR__ . '/../composer.json');
	
	try {
		$content = file_get_contents($filePath);
		$array = json_decode($content, true);
		
		if (isset($array['require']) && isset($array['require']['php'])) {
			$version = $array['require']['php'];
		}
	} catch (\Exception $e) {
	}
	
	if (empty($version)) {
		$version = _getRequiredPhpVersion();
	}
	
	// String to Float
	$version = trim($version);
	$version = strtr($version, [' ' => '']);
	$version = preg_replace('/ +/', '', $version);
	$version = str_replace(',', '.', $version);
	$version = preg_replace('/[^0-9\.]/', '', $version);
	
	return $version;
}

/**
 * Get the required PHP version (from config/app.php)
 *
 * @return mixed|string
 */
function _getRequiredPhpVersion()
{
	$configFilePath = realpath(__DIR__ . '/../config/app.php');
	
	$version = '8.0';
	if (file_exists($configFilePath)) {
		$array = include($configFilePath);
		if (isset($array['phpVersion'])) {
			$version = $array['phpVersion'];
		}
	}
	
	return $version;
}

/**
 * Check if a new version is available
 *
 * @return bool
 */
function _updateIsAvailable(): bool
{
	$lastVersion = _getLatestVersion();
	$currentVersion = _getCurrentVersion();
	
	if (!empty($lastVersion) && !empty($currentVersion)) {
		if (version_compare($lastVersion, $currentVersion, '>')) {
			return true;
		}
	}
	
	return false;
}

/**
 * Get the current version value
 *
 * @return mixed|string
 */
function _getCurrentVersion()
{
	// Get the Current Version
	$version = _getDotEnvValue('APP_VERSION');
	$version = _checkAndUseSemVer($version);
	
	return $version;
}

/**
 * Get the latest version value
 *
 * @return mixed|string|null
 */
function _getLatestVersion()
{
	$configFilePath = realpath(__DIR__ . '/../config/app.php');
	
	$version = null;
	if (file_exists($configFilePath)) {
		$array = include($configFilePath);
		if (isset($array['appVersion'])) {
			$version = _checkAndUseSemVer($array['appVersion']);
		}
	}
	
	return $version;
}

/**
 * Check and use semver version num format
 *
 * @param $version
 * @return mixed|string
 */
function _checkAndUseSemVer($version)
{
	$semver = '0.0.0';
	if (!empty($version)) {
		$numPattern = '([0-9]+)';
		if (preg_match('#^' . $numPattern . '\.' . $numPattern . '\.' . $numPattern . '$#', $version)) {
			$semver = $version;
		} else {
			if (preg_match('#^' . $numPattern . '\.' . $numPattern . '$#', $version)) {
				$semver = $version . '.0';
			} else {
				if (preg_match('#^' . $numPattern . '$#', $version)) {
					$semver = $version . '.0.0';
				} else {
					$semver = '0.0.0';
				}
			}
		}
	}
	
	return $semver;
}

/**
 * Get a /.env file key's value
 *
 * @param $key
 * @return string|null
 */
function _getDotEnvValue($key): ?string
{
	if (empty($key)) {
		return null;
	}
	
	$value = null;
	
	$filePath = realpath(__DIR__ . '/../.env');
	if (file_exists($filePath)) {
		$content = file_get_contents($filePath);
		$tmp = [];
		preg_match('/' . $key . '=(.*)[^\n]*/', $content, $tmp);
		if (isset($tmp[1]) && trim($tmp[1]) != '') {
			$value = trim($tmp[1]);
		}
	}
	
	return $value;
}

/**
 * Check if the app's installation files exist
 *
 * @return bool
 */
function _appInstallFilesExist(): bool
{
	$envFile = realpath(__DIR__ . '/../.env');
	$installedFile = realpath(__DIR__ . '/../storage/installed');
	
	// Check if the '.env' and 'storage/installed' files exist
	if (file_exists($envFile) && file_exists($installedFile)) {
		return true;
	}
	
	return false;
}

/**
 * Check if function is enabled
 *
 * @param $name
 * @return bool
 */
function _funcEnabled($name): bool
{
	try {
		$disabled = array_map('trim', explode(',', ini_get('disable_functions')));
		
		return !in_array($name, $disabled);
	} catch (\Exception $ex) {
		return false;
	}
}

// ==========================================================================================
