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

/*
 * Increase the server resources through the PHP.ini for this page
 *
 * Default Values
 * --------------
 * max_execution_time = 30
 * memory_limit = 128M
 * post_max_size = 8M
 * upload_max_filesize = 32M
 * max_input_time = 60
 *
 * More Information
 * ----------------
 * https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time
 * https://www.php.net/manual/en/ini.core.php#ini.memory-limit
 * https://www.php.net/manual/en/ini.core.php#ini.post-max-size
 * https://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize
 * https://www.php.net/manual/fr/info.configuration.php#ini.max-input-time
 *
 * Note:
 * To upload large files, the post_max_size value must be larger than upload_max_filesize.
 * Generally speaking, memory_limit should be larger than post_max_size.
 * When an int is used, the value is measured in bytes.
 */

if (isset($configForUpload) && $configForUpload == true) {
	// This configuration allow to upload 17MB file
	$newMaxExecutionTime = '120';
	$newMemoryLimit = '512M';
	$newPostMaxSize = '128M';
	$newUploadMaxFileSize = '64M';
	$newMaxInputTime = '240';
} else {
	$newMaxExecutionTime = '0';
	$newMemoryLimit = '-1';
	$newPostMaxSize = '128M';
	$newUploadMaxFileSize = '64M';
	$newMaxInputTime = '0';
}

$maxExecutionTime = (int)@ini_get('max_execution_time');
if ($maxExecutionTime != '0') {
	if ($maxExecutionTime < (int)$newMaxExecutionTime || $newMaxExecutionTime == '0') {
		@ini_set('max_execution_time', $newMaxExecutionTime);
	}
}
$memoryLimit = (int)@ini_get('memory_limit');
if ($memoryLimit != '-1') {
	if ($memoryLimit < (int)$newMemoryLimit || $newMemoryLimit == '-1') {
		@ini_set('memory_limit', $newMemoryLimit);
	}
}

$postMaxSize = (int)@ini_get('post_max_size');
if ($postMaxSize < (int)$newPostMaxSize) {
	@ini_set('post_max_size', $newPostMaxSize);
}
$uploadMaxFileSize = (int)@ini_get('upload_max_filesize');
if ($uploadMaxFileSize < (int)$newUploadMaxFileSize) {
	@ini_set('upload_max_filesize', $newUploadMaxFileSize);
}
$maxInputTime = (int)@ini_get('max_input_time');
if ($maxInputTime != '0') {
	if ($maxInputTime < (int)$newMaxInputTime || $newMaxInputTime == '0') {
		@ini_set('max_input_time', $newMaxInputTime);
	}
}
