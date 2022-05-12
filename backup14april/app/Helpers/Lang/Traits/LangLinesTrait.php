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

namespace App\Helpers\Lang\Traits;

use App\Helpers\Arr;
use App\Helpers\PhpArrayFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

trait LangLinesTrait
{
	/**
	 * Fill (or Add) the missing lines in the Language files
	 *
	 * @param string $defaultLangCode
	 * @param string $langCode
	 * @return bool
	 */
	public function syncLines(string $defaultLangCode, string $langCode): bool
	{
		if ($this->masterLangExists()) {
			$defaultLangCode = $this->masterLangCode;
		}
		
		// Get missing lines in the Language files
		$missingEntries = $this->getMissingLines($defaultLangCode, $langCode);
		$missingEntriesFormatted = $this->getAddLinesArrayFormat($missingEntries);
		
		if (!empty($missingEntriesFormatted)) {
			
			// Add the vendor languages missing lines (If exist)
			if (isset($missingEntriesFormatted['vendor'])) {
				$packagesMissingEntries = $missingEntriesFormatted['vendor'];
				unset($missingEntriesFormatted['vendor']);
				
				foreach ($packagesMissingEntries as $namespace => $packageMissingEntries) {
					$packageMissingEntries = Arr::dot($packageMissingEntries);
					
					try {
						Lang::addLines($packageMissingEntries, $langCode, $namespace);
					} catch (\Throwable $e) {
						dd($e->getMessage());
					}
				}
			}
			
			// Add the main languages missing lines
			$mainMissingEntries = Arr::dot($missingEntriesFormatted);
			
			try {
				Lang::addLines($mainMissingEntries, $langCode);
			} catch (\Throwable $e) {
				dd($e->getMessage());
			}
			
			// Get language files grouped by file name
			$files = $this->files();
			$groups = array_keys($files);
			
			foreach ($groups as $group) {
				if (!isset($missingEntries[$group])) {
					continue;
				}
				
				// Get the new content of the file
				$newContent = Lang::get($group, [], $langCode, false);
				$newContent = Arr::arrUndot($newContent);
				
				if (isset($files[$group]) && isset($files[$group][$langCode])) {
					$filePath = $files[$group][$langCode];
					
					// Save
					PhpArrayFile::writeFile($filePath, $newContent);
				}
			}
		}
		
		return true;
	}
	
	/**
	 * @param array|string|null $except
	 * @return array
	 */
	public function getLocales($except = []): array
	{
		if (is_string($except) || is_numeric($except) || is_null($except)) {
			$except = !empty($except) ? [$except] : [];
		}
		
		$except = array_merge((array)$except, ['..', '.', 'vendor']);
		$localesScanned = array_diff(scandir($this->path), $except);
		
		$locales = [];
		if (!empty($localesScanned)) {
			foreach ($localesScanned as $folder) {
				if (is_dir($this->path . '/' . $folder)) {
					$locales[] = $folder;
				}
			}
		}
		
		return $locales;
	}
	
	// PRIVATE METHODS
	
	/**
	 * Extract the vendor missing entries
	 *
	 * @param array $array
	 * @return array
	 */
	private function getAddLinesArrayFormat(array $array): array
	{
		$newArray = [];
		foreach ($array as $group => $lines) {
			if (Str::contains($group, '::')) {
				[$namespace, $groupName] = explode('::', $group, 2);
				$newArray['vendor'][$namespace][$groupName] = $lines;
			} else {
				$newArray[$group] = $lines;
			}
		}
		
		return $newArray;
	}
	
	/**
	 * Get missing lines in the Language files
	 *
	 * @param string $defaultLangCode
	 * @param string $langCode
	 * @return array
	 */
	private function getMissingLines(string $defaultLangCode, string $langCode): array
	{
		// Get language files grouped by file name
		$files = $this->files();
		
		// Create language files if does not exist
		$files = $this->fillMissingFilePaths($defaultLangCode, $files);
		
		// Get language groups
		$groups = array_keys($files);
		
		// Get the master language entries
		$masterLangEntries = [];
		foreach ($groups as $group) {
			$masterLangEntries[$group] = Lang::get($group, [], $defaultLangCode, false);
		}
		
		// Get the Current Language entries
		$langEntries = [];
		foreach ($groups as $group) {
			$langEntries[$group] = Lang::get($group, [], $langCode, false);
		}
		
		// Get the Current Language missing entries
		$missingEntries = Arr::diffAssoc($masterLangEntries, $langEntries);
		
		return $missingEntries;
	}
	
	/**
	 * Array of language files grouped by file name.
	 *
	 * ex: ['user' => ['en' => 'user.php', 'nl' => 'user.php']]
	 *
	 * @return array
	 */
	private function files(): array
	{
		$files = File::allFiles($this->path);
		
		$files = collect($files)->filter(function ($file) {
			return File::extension($file) == 'php';
		});
		
		// Grouped by file name
		$filesByFile = $files->groupBy(function ($file) {
			$fileName = $file->getBasename('.' . $file->getExtension());
			
			if (Str::contains($file->getPath(), 'vendor')) {
				$fileName = str_replace('.php', '', $file->getFileName());
				
				$packageName = basename(dirname($file->getPath()));
				
				return "{$packageName}::{$fileName}";
			} else {
				return $fileName;
			}
		})->map(function ($files) {
			return $files->keyBy(function ($file) {
				return basename($file->getPath());
			})->map(function ($file) {
				return $file->getRealPath();
			});
		});
		
		return $filesByFile->toArray();
	}
	
	/**
	 * Fill missing file paths
	 *
	 * @param string $defaultLangCode
	 * @param array $filesByFile
	 * @return array
	 */
	private function fillMissingFilePaths(string $defaultLangCode, array $filesByFile): array
	{
		$locales = $this->getLocales();
		
		foreach ($filesByFile as $group => $item) {
			foreach ($locales as $locale) {
				if (!isset($item[$locale]) && isset($item[$defaultLangCode])) {
					$missingFilePath = str_replace('/' . $defaultLangCode . '/', '/' . $locale . '/', $item[$defaultLangCode]);
					$filesByFile[$group][$locale] = $missingFilePath;
					
					PhpArrayFile::writeFile($missingFilePath, []);
				}
			}
		}
		
		return $filesByFile;
	}
}
