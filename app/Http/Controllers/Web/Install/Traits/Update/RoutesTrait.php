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

use App\Helpers\PhpArrayFile;
use App\Models\Setting;
use Illuminate\Support\Str;

trait RoutesTrait
{
	/**
	 * (Try to) Sync. the multi-countries URLs with the dynamics routes
	 */
	private function syncMultiCountriesUrlsAndRoutes()
	{
		// Get the SEO settings
		$seoSetting = Setting::where('key', 'seo')->first();
		if (empty($seoSetting)) {
			return;
		}
		
		if (!is_array($seoSetting->value)) {
			return;
		}
		
		$seoSettingValue = $seoSetting->value;
		
		// Check & update the 'multi_countries_urls' value from 'config/routes.php' file
		$dynamicRoutesIsForMultiCountriesUrl = (
			Str::startsWith(config('routes.search'), '{countryCode}')
			|| Str::startsWith(config('routes.searchPostsByCat'), '{countryCode}')
			|| Str::startsWith(config('routes.searchPostsByCity'), '{countryCode}')
		);
		$multiCountriesUrls = ($dynamicRoutesIsForMultiCountriesUrl) ? '1' : '0';
		
		if (!isset($seoSettingValue['multi_countries_urls'])) {
			$seoSettingValue['multi_countries_urls'] = '0';
		}
		
		if ($seoSettingValue['multi_countries_urls'] != $multiCountriesUrls) {
			$seoSettingValue['multi_countries_urls'] = $multiCountriesUrls;
			
			$seoSetting->value = $seoSettingValue;
			$seoSetting->save();
		}
		
		// Check & update the 'config/routes.php' file that has been updated during upgrade process
		if (isset($seoSettingValue['listing_permalink']) && !empty($seoSettingValue['listing_permalink'])) {
			$settingsSeoListingPermalink = $seoSettingValue['listing_permalink'] . ($seoSettingValue['listing_permalink_ext'] ?? '');
			if ($settingsSeoListingPermalink != config('routes.post')) {
				try {
					config()->set('settings.seo.listing_permalink', $seoSettingValue['listing_permalink']);
					config()->set('settings.seo.listing_permalink_ext', ($seoSettingValue['listing_permalink_ext'] ?? null));
					
					// Get current values of "config/larapen/routes.php" (Original version)
					$origRoutes = PhpArrayFile::getFileContent(config_path('larapen/routes.php'));
					
					// Create or Update the "config/routes.php" file
					$filePath = config_path('routes.php');
					PhpArrayFile::writeFile($filePath, $origRoutes);
				} catch (\Throwable $e) {
				}
			}
		}
	}
}
