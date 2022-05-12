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

namespace App\Http\Controllers\Web\Search\Traits;

use App\Http\Controllers\Web\Traits\Sluggable\CategoryBySlug;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait CategoryTrait
{
	use CategoryBySlug;
	
	/**
	 * Get Category (Auto-detecting ID or Slug)
	 *
	 * @return mixed|null
	 */
	public function getCategory()
	{
		$cat = null;
		
		if (Str::contains(Route::currentRouteAction(), 'Search\CategoryController')) {
			if (!config('settings.seo.multi_countries_urls')) {
				$parentCatSlug = null;
				$catSlug = request()->segment(2);
				if (request()->segment(3)) {
					$parentCatSlug = request()->segment(2);
					$catSlug = request()->segment(3);
				}
			} else {
				$parentCatSlug = null;
				$catSlug = request()->segment(3);
				if (request()->segment(4)) {
					$parentCatSlug = request()->segment(3);
					$catSlug = request()->segment(4);
				}
			}
			
			// Get Category
			if (!empty($catSlug)) {
				$cat = $this->getCategoryBySlug($catSlug, $parentCatSlug);
				if (empty($cat)) {
					abort(404, t('category_not_found'));
				}
				
				// Translation vars (for Category URLs only)
				if (isset($cat->parent) && !empty($cat->parent)) {
					view()->share('uriPathCatSlug', $cat->parent->slug);
					view()->share('uriPathSubCatSlug', $cat->slug);
				} else {
					view()->share('uriPathCatSlug', $cat->slug);
				}
			}
		}
		
		if (Str::contains(Route::currentRouteAction(), 'Search\SearchController')) {
			$catId = 0;
			if (request()->filled('c')) {
				$catId = request()->get('c');
				if (request()->filled('sc')) {
					$catId = request()->get('sc');
				}
			}
			
			// Get Category
			if ($catId != 0) {
				$cat = $this->getCategoryById($catId);
				if (empty($cat)) {
					abort(404, t('category_not_found'));
				}
			}
		}
		
		$this->bindCatVariables($cat);
		
		return $cat;
	}
	
	/**
	 * Get Category's Subcategories
	 *
	 * @param null $popCatId
	 * @return mixed
	 * @throws \Exception
	 */
	public function getCategories($popCatId = null)
	{
		$popCatId = !empty($popCatId) ? $popCatId : 0;
		
		$cacheId = 'cat.' . $popCatId . '.categories.' . config('app.locale');
		$cats = cache()->remember($cacheId, $this->cacheExpiration, function () use ($popCatId) {
			$cats = Category::with(['parent', 'children']);
			if (empty($popCatId)) {
				$cats->where(function ($query) {
					$query->where('parent_id', 0)->orWhereNull('parent_id');
				});
			} else {
				$cats->where('parent_id', $popCatId);
			}
			$cats = $cats->orderBy('lft')->get();
			
			return $cats;
		});
		
		if ($cats->count() > 0) {
			$cats = $cats->keyBy('id');
		}
		
		return $cats;
	}
	
	/**
	 * Get Root Categories
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function getRootCategories()
	{
		$cacheId = 'cat.0.categories.' . config('app.locale');
		$cats = cache()->remember($cacheId, $this->cacheExpiration, function () {
			return Category::where(function ($query) {
				$query->where('parent_id', 0)->orWhereNull('parent_id');
			})->orderBy('lft')->get();
		});
		
		if ($cats->count() > 0) {
			$cats = $cats->keyBy('id');
		}
		
		return $cats;
	}
	
	/**
	 * @param $cat
	 */
	private function bindCatVariables($cat)
	{
		if (empty($cat)) {
			return;
		}
		
		$this->isCatSearch = true;
		view()->share('isCatSearch', $this->isCatSearch);
		
		// Check SubCategory Request
		if (isset($cat->parent) && !empty($cat->parent)) {
			$this->isSubCatSearch = true;
			view()->share('isSubCatSearch', $this->isSubCatSearch);
		}
		
		$this->cat = $cat;
		view()->share('cat', $this->cat);
	}
}
