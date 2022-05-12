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

use App\Rules\BetweenRule;
use App\Rules\BlacklistTitleRule;
use App\Rules\BlacklistWordRule;

class CompanyRequest extends Request
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		// Validation Rules
		$rules = [
			'name'        => ['required', new BetweenRule(2, 200), new BlacklistTitleRule()],
			'description' => ['required', new BetweenRule(5, 12000), new BlacklistWordRule()],
		];
		
		// Check 'logo' is required
		if ($this->hasFile('logo')) {
			$rules['logo'] = [
				'required',
				'image',
				'mimes:' . getUploadFileTypes('image'),
				'max:' . (int)config('settings.upload.max_image_size', 1000),
			];
		}
		
		// Check email address
		if ($this->filled('email')) {
			$rules['email'] = ['email'];
		}
		
		// Check website URL
		if ($this->filled('website')) {
			$rules['website'] = ['url'];
		}
		
		// Check facebook URL
		if ($this->filled('facebook')) {
			$rules['facebook'] = ['url'];
		}
		
		// Check twitter URL
		if ($this->filled('twitter')) {
			$rules['twitter'] = ['url'];
		}
		
		// Check linkedin URL
		if ($this->filled('linkedin')) {
			$rules['linkedin'] = ['url'];
		}
		
		// Check pinterest URL
		if ($this->filled('pinterest')) {
			$rules['pinterest'] = ['url'];
		}
		
		return $rules;
	}
}
