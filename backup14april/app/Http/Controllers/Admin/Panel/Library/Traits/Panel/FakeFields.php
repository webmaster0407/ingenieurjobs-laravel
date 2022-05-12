<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

use Illuminate\Support\Arr;

trait FakeFields
{
	/**
	 * Refactor the request array to something that can be passed to the model's create or update function.
	 * The resulting array will only include the fields that are stored in the database and their values,
	 * plus the '_token' and 'redirect_after_save' variables.
	 *
	 * @param array $request
	 * @param string $form
	 * @return array
	 */
	public function compactFakeFields(array $request, $form = 'create')
	{
		if (!is_array($request)) {
			$request = request()->all();
		}
		
		$fakeFieldColumnsToEncode = [];
		
		// get the right fields according to the form type (create/update)
		switch (strtolower($form)) {
			case 'update':
				$fields = $this->updateFields;
				break;
			
			default:
				$fields = $this->createFields;
				break;
		}
		
		// go through each defined field
		foreach ($fields as $k => $field) {
			if (isset($fields[$k]['type']) && $fields[$k]['type'] == 'custom_html') {
				continue;
			}
			// if it's a fake field
			if (isset($fields[$k]['fake']) && $fields[$k]['fake'] == true) {
				// add it to the request in its appropriate variable - the one defined, if defined
				if (isset($fields[$k]['store_in'])) {
					$request[$fields[$k]['store_in']][$fields[$k]['name']] = $request[$fields[$k]['name']];
					
					// remove the fake field
					Arr::pull($request, $fields[$k]['name']);
					
					if (!in_array($fields[$k]['store_in'], $fakeFieldColumnsToEncode, true)) {
						array_push($fakeFieldColumnsToEncode, $fields[$k]['store_in']);
					}
				} else {
					// otherwise in the one defined in the $crud variable
					
					$request['extras'][$fields[$k]['name']] = $request[$fields[$k]['name']];
					
					// remove the fake field
					Arr::pull($request, $fields[$k]['name']);
					
					if (!in_array('extras', $fakeFieldColumnsToEncode, true)) {
						array_push($fakeFieldColumnsToEncode, 'extras');
					}
				}
			}
		}
		
		// json_encode all fake_value columns if applicable in the database, so they can be properly stored and interpreted
		if (is_array($fakeFieldColumnsToEncode) && count($fakeFieldColumnsToEncode) > 0) {
			foreach ($fakeFieldColumnsToEncode as $key => $value) {
				$isTranslatableModel = (
					property_exists($this->model, 'translatable')
					&& method_exists($this->model, 'getTranslatableAttributes')
					&& in_array($value, $this->model->getTranslatableAttributes(), true)
				);
				
				if (!$isTranslatableModel && $this->model->shouldEncodeFake($value)) {
					$request[$value] = json_encode($request[$value]);
				}
				
				if (!isValidJson($request[$value])) {
					if (is_array($request[$value])) {
						$request[$value] = json_encode($request[$value]);
					}
				}
			}
		}
		
		// if there are no fake fields defined, this will just return the original Request in full
		// since no modifications or additions have been made to $request
		return $request;
	}
}
