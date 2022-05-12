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

namespace App\Http\Controllers\Api\Post\CreateOrEdit\SingleStep;

use App\Helpers\Ip;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\City;
use App\Models\Company;
use App\Models\Package;
use App\Models\Post;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;

trait UpdateSingleStepFormTrait
{
	/**
	 * @param $postId
	 * @param \App\Http\Requests\PostRequest $request
	 * @return mixed
	 */
	public function updateSingleStepForm($postId, PostRequest $request)
	{
		if (!auth('sanctum')->check()) {
			return $this->respondUnAuthorized();
		}
		
		$countryCode = $request->input('country_code', config('country.code'));
		
		$user = auth('sanctum')->user();
		
		$post = Post::countryOf($countryCode)->with(['latestPayment'])
			->withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
			->where('user_id', $user->id)
			->where('id', $postId)
			->first();
		
		if (empty($post)) {
			return $this->respondNotFound(t('Post not found'));
		}
		
		// Get the Post's City
		$city = City::find($request->input('city_id', 0));
		if (empty($city)) {
			return $this->respondError(t('posting_ads_is_disabled'));
		}
		
		// Get or Create Company
		if ($request->filled('company_id') && !empty($request->input('company_id'))) {
			// Get the User's Company
			$company = Company::where('id', $request->input('company_id'))->where('user_id', $user->id)->first();
		} else {
			// Get Company Input
			$companyInput = $request->input('company');
			if (!isset($companyInput['country_code']) || empty($companyInput['country_code'])) {
				$companyInput['country_code'] = config('country.code');
			}
			
			// Logged Users
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
		
		$data = [
			'success' => true,
			'message' => null,
			'result'  => (new PostResource($post))->toArray($request),
		];
		
		$extra = [];
		
		// Make Payment (If needed)
		if ($request->header('X-AppType') != 'web') {
			// Check if the selected Package has been already paid for this Post
			$alreadyPaidPackage = false;
			if (!empty($post->latestPayment)) {
				if ($post->latestPayment->package_id == $request->input('package_id')) {
					$alreadyPaidPackage = true;
				}
			}
			
			// Check if Payment is required
			$package = Package::find($request->input('package_id'));
			if (!empty($package)) {
				if ($package->price > 0 && $request->filled('payment_method_id') && !$alreadyPaidPackage) {
					// Send the Payment
					// IMPORTANT: For REST API usage, payment plugins don't have to make redirection
					return $this->sendPayment($request, $post);
				}
			}
		}
		
		// If no payment is made (Continue)
		
		$data['success'] = true;
		$data['message'] = t('your_ad_has_been_updated');
		
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
