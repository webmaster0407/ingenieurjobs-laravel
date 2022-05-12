<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: http://www.bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from Codecanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Helpers;

use App\Http\Controllers\Api\Base\StaticApiResponseTrait;
use App\Http\Resources\PaymentResource;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Package;
use App\Models\Payment as PaymentModel;
use App\Notifications\PaymentNotification;
use App\Notifications\PaymentSent;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Schema;

class Payment
{
	use StaticApiResponseTrait;
	
	public static $country;
	public static $lang;
	public static $msg = [];
	public static $uri = [];
	
	/**
	 * Apply actions after successful Payment
	 *
	 * @param $params
	 * @param \App\Models\Post $post
	 * @param array $resData
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public static function paymentConfirmationActions($params, Post $post, $resData = [])
	{
		// Save the Payment in database
		$resData = self::register($post, $params, $resData);
		
		if (isFromApi()) {
			
			return self::apiResponse($resData);
			
		} else {
			
			if (data_get($resData, 'extra.payment.success')) {
				flash(data_get($resData, 'extra.payment.message'))->success();
			} else {
				flash(data_get($resData, 'extra.payment.message'))->error();
			}
			
			if (data_get($resData, 'success')) {
				session()->flash('message', data_get($resData, 'message'));
				
				return redirect(self::$uri['nextUrl']);
			} else {
				// Maybe never called
				return redirect(self::$uri['nextUrl'])->withErrors(['error' => data_get($resData, 'message')]);
			}
			
		}
	}
	
	/**
	 * Apply actions when Payment failed
	 *
	 * @param $post
	 * @param null $errorMessage
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public static function paymentFailureActions($post, $errorMessage = null)
	{
		// Remove the entry
		self::removeEntry($post);
		
		// Return to Form
		$message = '';
		$message .= self::$msg['checkout']['error'];
		if (!empty($errorMessage)) {
			$message .= '<br>' . $errorMessage;
		}
		
		if (isFromApi()) {
			$data = [
				'success' => false,
				'result'  => null,
				'message' => $message,
				'extra'   => [
					'previousUrl' => self::$uri['previousUrl'] . '?error=payment',
				],
			];
			
			return self::apiResponse($data);
		} else {
			flash($message)->error();
			
			// Redirect
			return redirect(self::$uri['previousUrl'] . '?error=payment')->withInput();
		}
	}
	
	/**
	 * Apply actions when API failed
	 *
	 * @param $post
	 * @param $exception
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public static function paymentApiErrorActions($post, $exception)
	{
		// Remove the entry
		self::removeEntry($post);
		
		if (isFromApi()) {
			$data = [
				'success' => false,
				'result'  => null,
				'message' => $exception->getMessage(),
				'extra'   => [
					'previousUrl' => self::$uri['previousUrl'] . '?error=paymentApi',
				],
			];
			
			return self::apiResponse($data);
		} else {
			// Remove local parameters into the session (if exists)
			if (session()->has('params')) {
				session()->forget('params');
			}
			
			// Return to Form
			flash($exception->getMessage())->error();
			
			// Redirect
			return redirect(self::$uri['previousUrl'] . '?error=paymentApi')->withInput();
		}
	}
	
	/**
	 * Save the payment and Send payment confirmation email
	 * NOTE: Used by the OfflinePayment plugin (and must be compatible with its version)
	 *
	 * @param \App\Models\Post $post
	 * @param $params
	 * @param array $resData
	 * @return array
	 */
	public static function register(Post $post, $params, $resData = [])
	{
		$request = request();
		
		// Update ad 'reviewed'
		$post->reviewed = 1;
		$post->featured = 1;
		$post->save();
		
		// Get the payment info
		$paymentInfo = [
			'post_id'           => $post->id,
			'package_id'        => $params['package_id'],
			'payment_method_id' => $params['payment_method_id'],
			'transaction_id'    => $params['transaction_id'] ?? null,
			'amount'            => $params['amount'] ?? 0,
		];
		
		if (Schema::hasColumn((new PaymentModel())->getTable(), 'currency_code')) {
			if (isset($params['currency_code']) && !empty($params['currency_code'])) {
				$currencyCode = $params['currency_code'];
			} else {
				$package = Package::find($params['package_id']);
				$currencyCode = (!empty($package)) ? $package->currency_code : null;
			}
			$paymentInfo['currency_code'] = $currencyCode;
		}
		
		// Check the uniqueness of the payment
		$payment = PaymentModel::where('post_id', $paymentInfo['post_id'])
			->where('package_id', $paymentInfo['package_id'])
			->where('payment_method_id', $params['payment_method_id'])
			->first();
		
		if (!empty($payment)) {
			$resData['extra']['payment']['success'] = true;
			$resData['extra']['payment']['message'] = self::$msg['checkout']['success'];
			$resData['extra']['payment']['result'] = $payment = (new PaymentResource($payment))->toArray($request);
			
			return $resData;
		}
		
		// Save the payment
		$payment = new PaymentModel($paymentInfo);
		$payment->save();
		
		$resData['extra']['payment']['success'] = true;
		$resData['extra']['payment']['message'] = self::$msg['checkout']['success'];
		$resData['extra']['payment']['result'] = (new PaymentResource($payment))->toArray($request);
		
		// SEND EMAILS
		
		// Get all admin users
		$admins = User::permission(Permission::getStaffPermissions())->get();
		
		// Send Payment Email Notifications
		if (config('settings.mail.payment_notification') == 1) {
			// Send Confirmation Email
			try {
				$post->notify(new PaymentSent($payment, $post));
			} catch (\Exception $e) {
				// Not Necessary To Notify
			}
			
			// Send to Admin the Payment Notification Email
			try {
				if ($admins->count() > 0) {
					Notification::send($admins, new PaymentNotification($payment, $post));
				}
			} catch (\Exception $e) {
				// Not Necessary To Notify
			}
		}
		
		return $resData;
	}
	
	/**
	 * Remove the ad for public - If there are no free packages
	 *
	 * @param Post $post
	 * @return bool
	 * @throws \Exception
	 */
	public static function removeEntry(Post $post): bool
	{
		if (empty($post)) {
			return false;
		}
		
		// Don't delete the ad when user try to UPGRADE her ads
		if (empty($post->tmp_token)) {
			return false;
		}
		
		$guard = isFromApi() ? 'sanctum' : null;
		
		if (auth($guard)->check()) {
			// Delete the ad if user is logged in and there are no free package
			if (Package::where('price', 0)->count() == 0) {
				// But! User can access to the ad from her area to UPGRADE it!
				// You can UNCOMMENT the line below if you don't want the feature above.
				// $post->delete();
			}
		} else {
			// Delete the ad if user is a guest
			$post->delete();
		}
		
		return true;
	}
	
	/**
	 * Set the right URLs
	 *
	 * @param array $resData
	 */
	public static function setRightUrls($resData)
	{
		self::$uri['previousUrl'] = $resData['extra']['previousUrl'] ?? self::$uri['previousUrl'];
		self::$uri['nextUrl'] = $resData['extra']['nextUrl'] ?? self::$uri['nextUrl'];
		self::$uri['paymentCancelUrl'] = $resData['extra']['paymentCancelUrl'] ?? self::$uri['paymentCancelUrl'];
		self::$uri['paymentReturnUrl'] = $resData['extra']['paymentReturnUrl'] ?? self::$uri['paymentReturnUrl'];
	}
}
