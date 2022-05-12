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

namespace App\Http\Requests\Admin;

class CityRequest extends Request
{
	/**
	 * Prepare the data for validation.
	 *
	 * @return void
	 */
	protected function prepareForValidation()
	{
		$input = $this->all();
		
		// population
		if ($this->filled('population')) {
			$input['population'] = preg_replace('/[^0-9]/', '', $this->input('population'));
		}
		
		request()->merge($input); // Required!
		$this->merge($input);
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'name'      => ['required', 'min:2', 'max:255'],
			'latitude'  => ['required'],
			'longitude' => ['required'],
			'time_zone' => ['required'],
		];
		
		if (in_array($this->method(), ['POST', 'CREATE'])) {
			$rules['country_code'] = ['required', 'min:2', 'max:2'];
			$rules['subadmin1_code'] = ['required'];
		}
		
		return $rules;
	}
}
