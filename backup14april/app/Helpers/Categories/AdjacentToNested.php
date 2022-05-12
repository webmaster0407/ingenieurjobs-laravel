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

namespace App\Helpers\Categories;

use App\Helpers\Arr;
use App\Helpers\Categories\Traits\DepthTrait;
use App\Helpers\Categories\Traits\IndexesTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/*
 * Convert Adjacent List model to Nested Set model
 * NOTE: The Adjacent List model root entries' parent_id column need to be set as 'null' (instead of 0).
 */
class AdjacentToNested
{
	use DepthTrait, IndexesTrait;
	
	public $adjacentTable = 'adjacent';
	public $nestedTable = 'nested';
	public $colPrimaryKey = 'id';
	public $colParentId = 'parent_id';
	
	public $ordered = false;
	
	private $iCount;
	private $adjacentItemsIdsArray;
	
	/**
	 * AdjacentToNestedMultiLang constructor.
	 *
	 * @param array $params
	 */
	public function __construct(array $params = [])
	{
		if (isset($params['adjacentTable']) && !empty($params['adjacentTable'])) {
			$this->adjacentTable = $params['adjacentTable'];
		}
		if (isset($params['nestedTable']) && !empty($params['nestedTable'])) {
			$this->nestedTable = $params['nestedTable'];
		}
		if (isset($params['colPrimaryKey']) && !empty($params['colPrimaryKey'])) {
			$this->colPrimaryKey = $params['colPrimaryKey'];
		}
		if (isset($params['colParentId']) && !empty($params['colParentId'])) {
			$this->colParentId = $params['colParentId'];
		}
	}
	
	/**
	 * Get & Set the adjacent table items IDs
	 *
	 * @return array
	 */
	public function getAndSetAdjacentItemsIds(): array
	{
		$this->checkTablesAndColumns();
		
		// Get all the adjacent items
		$adjacentItems = DB::table($this->adjacentTable);
		if ($this->ordered) {
			$adjacentItems = $adjacentItems->orderBy('lft');
		}
		
		$tab = [];
		if ($adjacentItems->count() > 0) {
			$adjacentItems = $adjacentItems->get();
			foreach ($adjacentItems as $item) {
				if (!Schema::hasColumn($this->adjacentTable, $this->colParentId)){
					continue;
				}
				
				$parentId = $item->{$this->colParentId};
				$childId = $item->id;
				
				if ($parentId == 0) {
					$parentId = null;
				}
				
				if (!array_key_exists($parentId, $tab)) {
					$tab[$parentId] = [];
				}
				
				$tab[$parentId][] = $childId;
			}
		}
		
		$this->setAdjacentItemsIds($tab);
		
		return $tab;
	}
	
	/**
	 * @param $adjacentItemsIdsArray
	 * @return void
	 */
	public function setAdjacentItemsIds($adjacentItemsIdsArray)
	{
		if (!is_array($adjacentItemsIdsArray)) {
			$msg = "First parameter should be an array. Instead, it was type '" . gettype($adjacentItemsIdsArray) . "'";
			dd($msg);
		}
		
		$this->iCount = 1;
		if (is_array($adjacentItemsIdsArray) && !empty($adjacentItemsIdsArray)) {
			$this->adjacentItemsIdsArray = $adjacentItemsIdsArray;
		}
	}
	
	/**
	 * Convert the adjacent items to nested set model into the nested table
	 *
	 * @param $parentId
	 */
	public function convertChildrenRecursively($parentId)
	{
		if ($parentId == 0) {
			$parentId = null;
		}
		
		$iLft = $this->iCount;
		$this->iCount++;
		
		$children = $this->getChildren($parentId);
		if (!empty($children)) {
			foreach ($children as $childId) {
				$this->convertChildrenRecursively($childId);
			}
		}
		
		$iRgt = $this->iCount;
		$this->iCount++;
		
		// Convert!
		$this->updateItem($iLft, $iRgt, $parentId);
	}
	
	/**
	 * @param $currentId
	 * @return mixed
	 */
	private function getChildren($currentId)
	{
		if (!is_array($this->adjacentItemsIdsArray) || !isset($this->adjacentItemsIdsArray[$currentId])) {
			return [];
		}
		
		return $this->adjacentItemsIdsArray[$currentId];
	}
	
	/**
	 * @param $iLft
	 * @param $iRgt
	 * @param $currentId
	 * @return bool
	 */
	private function updateItem($iLft, $iRgt, $currentId): bool
	{
		$this->checkTablesAndColumns();
		
		// Get the adjacent Item
		$adjacentItem = DB::table($this->adjacentTable)->find($currentId);
		if (empty($adjacentItem)) {
			return false;
		}
		
		$adjacentItem = Arr::fromObject($adjacentItem);
		
		// Check the nested table structure & data
		if ($this->adjacentTable == $this->nestedTable) {
			if (!array_key_exists('lft', $adjacentItem) || !array_key_exists('rgt', $adjacentItem)) {
				return false;
			}
			
			$nestedItem = $adjacentItem;
		} else {
			// Get the nested Item (If exists)
			$nestedItem = DB::table($this->nestedTable)->find($currentId);
		}
		
		// Update or Insert
		if (!empty($nestedItem)) {
			// Update the adjacentItem's 'lft' & 'rgt' values
			$newArray = [
				'lft' => $iLft,
				'rgt' => $iRgt,
			];
			
			// Required column
			if (array_key_exists('type', $adjacentItem)) {
				if (empty($adjacentItem['type'])) {
					$newArray['type'] = 'classified';
				}
			}
			
			// Update the Item
			$affected = DB::table($this->nestedTable)
				->where('id', $currentId)
				->update($newArray);
		} else {
			// Update the adjacentItem's 'lft' & 'rgt' values
			$adjacentItem['lft'] = $iLft;
			$adjacentItem['rgt'] = $iRgt;
			if (array_key_exists('type', $adjacentItem)) {
				if (empty($adjacentItem['type'])) {
					$adjacentItem['type'] = 'classified';
				}
			}
			
			// Remove the primary key from the adjacentItem's array
			if (isset($adjacentItem[$this->colPrimaryKey])) {
				unset($adjacentItem[$this->colPrimaryKey]);
			}
			
			// Insert the Item
			DB::table($this->nestedTable)->insert($adjacentItem);
		}
		
		return true;
	}
	
	/**
	 * Check the Tables and the Columns
	 */
	private function checkTablesAndColumns()
	{
		$errTable = 'The table "%s" does not exist in the database.';
		$errColumn = 'The column "%s" does not exist in the table "%s".';
		
		// Check the adjacent table
		if (!Schema::hasTable($this->adjacentTable)) {
			dd(sprintf($errTable, $this->adjacentTable));
		}
		if (!Schema::hasColumn($this->adjacentTable, $this->colPrimaryKey)) {
			dd(sprintf($errColumn, $this->colPrimaryKey, $this->adjacentTable));
		}
		if (!Schema::hasColumn($this->adjacentTable, $this->colParentId)) {
			dd(sprintf($errColumn, $this->colParentId, $this->adjacentTable));
		}
		
		// Check the nested table
		if (!Schema::hasTable($this->nestedTable)) {
			dd(sprintf($errTable, $this->nestedTable));
		}
		if (!Schema::hasColumn($this->nestedTable, $this->colPrimaryKey)) {
			dd(sprintf($errColumn, $this->colPrimaryKey, $this->nestedTable));
		}
		if (!Schema::hasColumn($this->nestedTable, 'lft')) {
			dd(sprintf($errColumn, 'lft', $this->nestedTable));
		}
		if (!Schema::hasColumn($this->nestedTable, 'rgt')) {
			dd(sprintf($errColumn, 'rgt', $this->nestedTable));
		}
	}
}
