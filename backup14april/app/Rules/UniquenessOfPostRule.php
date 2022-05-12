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

namespace App\Rules;

use App\Models\Post;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;
use Illuminate\Contracts\Validation\Rule;

class UniquenessOfPostRule implements Rule
{
	public $unverifiedPost = false;
	public $email = null;
	public $phone = null;
	public $countryCode = null;
	
	public function __construct()
	{
		if (request()->filled('email')) {
			$this->email = request()->input('email');
		}
		if (request()->filled('phone')) {
			$this->phone = request()->input('phone');
		}
		$this->countryCode = request()->input('country_code', config('country.code'));
		
		if (!empty($this->phone) && !empty($this->countryCode)) {
			$this->phone = phoneFormatInt($this->phone, $this->countryCode);
		} else {
			$this->phone = null;
		}
	}
	
	/**
	 * Determine if the validation rule passes.
	 * Check the uniqueness of the Post
	 *
	 * @param  string  $attribute
	 * @param  mixed  $value
	 * @return bool
	 */
	public function passes($attribute, $value)
	{
		$value = trim($value);
		
		$user = null;
		$guard = isFromApi() ? 'sanctum' : null;
		if (auth($guard)->check()) {
			$user = auth($guard)->user();
		}
		
		$posts = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class]);
		
		if (!empty($user)) {
			
			$posts->where(function ($query) use ($user) {
				$query->where('user_id', $user->id)->orWhere('email', $user->email);
			});
			
		} else {
			
			if (!empty($this->email) && !empty($this->phone)) {
				$posts->where('email', $this->email)->orWhere('phone', $this->phone);
			} else {
				if (!empty($this->email)) {
					$posts->where('email', $this->email);
				}
				if (!empty($this->phone)) {
					$posts->where('phone', $this->phone);
				}
			}
			
		}
		
		// Passe, If a logged user isn't found and If email and phone are not filled
		if (empty($user) && empty($this->email) && empty($this->phone)) {
			return true;
		}
		
		// Exclude current Post ID during update
		if (in_array(request()->method(), ['PUT', 'PATCH', 'UPDATE'])) {
			$parameters = request()->route()->parameters();
			if (isset($parameters['id']) && !empty($parameters['id'])) {
				$posts->where('id', '!=', $parameters['id']);
			} else {
				return true;
			}
		}
		
		// Check if this user hasn't yet posted an ad with this title
		$posts->where('title', 'LIKE', $value);
		
		// Don't passe, If an ad with the same title found for the user
		if ($posts->count() > 0) {
			$post = $posts->orderByDesc('id')->first();
			
			if (!isVerifiedPost($post)) {
				// Conditions to Verify User's Email or Phone
				if (!empty($user)) {
					$emailVerificationRequired = config('settings.mail.email_verification') == 1
						&& request()->filled('email')
						&& request()->input('email') != $user->email;
					$phoneVerificationRequired = config('settings.sms.phone_verification') == 1
						&& request()->filled('phone')
						&& request()->input('phone') != $user->phone;
				} else {
					$emailVerificationRequired = config('settings.mail.email_verification') == 1 && request()->filled('email');
					$phoneVerificationRequired = config('settings.sms.phone_verification') == 1 && request()->filled('phone');
				}
				
				if ($emailVerificationRequired || $phoneVerificationRequired) {
					$this->unverifiedPost = true;
					
					return false;
				} else {
					return true;
				}
			}
			
			return false;
		}
		
		return true;
	}
	
	/**
	 * Get the validation error message.
	 *
	 * @return string
	 */
	public function message()
	{
		if ($this->unverifiedPost) {
			return trans('validation.uniqueness_of_unverified_post_rule');
		} else {
			return trans('validation.uniqueness_of_post_rule');
		}
	}
}
