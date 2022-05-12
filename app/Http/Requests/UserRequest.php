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

use App\Rules\BetweenRule;
use App\Rules\BlacklistDomainRule;
use App\Rules\BlacklistEmailRule;
use App\Rules\BlacklistTitleRule;
use App\Rules\BlacklistWordRule;
use App\Rules\EmailRule;
use App\Rules\UsernameIsAllowedRule;
use App\Rules\UsernameIsValidRule;

class UserRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (in_array($this->method(), ['POST', 'CREATE'])) {
			return true;
		} else {
			$guard = isFromApi() ? 'sanctum' : null;
			
			return auth($guard)->check();
		}
	}
	
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
		
		// name
		if ($this->filled('name')) {
			$input['name'] = strCleanerLite($this->input('name'));
			$input['name'] = onlyNumCleaner($input['name']);
		}
		
		// phone
		if ($this->filled('phone')) {
			$input['phone'] = phoneFormatInt($this->input('phone'), $this->input('country_code', session('country_code')));
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
		$rules = [];
		
		// CREATE
		if (in_array($this->method(), ['POST', 'CREATE'])) {
			$rules = $this->storeRules();
		}
		
		// UPDATE
		if (in_array($this->method(), ['PUT', 'PATCH', 'UPDATE'])) {
			$rules = $this->updateRules();
		}
		
		return $rules;
	}
	
	/**
	 * @return array
	 */
	private function storeRules()
	{
		$rules = [
			'name'         => ['required', new BetweenRule(2, 200)],
			'user_type_id' => ['required', 'not_in:0'],
			'country_code' => ['sometimes', 'required', 'not_in:0'],
			'phone'        => ['max:20'],
			'email'        => ['max:100', new BlacklistEmailRule(), new BlacklistDomainRule()],
			'password'     => [
				'required',
				'min:' . config('larapen.core.passwordLength.min', 6),
				'max:' . config('larapen.core.passwordLength.max', 60),
				'confirmed',
			],
			'accept_terms' => ['accepted'],
		];
		
		// Email
		if ($this->filled('email')) {
			$rules['email'][] = 'email';
			$rules['email'][] = new EmailRule();
			$rules['email'][] = 'unique:users,email';
		}
		if (isEnabledField('email')) {
			if (isEnabledField('phone') && isEnabledField('email')) {
				$rules['email'][] = 'required_without:phone';
			} else {
				$rules['email'][] = 'required';
			}
		}
		
		// Phone
		if (config('settings.sms.phone_verification') == 1) {
			if ($this->filled('phone')) {
				$countryCode = $this->input('country_code', config('country.code'));
				$rules['phone'][] = 'phone:' . $countryCode;
			}
		}
		if (isEnabledField('phone')) {
			if (isEnabledField('phone') && isEnabledField('email')) {
				$rules['phone'][] = 'required_without:email';
			} else {
				$rules['phone'][] = 'required';
			}
		}
		if ($this->filled('phone')) {
			$rules['phone'][] = 'unique:users,phone';
		}
		
		// Username
		if (isEnabledField('username')) {
			if ($this->filled('username')) {
				$rules['username'] = [
					'between:3,100',
					'unique:users,username',
					new UsernameIsValidRule(),
					new UsernameIsAllowedRule(),
				];
			}
		}
		
		// COMPANY: Check 'resume' is required
		if (config('larapen.core.register.showCompanyFields')) {
			if ($this->input('user_type_id') == 1) {
				$rules['company.name'] = ['required', new BetweenRule(2, 200), new BlacklistTitleRule()];
				$rules['company.description'] = ['required', new BetweenRule(5, 1000), new BlacklistWordRule()];
				
				// Check 'logo' is required
				if ($this->file('logo')) {
					$rules['logo'] = [
						'required',
						'image',
						'mimes:' . getUploadFileTypes('image'),
						'max:' . (int)config('settings.upload.max_image_size', 1000),
					];
				}
			}
		}
		
		// CANDIDATE: Check 'resume' is required
		if (config('larapen.core.register.showResumeFields')) {
			if ($this->input('user_type_id') == 2) {
				$rules['resume.filename'] = [
					'required',
					'mimes:' . getUploadFileTypes('file'),
					'max:' . (int)config('settings.upload.max_file_size', 1000),
				];
			}
		}
		
		// CAPTCHA
		$rules = $this->captchaRules($rules);
		
		return $rules;
	}
	
	/**
	 * @return array
	 */
	private function updateRules()
	{
		$guard = isFromApi() ? 'sanctum' : null;
		$user = auth($guard)->user();
		
		if (empty($user->user_type_id) || $user->user_type_id == 0) {
			$rules = [
				'user_type_id' => ['required', 'not_in:0'],
			];
		} else {
			$rules = [
				'name'     => ['required', 'max:100'],
				'phone'    => ['max:20'],
				'email'    => ['max:100', new BlacklistEmailRule(), new BlacklistDomainRule()],
				'username' => [new UsernameIsValidRule(), new UsernameIsAllowedRule()],
			];
			
			// Check if these fields has changed
			$emailChanged = ($this->input('email') != $user->email);
			$phoneChanged = ($this->input('phone') != $user->phone);
			$usernameChanged = ($this->filled('username') && $this->input('username') != $user->username);
			
			// email
			if ($this->filled('email')) {
				$rules['email'][] = 'email';
				$rules['email'][] = new EmailRule();
			}
			if (isEnabledField('email')) {
				if (isEnabledField('phone') && isEnabledField('email')) {
					$rules['email'][] = 'required_without:phone';
				} else {
					$rules['email'][] = 'required';
				}
			}
			if ($emailChanged) {
				$rules['email'][] = 'unique:users,email';
			}
			
			// phone
			if (config('settings.sms.phone_verification') == 1) {
				if ($this->filled('phone')) {
					$countryCode = $this->input('country_code', config('country.code'));
					$rules['phone'][] = 'phone:' . $countryCode;
				}
			}
			if (isEnabledField('phone')) {
				if (isEnabledField('phone') && isEnabledField('email')) {
					$rules['phone'][] = 'required_without:email';
				} else {
					$rules['phone'][] = 'required';
				}
			}
			if ($phoneChanged) {
				$rules['phone'][] = 'unique:users,phone';
			}
			
			// username
			if ($this->filled('username')) {
				$rules['username'][] = 'between:3,100';
			}
			if ($usernameChanged) {
				$rules['username'][] = 'required';
				$rules['username'][] = 'unique:users,username';
			}
			
			// password
			if ($this->filled('password')) {
				$rules['password'] = [
					'min:' . config('larapen.core.passwordLength.min', 6),
					'max:' . config('larapen.core.passwordLength.max', 60),
					'confirmed',
				];
			}
			
			if ($this->filled('user_accept_terms') && $this->input('user_accept_terms') != 1) {
				$rules['accept_terms'] = ['accepted'];
			}
		}
		
		return $rules;
	}
}
