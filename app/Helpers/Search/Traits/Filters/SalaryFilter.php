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

trait SalaryFilter
{
	protected function applySalaryFilter()
	{
		// The 'salary_min' or 'salary_max' are not calculated columns, so WHERE clause is recommended (the HAVING clause is not required)
		if (!isset($this->posts)) {
			return;
		}
		
		$this->applyMinSalaryFilter();
		$this->applyMaxSalaryFilter();
	}
	
	private function applyMinSalaryFilter()
	{
		// The 'salary_min' is not calculated columns, so WHERE clause is recommended (the HAVING clause is not required)
		if (!isset($this->posts)) {
			return;
		}
		
		if (!request()->filled('minSalary') || !is_array(request()->get('minSalary'))) {
			return;
		}
		
		$minSalary = request()->get('minSalary');
		
		$minSalaryMin = null;
		if (array_key_exists('min', $minSalary) && is_numeric($minSalary['min'])) {
			$minSalaryMin = $minSalary['min'];
		}
		
		$minSalaryMax = null;
		if (array_key_exists('max', $minSalary) && is_numeric($minSalary['max'])) {
			$minSalaryMax = $minSalary['max'];
		}
		
		if ((!is_null($minSalaryMin) && is_numeric($minSalaryMin)) && (!is_null($minSalaryMax) && is_numeric($minSalaryMax))) {
			if ($minSalaryMax > $minSalaryMin) {
				$where = '(salary_min >= ? AND salary_min <= ?)';
				$this->posts->whereRaw($where, [$minSalaryMin, $minSalaryMax]);
			}
		} else {
			if (!is_null($minSalaryMin) && is_numeric($minSalaryMin)) {
				$this->posts->whereRaw('salary_min >= ?', [$minSalaryMin]);
			}
			
			if (!is_null($minSalaryMax) && is_numeric($minSalaryMax)) {
				$this->posts->whereRaw('salary_min <= ?', [$minSalaryMax]);
			}
		}
	}
	
	private function applyMaxSalaryFilter()
	{
		// The 'salary_max' is not calculated column, so WHERE clause is recommended (the HAVING clause is not required)
		if (!isset($this->posts)) {
			return;
		}
		
		if (!request()->filled('maxSalary') || !is_array(request()->get('maxSalary'))) {
			return;
		}
		
		$maxSalary = request()->get('maxSalary');
		
		$maxSalaryMin = null;
		if (array_key_exists('min', $maxSalary) && is_numeric($maxSalary['min'])) {
			$maxSalaryMin = $maxSalary['min'];
		}
		
		$maxSalaryMax = null;
		if (array_key_exists('max', $maxSalary) && is_numeric($maxSalary['max'])) {
			$maxSalaryMax = $maxSalary['max'];
		}
		
		if ((!is_null($maxSalaryMin) && is_numeric($maxSalaryMin)) && (!is_null($maxSalaryMax) && is_numeric($maxSalaryMax))) {
			if ($maxSalaryMax > $maxSalaryMin) {
				$where = '(salary_max >= ? AND salary_max <= ?)';
				$this->posts->whereRaw($where, [$maxSalaryMin, $maxSalaryMax]);
			}
		} else {
			if (!is_null($maxSalaryMin) && is_numeric($maxSalaryMin)) {
				$this->posts->whereRaw('salary_max >= ?', [$maxSalaryMin]);
			}
			
			if (!is_null($maxSalaryMax) && is_numeric($maxSalaryMax)) {
				$this->posts->whereRaw('salary_max <= ?', [$maxSalaryMax]);
			}
		}
	}
}
