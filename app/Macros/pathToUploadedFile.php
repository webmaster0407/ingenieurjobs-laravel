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
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Create an Laravel (Symfony) UploadedFile object from absolute path
 *
 * Usage: File::pathToUploadedFile($path);
 *
 * @param string $path
 * @param bool $test
 * @return UploadedFile|bool
 */
Filesystem::macro('pathToUploadedFile', function ($path, $test = true) {
	
	if (!Storage::exists($path)) {
		return false;
	}
	
	$path = Storage::path($path);
	
	$filesystem = new Filesystem();
	$name = $filesystem->name($path);
	$extension = $filesystem->extension($path);
	$originalName = $name . '.' . $extension;
	$mimeType = $filesystem->mimeType($path);
	$error = null;
	
	return new UploadedFile($path, $originalName, $mimeType, $error, $test);
	
});
