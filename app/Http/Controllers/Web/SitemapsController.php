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

namespace App\Http\Controllers\Web;

// Increase the server resources
$iniConfigFile = __DIR__ . '/../../Helpers/Functions/ini.php';
if (file_exists($iniConfigFile)) {
	include_once $iniConfigFile;
}

use App\Helpers\Date;
use App\Helpers\Localization\Country as CountryLocalization;
use App\Helpers\UrlGen;
use App\Models\Category;
use App\Models\Page;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\City;
use Watson\Sitemap\Facades\Sitemap;

class SitemapsController extends FrontController
{
	protected $defaultDate = '2015-10-30T20:10:00+02:00';
	
	/**
	 * SitemapsController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			$this->commonQueries();
			
			return $next($request);
		});
	}
	
	/**
	 * Common Queries
	 */
	public function commonQueries()
	{
		// Set the Country's Locale & Default Date
		$this->applyCountrySettings();
	}
	
	// Sitemap Indexes
	
	/**
	 * @return mixed
	 */
	public function getAllCountriesSitemapIndex()
	{
		foreach ($this->countries as $item) {
			// Get Country Settings
			$country = $this->getCountrySettings($item->get('code'), false);
			if (empty($country)) {
				continue;
			}
			
			$basePath = $country['icode'] . '/';
			if (plugin_exists('domainmapping')) {
				$basePath = '';
			}
			
			Sitemap::addSitemap(dmUrl(collect($country), $basePath . 'sitemaps.xml'));
		}
		
		return Sitemap::index();
	}
	
	/**
	 * @param string|null $countryCode
	 * @return mixed
	 */
	public function getSitemapIndexByCountry(string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		// Get Country Settings
		$country = $this->getCountrySettings($countryCode);
		if (empty($country)) {
			return Sitemap::index();
		}
		
		$basePath = $country['icode'] . '/';
		if (plugin_exists('domainmapping')) {
			$basePath = '';
		}
		
		Sitemap::addSitemap(dmUrl(collect($country), $basePath . 'sitemaps/pages.xml'));
		Sitemap::addSitemap(dmUrl(collect($country), $basePath . 'sitemaps/categories.xml'));
		Sitemap::addSitemap(dmUrl(collect($country), $basePath . 'sitemaps/cities.xml'));
		
		$countPosts = Post::verified()->countryOf($country['code'])->count();
		if ($countPosts > 0) {
			Sitemap::addSitemap(dmUrl(collect($country), $basePath . 'sitemaps/posts.xml'));
		}
		
		return Sitemap::index();
	}
	
	// Sitemaps
	
	/**
	 * @param string|null $countryCode
	 * @return mixed
	 * @throws \Exception
	 */
	public function getPagesSitemapByCountry(string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		// Get Country Settings
		$country = $this->getCountrySettings($countryCode);
		if (empty($country)) {
			return Sitemap::render();
		}
		
		$queryString = '';
		if (!config('plugins.domainmapping.installed')) {
			$queryString = '?d=' . $country['code'];
		}
		
		$url = url('/') . $queryString;
		Sitemap::addTag($url, $this->defaultDate, 'daily', '1.0');
		
		$url = UrlGen::sitemap($country['icode']) . $queryString;
		Sitemap::addTag($url, $this->defaultDate, 'daily', '0.5');
		
		$url = UrlGen::search([], [], false, $country['icode']) . $queryString;
		Sitemap::addTag($url, $this->defaultDate, 'daily', '0.6');
		
		$pages = cache()->remember('pages.' . $country['locale'], $this->cacheExpiration, function () use ($country) {
			return Page::orderBy('lft', 'ASC')->get();
		});
		
		if ($pages->count() > 0) {
			foreach ($pages as $page) {
				$url = UrlGen::page($page);
				Sitemap::addTag($url, $this->defaultDate, 'daily', '0.7');
			}
		}
		
		$url = UrlGen::contact() . $queryString;
		Sitemap::addTag($url, $this->defaultDate, 'daily', '0.7');
		
		return Sitemap::render();
	}
	
	/**
	 * @param string|null $countryCode
	 * @return mixed
	 * @throws \Exception
	 */
	public function getCategoriesSitemapByCountry(string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		// Get Country Settings
		$country = $this->getCountrySettings($countryCode);
		if (empty($country)) {
			return Sitemap::render();
		}
		
		// Categories
		$cacheId = 'categories.' . $country['locale'] . '.all';
		$cats = cache()->remember($cacheId, $this->cacheExpiration, function () use ($country) {
			return Category::orderBy('lft')->get();
		});
		
		if ($cats->count() > 0) {
			$cats = collect($cats)->keyBy('id');
			
			foreach ($cats as $cat) {
				$url = UrlGen::category($cat, $country['icode']);
				Sitemap::addTag($url, $this->defaultDate, 'daily', '0.8');
			}
		}
		
		return Sitemap::render();
	}
	
	/**
	 * @param string|null $countryCode
	 * @return mixed
	 * @throws \Exception
	 */
	public function getCitiesSitemapByCountry(string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		// Get Country Settings
		$country = $this->getCountrySettings($countryCode);
		if (empty($country)) {
			return Sitemap::render();
		}
		
		$limit = (int)env('XML_SITEMAP_LIMIT', 1000);
		$cacheId = $country['icode'] . '.cities.take.' . $limit;
		$cities = cache()->remember($cacheId, $this->cacheExpiration, function () use ($country, $limit) {
			return City::countryOf($country['code'])->take($limit)->orderBy('population', 'DESC')->orderBy('name')->get();
		});
		
		if ($cities->count() > 0) {
			foreach ($cities as $city) {
				$city->name = trim(head(explode('/', $city->name)));
				$url = UrlGen::city($city, $country->locale, $country['icode']);
				Sitemap::addTag($url, $this->defaultDate, 'weekly', '0.7');
			}
		}
		
		return Sitemap::render();
	}
	
	/**
	 * @param string|null $countryCode
	 * @return mixed
	 * @throws \Exception
	 */
	public function getListingsSitemapByCountry(string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		// Get Country Settings
		$country = $this->getCountrySettings($countryCode);
		if (empty($country)) {
			return Sitemap::render();
		}
		
		$limit = (int)env('XML_SITEMAP_LIMIT', 1000);
		$cacheId = $country['icode'] . '.sitemaps.posts.xml';
		$posts = cache()->remember($cacheId, $this->cacheExpiration, function () use ($country, $limit) {
			return Post::verified()->countryOf($country['code'])->take($limit)->orderBy('created_at', 'DESC')->get();
		});
		
		if ($posts->count() > 0) {
			foreach ($posts as $post) {
				$url = UrlGen::post($post);
				Sitemap::addTag($url, $post->created_at, 'daily', '0.6');
			}
		}
		
		return Sitemap::render();
	}
	
	/**
	 * Set the Country's Locale & Default Date
	 *
	 * @param string|null $locale
	 * @param string|null $timeZone
	 * @return void
	 */
	public function applyCountrySettings(string $locale = null, string $timeZone = null)
	{
		// Set the App Language
		if (!empty($locale)) {
			app()->setLocale($locale);
		} else {
			app()->setLocale(config('app.locale'));
		}
		
		// Date: Carbon object
		$this->defaultDate = Carbon::parse(date('Y-m-d H:i'));
		if (!empty($timeZone)) {
			$this->defaultDate->timezone($timeZone);
		} else {
			$this->defaultDate->timezone(Date::getAppTimeZone());
		}
	}
	
	/**
	 * Get Country Settings
	 *
	 * @param string|null $countryCode
	 * @param bool $canApplySettings
	 * @return array|null
	 */
	public function getCountrySettings(?string $countryCode, bool $canApplySettings = true): ?array
	{
		$tab = [];
		
		// Get Country Info
		$country = CountryLocalization::getCountryInfo($countryCode);
		if ($country->isEmpty()) {
			return null;
		}
		
		$tab['code'] = $country->get('code');
		$tab['icode'] = $country->get('icode');
		$tab['time_zone'] = ($country->has('time_zone')) ? $country->get('time_zone') : config('app.timezone');
		
		// Language
		if (!$country->get('lang')->isEmpty() && $country->get('lang')->has('abbr')) {
			$tab['locale'] = $country->get('lang')->get('abbr');
		} else {
			$tab['locale'] = config('app.locale');
		}
		
		// Set the Country's Locale & Default Date
		if ($canApplySettings) {
			$this->applyCountrySettings($tab['locale'], $tab['time_zone']);
		}
		
		return $tab;
	}
}
