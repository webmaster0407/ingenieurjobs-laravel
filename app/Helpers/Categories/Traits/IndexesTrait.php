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

namespace App\Helpers\Categories\Traits;

use App\Helpers\DBTool;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

trait IndexesTrait
{
	/**
	 * Create the Nested Set indexes
	 */
	public function createNestedSetIndexes()
	{
		$this->checkTablesAndColumns();
		
		// Make the 'lft' & 'rgt' columns unique and index the 'depth' column
		try {
			Schema::table($this->nestedTable, function ($table) {
				// Check if a unique indexes key exist, and drop it.
				$keyExists = DB::select(DB::raw('SHOW KEYS FROM ' . DBTool::table($this->nestedTable) . ' WHERE Key_name="lft"'));
				if ($keyExists) {
					$table->dropUnique('lft');
				}
				$keyExists = DB::select(DB::raw('SHOW KEYS FROM ' . DBTool::table($this->nestedTable) . ' WHERE Key_name="rgt"'));
				if ($keyExists) {
					$table->dropUnique('rgt');
				}
				$keyExists = DB::select(DB::raw('SHOW KEYS FROM ' . DBTool::table($this->nestedTable) . ' WHERE Key_name="depth"'));
				if ($keyExists) {
					$table->dropIndex('depth');
				}
				
				// Create indexes
				$table->index(['lft'], 'lft'); // Should be unique
				$table->index(['rgt'], 'rgt'); // Should be unique
				$table->index(['depth'], 'depth');
			});
		} catch (\exception $e) {
			dd($e);
		}
	}
}
