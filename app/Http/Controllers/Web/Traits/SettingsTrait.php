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

namespace App\Http\Controllers\Web\Traits;

use App\Helpers\SystemLocale;
use App\Helpers\Cookie;
use App\Models\Advertising;
use App\Models\Page;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Cache;
use ChrisKonnertz\OpenGraph\OpenGraph;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Jaybizzle\CrawlerDetect\CrawlerDetect;
use App\Helpers\Localization\Country as CountryLocalization;
use Torann\LaravelMetaTags\Facades\MetaTag;

trait SettingsTrait
{
	public $cacheExpiration = 3600; // In seconds (e.g. 60 * 60 for 1h)
	public $cookieExpiration = 3600; // In seconds (e.g. 60 * 60 for 1h)
	
	public $countries = null;
	
	public $paymentMethods;
	public $countPaymentMethods = 0;
	
	public $og;
	
	/**
	 * Set all the front-end settings
	 */
	public function applyFrontSettings()
	{
		// Cache Expiration Time
		$this->cacheExpiration = (int)config('settings.optimization.cache_expiration');
		view()->share('cacheExpiration', $this->cacheExpiration);
		
		// Cookie Expiration Time
		$this->cookieExpiration = (int)config('settings.other.cookie_expiration');
		view()->share('cookieExpiration', $this->cookieExpiration);
		
		// Pictures Limit
		$picturesLimit = getPicturesLimit();
		view()->share('picturesLimit', $picturesLimit);
		
		/*
		// Default language for Bots
		$crawler = new CrawlerDetect();
		if ($crawler->isCrawler()) {
			$lang = collect(config('country.lang'));
			if ($lang->has('abbr')) {
				config()->set('lang.abbr', $lang->get('abbr'));
				config()->set('lang.locale', $lang->get('locale'));
			}
			app()->setLocale(config('lang.abbr'));
		}
		*/
		
		// Set locale for PHP
		SystemLocale::setLocale(config('lang.locale', 'en_US'));
		
		// Meta Tags
		[$title, $description, $keywords] = getMetaTag('home');
		MetaTag::set('title', $title);
		MetaTag::set('description', strip_tags($description));
		MetaTag::set('keywords', $keywords);
		
		// Open Graph
		$this->og = new OpenGraph();
		$locale = !empty(config('lang.locale')) ? config('lang.locale') : 'en_US';
		try {
			$this->og->siteName(config('settings.app.name', 'JobClass'))->locale($locale)->type('website')->url(rawurldecode(url()->current()));
		} catch (\Throwable $e) {};
		view()->share('og', $this->og);
		
		// CSRF Control
		// CSRF - Some JavaScript frameworks, like Angular, do this automatically for you.
		// It is unlikely that you will need to use this value manually.
		Cookie::set('X-XSRF-TOKEN', csrf_token(), $this->cookieExpiration);
		
		// Skin selection
		// config(['app.skin' => getFrontSkin(request()->input('skin'))]);
		
		// Reset session Post view counter
		if (!Str::contains(Route::currentRouteAction(), 'Post\DetailsController')) {
			if (session()->has('postIsVisited')) {
				session()->forget('postIsVisited');
			}
		}
		
		// Pages Menu
		$pages = Cache::remember('pages.' . config('app.locale') . '.menu', $this->cacheExpiration, function () {
			return Page::where(function ($query) {
				$query->where('excluded_from_footer', '!=', 1)->orWhereNull('excluded_from_footer');
			})->orderBy('lft', 'ASC')->get();
		});
		view()->share('pages', $pages);
		
		// Get all Countries
		$this->countries = CountryLocalization::getCountries();
		view()->share('countries', $this->countries);
		
		// Advertising
		$topAdvertising = null;
		$bottomAdvertising = null;
		$autoAdvertising = null;
		if (Schema::hasColumn('advertising', 'integration')) {
			$topAdvertising = Cache::remember('advertising.top', $this->cacheExpiration, function () {
				return Advertising::where('integration', 'unitSlot')->where('slug', 'top')->first();
			});
			$bottomAdvertising = Cache::remember('advertising.bottom', $this->cacheExpiration, function () {
				return Advertising::where('integration', 'unitSlot')->where('slug', 'bottom')->first();
			});
			$autoAdvertising = Cache::remember('advertising.auto', $this->cacheExpiration, function () {
				return Advertising::where('integration', 'autoFit')->where('slug', 'auto')->first();
			});
		}
		view()->share('topAdvertising', $topAdvertising);
		view()->share('bottomAdvertising', $bottomAdvertising);
		view()->share('autoAdvertising', $autoAdvertising);
		
		// Get Payment Methods
		$this->paymentMethods = Cache::remember(config('country.code') . '.paymentMethods.all', $this->cacheExpiration, function () {
			return PaymentMethod::whereIn('name', array_keys((array)config('plugins.installed')))
				->where(function ($query) {
					$query->whereRaw('FIND_IN_SET("' . config('country.icode') . '", LOWER(countries)) > 0')
						->orWhereNull('countries')->orWhere('countries', '');
				})->orderBy('lft')->get();
		});
		$this->countPaymentMethods = $this->paymentMethods->count();
		view()->share('paymentMethods', $this->paymentMethods);
		view()->share('countPaymentMethods', $this->countPaymentMethods);
	}
}
