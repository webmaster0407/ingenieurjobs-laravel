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

namespace App\Observers\Traits;

use App\Helpers\Categories\AdjacentToNested;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait CategoryTrait
{
	/**
	 * Adding new nested nodes
	 *
	 * @param $category
	 * @return mixed
	 */
	protected function creatingNestedItem($category)
	{
		// Find new left position & new depth
		$newLft = 0;
		$newDepth = 0;
		if (isset($category->parent_id) && !empty($category->parent_id)) {
			// Node (will) have a parent
			$parent = Category::find($category->parent_id);
			
			if (!empty($parent)) {
				$newLft = $parent->lft; // <- Parent does not has children
				$newDepth = $parent->depth + 1;
				
				$lastChild = Category::where('parent_id', $parent->id)
					->where('id', '!=', $category->id)
					->orderByDesc('rgt')
					->first();
				
				if (!empty($lastChild)) {
					$newLft = $lastChild->rgt; // <- Parent has children
				}
			}
		} else {
			// Node (will) not have a parent
			$latest = Category::orderByDesc('rgt')->first();
			
			if (!empty($latest)) {
				$newLft = $latest->rgt;
			}
		}
		
		$tableName = (new Category())->getTable();
		
		// Create new space for subtree
		$affected = DB::table($tableName)->where('rgt', '>', $newLft)->update(['rgt' => DB::raw('rgt + 2')]);
		$affected = DB::table($tableName)->where('lft', '>', $newLft)->update(['lft' => DB::raw('lft + 2')]);
		
		// Update the lft, rgt & the depth columns for the new node
		$category->lft = $newLft + 1;
		$category->rgt = $newLft + 2;
		$category->depth = $newDepth;
		
		return $category;
	}
	
	/**
	 * Updating (Moving) nested nodes
	 *
	 * @param $category
	 * @return mixed
	 */
	protected function updatingNestedItem($category)
	{
		// Escape from mass update
		if ($this->isFromMassUpdate()) {
			return $category;
		}
		
		// Get the original object values
		$original = $category->getOriginal();
		
		// Check some columns
		if (
			empty($original)
			|| !array_key_exists('parent_id', $original)
			|| !array_key_exists('lft', $original)
			|| !array_key_exists('rgt', $original)
		) {
			return $category;
		}
		
		// Since this method is not run during the reorder update,
		// don't update nodes if the 'parent_id' column is not changed
		if ($original['parent_id'] == $category->parent_id) {
			return $category;
		}
		
		// Find new left & right position & new depth
		$newLft = 0;
		$newDepth = 0;
		
		if (!empty($category->parent_id)) {
			// Node (will) have a parent
			$parent = Category::find($category->parent_id);
			
			if (!empty($parent)) {
				$newLft = $parent->lft; // <- Parent does not has children
				$newDepth = $parent->depth + 1;
				
				$lastChild = Category::where('parent_id', $parent->id)
					->where('id', '!=', $category->id)
					->orderByDesc('rgt')
					->first();
				
				if (!empty($lastChild)) {
					$newLft = $lastChild->rgt; // <- Parent has children
				}
			}
		} else {
			// Node (will) not have a parent
			$latest = Category::orderByDesc('rgt')->first();
			
			if (!empty($latest)) {
				$newLft = $latest->rgt;
			}
		}
		
		// Calculate position adjustment variables
		// Get space between rgt & lft + 1
		$width = $original['rgt'] - $original['lft'] + 1;
		
		$tableName = (new Category())->getTable();
		
		// Adding an existing node to a position (Moving a node)
		$affected = DB::table($tableName)->where('lft', '>', $newLft)->update(['lft' => DB::raw('lft + ' . $width)]);
		$affected = DB::table($tableName)->where('rgt', '>', $newLft)->update(['rgt' => DB::raw('rgt + ' . $width)]);
		
		// Update the new position & the depth column of the moved node
		$category->lft = $newLft + 1;
		$category->rgt = $newLft + $width;
		$category->depth = $newDepth;
		
		return $category;
	}
	
	/**
	 * Deleting nested nodes
	 *
	 * @param $category
	 */
	protected function deletingNestedItem($category)
	{
		$tableName = (new Category())->getTable();
		
		// Get space between rgt & lft + 1
		$width = $category->rgt - $category->lft + 1;
		
		// Remove old space vacated by subtree (After deleting nodes)
		$affected = DB::table($tableName)->where('lft', '>', $category->rgt)->update(['lft' => DB::raw('lft - ' . $width)]);
		$affected = DB::table($tableName)->where('rgt', '>', $category->rgt)->update(['rgt' => DB::raw('rgt - ' . $width)]);
	}
	
	/**
	 * Delete the category's children recursively
	 *
	 * @param $category
	 */
	protected function deleteChildrenRecursively($category)
	{
		if (!empty($category) && isset($category->id)) {
			$subCats = Category::where('parent_id', $category->id)->get();
			if ($subCats->count() > 0) {
				foreach ($subCats as $subCat) {
					if (isset($subCat->children) && $subCat->children->count() > 0) {
						$this->deleteChildrenRecursively($subCat);
					}
					
					$subCat->delete();
				}
			}
		}
	}
	
	/**
	 * Convert Adjacent List to Nested Set (By giving the Item's Language)
	 * NOTE: Need to use adjacent list model to add, update or delete nodes
	 *
	 * @param $category
	 */
	protected function adjacentToNestedByItem($category)
	{
		// Escape from mass update
		if ($this->isFromMassUpdate()) {
			return;
		}
		
		$tableName = (new Category())->getTable();
		
		$params = [
			'adjacentTable' => $tableName,
			'nestedTable'   => $tableName,
		];
		
		$transformer = new AdjacentToNested($params);
		
		try {
			$transformer->getAndSetAdjacentItemsIds();
			$transformer->convertChildrenRecursively(0);
			$transformer->setNodesDepth();
		} catch (\Exception $e) {
			dd($e->getMessage());
		}
	}
	
	/**
	 * Fix required columns
	 *
	 * @param $category
	 * @return mixed
	 */
	protected function fixRequiredColumns($category)
	{
		// The 'type' column is a not nullable enum, so required
		if (isset($category->type) && empty($category->type)) {
			if (isset($category->parent) && !empty($category->parent)) {
				if (!empty($category->parent->type)) {
					$category->type = $category->parent->type;
				}
			}
			if (empty($category->type)) {
				$category->type = 'classified';
			}
		}
		
		return $category;
	}
	
	/**
	 * Escape from mass update
	 *
	 * @return bool
	 */
	private function isFromMassUpdate(): bool
	{
		// Escape from mass update. ie:
		// - CategoryController (only for reorder() & saveReorder() methods)
		// - LanguageController (all methods)
		if (
			request()->is('*/reorder')
			|| Str::contains(Route::currentRouteAction(), 'Admin\CategoryController@reorder')
			|| Str::contains(Route::currentRouteAction(), 'Admin\CategoryController@saveReorder')
			|| Str::contains(Route::currentRouteAction(), 'Admin\LanguageController')
		) {
			return true;
		}
		
		return false;
	}
}
