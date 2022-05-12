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

namespace App\Http\Middleware;

use App\Helpers\Cookie;
use App\Models\Language;
use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class SetDefaultLocale
{
	protected static $cacheExpiration = 3600;
	
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle(\Illuminate\Http\Request $request, Closure $next)
	{
		// Exception for Install & Upgrade Routes
		if (
			Str::contains(Route::currentRouteAction(), 'InstallController')
			|| Str::contains(Route::currentRouteAction(), 'UpgradeController')
			|| Str::contains(Route::currentRouteAction(), 'LocaleController@setLocale')
		) {
			return $next($request);
		}
		
		if (isAdminPanel()) {
			$this->setTranslationOfCurrentCountry();
			
			return $next($request);
		}
		
		// If the 'Website Country Language' detection option is activated
		// And if a Country has been selected (through the 'd' parameter)
		// Then, remove saved Language Code session (without apply it to the system)
		if (config('settings.app.auto_detect_language') == '2') {
			if (request()->has('d') && request()->get('d') == config('country.code')) {
				$this->forgetSavedLang();
				$this->setTranslationOfCurrentCountry();
				
				return $next($request);
			}
		}
		
		// Apply Session Language Code to the system
		if ($this->savedLangExists()) {
			$langCode = $this->getSavedLang();
			
			$lang = Cache::remember('language.' . $langCode, self::$cacheExpiration, function () use ($langCode) {
				return Language::where('abbr', $langCode)->first();
			});
			
			if (!empty($lang)) {
				// Config: Language (Updated)
				config()->set('lang.abbr', $lang->abbr);
				config()->set('lang.locale', $lang->locale);
				config()->set('lang.direction', $lang->direction);
				config()->set('lang.russian_pluralization', $lang->russian_pluralization);
				config()->set('lang.date_format', $lang->date_format ?? null);
				config()->set('lang.datetime_format', $lang->datetime_format ?? null);
				
				// Apply Country's Language Code to the system
				config()->set('app.locale', $langCode);
				app()->setLocale($langCode);
			}
		}
		
		$this->setTranslationOfCurrentCountry();
		
		return $next($request);
	}
	
	/**
	 * Set the translation of the current Country
	 */
	private function setTranslationOfCurrentCountry()
	{
		if (config()->has('country.name')) {
			$countryName = getColumnTranslation(config('country.name'));
			config()->set('country.name', $countryName);
		}
	}
	
	/**
	 * @return bool
	 */
	private function savedLangExists(): bool
	{
		if (config('larapen.core.storingUserSelectedLang') == 'cookie') {
			return Cookie::has('langCode');
		} else {
			return session()->has('langCode');
		}
	}
	
	/**
	 * @return array|mixed|string|null
	 */
	private function getSavedLang()
	{
		if (config('larapen.core.storingUserSelectedLang') == 'cookie') {
			$langCode = Cookie::get('langCode');
		} else {
			$langCode = session()->get('langCode');
		}
		
		return $langCode;
	}
	
	/**
	 * Remove the Language Code from Session
	 *
	 * @return void
	 */
	private function forgetSavedLang()
	{
		if (config('larapen.core.storingUserSelectedLang') == 'cookie') {
			Cookie::forget('langCode');
		} else {
			if (session()->has('langCode')) {
				session()->forget('langCode');
			}
		}
	}
}
