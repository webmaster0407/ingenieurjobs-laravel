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

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class PhpArrayFile
{
	/**
	 * Get the content in the given file path.
	 *
	 * @param string|null $filePath
	 * @param bool $createIfNotExists
	 * @return array
	 */
	public static function getFileContent(?string $filePath, bool $createIfNotExists = false): array
	{
		if (!File::exists($filePath)) {
			if ($createIfNotExists) {
				self::writeFile($filePath, []);
			}
			
			return [];
		}
		
		try {
			return (array)include $filePath;
		} catch (\Throwable $e) {
			dd('File not found: ' . $filePath);
		}
	}
	
	/**
	 * Write a config/language file from array.
	 *
	 * @param string|null $filePath
	 * @param array $contentArray
	 * @return void
	 */
	public static function writeFile(?string $filePath, array $contentArray)
	{
		if (empty($filePath)) {
			return;
		}
		
		if (!File::exists($directory = dirname($filePath))) {
			mkdir($directory, 0777, true);
		}
		
		$content = "<?php \n\nreturn [";
		
		if (!empty($contentArray)) {
			$content .= self::stringLineMaker($contentArray);
			$content .= "\n";
		}
		
		$content .= "];\n";
		
		File::put($filePath, $content);
	}
	
	/**
	 * Write the lines of the inner array of the config/language file.
	 *
	 * @param array $array
	 * @param string $prepend
	 * @return string
	 */
	public static function stringLineMaker(array $array, string $prepend = ''): string
	{
		$output = '';
		
		foreach ($array as $key => $value) {
			$key = str_replace('\"', '"', addslashes($key));
			
			if (is_array($value)) {
				$value = self::stringLineMaker($value, $prepend . '    ');
				
				$output .= "\n{$prepend}    '{$key}' => [{$value}\n{$prepend}    ],";
			} else {
				$value = str_replace('\"', '"', addslashes($value));
				
				$output .= "\n{$prepend}    '{$key}' => '{$value}',";
			}
		}
		
		return $output;
	}
}
