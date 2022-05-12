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

namespace App\Http\Controllers\Api\Auth\Traits;

use App\Notifications\PhoneVerification;

trait PhoneVerificationTrait
{
	/**
	 * SMS: Send code
	 *
	 * Send mobile phone verification token by SMS
	 *
	 * @queryParam locale string The language code (optional).
	 *
	 * @param $entity
	 * @param bool $displayFlashMessage
	 * @return array
	 */
	public function sendPhoneVerification($entity, $displayFlashMessage = true)
	{
		$data = []; // No $extra here.
		
		$data['success'] = true;
		$data['phoneVerificationSent'] = false;
		
		// Get Entity
		$entityRef = $this->getEntityRef();
		if (empty($entity) || empty($entityRef)) {
			$message = t('Entity ID not found');
			
			$data['success'] = false;
			$data['message'] = $message;
			
			return $data;
		}
		
		// Send Confirmation Email
		try {
			if (request()->filled('locale')) {
				$locale = (array_key_exists(request()->get('locale'), getSupportedLanguages()))
					? request()->get('locale')
					: null;
				
				if (!empty($locale)) {
					$entity->notify((new PhoneVerification($entity, $entityRef))->locale($locale));
				} else {
					$entity->notify(new PhoneVerification($entity, $entityRef));
				}
			} else {
				$entity->notify(new PhoneVerification($entity, $entityRef));
			}
			
			if ($displayFlashMessage) {
				$message = t('An activation code has been sent to you to verify your phone number');
				
				$data['success'] = true;
				$data['message'] = $message;
			}
			
			$data['phoneVerificationSent'] = true;
			
			return $data;
		} catch (\Throwable $e) {
			$message = changeWhiteSpace($e->getMessage());
			
			$data['success'] = false;
			$data['message'] = $message;
			
			return $data;
		}
	}
	
	/**
	 * SMS: Re-send code
	 *
	 * Re-send mobile phone verification token by SMS
	 *
	 * @queryParam entitySlug string The slug of the entity to verify ('users' or 'posts'). Example: users
	 *
	 * @param $entityId
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function reSendPhoneVerification($entityId)
	{
		// Get Entity Reference ID
		$entitySlug = request()->get('entitySlug');
		
		$data = [];
		$data['success'] = true;
		
		$extra = [];
		$extra['phoneVerificationSent'] = true;
		
		// Get Entity
		$entityRef = $this->getEntityRef($entitySlug);
		if (empty($entityRef)) {
			return $this->respondNotFound(t('Entity ID not found'));
		}
		
		// Get Entity by Id
		$model = $entityRef['namespace'];
		$entity = $model::withoutGlobalScopes($entityRef['scopes'])->where('id', $entityId)->first();
		if (empty($entity)) {
			return $this->respondNotFound(t('Entity ID not found'));
		}
		
		// Check if the Phone is already verified
		if ($entity->verified_phone == 1) {
			
			$data['success'] = false;
			$data['message'] = t('Your field is already verified', ['field' => t('phone_number')]);
			
			// Remove Notification Trigger
			$extra['phoneVerificationSent'] = false;
			
		} else {
			
			// Re-Send the confirmation
			if ($this->sendPhoneVerification($entity, false)) {
				if (isAdminPanel()) {
					$message = t('The activation code has been sent to the user to verify his phone number');
				} else {
					$message = t('The activation code has been sent to you to verify your phone number');
				}
				
				$data['success'] = true;
				$data['message'] = $message;
				
				// Remove Notification Trigger
				$extra['phoneVerificationSent'] = false;
			}
			
		}
		
		$data['extra'] = $extra;
		
		return $this->apiResponse($data);
	}
}
