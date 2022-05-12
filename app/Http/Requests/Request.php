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

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

abstract class Request extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
	
	/**
	 * Handle a failed validation attempt.
	 *
	 * @param Validator $validator
	 * @throws ValidationException
	 */
	protected function failedValidation(Validator $validator)
	{
		if ($this->ajax() || $this->wantsJson() || $this->segment(1) == 'api') {
			// Get Errors
			$errors = (new ValidationException($validator))->errors();
			
			$message = t('An error occurred while validating the data');
			
			// Add a specific json attributes for 'bootstrap-fileinput' plugin
			if (
				Str::contains(get_called_class(), 'PhotoRequest')
				|| Str::contains(get_called_class(), 'AvatarRequest')) {
				// Get errors (as string)
				if (is_array($errors) && count($errors) > 0) {
					$errorsTxt = '';
					foreach ($errors as $value) {
						if (is_array($value)) {
							foreach ($value as $v) {
								$errorsTxt .= empty($errorsTxt) ? '- ' . $v : '<br>- ' . $v;
							}
						} else {
							$errorsTxt .= empty($errorsTxt) ? '- ' . $value : '<br>- ' . $value;
						}
					}
				} else {
					$errorsTxt = $message; // t('Error found');
				}
				
				// NOTE: 'bootstrap-fileinput' need 'error' (text) element & the optional 'errorkeys' (array) element
				$data = [
					'error' => $errorsTxt,
				];
			} else {
				$data = [
					'success' => false,
					'message' => $message,
					'errors'  => $errors,
				];
			}
			
			throw new HttpResponseException(response()->json($data, Response::HTTP_UNPROCESSABLE_ENTITY));
		}
		
		parent::failedValidation($validator);
	}
	
	/**
	 * CAPTCHA Rules
	 *
	 * @param array $rules
	 * @return array
	 */
	protected function captchaRules(array $rules = []): array
	{
		if (empty(config('settings.security.captcha'))) {
			return $rules;
		}
		
		if (config('settings.security.captcha') == 'recaptcha') {
			// reCAPTCHA
			if (config('recaptcha.site_key') && config('recaptcha.secret_key')) {
				if (!isFromApi()) {
					$rules['g-recaptcha-response'] = ['recaptcha'];
				}
			}
		} else {
			// CAPTCHA
			if (config('captcha.option') && !empty(config('captcha.option'))) {
				if (isFromApi()) {
					if (request()->header('X-AppType') != 'web') {
						if ($this->filled('captcha_key')) {
							$rules['captcha'] = [
								'required',
								'captcha_api:' . $this->get('captcha_key') . ',' . config('settings.security.captcha'),
							];
						}
					}
				} else {
					$rules['captcha'] = ['required', 'captcha'];
				}
			}
		}
		
		return $rules;
	}
}
