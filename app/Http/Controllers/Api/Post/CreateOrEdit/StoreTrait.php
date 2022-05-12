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

namespace App\Http\Controllers\Api\Post\CreateOrEdit;

use App\Helpers\Arr;
use App\Helpers\Ip;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\City;
use App\Models\Company;
use App\Models\Package;
use App\Models\Permission;
use App\Models\Post;
use App\Models\User;
use App\Notifications\PostActivated;
use App\Notifications\PostNotification;
use App\Notifications\PostReviewed;
use Illuminate\Support\Facades\Notification;

trait StoreTrait
{
	/**
	 * @param \App\Http\Requests\PostRequest $request
	 * @return mixed
	 * @throws \Exception
	 */
	public function storePost(PostRequest $request)
	{
		// Get the Post's City
		$city = City::find($request->input('city_id', 0));
		if (empty($city)) {
			return $this->respondError(t('posting_ads_is_disabled'));
		}
		
		$user = null;
		if (auth('sanctum')->check()) {
			$user = auth('sanctum')->user();
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
				$companyInput['country_code'] = config('country.code');
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
				
				// Get the logo file (Normal way)
				$logoFile = $request->file('company.logo');
				if (empty($logoFile)) {
					$logoFile = $request->files->get('company.logo');
				}
				// Save the Company's Logo
				if (!empty($logoFile)) {
					$company->logo = $logoFile;
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
		if (!empty($user)) {
			$emailVerificationRequired = config('settings.mail.email_verification') == 1
				&& $request->filled('email')
				&& $request->input('email') != $user->email;
			$phoneVerificationRequired = config('settings.sms.phone_verification') == 1
				&& $request->filled('phone')
				&& $request->input('phone') != $user->phone;
		} else {
			$emailVerificationRequired = config('settings.mail.email_verification') == 1 && $request->filled('email');
			$phoneVerificationRequired = config('settings.sms.phone_verification') == 1 && $request->filled('phone');
		}
		
		// New Post
		$post = new Post();
		$input = $request->only($post->getFillable());
		foreach ($input as $key => $value) {
			$post->{$key} = $value;
		}
		
		// Checkboxes
		$post->negotiable = $request->input('negotiable');
		$post->phone_hidden = $request->input('phone_hidden');
		
		// Other fields
		$post->country_code = $request->input('country_code', config('country.code'));
		$post->user_id = !empty($user) ? $user->id : null;
		$post->company_id = (isset($company->id)) ? $company->id : 0;
		$post->company_name = (isset($company->name)) ? $company->name : null;
		$post->logo = (isset($company->logo)) ? $company->logo : null;
		$post->company_description = (isset($company->description)) ? $company->description : null;
		$post->lat = $city->latitude;
		$post->lon = $city->longitude;
		$post->ip_addr = $request->input('ip_addr', Ip::get());
		$post->tmp_token = md5(microtime() . mt_rand(100000, 999999));
		$post->reviewed = 0;
		
		if ($request->filled('email') || $request->filled('phone')) {
			$post->verified_email = 1;
			$post->verified_phone = 1;
			
			// Email verification key generation
			if ($emailVerificationRequired) {
				$post->email_token = md5(microtime() . mt_rand());
				$post->verified_email = 0;
			}
			
			// Mobile activation key generation
			if ($phoneVerificationRequired) {
				$post->phone_token = mt_rand(100000, 999999);
				$post->verified_phone = 0;
			}
		}
		
		if (
			config('settings.single.listings_review_activation') != 1
			&& !$emailVerificationRequired
			&& !$phoneVerificationRequired
		) {
			$post->reviewed = 1;
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
			'message' => $this->apiMsg['post']['success'],
			'result'  => (new PostResource($post))->toArray($request),
		];
		
		$extra = [];
		
		// Auto-Register the Author
		$extra['autoRegisteredUser'] = $this->autoRegister($post, $request);
		
		
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
		$data['message'] = $this->apiMsg['post']['success'];
		
		// Send Admin Notification Email
		if (config('settings.mail.admin_notification') == 1) {
			try {
				// Get all admin users
				$admins = User::permission(Permission::getStaffPermissions())->get();
				if ($admins->count() > 0) {
					Notification::send($admins, new PostNotification($post));
				}
			} catch (\Throwable $e) {
			}
		}
		
		// Send Verification Link or Code
		if ($emailVerificationRequired || $phoneVerificationRequired) {
			
			// Email
			if ($emailVerificationRequired) {
				// Send Verification Link by Email
				$extra['sendEmailVerification'] = $this->sendEmailVerification($post);
				if (
					array_key_exists('success', $extra['sendEmailVerification'])
					&& array_key_exists('message', $extra['sendEmailVerification'])
				) {
					$extra['mail']['success'] = $extra['sendEmailVerification']['success'];
					$extra['mail']['message'] = $extra['sendEmailVerification']['message'];
				}
			}
			
			// Phone
			if ($phoneVerificationRequired) {
				// Send Verification Code by SMS
				$extra['sendPhoneVerification'] = $this->sendPhoneVerification($post);
				if (
					array_key_exists('success', $extra['sendPhoneVerification'])
					&& array_key_exists('message', $extra['sendPhoneVerification'])
				) {
					$extra['mail']['success'] = $extra['sendPhoneVerification']['success'];
					$extra['mail']['message'] = $extra['sendPhoneVerification']['message'];
				}
			}
			
			// Send Confirmation Email or SMS,
			// When User clicks on the Verification Link or enters the Verification Code.
			// Done in the "app/Observers/PostObserver.php" file.
			
		} else {
			
			// Send Confirmation Email or SMS
			$emailAndPhoneAreVerified = (
				isset($post->verified_email, $post->verified_phone)
				&& $post->verified_email == 1
				&& $post->verified_phone == 1
			);
			if (config('settings.mail.confirmation') == 1 && $emailAndPhoneAreVerified) {
				try {
					if (config('settings.single.listings_review_activation') == 1) {
						if ($post->reviewed == 1) {
							$post->notify(new PostReviewed($post));
						} else {
							$post->notify(new PostActivated($post));
						}
					} else {
						$post->notify(new PostReviewed($post));
					}
				} catch (\Throwable $e) {
					$extra['mail']['success'] = false;
					$extra['mail']['message'] = $e->getMessage();
				}
			}
			
		}
		
		$data['extra'] = $extra;
		
		return $this->apiResponse($data);
	}
}
