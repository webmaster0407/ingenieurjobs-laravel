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

namespace App\Http\Controllers\Admin;

// Increase the server resources
$iniConfigFile = __DIR__ . '/../../../Helpers/Functions/ini.php';
if (file_exists($iniConfigFile)) {
	include_once $iniConfigFile;
}

use App\Helpers\Files\Tools\FileStorage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Prologue\Alerts\Facades\Alert;

class ActionController extends Controller
{
	/**
	 * Clear Cache
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function clearCache(): \Illuminate\Http\RedirectResponse
	{
		$errorFound = false;
		
		// Removing all Objects Cache
		try {
			Artisan::call('cache:clear');
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Some time of pause
		sleep(2);
		
		// Removing all Views Cache
		try {
			Artisan::call('view:clear');
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Some time of pause
		sleep(1);
		
		// Removing all Logs
		try {
			File::delete(File::glob(storage_path('logs') . DIRECTORY_SEPARATOR . '*.log'));
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Removing all /.env cached files
		try {
			DotenvEditor::deleteBackups();
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans('admin.The cache was successfully dumped');
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Clear Images Thumbnails
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function clearImagesThumbnails(): \Illuminate\Http\RedirectResponse
	{
		$errorFound = false;
		
		// Get the upload path
		$uploadPaths = [
			'app' . DIRECTORY_SEPARATOR,
			'files' . DIRECTORY_SEPARATOR,    // New path
			'pictures' . DIRECTORY_SEPARATOR, // Old path
		];
		
		foreach ($uploadPaths as $uploadPath) {
			if (!$this->disk->exists($uploadPath)) {
				continue;
			}
			
			$meta = FileStorage::getMetaData($this->disk, $uploadPath);
			if (!isset($meta['type'])) {
				continue;
			}
			
			if ($meta['type'] != 'dir') {
				continue;
			}
			
			// Removing all the images thumbnails
			try {
				$pattern = '/thumb-.*\.[a-z]*/ui';
				FileStorage::removeMatchedFilesRecursive($this->disk, $uploadPath, $pattern);
			} catch (\Throwable $e) {
				Alert::error($e->getMessage())->flash();
				$errorFound = true;
				break;
			}
			
			// Don't create '.gitignore' file or remove empty directories in the '/storage/app/public/app/' dir
			$appUploadedFilesPath = DIRECTORY_SEPARATOR
				. 'app' . DIRECTORY_SEPARATOR
				. 'public' . DIRECTORY_SEPARATOR
				. 'app' . DIRECTORY_SEPARATOR;
			
			if (!Str::contains($appUploadedFilesPath, $uploadPath)) {
				// Removing all empty subdirectories (except the root directory)
				try {
					// Check if the .gitignore file exists in the root directory to prevent its removal
					if (!$this->disk->exists($uploadPath . '.gitignore')) {
						$content = '*' . "\n"
							. '!.gitignore' . "\n";
						$this->disk->put($uploadPath . '.gitignore', $content);
					}
					
					// Removing all empty subdirectories
					FileStorage::removeEmptySubDirs($this->disk, $uploadPath);
				} catch (\Throwable $e) {
					Alert::error($e->getMessage())->flash();
					$errorFound = true;
					break;
				}
			}
		}
		
		// Removing all Objects Cache
		try {
			Artisan::call('cache:clear');
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans('admin.action_performed_successfully');
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Test the Ads Cleaner Command
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function callAdsCleanerCommand(): \Illuminate\Http\RedirectResponse
	{
		$errorFound = false;
		
		// Run the Cron Job command manually
		try {
			Artisan::call('listings:purge');
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans('admin.The Ads Clear command was successfully run');
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Put & Back to Maintenance Mode
	 *
	 * @param $mode ('down' or 'up')
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function maintenance($mode): \Illuminate\Http\RedirectResponse
	{
		$errorFound = false;
		
		// Go to maintenance with DOWN status
		try {
			Artisan::call($mode);
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			if ($mode == 'down') {
				$message = trans('admin.The website has been putted in maintenance mode');
			} else {
				$message = trans('admin.The website has left the maintenance mode');
			}
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
}
