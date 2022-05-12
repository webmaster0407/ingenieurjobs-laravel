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

namespace App\Http\Controllers\Api\Post\CreateOrEdit\MultiSteps;

use App\Helpers\Arr;
use App\Helpers\Ip;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\City;
use App\Models\Company;
use App\Models\Post;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;

trait UpdateMultiStepsFormTrait
{
	public function updateMultiStepsForm($tokenOrId, PostRequest $request)
	{
		$countryCode = $request->input('country_code', config('country.code'));
		$countPackages = $request->input('count_packages', 0);
		$countPaymentMethods = $request->input('count_payment_methods', 0);
		
		$user = null;
		if (auth('sanctum')->check()) {
			$user = auth('sanctum')->user();
		}
		
		$post = null;
		if (!empty($user)) {
			$post = Post::countryOf($countryCode)->withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
				->where('user_id', $user->id)
				->where('id', $tokenOrId)
				->first();
		}
		
		if (empty($post)) {
			return $this->respondNotFound(t('Post not found'));
		}
		
		// Get the Post's City
		$city = City::find($request->input('city_id', 0));
		if (empty($city)) {
			return $this->respondError(t('posting_ads_is_disabled'));
		}
		
		// Get or Create Company
		$company = null;
		if ($request->filled('company_id') && !empty($request->input('company_id'))) {
			// Get the User's Company
			if (!empty($user)) {
				$company = Company::where('id', $request->input('company_id'))->where('user_id', $user->id)->first();
			}
		} else {
			// Get Company Input
			$companyInput = $request->input('company');
			if (!isset($companyInput['country_code']) || empty($companyInput['country_code'])) {
				$companyInput['country_code'] = $countryCode;
			}
			
			// Logged Users
			if (!empty($user)) {
				if (!isset($companyInput['user_id']) || empty($companyInput['user_id'])) {
					$companyInput['user_id'] = $user->id;
				}
				
				// Store the User's Company
				$company = new Company();
				foreach ($companyInput as $key => $value) {
					if (in_array($key, $company->getFillable())) {
						$company->{$key} = $value;
					}
				}
				$company->save();
				
				// Save the Company's Logo
				if ($request->hasFile('company.logo')) {
					$company->logo = $request->file('company.logo');
					$company->save();
				}
			} else {
				// Guest Users
				$company = Arr::toObject($companyInput);
			}
		}
		
		// Return error if company is not set
		if (empty($company)) {
			$message = t('Please select a company or New Company to create one');
			
			return $this->respondError($message);
		}
		
		// Conditions to Verify User's Email or Phone
		$emailVerificationRequired = config('settings.mail.email_verification') == 1
			&& $request->filled('email')
			&& $request->input('email') != $post->email;
		$phoneVerificationRequired = config('settings.sms.phone_verification') == 1
			&& $request->filled('phone')
			&& $request->input('phone') != $post->phone;
		
		/*
		 * Allow admin users to approve the changes,
		 * If the ads approbation option is enable,
		 * And if important data have been changed.
		 */
		if (config('settings.single.listings_review_activation')) {
			if (
				md5($post->title) != md5($request->input('title'))
				|| md5($post->company_description) != md5((isset($company->description)) ? $company->description : null)
				|| md5($post->description) != md5($request->input('description'))
				|| md5($post->application_url) != md5($request->input('application_url'))
			) {
				$post->reviewed = 0;
			}
		}
		
		// Update Post
		$input = $request->only($post->getFillable());
		foreach ($input as $key => $value) {
			$post->{$key} = $value;
		}
		
		// Checkboxes
		$post->negotiable = $request->input('negotiable');
		$post->phone_hidden = $request->input('phone_hidden');
		
		// Other fields
		$post->company_id = (isset($company->id)) ? $company->id : 0;
		$post->company_name = (isset($company->name)) ? $company->name : null;
		$post->logo = (isset($company->logo)) ? $company->logo : null;
		$post->company_description = (isset($company->description)) ? $company->description : null;
		$post->lat = $city->latitude;
		$post->lon = $city->longitude;
		$post->ip_addr = $request->input('ip_addr', Ip::get());
		
		// Email verification key generation
		if ($emailVerificationRequired) {
			$post->email_token = md5(microtime() . mt_rand());
			$post->verified_email = 0;
		}
		
		// Phone verification key generation
		if ($phoneVerificationRequired) {
			$post->phone_token = mt_rand(100000, 999999);
			$post->verified_phone = 0;
		}
		
		// Save
		$post->save();
		
		// Save Logo (for Guest Users)
		if (empty($user)) {
			if ($request->hasFile('company.logo')) {
				$post->logo = $request->file('company.logo');
				$post->save();
			}
		}
		
		$data = [
			'success' => true,
			'message' => t('your_ad_has_been_updated'),
			'result'  => (new PostResource($post))->toArray($request),
		];
		
		$extra = [];
		
		// Should it be go on Payment page or not?
		if (
			is_numeric($countPackages)
			&& is_numeric($countPaymentMethods)
			&& $countPackages > 0
			&& $countPaymentMethods > 0
		) {
			$extra['steps']['payment'] = true;
		} else {
			$extra['steps']['payment'] = false;
		}
		
		// Send Email Verification message
		if ($emailVerificationRequired) {
			$extra['sendEmailVerification'] = $this->sendEmailVerification($post);
			if (
				array_key_exists('success', $extra['sendEmailVerification'])
				&& array_key_exists('message', $extra['sendEmailVerification'])
			) {
				$extra['mail']['success'] = $extra['sendEmailVerification']['success'];
				$extra['mail']['message'] = $extra['sendEmailVerification']['message'];
			}
		}
		
		// Send Phone Verification message
		if ($phoneVerificationRequired) {
			$extra['sendPhoneVerification'] = $this->sendPhoneVerification($post);
			if (
				array_key_exists('success', $extra['sendPhoneVerification'])
				&& array_key_exists('message', $extra['sendPhoneVerification'])
			) {
				$extra['mail']['success'] = $extra['sendPhoneVerification']['success'];
				$extra['mail']['message'] = $extra['sendPhoneVerification']['message'];
			}
		}
		
		$data['extra'] = $extra;
		
		return $this->apiResponse($data);
	}
}
