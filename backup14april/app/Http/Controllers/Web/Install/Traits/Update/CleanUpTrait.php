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

namespace App\Http\Controllers\Web\Install\Traits\Update;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

trait CleanUpTrait
{
	/**
	 * Clear Cache
	 */
	private function clearCache()
	{
		$this->removeRobotsTxtFile();
		
		// Clear Laravel's data cache
		Artisan::call('cache:clear');
		sleep(2);
		
		// Clear Laravel's view cache
		Artisan::call('view:clear');
		sleep(1);
		
		File::delete(File::glob(storage_path('logs') . DIRECTORY_SEPARATOR . '*.log'));
	}
	
	/**
	 * Remove the robots.txt file (It will be re-generated automatically)
	 */
	private function removeRobotsTxtFile()
	{
		$robotsFile = public_path('robots.txt');
		if (File::exists($robotsFile)) {
			File::delete($robotsFile);
		}
	}
	
	/**
	 * Clear Laravel's data cache
	 */
	private function clearDataCache()
	{
		$dir = storage_path('framework/cache/data/');
		$this->clearLaravelCache('cache:clear', $dir);
	}
	
	/**
	 * Clear Laravel's view cache
	 */
	private function clearViewCache()
	{
		$dir = storage_path('framework/views/');
		$this->clearLaravelCache('view:clear', $dir);
	}
	
	/**
	 * @param $cmd
	 * @param $dir
	 * @param int $seconds
	 */
	private function clearLaravelCache($cmd, $dir, $seconds = 0)
	{
		try {
			if (File::isDirectory($dir)) {
				// Remove the cache directory (Using a fast method or algorithm)
				system('rm -rf ' . escapeshellarg($dir));
				if (is_numeric($seconds) && $seconds > 0) {
					sleep($seconds);
				}
			}
			
			// Re-create the cache directory (If not exists)
			$this->createCacheDir($dir);
		} catch (\Throwable $e) {
			// Re-create the cache directory (If not exists)
			$result = $this->createCacheDir($dir);
			if (!$result) {
				Artisan::call($cmd);
				if (is_numeric($seconds) && $seconds > 0) {
					sleep($seconds);
				}
			}
		}
	}
	
	/**
	 * Re-create the cache directory (If not exists)
	 *
	 * @param $dir
	 * @return bool
	 */
	private function createCacheDir($dir)
	{
		$result = false;
		
		// Re-create the cache directory (If not exists)
		clearstatcache(); // <- Clears file status cache
		if (!File::isDirectory($dir)) {
			File::makeDirectory($dir, 0777, false, true);
			$result = true;
		}
		
		// Check if the .gitignore file exists in the root directory to prevent its removal
		clearstatcache(); // <- Clears file status cache
		if (!File::exists($dir . '.gitignore')) {
			$content = '*' . "\n"
				. '!.gitignore' . "\n";
			File::put($dir . '.gitignore', $content);
		}
		
		return $result;
	}
}
