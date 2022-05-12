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

namespace App\Helpers\Search\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait OrderBy
{
	protected function applyOrderBy()
	{
		if (!(isset($this->posts) && isset($this->postsTable) && isset($this->orderBy))) {
			return;
		}
		
		// Request Parameters
		// 'queryStringKey' => ['name' => 'column', 'order' => 'direction']
		$orderByParametersFields = [
			'salaryAsc'  => ['name' => $this->postsTable . '.salary_max', 'order' => 'ASC'],
			'salaryDesc' => ['name' => $this->postsTable . '.salary_max', 'order' => 'DESC'],
			'date'      => ['name' => $this->postsTable . '.created_at', 'order' => 'DESC'],
			// Check out the LocationFilter
			// 'distance' => [],
			// Check out the PaymentRelation
			// 'premium'   => ['name' => 'tPackage.lft', 'order' => 'DESC'],
		];
		$this->orderByParametersFields = array_merge((array)$this->orderByParametersFields, $orderByParametersFields);
		
		// Apply the 'created_at' column for orderBy
		// Check if the 'created_at' column is already apply for orderBy
		$orderByCreatedAtFound = false;
		if (is_array($this->orderBy) && count($this->orderBy) > 0) {
			$orderByCreatedAtFound = collect($this->orderBy)->contains(function ($value, $key) {
				return Str::contains($value, 'created_at');
			});
		}
		if (!$orderByCreatedAtFound) {
			$this->orderBy[] = $this->postsTable . '.created_at DESC';
		}
		
		// Apply the requested Order
		$requestedOrder = $this->getRequestedOrder();
		if (!empty($requestedOrder)) {
			if (!in_array($requestedOrder, $this->orderBy)) {
				$this->orderBy[] = $requestedOrder;
			}
		}
		
		// Set the orderBy priorities
		$this->orderBy = $this->getOrderByPriorities($requestedOrder);
		
		// Get valid columns name
		$this->orderBy = collect($this->orderBy)->map(function ($value, $key) {
			if (Str::contains($value, '.')) {
				$value = DB::getTablePrefix() . $value;
			}
			
			return $value;
		})->toArray();
		
		// Set ORDER BY
		$orderBy = '';
		if (is_array($this->orderBy) && count($this->orderBy) > 0) {
			foreach ($this->orderBy as $key => $value) {
				if (trim($value) == '') {
					continue;
				}
				
				if ($orderBy == '') {
					$orderBy .= $value;
				} else {
					$orderBy .= ', ' . $value;
				}
			}
		}
		
		if (!empty($orderBy)) {
			$this->posts->orderByRaw($orderBy);
		}
	}
	
	/**
	 * Get the requested Order
	 *
	 * @return string|null
	 */
	public function getRequestedOrder()
	{
		if (!isset($this->orderBy)) {
			return null;
		}
		
		$field = null;
		if (request()->filled('orderBy')) {
			$field = request()->get('orderBy');
		}
		
		if (!isset($this->orderByParametersFields[$field])) {
			return null;
		}
		
		$requestedOrder = $this->orderByParametersFields[$field]['name'] . ' ' . $this->orderByParametersFields[$field]['order'];
		
		return $requestedOrder;
	}
	
	/**
	 * Set the orderBy priorities
	 *
	 * @param $requestedOrder
	 * @return array
	 */
	private function getOrderByPriorities($requestedOrder)
	{
		// Default Priorities
		$orderByPriorities = [
			'lft'                     => 90,
			config('distance.rename') => 89,
			'created_at'              => 88,
		];
		
		if (config('settings.list.cities_extended_searches')) {
			if (isset($this->city) && !empty($this->city)) {
				if (request()->filled('distance')) {
					$orderByPriorities[config('distance.rename')] = 91;
				}
			}
		}
		
		$orderBy = [];
		
		if (!empty($requestedOrder)) {
			$orderBy[99] = $requestedOrder;
		}
		
		if (is_array($this->orderBy) && count($this->orderBy) > 0) {
			foreach ($this->orderBy as $key => $statement) {
				foreach ($orderByPriorities as $orderKeyword => $priority) {
					if (Str::contains($statement, $orderKeyword)) {
						if (!in_array($statement, $orderBy)) {
							$orderBy[$priority] = $statement;
						}
					}
				}
				if (!in_array($statement, $orderBy)) {
					$orderBy[$key] = $statement;
				}
			}
			
			ksort($orderBy);
			$orderBy = array_reverse($orderBy, true);
		}
		
		return $orderBy;
	}
}
