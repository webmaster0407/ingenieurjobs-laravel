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

use App\Helpers\UrlGen\ClearFiltersTrait;
use Illuminate\Support\Str;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

class UrlGen
{
	use ClearFiltersTrait;
	
	/**
	 * @param $entry
	 * @param bool $encoded
	 * @return string
	 */
	public static function postPath($entry, bool $encoded = false): string
	{
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (isset($entry->id) && isset($entry->title)) {
			$preview = !isVerifiedPost($entry) ? '?preview=1' : '';
			
			$slug = ($encoded) ? rawurlencode($entry->slug) : $entry->slug;
			
			$path = str_replace(['{slug}', '{hashableId}', '{id}'], [$slug, hashId($entry->id), $entry->id], config('routes.post'));
			$path = $path . $preview;
		} else {
			$path = '#';
		}
		
		return $path;
	}
	
	/**
	 * @param $id
	 * @param string $slug
	 * @return string
	 */
	public static function postPathBasic($id, string $slug = 'job-slug'): string
	{
		$path = str_replace(['{slug}', '{hashableId}', '{id}'], [$slug, $id, $id], config('routes.post'));
		
		return (string)$path;
	}
	
	/**
	 * @param $entry
	 * @param bool $encoded
	 * @return string
	 */
	public static function postUri($entry, bool $encoded = false): string
	{
		return self::postPath($entry, $encoded);
	}
	
	/**
	 * @param $entry
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function post($entry)
	{
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (config('plugins.domainmapping.installed')) {
			$url = dmUrl($entry->country_code, self::postUri($entry));
		} else {
			$url = url(self::postPath($entry));
		}
		
		return $url;
	}
	
	/**
	 * @param $entry
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function reportPost($entry)
	{
		$entryId = hashId($entry->id);
		
		$url = url('posts/' . $entryId . '/report');
		
		return $url;
	}
	
	/**
	 * @param bool $httpError
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function addPost(bool $httpError = false)
	{
		return (config('settings.single.publication_form_type') == '2')
			? url('create')
			: url('posts/create');
	}
	
	/**
	 * @param $entry
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function editPost($entry)
	{
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (isset($entry->id)) {
			$url = (config('settings.single.publication_form_type') == '2')
				? url('edit/' . $entry->id)
				: url('posts/' . $entry->id . '/edit');
		} else {
			$url = '#';
		}
		
		return $url;
	}
	
	/**
	 * @param $cat
	 * @param $city
	 * @param array $exceptArr
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function getCatParentUrl($cat, $city = null, array $exceptArr = [])
	{
		$exceptArr = array_filter($exceptArr); // Remove empty elements
		
		if (!in_array('page', $exceptArr)) {
			$exceptArr[] = 'page';
		}
		if (!in_array('cf', $exceptArr)) {
			$exceptArr[] = 'cf';
		}
		if (!in_array('minPrice', $exceptArr)) {
			$exceptArr[] = 'minPrice';
		}
		if (!in_array('maxPrice', $exceptArr)) {
			$exceptArr[] = 'maxPrice';
		}
		
		$routeSearchPostsByCat = str_replace('{countryCode}/', '', config('routes.searchPostsByCat'));
		$idx = (config('settings.seo.multi_countries_urls')) ? 2 : 1;
		$catFirstSegment = request()->segment($idx);
		
		if (Str::startsWith($routeSearchPostsByCat, $catFirstSegment . '/')) {
			
			if (isset($cat->parent) && !empty($cat->parent)) {
				$catParentUrl = UrlGen::category($cat->parent, null, null, false, $exceptArr);
			} else {
				$catParentUrl = UrlGen::category($cat, null, null, false, $exceptArr);
			}
			
		} else {
			
			if (request()->filled('c') && request()->filled('sc')) {
				if (!in_array('sc', $exceptArr)) {
					$exceptArr[] = 'sc';
				}
			} else {
				if (request()->filled('c')) {
					if (!in_array('c', $exceptArr)) {
						$exceptArr[] = 'c';
					}
				}
				if (request()->filled('sc')) {
					if (!in_array('sc', $exceptArr)) {
						$exceptArr[] = 'sc';
					}
				}
			}
			
			$catParentUrl = self::search([], $exceptArr);
			
		}
		
		return $catParentUrl;
	}
	
	/**
	 * @param $entry
	 * @param string|null $countryCode
	 * @param $city
	 * @param bool $findParent
	 * @param array $exceptArr
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function category($entry, string $countryCode = null, $city = null, bool $findParent = true, array $exceptArr = [])
	{
		$exceptArr = array_filter($exceptArr); // Remove empty elements
		
		if (!in_array('page', $exceptArr)) {
			$exceptArr[] = 'page';
		}
		if (!in_array('cf', $exceptArr)) {
			$exceptArr[] = 'cf';
		}
		if (!in_array('minPrice', $exceptArr)) {
			$exceptArr[] = 'minPrice';
		}
		if (!in_array('maxPrice', $exceptArr)) {
			$exceptArr[] = 'maxPrice';
		}
		
		if (!empty($city) && isset($city->id)) {
			if (isset($entry->parent) && !empty($entry->parent)) {
				$params = [
					'c'  => $entry->parent->id,
					'sc' => $entry->id,
					'l'  => $city->id,
				];
			} else {
				if (!in_array('sc', $exceptArr)) {
					$exceptArr[] = 'sc';
				}
				$params = [
					'c' => $entry->id,
					'l' => $city->id,
				];
			}
			
			$url = self::search(array_merge(request()->except($exceptArr + array_keys($params)), $params), $exceptArr);
			
			return $url;
		}
		
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (isset($entry->slug)) {
			if ($findParent && isset($entry->parent) && !empty($entry->parent)) {
				$path = str_replace(['{countryCode}/', '{catSlug}', '{subCatSlug}'], ['', $entry->parent->slug, $entry->slug], config('routes.searchPostsBySubCat'));
			} else {
				$path = str_replace(['{countryCode}/', '{catSlug}'], ['', $entry->slug], config('routes.searchPostsByCat'));
			}
			$url = url($countryCodePath . $path);
		} else {
			$url = self::search([], $exceptArr);
		}
		
		return $url;
	}
	
	/**
	 * @param $entry
	 * @param string|null $countryCode
	 * @param $cat
	 * @param array $exceptArr
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function city($entry, string $countryCode = null, $cat = null, array $exceptArr = [])
	{
		$exceptArr = array_filter($exceptArr); // Remove empty elements
		
		if (!in_array('page', $exceptArr)) {
			$exceptArr[] = 'page';
		}
		if (!in_array('location', $exceptArr)) {
			$exceptArr[] = 'location';
		}
		
		if (!empty($cat) && isset($cat->id)) {
			if (isset($cat->parent) && !empty($cat->parent)) {
				$params = [
					'l'  => $entry->id,
					'c'  => $cat->parent->id,
					'sc' => $cat->id,
				];
			} else {
				if (!in_array('sc', $exceptArr)) {
					$exceptArr[] = 'sc';
				}
				$params = [
					'l' => $entry->id,
					'c' => $cat->id,
				];
			}
			
			$url = self::search(array_merge(request()->except($exceptArr + array_keys($params)), $params), $exceptArr);
			
			return $url;
		}
		
		if (empty($countryCode)) {
			if (isset($entry->country_code) && !empty($entry->country_code)) {
				$countryCode = $entry->country_code;
			} else {
				$countryCode = config('country.code');
			}
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (isset($entry->id, $entry->name)) {
			$path = str_replace(['{countryCode}/', '{city}', '{id}'], ['', $entry->slug ?? slugify($entry->name), $entry->id], config('routes.searchPostsByCity'));
			$path = $countryCodePath . $path;
			if (isAdminPanel()) {
				$url = dmUrl($entry->country_code, $path);
			} else {
				$url = url($path);
			}
		} else {
			$url = '#';
		}
		
		return $url;
	}
	
	/**
	 * @param $entry
	 * @param string|null $countryCode
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function user($entry, string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (isset($entry->username) && !empty($entry->username)) {
			$path = str_replace(['{countryCode}/', '{username}'], ['', $entry->username], config('routes.searchPostsByUsername'));
			$url = url($countryCodePath . $path);
		} else {
			if (isset($entry->id)) {
				$path = str_replace(['{countryCode}/', '{id}'], ['', $entry->id], config('routes.searchPostsByUserId'));
				$url = url($countryCodePath . $path);
			} else {
				$url = '#';
			}
		}
		
		return $url;
	}
	
	/**
	 * @param string $tag
	 * @param string|null $countryCode
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function tag(string $tag, string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		$path = str_replace(['{countryCode}/', '{tag}'], ['', $tag], config('routes.searchPostsByTag'));
		$url = url($countryCodePath . $path);
		
		return $url;
	}
	
	/**
	 * @param string|null $countryCode
	 * @param int|null $companyId
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function company(string $countryCode = null, int $companyId = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		if (!empty($companyId)) {
			$path = str_replace(['{countryCode}/', '{id}'], ['', $companyId], config('routes.searchPostsByCompanyId'));
			$url = url($countryCodePath . $path);
		} else {
			$url = url($countryCodePath . config('routes.companies'));
		}
		
		return $url;
	}
	
	/**
	 * @param array $queryArr
	 * @param array $exceptArr
	 * @param bool $currentUrl
	 * @param string|null $countryCode
	 * @return string
	 */
	public static function search(array $queryArr = [], array $exceptArr = [], bool $currentUrl = false, string $countryCode = null): string
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		if ($currentUrl) {
			$url = request()->url();
		} else {
			$path = str_replace(['{countryCode}/'], [''], config('routes.search'));
			$url = $countryCodePath . $path;
		}
		
		$queryArr = array_merge(request()->except($exceptArr + array_keys($queryArr)), $queryArr);
		
		return qsUrl($url, $queryArr, null, false);
	}
	
	/**
	 * @param $entry
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function page($entry)
	{
		if (is_array($entry)) {
			$entry = Arr::toObject($entry);
		}
		
		if (isset($entry->slug)) {
			$path = str_replace(['{slug}'], [$entry->slug], config('routes.pageBySlug'));
			$url = url($path);
		} else {
			$url = '#';
		}
		
		return $url;
	}
	
	/**
	 * @param string|null $countryCode
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
	 */
	public static function sitemap(string $countryCode = null)
	{
		if (empty($countryCode)) {
			$countryCode = config('country.code');
		}
		
		$countryCodePath = '';
		if (config('settings.seo.multi_countries_urls')) {
			if (!empty($countryCode)) {
				$countryCodePath = strtolower($countryCode) . '/';
			}
		}
		
		$path = str_replace(['{countryCode}/'], [''], config('routes.sitemap'));
		$url = url($countryCodePath . $path);
		
		return $url;
	}
	
	public static function countries()
	{
		$url = url(config('routes.countries'));
		
		if (doesCountriesPageCanBeLinkedToTheHomepage()) {
			$crawler = new CrawlerDetect();
			if ($crawler->isCrawler()) {
				$url = rtrim(env('APP_URL'), '/') . '/';
			} else {
				$url = rtrim(env('APP_URL'), '/') . '/lang/' . config('app.locale');
			}
		}
		
		return $url;
	}
	
	public static function contact()
	{
		return url(config('routes.contact'));
	}
	
	public static function pricing()
	{
		return url(config('routes.pricing'));
	}
	
	public static function loginPath()
	{
		return config('routes.login');
	}
	
	public static function logoutPath()
	{
		return config('routes.logout');
	}
	
	public static function registerPath()
	{
		return config('routes.register');
	}
	
	public static function login()
	{
		return url(self::loginPath());
	}
	
	public static function logout()
	{
		return url(self::logoutPath());
	}
	
	public static function register()
	{
		return url(self::registerPath());
	}
}
