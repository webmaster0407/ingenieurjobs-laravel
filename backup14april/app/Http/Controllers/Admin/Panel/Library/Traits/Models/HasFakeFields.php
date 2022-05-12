<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Models;


trait HasFakeFields
{
	/*
	|--------------------------------------------------------------------------
	| Methods for Fake Fields functionality (used in PageManager).
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Add fake fields as regular attributes, even though they are stored as JSON.
	 *
	 * @param array $columns - the database columns that contain the JSONs
	 */
	public function addFakes($columns = ['extras'])
	{
		foreach ($columns as $key => $column) {
			$columnContents = $this->{$column};
			
			/*
			if (isValidJson($columnContents)) {
				$columnContents = json_decode($columnContents);
			}
			*/
			
			if ($this->shouldDecodeFake($column)) {
				$columnContents = json_decode($columnContents);
			}
			
			if (is_array($columnContents) || is_object($columnContents) || $columnContents instanceof \Traversable) {
				if (count($columnContents)) {
					foreach ($columnContents as $fakeFieldName => $fakeFieldValue) {
						$this->setAttribute($fakeFieldName, $fakeFieldValue);
					}
				}
			}
		}
	}
	
	/**
	 * Return the entity with fake fields as attributes.
	 *
	 * @param array $columns - the database columns that contain the JSONs
	 * @return $this
	 */
	public function withFakes($columns = [])
	{
		$model = '\\' . get_class($this);
		
		$columnCount = ((is_array($columns) || $columns instanceof \Countable) ? count($columns) : 0);
		
		if ($columnCount == 0) {
			$columns = (property_exists($model, 'fakeColumns')) ? $this->fakeColumns : ['extras'];
		}
		
		$this->addFakes($columns);
		
		return $this;
	}
	
	/**
	 * Determine if this fake column should be json_decoded.
	 *
	 * @param $column string fake column name
	 *
	 * @return bool
	 */
	public function shouldDecodeFake($column): bool
	{
		return ! in_array($column, array_keys($this->casts));
	}
	
	/**
	 * Determine if this fake column should get json_encoded or not.
	 *
	 * @param $column string fake column name
	 *
	 * @return bool
	 */
	public function shouldEncodeFake($column): bool
	{
		return ! in_array($column, array_keys($this->casts));
	}
}
