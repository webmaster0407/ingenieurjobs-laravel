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

namespace App\Http\Requests;

use App\Helpers\RemoveFromString;
use App\Rules\BetweenRule;
use App\Rules\BlacklistTitleRule;
use App\Rules\BlacklistWordRule;

class CompanyRequest extends Request
{
	/**
	 * Prepare the data for validation.
	 *
	 * @return void
	 */
	protected function prepareForValidation()
	{
		// Don't apply this to the Admin Panel
		if (isAdminPanel()) {
			return;
		}
		
		$input = $this->all();
		
		// company.name
		if ($this->filled('company.name')) {
			$input['company']['name'] = $this->input('company.name');
			$input['company']['name'] = onlyNumCleaner($input['company']['name']);
			$input['company']['name'] = RemoveFromString::contactInfo($input['company']['name'], true);
		}
		
		// company.description
		if ($this->filled('company.description')) {
			$input['company']['description'] = $this->input('company.description');
			$input['company']['description'] = onlyNumCleaner($input['company']['description']);
			$input['company']['description'] = RemoveFromString::contactInfo($input['company']['description'], true);
		}
		
		// company.website
		if ($this->filled('company.website')) {
			$input['company']['website'] = addHttp($this->input('company.website'));
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
		// Validation Rules
		$rules = [
			'company.name'        => ['required', new BetweenRule(2, 200), new BlacklistTitleRule()],
			'company.description' => ['required', new BetweenRule(5, 12000), new BlacklistWordRule()],
		];
		
		// Check 'company.logo' is required
		if ($this->file('company.logo')) {
			$rules['company.logo'] = [
				'required',
				'image',
				'mimes:' . getUploadFileTypes('image'),
				'max:' . (int)config('settings.upload.max_image_size', 1000),
			];
		}
		
		// Check email address
		if ($this->filled('company.email')) {
			$rules['company.email'] = ['email'];
		}
		
		// Check website URL
		if ($this->filled('company.website')) {
			$rules['company.website'] = ['url'];
		}
		
		// Check facebook URL
		if ($this->filled('company.facebook')) {
			$rules['company.facebook'] = ['url'];
		}
		
		// Check twitter URL
		if ($this->filled('company.twitter')) {
			$rules['company.twitter'] = ['url'];
		}
		
		// Check linkedin URL
		if ($this->filled('company.linkedin')) {
			$rules['company.linkedin'] = ['url'];
		}
		
		// Check pinterest URL
		if ($this->filled('company.pinterest')) {
			$rules['company.pinterest'] = ['url'];
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
		
		if ($this->file('company.logo')) {
			$attributes['company.logo'] = t('logo');
		}
		
		return $attributes;
	}
	
	/**
	 * @return array
	 */
	public function messages()
	{
		$messages = [];
		
		// Logo
		if ($this->file('company.logo')) {
			// uploaded
			$maxSize = (int)config('settings.upload.max_image_size', 1000); // In KB
			$maxSize = $maxSize * 1024; // Convert KB to Bytes
			$msg = t('large_file_uploaded_error', [
				'field'   => t('logo'),
				'maxSize' => readableBytes($maxSize),
			]);
			
			$uploadMaxFilesizeStr = @ini_get('upload_max_filesize');
			$postMaxSizeStr = @ini_get('post_max_size');
			if (!empty($uploadMaxFilesizeStr) && !empty($postMaxSizeStr)) {
				$uploadMaxFilesize = (int)strToDigit($uploadMaxFilesizeStr);
				$postMaxSize = (int)strToDigit($postMaxSizeStr);
				
				$serverMaxSize = min($uploadMaxFilesize, $postMaxSize);
				$serverMaxSize = $serverMaxSize * 1024 * 1024; // Convert MB to KB to Bytes
				if ($serverMaxSize < $maxSize) {
					$msg = t('large_file_uploaded_error_system', [
						'field'   => t('logo'),
						'maxSize' => readableBytes($serverMaxSize),
					]);
				}
			}
			
			$messages['company.logo.uploaded'] = $msg;
		}
		
		return $messages;
	}
}
