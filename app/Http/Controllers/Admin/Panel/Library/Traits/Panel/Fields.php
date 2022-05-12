<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

use Illuminate\Support\Arr;

trait Fields
{
	// ------------
	// FIELDS
	// ------------
	
	/**
	 * Add a field to the create/update form or both.
	 *
	 * @param $field
	 * @param string $form
	 */
	public function addField($field, $form = 'both')
	{
		// if the fieldDefinitionArray array is a string, it means the programmer was lazy and has only passed the name
		// set some default values, so the field will still work
		if (is_string($field)) {
			$completeFieldArray['name'] = $field;
		} else {
			$completeFieldArray = $field;
		}
		
		// if the label is missing, we should set it
		if (!isset($completeFieldArray['label'])) {
			$completeFieldArray['label'] = ucfirst($completeFieldArray['name']);
		}
		
		// if the field type is missing, we should set it
		if (!isset($completeFieldArray['type'])) {
			$completeFieldArray['type'] = $this->getFieldTypeFromDbColumnType($completeFieldArray['name']);
		}
		
		// store the field information into the correct variable on the CRUD object
		switch (strtolower($form)) {
			case 'create':
				$this->createFields[$completeFieldArray['name']] = $completeFieldArray;
				break;
			
			case 'update':
				$this->updateFields[$completeFieldArray['name']] = $completeFieldArray;
				break;
			
			default:
				$this->createFields[$completeFieldArray['name']] = $completeFieldArray;
				$this->updateFields[$completeFieldArray['name']] = $completeFieldArray;
				break;
		}
	}
	
	public function addFields($fields, $form = 'both')
	{
		if (!empty($fields)) {
			foreach ($fields as $field) {
				$this->addField($field, $form);
			}
		}
	}
	
	/**
	 * Remove a certain field from the create/update/both forms by its name.
	 *
	 * @param $name
	 * @param string $form
	 */
	public function removeField($name, $form = 'both')
	{
		switch (strtolower($form)) {
			case 'create':
				Arr::forget($this->createFields, $name);
				break;
			
			case 'update':
				Arr::forget($this->updateFields, $name);
				break;
			
			default:
				Arr::forget($this->createFields, $name);
				Arr::forget($this->updateFields, $name);
				break;
		}
	}
	
	/**
	 * Remove many fields from the create/update/both forms by their name.
	 *
	 * @param array $arrayOfNames
	 * @param string $form
	 */
	public function removeFields(array $arrayOfNames, $form = 'both')
	{
		if (!empty($arrayOfNames)) {
			foreach ($arrayOfNames as $name) {
				$this->removeField($name, $form);
			}
		}
	}
	
	/**
	 * Check if field is the first of its type in the given fields array.
	 * It's used in each field_type.blade.php to determine wether to push the css and js content or not
	 * (we only need to push the js and css for a field the first time it's loaded in the form, not any subsequent times).
	 *
	 * @param array $field
	 * @param array $fieldsArray
	 * @return bool
	 */
	public function checkIfFieldIsFirstOfItsType(array $field, array $fieldsArray)
	{
		if ($field['name'] == $this->getFirstOfItsTypeInArray($field['type'], $fieldsArray)['name']) {
			return true;
		}
		
		return false;
	}
	
	// ------------
	// TONE FUNCTIONS - UNDOCUMENTED, UNTESTED, SOME MAY BE USED
	// ------------
	// TODO: check them
	/**
	 * @param $order
	 */
	public function orderFields($order)
	{
		$this->setSort('fields', (array)$order);
	}
}