<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

use Illuminate\Support\Facades\Schema;

trait AutoSet
{
	// ------------------------------------------------------
	// AUTO-SET-FIELDS-AND-COLUMNS FUNCTIONALITY
	// ------------------------------------------------------
	
	/**
	 * For a simple CRUD Panel, there should be no need to add/define the fields.
	 * The public columns in the database will be converted to be fields.
	 */
	public function setFromDb()
	{
		$this->getDbColumnTypes();
		
		array_map(function ($field) {
			// $this->labels[$field] = $this->makeLabel($field);
			
			$new_field = [
				'name'       => $field,
				'label'      => ucfirst($field),
				'value'      => null,
				'type'       => $this->getFieldTypeFromDbColumnType($field),
				'values'     => [],
				'attributes' => [],
			];
			$this->createFields[$field] = $new_field;
			$this->updateFields[$field] = $new_field;
			
			if (!in_array($field, $this->model->getHidden())) {
				$this->columns[$field] = [
					'name'  => $field,
					'label' => ucfirst($field),
					'type'  => $this->getFieldTypeFromDbColumnType($field),
				];
			}
		}, $this->getDbColumnsNames());
	}
	
	/**
	 * Get all columns from the database for that table.
	 *
	 * @return mixed
	 */
	public function getDbColumnTypes()
	{
		$table_columns = Schema::getColumnListing($this->model->getTable());
		
		foreach ($table_columns as $key => $column) {
			$column_type = Schema::getColumnType($this->model->getTable(), $column);
			$this->dbColumnTypes[$column]['type'] = trim(preg_replace('/\(\d+\)(.*)/i', '', $column_type));
			$this->dbColumnTypes[$column]['default'] = ''; // no way to do this using DBAL?!
		}
		
		return $this->dbColumnTypes;
	}
	
	/**
	 * Intuit a field type, judging from the database column type.
	 *
	 * @param $field
	 * @return string
	 */
	public function getFieldTypeFromDbColumnType($field)
	{
		if (!array_key_exists($field, $this->dbColumnTypes)) {
			return 'text';
		}
		
		if ($field == 'password') {
			return 'password';
		}
		
		if ($field == 'email') {
			return 'email';
		}
		
		switch ($this->dbColumnTypes[$field]['type']) {
			case 'int':
			case 'smallint':
			case 'mediumint':
			case 'longint':
				return 'number';
				break;
			
			case 'tinyint':
				return 'active';
				break;
			
			case 'text':
			case 'mediumtext':
			case 'longtext':
				return 'textarea';
				break;
			
			case 'date':
				return 'date';
				break;
			
			case 'datetime':
			case 'timestamp':
				return 'datetime';
				break;
			case 'time':
				return 'time';
				break;
			
			default:
				return 'text';
				break;
		}
	}
	
	/**
	 * Turn a database column name or PHP variable into a pretty label to be shown to the user.
	 *
	 * @param $value
	 * @return string
	 */
	public function makeLabel($value)
	{
		return trim(preg_replace('/(id|at|\[\])$/ui', '', ucfirst(str_replace('_', ' ', $value))));
	}
	
	/**
	 * Get the database column names, in order to figure out what fields/columns to show in the auto-fields-and-columns functionality.
	 *
	 * @return array
	 */
	public function getDbColumnsNames()
	{
		// Automatically-set columns should be both in the database, and in the $fillable variable on the Eloquent Model
		$columns = Schema::getColumnListing($this->model->getTable());
		$fillable = $this->model->getFillable();
		
		if (!empty($fillable)) {
			$columns = array_intersect($columns, $fillable);
		}
		
		// but not updated_at, deleted_at
		return array_values(array_diff($columns, [$this->model->getKeyName(), 'created_at', 'updated_at', 'deleted_at']));
	}
}
