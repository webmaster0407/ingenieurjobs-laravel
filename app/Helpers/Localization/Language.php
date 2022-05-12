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

namespace App\Helpers\Localization;

use App\Helpers\Cookie;
use App\Helpers\GeoIP;
use App\Models\Language as LanguageModel;
use App\Models\Country as CountryModel;
use App\Helpers\Localization\Helpers\Country as CountryHelper;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class Language
{
	protected $defaultLocale;
	protected $country;
	
	public static $cacheExpiration = 3600;
	
	public function __construct()
	{
		// Set Default Locale
		$this->defaultLocale = config('app.locale');
		
		// Cache Expiration Time
		self::$cacheExpiration = config('settings.optimization.cache_expiration', self::$cacheExpiration);
	}
	
	/**
	 * Find Language
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function find(): Collection
	{
		// Get the Language
		if (isFromApi()) {
			
			// API call
			$lang = $this->fromHeader();
			if ($lang->isEmpty()) {
				$lang = $this->fromUser();
			}
			
		} else {
			
			// Non API call
			$lang = $this->fromSession();
			if ($lang->isEmpty()) {
				$lang = $this->fromBrowser();
			}
			
		}
		
		// If Language didn't find, Get the Default Language.
		if ($lang->isEmpty()) {
			$lang = $this->fromConfig();
		}
		
		return $lang;
	}
	
	/**
	 * Get Language from logged User (for API)
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function fromUser(): Collection
	{
		$lang = collect();
		
		if (auth()->check()) {
			if (isset(auth()->user()->language_code)) {
				$langCode = $hrefLang = auth()->user()->language_code;
				if (!empty($langCode)) {
					// Get the Language Details
					$isAvailableLang = Cache::remember('language.' . $langCode, self::$cacheExpiration, function () use ($langCode) {
						return LanguageModel::where('abbr', $langCode)->first();
					});
					
					$isAvailableLang = collect($isAvailableLang);
					
					if (!$isAvailableLang->isEmpty()) {
						$lang = $isAvailableLang->merge(collect(['hreflang' => $hrefLang]));
					}
				}
			}
		}
		
		return $lang;
	}
	
	/**
	 * Get Language from HTTP Header (for API)
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function fromHeader(): Collection
	{
		$lang = collect();
		
		if (request()->hasHeader('Content-Language') || request()->hasHeader('Accept-Language')) {
			$acceptLanguage = array_key_first(parseAcceptLanguageHeader(request()->header('Accept-Language')));
			$langCode = $hrefLang = request()->header('Content-Language', $acceptLanguage);
			if (!empty($langCode)) {
				// Get the Language Details
				$isAvailableLang = Cache::remember('language.' . $langCode, self::$cacheExpiration, function () use ($langCode) {
					return LanguageModel::where('abbr', $langCode)->first();
				});
				
				$isAvailableLang = collect($isAvailableLang);
				
				if (!$isAvailableLang->isEmpty()) {
					$lang = $isAvailableLang->merge(collect(['hreflang' => $hrefLang]));
				}
			}
		}
		
		return $lang;
	}
	
	/**
	 * Get Language from Session
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function fromSession(): Collection
	{
		$lang = collect();
		
		if (session()->has('langCode')) {
			$langCode = $hrefLang = session()->get('langCode');
			if (!empty($langCode)) {
				// Get the Language Details
				$isAvailableLang = Cache::remember('language.' . $langCode, self::$cacheExpiration, function () use ($langCode) {
					return LanguageModel::where('abbr', $langCode)->first();
				});
				
				$isAvailableLang = collect($isAvailableLang);
				
				if (!$isAvailableLang->isEmpty()) {
					$lang = $isAvailableLang->merge(collect(['hreflang' => $hrefLang]));
				}
			}
		}
		
		return $lang;
	}
	
	/**
	 * Get Language from Browser
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function fromBrowser(): Collection
	{
		$lang = collect();
		
		if (config('settings.app.auto_detect_language') == '1') {
			// Parse the browser's languages
			$langTab = parseAcceptLanguageHeader();
			
			// Get country info \w country language
			$country = self::getCountryFromIP();
			
			// Search the default language (Intersection Browser & Country language OR First Browser language)
			$langCode = $hrefLang = '';
			if (!empty($langTab)) {
				foreach ($langTab as $code => $q) {
					if (!$country->isEmpty() && $country->has('lang')) {
						if (!$country->get('lang')->isEmpty() && $country->get('lang')->has('abbr')) {
							if (Str::contains($code, $country->get('lang')->get('abbr'))) {
								$langCode = substr($code, 0, 2);
								$hrefLang = $langCode;
								break;
							}
						}
					} else {
						if ($langCode == '') {
							$langCode = substr($code, 0, 2);
							$hrefLang = $langCode;
						}
					}
				}
			}
			
			// Check language
			if ($langCode != '') {
				// Get the Language details
				$isAvailableLang = Cache::remember('language.' . $langCode, self::$cacheExpiration, function () use ($langCode) {
					return LanguageModel::where('abbr', $langCode)->first();
				});
				
				$isAvailableLang = collect($isAvailableLang);
				
				if (!$isAvailableLang->isEmpty()) {
					$lang = $isAvailableLang->merge(collect(['hreflang' => $hrefLang]));
				}
			}
		}
		
		return $lang;
	}
	
	/**
	 * Get Language from Database or Config file
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function fromConfig(): Collection
	{
		// Get the default Language (from DB)
		$langCode = config('appLang.abbr');
		
		// Get the Language details
		try {
			// Get the Language details
			$lang = Cache::remember('language.' . $langCode, self::$cacheExpiration, function () use ($langCode) {
				return LanguageModel::where('abbr', $langCode)->first();
			});
			$lang = collect($lang)->merge(collect(['hreflang' => config('appLang.abbr')]));
		} catch (\Exception $e) {
			$lang = collect(['abbr' => config('app.locale'), 'hreflang' => config('app.locale')]);
		}
		
		// Check if language code exists
		if (!$lang->has('abbr')) {
			$lang = collect(['abbr' => config('app.locale'), 'hreflang' => config('app.locale')]);
		}
		
		return $lang;
	}
	
	/**
	 * @param $countries
	 * @param string $locale
	 * @param string $source
	 * @return \Illuminate\Support\Collection
	 */
	public function countries($countries, string $locale = 'en', string $source = 'cldr'): Collection
	{
		// Security
		if (!$countries instanceof Collection) {
			return collect();
		}
		
		//$locale = 'en'; // debug
		$countryLang = new CountryHelper();
		$tab         = [];
		foreach ($countries as $code => $country) {
			$tab[$code] = $country;
			if ($name = $countryLang->get($code, $locale, $source)) {
				$tab[$code]['name'] = $name;
			}
		}
		
		return collect($tab)->sortBy('name');
	}
	
	/**
	 * @param $country
	 * @param string $locale
	 * @param string $source
	 * @return \Illuminate\Support\Collection
	 */
	public function country($country, string $locale = 'en', string $source = 'cldr'): Collection
	{
		// Security
		if (!$country instanceof Collection) {
			return collect();
		}
		
		//$locale = 'en'; // debug
		$countryLang = new CountryHelper();
		if ($name = $countryLang->get($country->get('code'), $locale, $source)) {
			return $country->merge(['name' => $name]);
		} else {
			return $country;
		}
	}
	
	/**
	 * @param $countryCode
	 * @return \Illuminate\Support\Collection
	 */
	public function getCountryInfo($countryCode): Collection
	{
		if (trim($countryCode) == '') {
			return collect();
		}
		$countryCode = strtoupper($countryCode);
		
		$country = Cache::remember('country.' . $countryCode . '.array', self::$cacheExpiration, function () use ($countryCode) {
			return CountryModel::find($countryCode)->toArray();
		});
		
		if (count($country) == 0) {
			return collect();
		}
		
		return collect($country);
	}
	
	/**
	 * @return \Illuminate\Support\Collection
	 */
	public static function getCountryFromIP(): Collection
	{
		// GeoIP
		$countryCode = self::getCountryCodeFromIP();
		if (empty($countryCode)) {
			return collect();
		}
		
		return Country::getCountryInfo($countryCode);
	}
	
	/**
	 * Localize the user's country
	 *
	 * @return string|null
	 */
	public static function getCountryCodeFromIP()
	{
		$countryCode = Cookie::get('ipCountryCode');
		if (empty($countryCode)) {
			try {
				
				$data = (new GeoIP())->getData();
				$countryCode = data_get($data, 'countryCode');
				if ($countryCode == 'UK') {
					$countryCode = 'GB';
				}
				
				if (!is_string($countryCode) || strlen($countryCode) != 2) {
					return null;
				}
				
				// Set data in cookie
				Cookie::set('ipCountryCode', $countryCode);
				
			} catch (\Throwable $e) {
				return null;
			}
		}
		
		return strtolower($countryCode);
	}
}
