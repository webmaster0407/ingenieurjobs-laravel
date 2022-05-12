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

namespace App\Http\Controllers\Web\Install\Traits\Install;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait CheckerTrait
{
	use PhpTrait;
	
	/**
	 * Is Manual Checking Allowed
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return bool
	 */
	protected function isManualCheckingAllowed(Request $request)
	{
		if ($request->has('mode') && $request->get('mode') == 'manual') {
			return true;
		}
		
		return false;
	}
	
	/**
	 * @return bool
	 */
	protected function checkComponents()
	{
		$components = $this->getComponents();
		
		$success = true;
		foreach ($components as $component) {
			if ($component['required'] && !$component['check']) {
				$success = false;
			}
		}
		
		return $success;
	}
	
	/**
	 * @return bool
	 */
	protected function checkPermissions()
	{
		$permissions = $this->getPermissions();
		
		$success = true;
		foreach ($permissions as $permission) {
			if ($permission['required'] && !$permission['check']) {
				$success = false;
			}
		}
		
		return $success;
	}
	
	/**
	 * @return array[]
	 */
	protected function getComponents()
	{
		$requiredPhpVersion = $this->getComposerRequiredPhpVersion();
		$phpBinaryVersion = $this->getPhpBinaryVersion();
		
		$components = [
			[
				'type'     => 'component',
				'name'     => 'PHP (CGI/FPM) version',
				'required' => true,
				'check'    => version_compare(PHP_VERSION, $requiredPhpVersion, '>='),
				'note'     => 'PHP (CGI/FPM) <code>' . $requiredPhpVersion . '</code> or higher is required.',
				'ok'       => 'The PHP (CGI/FPM) version <code>' . PHP_VERSION . '</code> is valid.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP-CLI version',
				'required' => false,
				'check'    => version_compare($phpBinaryVersion, $requiredPhpVersion, '>='),
				'note'     => 'PHP-CLI <code>' . $requiredPhpVersion . '</code> or higher is required.',
				'ok'       => 'The PHP-CLI version <code>' . $phpBinaryVersion . '</code> is valid.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP openssl extension',
				'required' => true,
				'check'    => extension_loaded('openssl'),
				'note'     => 'PHP openssl extension is required.',
				'ok'       => 'PHP openssl extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP mbstring extension',
				'required' => true,
				'check'    => extension_loaded('mbstring'),
				'note'     => 'PHP mbstring extension is required.',
				'ok'       => 'PHP mbstring extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP pdo extension',
				'required' => true,
				'check'    => extension_loaded('pdo'),
				'note'     => 'PHP pdo extension is required.',
				'ok'       => 'PHP pdo extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'MySQL driver for PHP pdo extension',
				'required' => true,
				'check'    => extension_loaded('pdo_mysql'),
				'note'     => 'MySQL driver for PHP pdo extension is required.',
				'ok'       => 'MySQL driver for PHP pdo extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP tokenizer extension',
				'required' => true,
				'check'    => extension_loaded('tokenizer'),
				'note'     => 'PHP tokenizer extension is required.',
				'ok'       => 'PHP tokenizer extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP xml extension',
				'required' => true,
				'check'    => extension_loaded('xml'),
				'note'     => 'PHP xml extension is required.',
				'ok'       => 'PHP xml extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP fileinfo extension',
				'required' => true,
				'check'    => extension_loaded('fileinfo'),
				'note'     => 'PHP fileinfo extension is required.',
				'ok'       => 'PHP fileinfo extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP curl extension',
				'required' => true,
				'check'    => extension_loaded('curl'),
				'note'     => 'PHP curl extension is required.',
				'ok'       => 'PHP curl extension is installed.',
			],
		];
		
		$gdIsEnabled = (extension_loaded('gd') && function_exists('gd_info'));
		$gdChecker = [
			'type'     => 'component',
			'name'     => 'PHP gd extension',
			'required' => true,
			'check'    => $gdIsEnabled,
			'note'     => 'PHP gd extension is required.',
			'ok'       => 'PHP gd extension is installed.',
		];
		
		$imagickIsEnabled = (extension_loaded('imagick') && class_exists('Imagick'));
		$imagickChecker = [
			'type'     => 'component',
			'name'     => 'PHP imagick extension',
			'required' => true,
			'check'    => $imagickIsEnabled,
			'note'     => 'PHP imagick extension is required.',
			'ok'       => 'PHP imagick extension is installed.',
		];
		
		if (!($gdIsEnabled && $imagickIsEnabled)) {
			$components[] = $gdChecker;
		} else {
			if ($gdIsEnabled) {
				$components[] = $gdChecker;
			}
			if ($imagickIsEnabled) {
				$components[] = $imagickChecker;
			}
		}
		
		$components = array_merge($components, [
			[
				'type'     => 'component',
				'name'     => 'PHP intl extension',
				'required' => false,
				'check'    => (
					extension_loaded('intl')
					&& class_exists('Locale')
					&& class_exists('NumberFormatter')
					&& class_exists('Collator')
				),
				'note'     => 'PHP intl extension is required.',
				'ok'       => 'PHP intl extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP zip extension',
				'required' => false,
				'check'    => (extension_loaded('zip') && class_exists('ZipArchive')),
				'note'     => 'PHP zip extension is required.',
				'ok'       => 'PHP zip extension is installed.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP escapeshellarg() function',
				'required' => true,
				'check'    => phpFuncEnabled('escapeshellarg'),
				'note'     => 'The PHP <code>escapeshellarg()</code> function must be enabled.',
				'ok'       => 'The PHP <code>escapeshellarg()</code> function is enabled.',
			],
			[
				'type'     => 'component',
				'name'     => 'PHP exec() function',
				'required' => true,
				'check'    => phpFuncEnabled('exec'),
				'note'     => 'The PHP <code>exec()</code> function must be enabled.',
				'ok'       => 'The PHP <code>exec()</code> function is enabled.',
			],
		]);
		
		return $components;
	}
	
	/**
	 * @return array[]
	 */
	protected function getPermissions()
	{
		$message = 'The directory must be writable by the web server (0755).';
		$rMessage = 'The directory must be writable (recursively) by the web server (0755).';
		$okMessage = 'The directory is writable with the right permissions.';
		$rOkMessage = 'The directory is writable (recursively) with the right permissions.';
		
		return [
			[
				'type'     => 'permission',
				'name'     => base_path('bootstrap/cache'),
				'required' => true,
				'check'    => file_exists(base_path('bootstrap/cache'))
					&& is_dir(base_path('bootstrap/cache'))
					&& (is_writable(base_path('bootstrap/cache')))
					&& getPerms(base_path('bootstrap/cache')) >= 755,
				'note'     => $message,
				'ok'       => $okMessage,
			],
			[
				'type'     => 'permission',
				'name'     => config_path(),
				'required' => true,
				'check'    => file_exists(config_path())
					&& is_dir(config_path())
					&& (is_writable(config_path()))
					&& getPerms(config_path()) >= 755,
				'note'     => $message,
				'ok'       => $okMessage,
			],
			[
				'type'     => 'permission',
				'name'     => public_path(),
				'required' => true,
				'check'    => file_exists(public_path())
					&& is_dir(public_path())
					&& (is_writable(public_path()))
					&& getPerms(public_path()) >= 755,
				'note'     => $message,
				'ok'       => $okMessage,
			],
			[
				'type'     => 'permission',
				'name'     => resource_path('lang'),
				'required' => true,
				'check'    => $this->checkResourcesLangPermissions(),
				'note'     => $rMessage,
				'ok'       => $rOkMessage,
			],
			[
				'type'     => 'permission',
				'name'     => storage_path(),
				'required' => true,
				'check'    => $this->checkStoragePermissions(),
				'note'     => $rMessage,
				'ok'       => $rOkMessage,
			],
		];
	}
	
	/**
	 * @return bool
	 */
	private function checkResourcesLangPermissions()
	{
		$permissions = $this->getResourcesLangPermissions();
		
		$success = true;
		foreach ($permissions as $path => $permission) {
			if (!$permission) {
				$success = false;
			}
		}
		
		return $success;
	}
	
	/**
	 * @return bool
	 */
	private function checkStoragePermissions()
	{
		$permissions = $this->getStoragePermissions();
		
		$success = true;
		foreach ($permissions as $path => $permission) {
			if (!$permission) {
				$success = false;
			}
		}
		
		return $success;
	}
	
	/**
	 * @return array
	 */
	private function getResourcesLangPermissions()
	{
		$resourceLangPath = rtrim(resource_path('lang'), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
		$paths = array_filter(glob($resourceLangPath . '*'), 'is_dir');
		
		$permissions = [];
		
		if (!is_array($paths)) {
			return $permissions;
		}
		
		// Insert the $resourceLangPath at the beginning of the array paths
		array_unshift($paths, $resourceLangPath);
		
		foreach ($paths as $fullPath) {
			// Create path if it does not exist
			if (!File::exists($fullPath)) {
				try {
					File::makeDirectory($fullPath, 0777, true);
				} catch (\Throwable $e) {
				}
			}
			
			// Get the path permission
			$permissions[$fullPath] = (file_exists($fullPath)
				&& is_dir($fullPath)
				&& (is_writable($fullPath))
				&& getPerms($fullPath) >= 755);
		}
		
		return $permissions;
	}
	
	/**
	 * @return array
	 */
	private function getStoragePermissions()
	{
		$paths = [
			'/',
			'app/public/app',
			'app/public/app/categories/custom',
			'app/public/app/logo',
			'app/public/app/page',
			'app/public/files',
			'app/public/temporary',
			'framework',
			'framework/cache',
			'framework/plugins',
			'framework/sessions',
			'framework/views',
			'logs',
		];
		
		$permissions = [];
		
		foreach ($paths as $path) {
			$fullPath = storage_path($path);
			
			// Create path if it does not exist
			if (!File::exists($fullPath)) {
				try {
					File::makeDirectory($fullPath, 0777, true);
				} catch (\Throwable $e) {
				}
			}
			
			// Get the path permission
			$permissions[$fullPath] = (file_exists($fullPath)
				&& is_dir($fullPath)
				&& (is_writable($fullPath))
				&& getPerms($fullPath) >= 755);
		}
		
		return $permissions;
	}
}
