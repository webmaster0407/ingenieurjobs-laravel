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

use App\Helpers\Files\Storage\StorageDisk;
use App\Models\Resume;
use App\Rules\BetweenRule;
use App\Rules\EmailRule;

class SendMessageRequest extends Request
{
	/**
	 * Prepare the data for validation.
	 *
	 * @return void
	 */
	protected function prepareForValidation()
	{
		$input = $this->all();
		
		// body
		if ($this->filled('body')) {
			$string = $this->input('body');
			
			$string = strip_tags($string);
			$string = html_entity_decode($string);
			$string = strip_tags($string);
			
			$input['body'] = $string;
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
		$guard = isFromApi() ? 'sanctum' : null;
		
		$rules = [
			'from_name'  => ['required', new BetweenRule(2, 200)],
			'from_email' => ['max:100'],
			'from_phone' => ['max:20'],
			'body'       => ['required', new BetweenRule(20, 500)],
			'post_id'    => ['required', 'numeric'],
		];
		
		// CAPTCHA
		$rules = $this->captchaRules($rules);
		
		// Check 'resume' is required
		if (auth($guard)->check()) {
			$pDisk = StorageDisk::getDisk('private');
			$resume = Resume::where('id', $this->input('resume_id'))->where('user_id', auth($guard)->user()->id)->first();
			if (
				empty($resume)
				|| trim($resume->filename) == ''
				|| !$pDisk->exists($resume->filename)
			) {
				$rules['resume.filename'] = [
					'required',
					'mimes:' . getUploadFileTypes('file'),
					'min:' . (int)config('settings.upload.min_file_size', 0),
					'max:' . (int)config('settings.upload.max_file_size', 1000),
				];
			}
		} else {
			$rules['resume.filename'] = [
				'required',
				'mimes:' . getUploadFileTypes('file'),
				'min:' . (int)config('settings.upload.min_file_size', 0),
				'max:' . (int)config('settings.upload.max_file_size', 1000),
			];
		}
		
		// Email
		if ($this->filled('from_email')) {
			$rules['from_email'][] = 'email';
			$rules['from_email'][] = new EmailRule();
		}
		if (isEnabledField('email')) {
			if (isEnabledField('phone') && isEnabledField('email')) {
				$rules['from_email'][] = 'required_without:from_phone';
			} else {
				$rules['from_email'][] = 'required';
			}
		}
		
		// Phone
		if (config('settings.sms.phone_verification') == 1) {
			if ($this->filled('phone')) {
				$countryCode = $this->input('country_code', config('country.code'));
				$rules['from_phone'][] = 'phone:' . $countryCode;
			}
		}
		if (isEnabledField('phone')) {
			if (isEnabledField('phone') && isEnabledField('email')) {
				$rules['from_phone'][] = 'required_without:from_email';
			} else {
				$rules['from_phone'][] = 'required';
			}
		}
		
		return $rules;
	}
}
