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

namespace App\Http\Controllers\Web\Auth\Traits;

use Prologue\Alerts\Facades\Alert;

trait PhoneVerificationTrait
{
	/**
	 * Show the ReSend Verification SMS Link
	 *
	 * @param $entity
	 * @param $entitySlug
	 * @return bool
	 */
	public function showReSendVerificationSmsLink($entity, $entitySlug)
	{
		if (empty($entity) || empty(data_get($entity, 'id')) || empty($entitySlug)) {
			return false;
		}
		
		// Show ReSend Verification SMS Link
		if (session()->has('phoneVerificationSent')) {
			$url = url($entitySlug . '/' . $entity['id'] . '/verify/resend/sms');
			
			$message = t('Resend the verification message to verify your phone number');
			$message .= ' <a href="' . $url . '" class="btn btn-sm btn-warning">' . t('Re-send') . '</a>';
			
			flash($message)->warning();
		}
		
		return true;
	}
	
	/**
	 * URL: Re-Send the verification SMS
	 *
	 * @param $entityId
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function reSendPhoneVerification($entityId)
	{
		// Non-admin data resources
		$entitySlug = request()->segment(1);
		
		// Admin data resources
		if (isAdminPanel()) {
			$entitySlug = request()->segment(2);
		}
		
		// Add required data in the request for API
		request()->merge(['entitySlug' => $entitySlug]);
		
		// Call API endpoint
		$endpoint = '/' . $entitySlug . '/' . $entityId . '/verify/resend/sms';
		$data = makeApiRequest('get', $endpoint, request()->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		if (data_get($data, 'isSuccessful')) {
			// Notification Message
			if (data_get($data, 'success')) {
				if (isAdminPanel()) {
					Alert::success($message)->flash();
				} else {
					flash($message)->success();
				}
			} else {
				if (isAdminPanel()) {
					Alert::error($message)->flash();
				} else {
					flash($message)->error();
				}
			}
			
			if (! data_get($data, 'extra.phoneVerificationSent')) {
				// Remove Notification Trigger
				if (session()->has('phoneVerificationSent')) {
					session()->forget('phoneVerificationSent');
				}
			}
		} else {
			if (isAdminPanel()) {
				Alert::error($message)->flash();
			} else {
				flash($message)->error();
			}
		}
		
		return back();
	}
}
