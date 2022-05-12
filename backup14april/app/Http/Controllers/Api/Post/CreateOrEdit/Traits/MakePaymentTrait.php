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

namespace App\Http\Controllers\Api\Post\CreateOrEdit\Traits;

use App\Http\Resources\PostResource;
use App\Models\PaymentMethod;
use App\Models\Scopes\VerifiedScope;
use App\Models\Scopes\ReviewedScope;
use Illuminate\Http\Request;
use App\Models\Post;

trait MakePaymentTrait
{
	/**
	 * Send Payment
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\Post $post
	 * @return array|mixed
	 */
	public function sendPayment(Request $request, Post $post)
	{
		// Build the right URLs
		$this->buildRightUrls($post);
		
		// Result Data Structure
		$resData = [
			'success' => true,
			'message' => $this->apiMsg['post']['success'],
			'result'  => new PostResource($post),
			'extra'   => [
				'payment'          => [
					'success' => false,
					'message' => $this->apiMsg['checkout']['error'],
					'result'  => null,
				],
				'previousUrl'      => $this->apiUri['previousUrl'],
				'nextUrl'          => $this->apiUri['nextUrl'],
				'paymentCancelUrl' => $this->apiUri['paymentCancelUrl'],
				'paymentReturnUrl' => $this->apiUri['paymentReturnUrl'],
			],
		];
		
		// Get Payment Method
		// NOTE: If an API call detected, only API compatible gateway will can be fetch
		// Check the /app/Models/CompatibleApiScope.php file for more information
		$paymentMethod = PaymentMethod::query()->where('id', $request->input('payment_method_id'))->first();
		
		if (!empty($paymentMethod)) {
			// Load Payment Plugin
			$plugin = load_installed_plugin(strtolower($paymentMethod->name));
			
			// Payment using the selected Payment Method
			if (!empty($plugin)) {
				try {
					// Send the Payment
					return call_user_func($plugin->class . '::sendPayment', $request, $post, $resData);
				} catch (\Throwable $e) {
					$resData['extra']['payment']['message'] = $e->getMessage();
					$resData['extra']['previousUrl'] = $this->apiUri['previousUrl'] . '?error=pluginLoading';
					
					return $this->apiResponse($resData, 400);
				}
			}
		} else {
			$resData['extra']['previousUrl'] = $this->apiUri['previousUrl'] . '?error=paymentMethodNotFound';
		}
		
		return $this->apiResponse($resData);
	}
	
	/**
	 * Payment Confirmation
	 * URL: /posts/create/{id}/payment/success
	 * - Success URL when Credit Card is used
	 * - Payment Process URL when no Credit Card is used
	 *
	 * @param null $postIdOrToken
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
	 */
	public function paymentConfirmation($postIdOrToken = null)
	{
		// Get session parameters
		$params = session()->get('params');
		if (empty($params)) {
			flash($this->apiMsg['checkout']['error'])->error();
			
			return redirect('/?error=paymentSessionNotFound');
		}
		
		// Get the entry
		$post = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])->find($params['post_id']);
		if (empty($post)) {
			flash($this->apiMsg['checkout']['error'])->error();
			
			return redirect('/?error=paymentEntryNotFound');
		}
		
		// GO TO PAYMENT METHODS
		
		if (!isset($params['payment_method_id'])) {
			flash($this->apiMsg['checkout']['error'])->error();
			
			return redirect('/?error=paymentMethodParameterNotFound');
		}
		
		// Get Payment Method
		$paymentMethod = PaymentMethod::find($params['payment_method_id']);
		if (empty($paymentMethod)) {
			flash($this->apiMsg['checkout']['error'])->error();
			
			return redirect('/?error=paymentMethodEntryNotFound');
		}
		
		// Load Payment Plugin
		$plugin = load_installed_plugin(strtolower($paymentMethod->name));
		
		// Check if the Payment Method exists
		if (empty($plugin)) {
			flash($this->apiMsg['checkout']['error'])->error();
			
			return redirect('/?error=paymentMethodPluginNotFound');
		}
		
		// Payment using the selected Payment Method
		try {
			return call_user_func($plugin->class . '::paymentConfirmation', $params, $post);
		} catch (\Throwable $e) {
			flash($e->getMessage())->error();
			
			return redirect('/?error=paymentMethodPluginError');
		}
	}
	
	/**
	 * Payment Cancel
	 * URL: /posts/create/{id}/payment/cancel
	 *
	 * @param null $postIdOrToken
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function paymentCancel($postIdOrToken = null)
	{
		// Set the error message
		flash($this->apiMsg['checkout']['cancel'])->error();
		
		// Get session parameters
		$params = session()->get('params');
		if (empty($params)) {
			return redirect('/?error=paymentCancelled&params=empty');
		}
		
		// Get ad details
		$post = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])->find($params['post_id']);
		if (empty($post)) {
			return redirect('/?error=paymentCancelled&post=empty');
		}
		
		// Delete new entries when payment cancelled (Or not)
		if (session()->has('message')) {
			if (config('settings.single.remove_new_entries_when_payment_cancelled')) {
				$post->delete();
			} else {
				flash(session()->get('message'))->success();
			}
			session()->forget('message');
		}
		
		// Build the right URLs
		$this->buildRightUrls($post);
		
		return redirect($this->apiUri['previousUrl'] . '?error=paymentCancelled')->withInput();
	}
	
	/**
	 * Build Right URLs
	 *
	 * @param \App\Models\Post $post
	 */
	public function buildRightUrls(Post $post)
	{
		// Set URLs
		$this->apiUri['previousUrl'] = str_replace(['#entryToken', '#entryId'], [$post->tmp_token, $post->id], $this->apiUri['previousUrl']);
		$this->apiUri['nextUrl'] = str_replace(['#entryToken', '#entryId'], [$post->tmp_token, $post->id], $this->apiUri['nextUrl']);
		$this->apiUri['paymentCancelUrl'] = str_replace(['#entryToken', '#entryId'], [$post->tmp_token, $post->id], $this->apiUri['paymentCancelUrl']);
		$this->apiUri['paymentReturnUrl'] = str_replace(['#entryToken', '#entryId'], [$post->tmp_token, $post->id], $this->apiUri['paymentReturnUrl']);
		
		// Get full URL
		$this->apiUri['previousUrl'] = url($this->apiUri['previousUrl']);
		$this->apiUri['nextUrl'] = url($this->apiUri['nextUrl']);
		$this->apiUri['paymentCancelUrl'] = url($this->apiUri['paymentCancelUrl']);
		$this->apiUri['paymentReturnUrl'] = url($this->apiUri['paymentReturnUrl']);
	}
}
