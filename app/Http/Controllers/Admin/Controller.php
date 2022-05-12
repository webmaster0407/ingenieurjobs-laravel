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

namespace App\Http\Controllers\Admin;

use App\Helpers\Localization\Country as CountryLocalization;
use App\Http\Controllers\Web\Traits\CommonTrait;
use App\Http\Controllers\Web\Traits\RobotsTxtTrait;
use App\Models\Setting;
use Illuminate\Support\Facades\Config;

class Controller extends \App\Http\Controllers\Controller
{
	use RobotsTxtTrait, CommonTrait;
	
	public $request;
	
	/**
	 * Controller constructor.
	 */
	public function __construct()
	{
		// Set the storage disk
		$this->setStorageDisk();
		
		// Check & Change the App Key (If needed)
		$this->checkAndGenerateAppKey();
		
		// Get Settings (for Sidebar Menu)
		$this->getSettings();
		
		// Load the Plugins
		$this->loadPlugins();
		
		// Get country data (If exists)
		$this->loadLocalizationData();
		
		// Generated the robots.txt file (If not exists)
		$this->checkRobotsTxtFile();
	}
	
	/**
	 * Get Country from the Domain Mapping plugin,
	 * When the session is NOT shared.
	 */
	public function loadLocalizationData()
	{
		if (config('plugins.domainmapping.installed')) {
			if (!config('settings.domainmapping.share_session')) {
				// Country
				$country = $this->getCountryFromDomain();
				$country = (!empty($country)) ? $country : collect([]);
				
				// Config: Country
				if (!$country->isEmpty() && $country->has('code')) {
					$countryLangExists = $country->has('lang') && $country->get('lang')->has('abbr');
					Config::set('country.locale', ($countryLangExists) ? $country->get('lang')->get('abbr') : config('app.locale'));
					Config::set('country.lang', ($country->has('lang')) ? $country->get('lang')->toArray() : []);
					Config::set('country.code', $country->get('code'));
					Config::set('country.icode', $country->get('icode'));
					Config::set('country.name', $country->get('name'));
					
					// Update the default country to prevent its removal
					Config::set('settings.geo_location.default_country_code', $country->get('code'));
					
					// Config: Domain Mapping Plugin
					applyDomainMappingConfig(config('country.code'));
				}
			}
		}
	}
	
	/**
	 * Get Country from Domain
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function getCountryFromDomain()
	{
		if (config('plugins.domainmapping.installed')) {
			if (!config('settings.domainmapping.share_session')) {
				$host = parse_url(url()->current(), PHP_URL_HOST);
				
				$domain = collect((array)config('domains'))->firstWhere('host', $host);
				if (!empty($domain)) {
					if (isset($domain['country_code']) && !empty($domain['country_code'])) {
						return CountryLocalization::getCountryInfo($domain['country_code']);
					}
				}
			}
		}
		
		return collect();
	}
	
	/**
	 * Get Settings (for Sidebar Menu)
	 */
	private function getSettings()
	{
		$cacheExpiration = (int)config('settings.optimization.cache_expiration', 86400);
		
		try {
			$cacheId = 'all.settings.admin.sidebar';
			$settings = cache()->remember($cacheId, $cacheExpiration, function () {
				return Setting::query()->get(['id', 'key', 'name']);
			});
		} catch (\Throwable $e) {
			$settings = collect();
		}
		
		view()->share('settings', $settings);
	}
}
