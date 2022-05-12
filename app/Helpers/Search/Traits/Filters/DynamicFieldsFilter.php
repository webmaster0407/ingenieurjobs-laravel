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

namespace App\Helpers\Search\Traits\Filters;

use App\Models\Post;
use Illuminate\Support\Facades\Schema;

trait DynamicFieldsFilter
{
	protected $filterParametersFields = [
		// 'getKey' => 'tableColumn',
		// ...
	];
	
	protected function applyDynamicFieldsFilters()
	{
		if (!(isset($this->posts) && isset($this->having))) {
			return;
		}
		
		$parameters = request()->all();
		if (!is_array($parameters) || empty($parameters)) {
			return;
		}
		
		foreach ($parameters as $key => $value) {
			if (!isset($this->filterParametersFields[$key])) {
				continue;
			}
			if (!is_array($value) && trim($value) == '') {
				continue;
			}
			
			$table = (new Post())->getTable();
			if (is_array($value)) {
				$tmpArr = [];
				foreach ($value as $k => $v) {
					if (is_array($v)) continue;
					if (!is_array($v) && trim($v) == '') continue;
					
					$tmpArr[$k] = $v;
				}
				if (!empty($tmpArr)) {
					if (Schema::hasColumn($table, $this->filterParametersFields[$key])) {
						$this->posts->whereIn($this->filterParametersFields[$key], $tmpArr);
					}
				}
			} else {
				if (Schema::hasColumn($table, $this->filterParametersFields[$key])) {
					$this->posts->where($this->filterParametersFields[$key], $value);
				}
			}
		}
	}
}
