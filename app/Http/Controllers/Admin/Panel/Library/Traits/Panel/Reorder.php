<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

trait Reorder
{
	/*
	|--------------------------------------------------------------------------
	|                                   REORDER
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Change the order and parents of the given elements, according to the NestedSortable AJAX call.
	 *
	 * @param $request - The entire request from the NestedSortable AJAX Call.
	 * @return int      - The number of items whose position in the tree has been changed.
	 */
	public function updateTreeOrder($request): int
	{
		$count = 0;
		
		foreach ($request as $key => $entry) {
			if ($entry['item_id'] != '' && $entry['item_id'] != null) {
				$item = $this->model->find($entry['item_id']);
				$item->parent_id = empty($entry['parent_id']) ? null : $entry['parent_id'];
				$item->depth = empty($entry['depth']) ? null : $entry['depth'];
				$item->lft = empty($entry['left']) ? null : $entry['left'];
				$item->rgt = empty($entry['right']) ? null : $entry['right'];
				$item->save();
				
				$count++;
			}
		}
		
		return $count;
	}
	
	/**
	 * Enable the Reorder functionality in the CRUD Panel for users that have the been given access to 'reorder' using:
	 * $this->crud->allowAccess('reorder');.
	 *
	 * @param string $label - Column name that will be shown on the labels.
	 * @param int $maxLevel - Maximum hierarchy level to which the elements can be nested (1 = no nesting, just reordering).
	 */
	public function enableReorder(string $label = 'name', int $maxLevel = 1)
	{
		$this->reorder = true;
		$this->reorderLabel = $label;
		$this->reorderMaxLevel = $maxLevel;
	}
	
	/**
	 * Disable the Reorder functionality in the CRUD Panel for all users.
	 */
	public function disableReorder()
	{
		$this->reorder = false;
	}
	
	/**
	 * Check if the Reorder functionality is enabled or not.
	 *
	 * @return bool
	 */
	public function isReorderEnabled(): bool
	{
		return $this->reorder;
	}
}
