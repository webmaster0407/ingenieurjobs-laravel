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

namespace App\Macros;

use Illuminate\Filesystem\Filesystem;

/**
 * Extract Zip file
 *
 * Usage: File::extractZip($path, $extractTo);
 *
 * @param string $path
 * @param string $extractTo
 */
Filesystem::macro('extractZip', function ($path, $extractTo) {
	
	$doesServerCan = (extension_loaded('zip') && class_exists('ZipArchive'));
	if ($doesServerCan) {
		try {
			$zip = new ZipArchive();
			$zip->open($path);
			$zip->extractTo($extractTo);
			$zip->close();
		} catch (\Exception $e) {
			$doesServerCan = false;
		}
	}
	
	return $doesServerCan;
});
