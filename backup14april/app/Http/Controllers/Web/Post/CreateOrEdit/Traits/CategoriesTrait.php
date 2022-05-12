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

namespace App\Http\Controllers\Web\Post\CreateOrEdit\Traits;

use App\Models\Category;
use App\Models\HomeSection;
use App\Models\Scopes\ActiveScope;

trait CategoriesTrait
{
	/**
	 * @param int|string|null $catId
	 * @return array
	 */
	protected function categories($catId = null): array
	{
		$countryCode = config('country.code');
		
		// Get the homepage's getCategories section
		try {
			$cacheId = $countryCode . '.selectBox.getCategories';
			$section = cache()->remember($cacheId, $this->cacheExpiration, function () use ($countryCode) {
				// Check if the Domain Mapping plugin is available
				if (config('plugins.domainmapping.installed')) {
					try {
						$section = \extras\plugins\domainmapping\app\Models\DomainHomeSection::withoutGlobalScopes([ActiveScope::class])
							->where('country_code', $countryCode)
							->where('method', 'getCategories')
							->orderBy('lft')
							->first();
					} catch (\Throwable $e) {
					}
				}
				
				// Get the entry from the core
				if (empty($section)) {
					$section = HomeSection::withoutGlobalScopes([ActiveScope::class])->where('method', 'getCategories')->orderBy('lft')->first();
				}
				
				return $section;
			});
		} catch (\Throwable $e) {
			$section = null;
		}
		
		// Get the catId subcategories
		$catsAndSubCats = $this->getCategoriesAndTheirChildren($section->value ?? [], $catId);
		
		// Get the category info
		try {
			$cacheId = 'category.find.' . $catId;
			$category = cache()->remember($cacheId, $this->cacheExpiration, function () use ($catId) {
				return Category::find($catId);
			});
		} catch (\Throwable $e) {
			$category = null;
		}
		
		$hasChildren = (
			empty($catId)
			|| (
				!empty($category)
				&& isset($category->children)
				&& $category->children->count() > 0
			)
		);
		
		return [
			'categoriesOptions' => $section->value ?? [],
			'category'          => $category,
			'hasChildren'       => $hasChildren,
			'categories'        => $catsAndSubCats['categories'] ?? collect(), // Children
			'subCategories'     => $catsAndSubCats['subCategories'] ?? collect(), // Children of children
		];
	}
	
	/**
	 * Get list of categories (and their children, related to type of display)
	 * Apply the homepage categories section settings
	 *
	 * @param mixed $value
	 * @param int|string|null $catId
	 * @return array
	 */
	protected function getCategoriesAndTheirChildren($value = [], $catId = null): array
	{
		if (!is_array($value)) {
			return [];
		}
		
		// Number of columns
		$numberOfCols = 3;
		
		// Get the Default Cache delay expiration
		$cacheExpiration = $this->getCacheExpirationTime($value);
		
		$categories = collect();
		$subCategories = collect();
		
		try {
			$cacheId = 'selectBox.categories.parents.' . (int)$catId . '.' . config('app.locale');
			
			if (
				isset($value['cat_display_type'])
				&& in_array($value['cat_display_type'], ['cc_normal_list', 'cc_normal_list_s'])
			) {
				
				$tmpCats = cache()->remember($cacheId, $cacheExpiration, function () {
					return Category::orderBy('lft')->get();
				});
				
				if ($tmpCats->count() > 0) {
					$tmpCats = collect($tmpCats)->keyBy('id');
					$tmpCats = $tmpSubCats = $tmpCats->groupBy('parent_id');
					
					if ($tmpCats->has($catId)) {
						$categories = $tmpCats->get($catId);
						$subCategories = $tmpSubCats->forget($catId);
						
						$maxRowsPerCol = round($categories->count() / $numberOfCols, 0, PHP_ROUND_HALF_EVEN);
						$maxRowsPerCol = ($maxRowsPerCol > 0) ? $maxRowsPerCol : 1;
						
						$categories = $categories->chunk($maxRowsPerCol);
					}
				}
				
			} else {
				
				$tmpCats = cache()->remember($cacheId, $cacheExpiration, function () use ($catId) {
					return Category::where('parent_id', $catId)->orderBy('lft')->get();
				});
				
				if ($tmpCats->count() > 0) {
					if (
						isset($value['cat_display_type'])
						&& in_array($value['cat_display_type'], ['c_picture_list', 'c_bigIcon_list'])
					) {
						$categories = collect($tmpCats)->keyBy('id');
					} else {
						$maxRowsPerCol = ceil($tmpCats->count() / $numberOfCols);
						$maxRowsPerCol = ($maxRowsPerCol > 0) ? $maxRowsPerCol : 1; // Fix array_chunk with 0
						
						$categories = $tmpCats->chunk($maxRowsPerCol);
					}
				}
				
			}
		} catch (\Throwable $e) {
		}
		
		return [
			'categories'    => $categories,
			'subCategories' => $subCategories,
		];
	}
	
	/**
	 * @param mixed $value
	 * @return int
	 */
	private function getCacheExpirationTime($value = []): int
	{
		// Get the default Cache Expiration Time
		$cacheExpiration = 0;
		if (is_array($value) && isset($value['cache_expiration'])) {
			$cacheExpiration = (int)$value['cache_expiration'];
		}
		
		return $cacheExpiration;
	}
}
