<?php
/*
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

namespace App\Exceptions\Traits;

use App\Helpers\Arr;

trait PluginTrait
{
	/**
	 * Fix broken plugins installation
	 * e.g. Fix for plugins folder name issue
	 *
	 * @param $message
	 * @return string|void
	 */
	public function fixForFolderNameIssue($message)
	{
		if (empty($message)) {
			return;
		}
		
		// Get the broken plugin name
		$brokenPluginName = null;
		$tmp = '';
		preg_match('|/extras/plugins/([^/]+)/|ui', $message, $tmp);
		if (isset($tmp[1]) && !empty($tmp[1])) {
			$brokenPluginName = $tmp[1];
		}
		if (empty($brokenPluginName)) {
			return;
		}
		
		$issueFixed = false;
		$pluginsBasePath = config('larapen.core.plugin.path');
		
		// Load all Plugins Services Provider
		$pluginsFoldersNames = [];
		try {
			$pluginsFoldersNames = scandir($pluginsBasePath);
			$pluginsFoldersNames = array_diff($pluginsFoldersNames, ['..', '.']);
		} catch (\Throwable $e) {
		}
		
		if (empty($pluginsFoldersNames)) {
			return;
		}
		
		foreach ($pluginsFoldersNames as $pluginFolder) {
			$spFiles = glob($pluginsBasePath . $pluginFolder . '/*ServiceProvider.php');
			foreach ($spFiles as $spFilePath) {
				$tmp = '';
				preg_match('|/extras/plugins/([^/]+)/([a-zA-Z0-9]+)ServiceProvider|ui', $spFilePath, $tmp);
				if (empty($tmp[1]) || empty($tmp[2])) {
					continue;
				}
				
				$folderName = $tmp[1];
				$pluginName = strtolower($tmp[2]);
				if ($folderName == $pluginName) {
					continue;
				}
				
				$nsFolderName = $this->getFolderFromTheServiceProviderContent($spFilePath);
				if ($folderName == $nsFolderName) {
					continue;
				}
				
				$oldFolderPath = $pluginsBasePath . $pluginFolder;
				$newFolderPath = $pluginsBasePath . $pluginName;
				
				// Continue if the new folder name already exists for other folder
				if (file_exists($newFolderPath)) {
					continue;
				}
				
				// Renames the broken plugin directory
				try {
					if (is_dir($oldFolderPath)) {
						rename($oldFolderPath, $newFolderPath);
						$issueFixed = true;
					}
				} catch (\Throwable $e) {
				}
			}
		}
		
		if ($issueFixed) {
			if (request()->get('pluginsInstallationFixedBy') != $brokenPluginName) {
				// Customize and Redirect to the previous URL
				$previousUrl = url()->previous();
				
				// Get the previous URL without query string
				$previousUrlWithoutQuery = getUrlWithoutQuery($previousUrl);
				
				// Build the new query string
				$queryString = '';
				$queryArray = getUrlQuery($previousUrl, 'pluginsInstallationFixedBy');
				$queryArray = array_merge($queryArray, ['pluginsInstallationFixedBy' => $brokenPluginName]);
				if (!empty($queryArray)) {
					$queryString = '?' . Arr::query($queryArray);
				}
				
				// Get the previous URL with new query string
				$previousUrl = $previousUrlWithoutQuery . $queryString;
				
				// Redirect
				redirectUrl($previousUrl, 301, config('larapen.core.noCacheHeaders'));
			} else {
				$errorMessage = 'The "<code>%s</code>" plugin was broken due to the name of the folder that contains it.
				The script tried to fix this issue... By refreshing this page the issue should be resolved.
				If it is not the case, please reread the documentation on the installation of this plugin, in order to fix the issue manually.';
				
				return sprintf($errorMessage, $brokenPluginName);
			}
		}
	}
	
	/**
	 * @param $path
	 * @return string|null
	 */
	private function getFolderFromTheServiceProviderContent($path): ?string
	{
		if (!file_exists($path)) {
			return null;
		}
		
		$nsFolderName = null;
		try {
			$content = file_get_contents($path);
			
			$tmp = '';
			preg_match('|namespace[\s]+extras\\\plugins\\\([^;]+);|ui', $content, $tmp);
			if (!empty(trim($tmp[1]))) {
				$nsFolderName = trim($tmp[1]);
			}
			
			return $nsFolderName;
		} catch (\Throwable $e) {
		}
		
		return null;
	}
}
