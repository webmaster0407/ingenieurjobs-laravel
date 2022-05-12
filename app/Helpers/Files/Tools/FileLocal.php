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

namespace App\Helpers\Files\Tools;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class FileLocal
{
	/**
	 * Get directory content (files & sub-directories)
	 *
	 * @param string $path
	 * @param string|null $pattern
	 * @return array
	 */
	public static function getDirContentRecursive(string $path, string $pattern = null): array
	{
		$files = [];
		
		$it = new RecursiveDirectoryIterator($path);
		foreach (new RecursiveIteratorIterator($it) as $file) {
			if (!empty($pattern)) {
				if (preg_match($pattern, $file)) {
					$files[] = $file;
				}
			} else {
				$files[] = $file;
			}
		}
		
		return $files;
	}
	
	/**
	 * Remove matched pattern recursively
	 *
	 * @param string $path
	 * @param string $pattern
	 * @return bool
	 */
	public static function removeMatchedFilesRecursive(string $path, string $pattern): bool
	{
		if (is_file($path)) {
			if (preg_match($pattern, $path)) {
				return unlink($path);
			}
		} else {
			/*
			Get all file all sub-folders and all hidden file with glob.
			NOTE: glob('*') ignores all 'hidden' files by default. This means it does not return files that start with a dot (e.g. ".file").
			If you want to match those files too, you can use "{,.}*" as the pattern with the GLOB_BRACE flag.
			{,.}[!.,!..]* => To prevent listing "." or ".." in the result.
			*/
			$files = glob($path . '{,.}[!.,!..]*', GLOB_MARK | GLOB_BRACE);
			if (!empty($files)) {
				foreach ($files as $file) {
					self::removeMatchedFilesRecursive($file, $pattern);
				}
			}
			
			return true;
		}
		
		return true;
	}
	
	/**
	 * Remove all empty directories recursively
	 *
	 * @param string $path
	 * @return bool
	 */
	public static function removeEmptySubDirs(string $path): bool
	{
		$empty = true;
		
		// Fix the path end 'DIRECTORY_SEPARATOR' for globe()
		$path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
		
		if (!is_dir($path)) return true;
		
		// Remove all unwanted files
		self::removeUnwantedFiles($path);
		
		/*
		Get all file all sub-folders and all hidden file with glob.
		NOTE: glob('*') ignores all 'hidden' files by default. This means it does not return files that start with a dot (e.g. ".file").
		If you want to match those files too, you can use "{,.}*" as the pattern with the GLOB_BRACE flag.
		{,.}[!.,!..]* => To prevent listing "." or ".." in the result.
		*/
		$files = glob($path . '{,.}[!.,!..]*', GLOB_MARK | GLOB_BRACE);
		if (!empty($files)) {
			foreach ($files as $file) {
				if (is_dir($file)) {
					if (!self::removeEmptySubDirs($file)) {
						$empty = false;
					}
				} else {
					$empty = false;
				}
			}
		}
		
		if ($empty) {
			@rmdir($path);
		}
		
		return $empty;
	}
	
	/**
	 * Remove all unwanted files from a directory recursively
	 *
	 * @param string $path
	 * @param array $filenames
	 */
	public static function removeUnwantedFiles(string $path, array $filenames = [])
	{
		if (empty($filenames)) {
			// Default unwanted filenames
			$filenames = [
				'.DS_Store',
				'.localized',
				'Thumbs.db',
				'error_log',
			];
		}
		
		$it = new RecursiveDirectoryIterator($path);
		foreach (new RecursiveIteratorIterator($it) as $file) {
			if (in_array(basename($file), $filenames)) {
				@unlink($file);
			}
		}
	}
	
	/**
	 * Get the file full path on the storage
	 *
	 * @param string $filePath
	 * @return string
	 */
	public static function fullFilePath(string $filePath): string
	{
		$rootPath = config('filesystems.disks.' . config('filesystems.default') . '.root');
		
		return $rootPath . $filePath;
	}
}
