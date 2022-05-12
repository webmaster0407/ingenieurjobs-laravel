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

use App\Helpers\Arr;
use App\Helpers\DBTool;
use Illuminate\Support\Facades\DB;

trait DepthTrait
{
	/**
	 * Find and Set the nodes depth
	 */
	public function setNodesDepth()
	{
		$this->checkTablesAndColumns();
		
		// Finding the Depth of the nodes
		$sql = 'SELECT node.id, node.name, (COUNT(parent.name) - 1) AS depth
				FROM ' . DBTool::table($this->nestedTable) . ' AS node,
						' . DBTool::table($this->nestedTable) . ' AS parent
				WHERE node.lft BETWEEN parent.lft AND parent.rgt
				GROUP BY node.id, node.name
				ORDER BY node.id;';
		$items = DB::select($sql);
		
		if (is_array($items) && count($items) > 0) {
			foreach ($items as $item) {
				$itemArray = Arr::fromObject($item);
				
				if (!isset($itemArray[$this->colPrimaryKey])) {
					continue;
				}
				
				$newArray = [
					'depth' => $itemArray['depth'],
				];
				
				// Set the item's depth
				$affected = DB::table($this->nestedTable)
					->where($this->colPrimaryKey, $itemArray[$this->colPrimaryKey])
					->update($newArray);
			}
		}
	}
}
