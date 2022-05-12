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

namespace App\Http\Controllers\Api\HomeSection;

use App\Helpers\Arr;
use App\Helpers\UrlGen;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\SubAdmin1;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

trait SectionDataTrait
{
	/**
	 * Get search form (Always in Top)
	 *
	 * @param array $value
	 * @return array
	 */
	protected function getSearchForm($value = [])
	{
		$data = [];
		
		return $data;
	}
	
	/**
	 * Get locations & SVG map
	 *
	 * @param array $value
	 * @return array
	 */
	protected function getLocations($value = [])
	{
		$data = [];
		
		// Get the default Max. Items
		$maxItems = 14;
		if (isset($value['max_items'])) {
			$maxItems = (int)$value['max_items'];
		}
		
		// Get the Default Cache delay expiration
		$cacheExpiration = $this->getCacheExpirationTime($value);
		
		// Modal - States Collection
		$cacheId = config('country.code') . '.home.getLocations.modalAdmins';
		$modalAdmins = Cache::remember($cacheId, $cacheExpiration, function () {
			$modalAdmins = SubAdmin1::currentCountry()->orderBy('name')->get(['code', 'name'])->keyBy('code');
			
			return $modalAdmins;
		});
		$data['modalAdmins'] = $modalAdmins;
		
		// Get cities
		if (config('settings.list.count_cities_listings')) {
			$cacheId = config('country.code') . 'home.getLocations.cities.withCountPosts';
			$cities = Cache::remember($cacheId, $cacheExpiration, function () use ($maxItems) {
				$cities = City::currentCountry()->withCount('posts')->take($maxItems)->orderByDesc('population')->orderBy('name')->get();
				
				return $cities;
			});
		} else {
			$cacheId = config('country.code') . 'home.getLocations.cities';
			$cities = Cache::remember($cacheId, $cacheExpiration, function () use ($maxItems) {
				$cities = City::currentCountry()->take($maxItems)->orderByDesc('population')->orderBy('name')->get();
				
				return $cities;
			});
		}
		$cities = collect($cities)->push(Arr::toObject([
			'id'             => 0,
			'name'           => t('More cities') . ' &raquo;',
			'subadmin1_code' => 0,
		]));
		
		// Get cities number of columns
		$numberOfCols = 4;
		if (file_exists(config('larapen.core.maps.path') . strtolower(config('country.code')) . '.svg')) {
			if (isset($value['show_map']) && $value['show_map'] == '1') {
				$numberOfCols = (isset($value['items_cols']) && !empty($value['items_cols'])) ? (int)$value['items_cols'] : 3;
			}
		}
		
		// Chunk
		$maxRowsPerCol = round($cities->count() / $numberOfCols, 0); // PHP_ROUND_HALF_EVEN
		$maxRowsPerCol = ($maxRowsPerCol > 0) ? $maxRowsPerCol : 1;  // Fix array_chunk with 0
		$cities = $cities->chunk($maxRowsPerCol);
		
		$data['cities'] = $cities;
		
		return $data;
	}
	
	/**
	 * Get sponsored posts
	 *
	 * @param array $value
	 * @return array
	 */
	protected function getSponsoredPosts($value = [])
	{
		$data = [];
		
		$type = 'sponsored';
		
		// Get the default Max. Items
		$maxItems = 20;
		if (isset($value['max_items'])) {
			$maxItems = (int)$value['max_items'];
		}
		
		// Get the default orderBy value
		$orderBy = 'random';
		if (isset($value['order_by'])) {
			$orderBy = $value['order_by'];
		}
		
		// Get the default Cache delay expiration
		$cacheExpiration = $this->getCacheExpirationTime($value);
		
		// Get featured posts
		$cacheId = config('country.code') . '.home.getPosts.' . $type;
		$posts = Cache::remember($cacheId, $cacheExpiration, function () use ($maxItems, $type, $orderBy) {
			$posts = Post::getLatestOrSponsored($maxItems, $type, $orderBy);
			
			return $posts;
		});
		
		$sponsored = null;
		if ($posts->count() > 0) {
			$sponsored = [
				'title' => t('Home - Sponsored Ads'),
				'link'  => UrlGen::search(),
				'posts' => $posts,
			];
			$sponsored = Arr::toObject($sponsored);
		}
		
		$data['featured'] = $sponsored;
		
		return $data;
	}
	
	/**
	 * Get latest posts
	 *
	 * @param array $value
	 * @return array
	 */
	protected function getLatestPosts($value = [])
	{
		$data = [];
		
		$type = 'latest';
		
		// Get the default Max. Items
		$maxItems = 12;
		if (isset($value['max_items'])) {
			$maxItems = (int)$value['max_items'];
		}
		
		// Get the default orderBy value
		$orderBy = 'date';
		if (isset($value['order_by'])) {
			$orderBy = $value['order_by'];
		}
		
		// Get the Default Cache delay expiration
		$cacheExpiration = $this->getCacheExpirationTime($value);
		
		// Get latest posts
		$cacheId = config('country.code') . '.home.getPosts.' . $type;
		$posts = Cache::remember($cacheId, $cacheExpiration, function () use ($maxItems, $type, $orderBy) {
			$posts = Post::getLatestOrSponsored($maxItems, $type, $orderBy);
			
			return $posts;
		});
		
		$latest = null;
		if (!empty($posts)) {
			$latest = [
				'title' => t('Home - Latest Ads'),
				'link'  => UrlGen::search(),
				'posts' => $posts,
			];
			$latest = Arr::toObject($latest);
		}
		
		$data['latest'] = $latest;
		
		return $data;
	}
	
	/**
	 * Get list of categories
	 *
	 * @param array $value
	 * @return array
	 */
	protected function getCategories($value = [])
	{
		$data = [];
		
		// Get the default Max. Items
		$maxItems = null;
		if (isset($value['max_items'])) {
			$maxItems = (int)$value['max_items'];
		}
		
		// Number of columns
		$numberOfCols = 3;
		
		// Get the Default Cache delay expiration
		$cacheExpiration = $this->getCacheExpirationTime($value);
		
		$cacheId = 'categories.parents.' . config('app.locale') . '.take.' . $maxItems;
		
		if (isset($value['cat_display_type']) && in_array($value['cat_display_type'], ['cc_normal_list', 'cc_normal_list_s'])) {
			
			$categories = Cache::remember($cacheId, $cacheExpiration, function () {
				$categories = Category::query()->orderBy('lft')->get();
				
				return $categories;
			});
			$categories = collect($categories)->keyBy('id');
			$categories = $subCategories = $categories->groupBy('parent_id');
			
			if ($categories->has(null)) {
				if (!empty($maxItems)) {
					$categories = $categories->get(null)->take($maxItems);
				} else {
					$categories = $categories->get(null);
				}
				$subCategories = $subCategories->forget(null);
				
				$maxRowsPerCol = round($categories->count() / $numberOfCols, 0, PHP_ROUND_HALF_EVEN);
				$maxRowsPerCol = ($maxRowsPerCol > 0) ? $maxRowsPerCol : 1;
				$categories = $categories->chunk($maxRowsPerCol);
			} else {
				$categories = collect();
				$subCategories = collect();
			}
			
			$data['categories'] = $categories;
			$data['subCategories'] = $subCategories;
			
		} else {
			
			$categories = Cache::remember($cacheId, $cacheExpiration, function () use ($maxItems) {
				if (!empty($maxItems)) {
					$categories = Category::query()->where(function ($query) {
						$query->where('parent_id', 0)->orWhereNull('parent_id');
					})->take($maxItems)->orderBy('lft')->get();
				} else {
					$categories = Category::query()->where(function ($query) {
						$query->where('parent_id', 0)->orWhereNull('parent_id');
					})->orderBy('lft')->get();
				}
				
				return $categories;
			});
			
			if (isset($value['cat_display_type']) && in_array($value['cat_display_type'], ['c_picture_list', 'c_bigIcon_list'])) {
				$categories = collect($categories)->keyBy('id');
			} else {
				// $maxRowsPerCol = round($categories->count() / $numberOfCols, 0); // PHP_ROUND_HALF_EVEN
				$maxRowsPerCol = ceil($categories->count() / $numberOfCols);
				$maxRowsPerCol = ($maxRowsPerCol > 0) ? $maxRowsPerCol : 1; // Fix array_chunk with 0
				$categories = $categories->chunk($maxRowsPerCol);
			}
			
			$data['categories'] = $categories;
			
		}
		
		// Count Posts by category (if the option is enabled)
		$countPostsByCat = collect();
		if (config('settings.list.count_categories_listings')) {
			$cacheId = config('country.code') . '.count.posts.by.cat.' . config('app.locale');
			$countPostsByCat = Cache::remember($cacheId, $cacheExpiration, function () {
				$countPostsByCat = Category::countPostsByCategory();
				
				return $countPostsByCat;
			});
		}
		
		$data['countPostsByCat'] = $countPostsByCat;
		
		return $data;
	}
	
	/**
	 * Get mini stats data
	 *
	 * @param array $value
	 * @return array
	 */
	protected function getStats($value = [])
	{
		$data = [];
		
		// Count Posts
		$countPosts = $value['custom_counts_posts'] ?? 0;
		if (empty($countPosts)) {
			$countPosts = Post::currentCountry()->unarchived()->count();
		}
		
		// Count Users
		$countUsers = $value['custom_counts_users'] ?? 0;
		if (empty($countUsers)) {
			$countUsers = User::query()->count();
		}
		
		// Count Locations (Cities)
		$countLocations = $value['custom_counts_locations'] ?? 0;
		if (empty($countLocations)) {
			$countLocations = City::currentCountry()->count();
		}
		
		$data['countPosts'] = $countPosts;
		$data['countUsers'] = $countUsers;
		$data['countLocations'] = $countLocations;
		
		return $data;
	}
	
	/**
	 * @param array $value
	 * @return array
	 */
	protected function getTopAdvertising($value = [])
	{
		$data = [];
		
		$cacheId = 'advertising.top';
		$topAdvertising = Cache::remember($cacheId, $this->cacheExpiration, function () {
			$topAdvertising = Advertising::query()
				->where('integration', 'unitSlot')
				->where('slug', 'top')
				->first();
			
			return $topAdvertising;
		});
		
		$data['topAdvertising'] = $topAdvertising;
		
		return $data;
	}
	
	/**
	 * @param array $value
	 * @return array
	 */
	protected function getBottomAdvertising($value = [])
	{
		$data = [];
		
		$cacheId = 'advertising.bottom';
		$bottomAdvertising = Cache::remember($cacheId, $this->cacheExpiration, function () {
			$bottomAdvertising = Advertising::query()
				->where('integration', 'unitSlot')
				->where('slug', 'bottom')
				->first();
			
			return $bottomAdvertising;
		});
		
		$data['bottomAdvertising'] = $bottomAdvertising;
		
		return $data;
	}
	
	/**
	 * @param array $value
	 * @return int
	 */
	private function getCacheExpirationTime($value = [])
	{
		// Get the default Cache Expiration Time
		$cacheExpiration = 0;
		if (isset($value['cache_expiration'])) {
			$cacheExpiration = (int)$value['cache_expiration'];
		}
		
		return $cacheExpiration;
	}
}
