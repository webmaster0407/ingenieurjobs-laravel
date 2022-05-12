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

namespace App\Http\Controllers\Web\Locale;

use App\Helpers\Arr;
use App\Helpers\Cookie;
use App\Http\Controllers\Web\FrontController;
use App\Http\Controllers\Web\Locale\Traits\TranslateUrlTrait;
use Illuminate\Support\Str;

class LocaleController extends FrontController
{
	use TranslateUrlTrait;
	
	/**
	 * @param string $langCode
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function setLocale(string $langCode)
	{
		// Check if the selected Language Code is supported by the system
		if (!isAvailableLang($langCode)) {
			$message = t('language_not_supported', ['code' => $langCode]);
			flash($message)->error();
			
			return redirect()->back()->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		// Check if Language Code can be saved into the session
		// and remove the Language Code session, if its cannot be saved.
		$langCanBeSaved = $this->checkIfLangCanBeSavedInSession($langCode);
		
		// Save the Language Code
		$this->saveLang($langCode, $langCanBeSaved);
		
		// After the Language Operation is done, ...
		
		// If the next path (URI) is filled (using the '?from=' parameter,
		// Then, redirect to this path
		if (request()->filled('from')) {
			$path = ltrim(request()->get('from'), '/');
			if (!empty($path) && !Str::contains($path, '#')) {
				$url = request()->root() . '/' . $path;
				
				return redirect($url);
			}
		}
		
		// If the Country selection parameter is filled,
		// Redirect to the homepage with it (without the eventual 'from' parameter)
		// If not, redirect user to the previous page
		if (request()->filled('d')) {
			$queryString = '';
			$queryArray = request()->except(['from']);
			if (!empty($queryArray)) {
				$queryString = '?' . Arr::query($queryArray);
			}
			
			$nextUrl = request()->root() . '/' . $queryString;
			
			if (config('settings.app.auto_detect_language') == '2') {
				$nextUrl = $this->removeCountrySelectionParameter($nextUrl);
			}
			
			return redirect($nextUrl);
		} else {
			$previousUrl = url()->previous();
			if (config('settings.app.auto_detect_language') == '2') {
				$previousUrl = $this->removeCountrySelectionParameter($previousUrl);
			}
			$previousUrl = $this->translateUrl($previousUrl, $langCode);
			
			if (config('plugins.domainmapping.installed')) {
				$previousUrl = request()->root();
				
				$origParsedUrl = mb_parse_url(url()->previous());
				$parsedUrl = mb_parse_url(request()->root());
				
				if (isset($origParsedUrl['host'], $parsedUrl['host'])) {
					if ($origParsedUrl['host'] == $parsedUrl['host']) {
						$previousPath = isset($origParsedUrl['path']) && !empty($origParsedUrl['path'])
							? $origParsedUrl['path']
							: '';
						$previousPath = ltrim($previousPath, '/');
						$previousUrl = $previousUrl . '/' . $previousPath;
						$previousUrl = $this->translateUrl($previousUrl, $langCode, request()->root());
					}
				}
			}
			
			return redirect($previousUrl);
		}
	}
	
	/**
	 * Check if Language Code can be saved into the session
	 * and remove the Language Code session, if it's cannot be saved.
	 * ie:
	 *   - When, selected Language Code is equal to the website master Language Code
	 *   - Or when, the 'Website Country Language' detection option is activated
	 *     and the selected Language Code is equal to the Country's Language Code
	 *
	 * @param string $langCode
	 * @return bool
	 */
	private function checkIfLangCanBeSavedInSession(string $langCode): bool
	{
		$langCanBeSaved = true;
		if ($langCode == config('appLang.abbr')) {
			if (config('settings.app.auto_detect_language') == '2') {
				if ($langCode == config('lang.abbr')) {
					$langCanBeSaved = false;
				}
			} else {
				$langCanBeSaved = false;
			}
		}
		
		return $langCanBeSaved;
	}
	
	/**
	 * @param string $langCode
	 * @param bool $langCanBeSaved
	 * @return mixed|\Symfony\Component\HttpFoundation\Cookie|void|null
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	private function saveLang(string $langCode, bool $langCanBeSaved)
	{
		if (config('larapen.core.storingUserSelectedLang') == 'cookie') {
			return $this->saveLangInCookie($langCode, $langCanBeSaved);
		} else {
			$this->saveLangInSession($langCode, $langCanBeSaved);
		}
	}
	
	/**
	 * Save the Language Code in Cookie
	 *
	 * @param string $langCode
	 * @param bool $langCanBeSaved
	 * @return mixed|\Symfony\Component\HttpFoundation\Cookie|null
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	private function saveLangInCookie(string $langCode, bool $langCanBeSaved)
	{
		$cookieObj = null;
		if ($langCanBeSaved) {
			$cookieObj = Cookie::set('langCode', $langCode);
		} else {
			Cookie::forget('langCode');
		}
		
		return $cookieObj;
	}
	
	/**
	 * Save the Language Code in Session
	 *
	 * @param string $langCode
	 * @param bool $langCanBeSaved
	 * @return string|null
	 */
	private function saveLangInSession(string $langCode, bool $langCanBeSaved): ?string
	{
		if ($langCanBeSaved) {
			// Save the Language Code in Session
			session()->put('langCode', $langCode);
			
			return $langCode;
		} else {
			// Remove the Language Code from Session
			if (session()->has('langCode')) {
				session()->forget('langCode');
			}
			
			return null;
		}
	}
	
	/**
	 * Remove the Country selection parameter from the URL
	 * (Helpful when the 'Website Country Language' detection option is activated)
	 * '(config('settings.app.auto_detect_language') == '2'))
	 *
	 * @param string|null $url
	 * @return string|string[]|null
	 */
	private function removeCountrySelectionParameter(string $url = null)
	{
		$parsedUrl = mb_parse_url($url);
		
		if (isset($parsedUrl['query'])) {
			parse_str($parsedUrl['query'], $queryArray);
			if (array_key_exists('d', $queryArray)) {
				$url = preg_replace('|\?.*|ui', '', $url);
				unset($queryArray['d']);
				if (!empty($queryArray)) {
					$queryString = '?' . Arr::query($queryArray);
					$url = $url . $queryString;
				}
			}
		}
		
		return $url;
	}
	
	private function redirect($url, $cookie)
	{
		if (config('larapen.core.storingUserSelectedLang') == 'cookie') {
			return Cookie::redirect($url, $cookie);
		} else {
			return redirect($url);
		}
	}
}
