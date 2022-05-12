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

namespace App\Http\Controllers\Api\Post\Search;

use App\Http\Controllers\Api\Category\CategoryBySlug;

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
		
		// Get the Category's right arguments
		$catParentId = null;
		$catId = null;
		if (request()->filled('c')) {
			$catId = request()->get('c');
			if (request()->filled('sc')) {
				$catParentId = $catId;
				$catId = request()->get('sc');
			}
		}
		
		// Get the Category
		if (!empty($catId)) {
			if (is_numeric($catId)) {
				$cat = $this->getCategoryById($catId);
			} else {
				if (empty($catParentId) || (!empty($catParentId) && !is_numeric($catParentId))) {
					$cat = $this->getCategoryBySlug($catId, $catParentId);
				}
			}
			
			if (empty($cat)) {
				abort(404, t('category_not_found'));
			}
		}
		
		return $cat;
	}
}
