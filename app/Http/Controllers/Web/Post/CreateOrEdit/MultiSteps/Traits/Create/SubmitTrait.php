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

namespace App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps\Traits\Create;

use App\Models\Package;
use App\Models\Post;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait SubmitTrait
{
	/**
	 * Store all input data in database
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	private function storeInputDataInDatabase(Request $request)
	{
		// Get all saved input data
		$postInput = (array)$request->session()->get('postInput');
		$paymentInput = (array)$request->session()->get('paymentInput');
		
		// Create the global input to send for database saving
		$inputArray = $postInput;
		
		if (isset($inputArray['company'])) {
			if (isset($inputArray['company']['id'])) {
				unset($inputArray['company']['id']);
			}
			
			if (isset($inputArray['company']['logo'])) {
				$filePath = $inputArray['company']['logo'];
				if (!empty($filePath)) {
					$uploadedFile = File::pathToUploadedFile($filePath);
					$inputArray['company']['logo'] = $uploadedFile;
				}
			}
		}
		if (isset($inputArray['company_id']) && $inputArray['company_id'] == 'new') {
			$inputArray['company_id'] = 0;
		}
		$inputArray = array_merge($inputArray, $paymentInput);
		
		// Add required data in the request for API
		$inputArray['count_packages'] = $this->countPackages ?? 0;
		$inputArray['count_payment_methods'] = $this->countPaymentMethods ?? 0;
		
		request()->merge($inputArray);
		
		if (isset($inputArray['company'], $inputArray['company']['logo'])) {
			if (!empty($inputArray['company']['logo'])) {
				request()->files->set('company.logo', $inputArray['company']['logo']);
			}
		}
		
		// Call API endpoint
		$endpoint = '/posts';
		$data = makeApiRequest('post', $endpoint, $request->all(), [], true);
		
		//dd($data);
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			flash($message)->error();
			
			if (data_get($data, 'extra.previousUrl')) {
				return redirect(data_get($data, 'extra.previousUrl'))->withInput($request->except('company.logo'));
			} else {
				return redirect()->back()->withInput($request->except('company.logo'));
			}
		}
		
		// Notification Message
		if (data_get($data, 'success')) {
			session()->put('message', $message);
			
			// Save ad Id in session (for next steps)
			if (data_get($data, 'result.id')) {
				session()->put('postId', data_get($data, 'result.id'));
			}
			
			// Clear Temporary Inputs & Files
			$this->clearTemporaryInput();
		} else {
			flash($message)->error();
			
			return redirect()->back()->withInput($request->except('company.logo'));
		}
		
		// Get Next URL
		$nextUrl = url('posts/create/finish');
		
		if (!empty($paymentInput)) {
			// Check if the payment process has been triggered
			// NOTE: Payment bypass email or phone verification
			if ($request->filled('package_id') && $request->filled('payment_method_id')) {
				$postId = data_get($data, 'result.id', 0);
				$post = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
					->where('id', $postId)->with([
						'latestPayment' => function ($builder) { $builder->with(['package']); },
					])->first();
				
				if (!empty($post)) {
					// Make Payment (If needed) - By not using REST API
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
							// Get the next URL
							$nextUrl = $this->apiUri['nextUrl'];
							$previousUrl = $this->apiUri['previousUrl'];
							
							// Send the Payment
							$paymentData = $this->sendPayment($request, $post);
							
							// Check if a Payment has been sent
							if (data_get($paymentData, 'extra.payment')) {
								$paymentMessage = data_get($paymentData, 'extra.payment.message');
								if (data_get($paymentData, 'extra.payment.success')) {
									flash($paymentMessage)->success();
									
									if (data_get($paymentData, 'extra.nextUrl')) {
										$nextUrl = data_get($paymentData, 'extra.nextUrl');
									}
									
									return redirect($nextUrl);
								} else {
									flash($paymentMessage)->error();
									
									if (data_get($paymentData, 'extra.previousUrl')) {
										$previousUrl = data_get($paymentData, 'extra.previousUrl');
									}
									
									return redirect($previousUrl)->withInput();
								}
							}
						}
					}
				}
			}
		}
		
		// Get Post Resource
		$post = data_get($data, 'result');
		
		if (
			data_get($data, 'extra.sendEmailVerification.emailVerificationSent')
			|| data_get($data, 'extra.sendPhoneVerification.phoneVerificationSent')
		) {
			// Save the Next URL before verification
			$nextUrl = qsUrl($nextUrl, request()->only(['package']), null, false);
			session()->put('itemNextUrl', $nextUrl);
			
			if (data_get($data, 'extra.sendEmailVerification.emailVerificationSent')) {
				session()->put('emailVerificationSent', true);
				
				// Show the Re-send link
				$this->showReSendVerificationEmailLink($post, 'posts');
			}
			
			if (data_get($data, 'extra.sendPhoneVerification.phoneVerificationSent')) {
				session()->put('phoneVerificationSent', true);
				
				// Show the Re-send link
				$this->showReSendVerificationSmsLink($post, 'posts');
				
				// Go to Phone Number verification
				$nextUrl = url('posts/verify/phone/');
			}
		}
		
		$nextUrl = qsUrl($nextUrl, request()->only(['package']), null, false);
		
		// Mail Notification Message
		if (data_get($data, 'extra.mail.message')) {
			$mailMessage = data_get($data, 'extra.mail.message');
			if (data_get($data, 'extra.mail.success')) {
				flash($mailMessage)->success();
			} else {
				flash($mailMessage)->error();
			}
		}
		
		return redirect($nextUrl);
	}
}
