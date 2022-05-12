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

trait Having
{
	protected function applyHaving()
	{
		if (!(isset($this->posts) && isset($this->having))) {
			return;
		}
		
		// Get valid columns name
		$this->having = collect($this->having)->map(function ($value, $key) {
			if (Str::contains($value, '.')) {
				$value = DB::getTablePrefix() . $value;
			}
			
			return $value;
		})->toArray();
		
		// Set HAVING
		$having = '';
		if (is_array($this->having) && count($this->having) > 0) {
			foreach ($this->having as $key => $value) {
				if (trim($value) == '') {
					continue;
				}
				
				if ($having == '') {
					$having .= $value;
				} else {
					$having .= ' AND ' . $value;
				}
			}
		}
		
		if (!empty($having)) {
			$this->posts->havingRaw($having);
		}
	}
}
