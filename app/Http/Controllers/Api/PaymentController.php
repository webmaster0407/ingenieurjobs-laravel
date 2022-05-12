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

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Payment\MultiStepsPaymentTrait;
use App\Http\Requests\PackageRequest;
use App\Models\Payment;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\PaymentResource;

/**
 * @group Payments
 */
class PaymentController extends BaseController
{
	use MultiStepsPaymentTrait;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			// Multi Steps Form
			// Set the Payment System Settings
			if (config('settings.single.publication_form_type') == '1') {
				$this->paymentSettings();
			}
			
			return $next($request);
		});
	}
	
	/**
	 * List payments
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam embed string Comma-separated list of the payment relationships for Eager Loading - Possible values: post,paymentMethod,package,currency. Example: null
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at. Example: created_at
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		if (!auth('sanctum')->check()) {
			return $this->respondUnAuthorized();
		}
		
		$user = auth('sanctum')->user();
		
		$payments = Payment::query();
		
		$payments->whereHas('post', function ($query) use ($user) {
			$query->currentCountry();
			$query->whereHas('user', function ($query) use ($user) {
				$query->where('user_id', $user->id);
			});
		});
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('post', $embed)) {
			$payments->with('post');
		}
		if (in_array('paymentMethod', $embed)) {
			$payments->with('paymentMethod');
		}
		if (in_array('package', $embed)) {
			if (in_array('currency', $embed)) {
				$payments->with(['package' => function ($builder) { $builder->with(['currency']); }]);
			} else {
				$payments->with('package');
			}
		}
		
		// Sorting
		$payments = $this->applySorting($payments, ['created_at']);
		
		$payments = $payments->paginate($this->perPage);
		
		$collection = new EntityCollection(class_basename($this), $payments);
		
		return $this->respondWithCollection($collection);
	}
	
	/**
	 * Get payment
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam embed string Comma-separated list of the payment relationships for Eager Loading - Possible values: post,paymentMethod,package,currency. Example: null
	 *
	 * @urlParam id int required The payment's ID. Example: 2
	 *
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		if (!auth('sanctum')->check()) {
			return $this->respondUnAuthorized();
		}
		
		$payment = Payment::query()->where('id', $id);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('post', $embed)) {
			$payment->with('post');
		}
		if (in_array('paymentMethod', $embed)) {
			$payment->with('paymentMethod');
		}
		if (in_array('package', $embed)) {
			if (in_array('currency', $embed)) {
				$payment->with(['package' => function ($builder) { $builder->with(['currency']); }]);
			} else {
				$payment->with('package');
			}
		}
		
		$payment = $payment->firstOrFail();
		
		$resource = new PaymentResource($payment);
		
		return $this->respondWithResource($resource);
	}
	
	/**
	 * Store payment
	 *
	 * Note: This endpoint is only available for the multi steps post edition.
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam package int Selected package ID.
	 *
	 * @bodyParam country_code string required The code of the user's country. Example: US
	 * @bodyParam post_id int required The post's ID. Example: 2
	 * @bodyParam package_id int required The package's ID (Auto filled when the query parameter 'package' is set).
	 * @bodyParam payment_method_id int The payment method's ID (required when the selected package's price is > 0). Example: 5
	 *
	 * @param \App\Http\Requests\PackageRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function store(PackageRequest $request)
	{
		// Check if the form type is 'Single Step Form'
		if (config('settings.single.publication_form_type') == '2') {
			abort(404);
		}
		
		return $this->storeMultiStepsPayment($request);
	}
}
