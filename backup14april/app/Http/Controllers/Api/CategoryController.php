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

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Category\CategoryBySlug;
use App\Models\Category;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\CategoryResource;

/**
 * @group Categories
 */
class CategoryController extends BaseController
{
	use CategoryBySlug;
	
	/**
	 * List categories
	 *
	 * @queryParam parentId int The ID of the parent category of the sub categories to retrieve. Example: 0
	 * @queryParam embed string The Comma-separated list of the category relationships for Eager Loading - Possible values: parent,children. Example: null
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: lft. Example: -lft
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$categories = Category::query();
		
		if (request()->filled('parentId') && request()->get('parentId') != 0) {
			$categories->where('parent_id', request()->get('parentId'));
		} else {
			$categories->where(function ($query) {
				$query->where('parent_id', 0)->orWhereNull('parent_id');
			});
		}
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('parent', $embed)) {
			$categories->with('parent');
		} else {
			$categories->with('parentClosure');
		}
		if (in_array('children', $embed)) {
			$categories->with('children');
		}
		
		// Sorting
		$categories = $this->applySorting($categories, ['lft']);
		
		$categories = $categories->paginate($this->perPage);
		
		/*
		if ($categories->count() > 0) {
			$categories = $categories->keyBy('id');
		}
		*/
		
		$resourceCollection = new EntityCollection(class_basename($this), $categories);
		
		return $this->respondWithCollection($resourceCollection);
	}
	
	/**
	 * Get category
	 *
	 * Get category by its unique slug or ID.
	 *
	 * @queryParam parentCatSlug string The slug of the parent category to retrieve used when category's slug provided instead of ID. Example: engineering
	 *
	 * @urlParam slugOrId string required The slug or ID of the category. Example: 1
	 *
	 * @param $slugOrId
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($slugOrId)
	{
		if (is_numeric($slugOrId)) {
			$category = $this->getCategoryById($slugOrId);
		} else {
			$parentCatSlug = request()->get('parentCatSlug') ?? null;
			$category = $this->getCategoryBySlug($slugOrId, $parentCatSlug);
		}
		
		$resource = new CategoryResource($category);
		
		return $this->respondWithResource($resource);
	}
}
