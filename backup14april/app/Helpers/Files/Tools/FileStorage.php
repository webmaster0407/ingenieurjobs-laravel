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

use Illuminate\Filesystem\FilesystemAdapter;

class FileStorage
{
	/**
	 * Remove matched pattern recursively
	 *
	 * @param $disk
	 * @param string $path
	 * @param string $pattern
	 * @return bool
	 */
	public static function removeMatchedFilesRecursive($disk, string $path, string $pattern): bool
	{
		if (!$disk instanceof FilesystemAdapter) {
			return false;
		}
		
		if (!$disk->exists($path)) {
			return false;
		}
		
		$meta = self::getMetaData($disk, $path);
		
		if (!isset($meta['type'])) {
			return false;
		}
		
		if ($meta['type'] == 'file') {
			if (preg_match($pattern, $path)) {
				try {
					$disk->delete($path);
				} catch (\Throwable $e) {
					return false;
				}
				
				return true;
			}
		} else if ($meta['type'] == 'dir') {
			// Get all files and all hidden files
			$files = $disk->allfiles($path);
			if (!empty($files)) {
				foreach ($files as $file) {
					self::removeMatchedFilesRecursive($disk, $file, $pattern);
				}
			}
			
			return true;
		}
		
		return false;
	}
	
	/**
	 * Remove all empty directories recursively
	 *
	 * @param $disk
	 * @param string $path
	 * @return bool
	 */
	public static function removeEmptySubDirs($disk, string $path): bool
	{
		if (!$disk instanceof FilesystemAdapter) {
			return false;
		}
		
		$empty = true;
		
		if (!$disk->exists($path)) {
			return false;
		}
		
		$meta = self::getMetaData($disk, $path);
		if (!isset($meta['type'])) {
			return false;
		}
		
		if ($meta['type'] != 'dir') return $empty;
		
		// Remove all unwanted files
		self::removeUnwantedFiles($disk, $path);
		
		// Get all sub-directories recursively.
		$directories = $disk->allDirectories($path);
		if (!empty($directories)) {
			foreach ($directories as $directory) {
				if (!$disk->exists($directory)) {
					continue;
				}
				$meta = self::getMetaData($disk, $directory);
				if (!isset($meta['type'])) {
					continue;
				}
				if ($meta['type'] == 'dir') {
					if (!self::removeEmptySubDirs($disk, $directory)) {
						$empty = false;
					}
				} else {
					$empty = false;
				}
			}
		}
		
		$files = $disk->files($path);
		if (!empty($files)) {
			$empty = false;
		}
		
		if ($empty) {
			try {
				$disk->deleteDirectory($path);
			} catch (\Throwable $e) {
			}
		}
		
		return $empty;
	}
	
	/**
	 * Remove all unwanted files from a directory recursively
	 *
	 * @param $disk
	 * @param string $path
	 * @param array $filenames
	 * @return bool|void
	 */
	public static function removeUnwantedFiles($disk, string $path, array $filenames = [])
	{
		if (!$disk instanceof FilesystemAdapter) {
			return false;
		}
		
		if (empty($filenames)) {
			// Default unwanted filenames
			$filenames = [
				'.DS_Store',
				'.localized',
				'Thumbs.db',
				'error_log',
			];
		}
		
		if (!$disk->exists($path)) {
			return;
		}
		
		// Get all files and all hidden files
		$files = $disk->allfiles($path);
		foreach ($files as $file) {
			$meta = self::getMetaData($disk, $file);
			if (!isset($meta['type'])) {
				continue;
			}
			if ($meta['type'] != 'file') {
				continue;
			}
			if (in_array(basename($file), $filenames)) {
				try {
					$disk->delete($file);
				} catch (\Throwable $e) {
				}
			}
		}
	}
	
	/**
	 * Get a file's metadata (Remixed)
	 *
	 * @param $disk
	 * @param string $path
	 * @return array
	 */
	public static function getMetaData($disk, string $path): array
	{
		try {
			if (!$disk->exists($path)) {
				return [];
			}
			
			$meta = $disk->getMetaData($path);
			if (is_array($meta) && isset($meta['type'])) {
				if ($meta['type'] == 'dir' || $meta['type'] == 'file') {
					return $meta;
				}
			}
			
			$meta = [];
			// $meta['type'] = ($disk->get($path) === false) ? 'dir' : 'file'; // Performance concern!
			$meta['type'] = ($disk->size($path) === false) ? 'dir' : 'file';
		} catch (\Throwable $e) {
			return [];
		}
		
		return $meta;
	}
	
	/**
	 * Get the file full path on the storage
	 *
	 * @param $disk
	 * @param string $filePath
	 * @return string
	 */
	public static function fullFilePath($disk, string $filePath): string
	{
		if ($disk instanceof FilesystemAdapter) {
			$rootPath = $disk->getDriver()->getAdapter()->getPathPrefix();
		} else {
			$rootPath = config('filesystems.disks.' . config('filesystems.default') . '.root');
		}
		
		return $rootPath . $filePath;
	}
}
