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

use Illuminate\Validation\Rule;

class MetaTagRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		$rules = [
			'title'       => ['required', 'max:255'],
			'description' => ['required', 'max:10000'],
			'keywords'    => ['max:10000'],
		];
	
		if (in_array($this->method(), ['POST', 'CREATE'])) {
			$rules['page'][] = 'required';
			
			// Unique with additional Where Clauses
			$uniquePage = Rule::unique('meta_tags')->where(function ($query) {
				return $query->where('page', $this->page);
			});
		
			$rules['page'][] = $uniquePage;
		}
	
		return $rules;
    }
	
	/**
	 * @return array
	 */
	public function messages()
	{
		$messages = [];
		
		$messages['page.unique'] = trans('admin.A meta-tag entry already exists for this page');
		
		return $messages;
	}
}
