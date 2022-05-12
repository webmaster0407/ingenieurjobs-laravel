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

use App\Helpers\Number;
use App\Rules\BetweenRule;
use App\Rules\BlacklistTitleRule;
use App\Rules\BlacklistWordRule;

class PostRequest extends Request
{
	/**
	 * Prepare the data for validation.
	 *
	 * @return void
	 */
	protected function prepareForValidation()
	{
		$input = $this->all();
		
		// salary_min
		if ($this->has('salary_min')) {
			if ($this->filled('salary_min')) {
				$input['salary_min'] = $this->input('salary_min');
				// If field's value contains only numbers and dot,
				// Then decimal separator is set as dot.
				if (preg_match('/^[0-9\.]*$/', $input['salary_min'])) {
					$input['salary_min'] = Number::formatForDb($input['salary_min'], '.');
				} else {
					$input['salary_min'] = Number::formatForDb($input['salary_min'], config('currency.decimal_separator', '.'));
				}
			} else {
				$input['salary_min'] = null;
			}
		}
		
		// salary_max
		if ($this->has('salary_max')) {
			if ($this->filled('salary_max')) {
				$input['salary_max'] = $this->input('salary_max');
				// If field's value contains only numbers and dot,
				// Then decimal separator is set as dot.
				if (preg_match('/^[0-9\.]*$/', $input['salary_max'])) {
					$input['salary_max'] = Number::formatForDb($input['salary_max'], '.');
				} else {
					$input['salary_max'] = Number::formatForDb($input['salary_max'], config('currency.decimal_separator', '.'));
				}
			} else {
				$input['salary_max'] = null;
			}
		}
		
		// tags
		if ($this->filled('tags')) {
			$input['tags'] = tagCleaner($this->input('tags'));
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
            'category_id'         => ['required', 'not_in:0'],
            'post_type_id'        => ['required', 'not_in:0'],
            'company_name'        => ['required', new BetweenRule(2, 200), new BlacklistTitleRule()],
            'company_description' => ['required', new BetweenRule(5, 12000), new BlacklistWordRule()],
            'title'               => [
            	'required',
				new BetweenRule(
					(int)config('settings.single.title_min_length', 2),
					(int)config('settings.single.title_max_length', 150)
				)
			],
            'description'         => [
            	'required',
				new BetweenRule(
					(int)config('settings.single.description_min_length', 5),
					(int)config('settings.single.description_max_length', 12000)
				)
			],
            'contact_name'        => ['required', new BetweenRule(3, 200)],
            'email'               => ['required', 'email', 'max:100'],
        ];
	
		// Tags
		if ($this->filled('tags')) {
			$rules['tags.*'] = ['regex:' . tagRegexPattern()];
		}
		
		return $rules;
    }
	
	/**
	 * Get custom attributes for validator errors.
	 *
	 * @return array
	 */
	public function attributes()
	{
		$attributes = [];
		
		if ($this->filled('tags')) {
			foreach ($this->input('tags') as $key => $tag) {
				$attributes['tags.' . $key] = t('tag X', ['key' => ($key + 1)]);
			}
		}
		
		return $attributes;
	}
}
