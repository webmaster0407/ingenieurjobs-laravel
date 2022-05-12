<?php

namespace extras\plugins\paypal;

use App\Helpers\Number;
use App\Models\Post;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use App\Helpers\Payment;
use App\Models\Package;
use Illuminate\Support\Str;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;

class Paypal extends Payment
{
	/**
	 * Send Payment
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\Post $post
	 * @param array $resData
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public static function sendPayment(Request $request, Post $post, $resData = [])
	{
		// Set the right URLs
		parent::setRightUrls($resData);
		
		// Get the Package
		$package = Package::find($request->input('package_id'));
		
		// Don't make a payment if 'price' = 0 or null
		if (empty($package) || $package->price <= 0) {
			return redirect(parent::$uri['previousUrl'] . '?error=package')->withInput();
		}
		
		// Get the amount
		$amount = Number::toFloat($package->price);
		
		// API Parameters
		$providerParams = [
			'intent'              => 'CAPTURE',
			'purchase_units'      => [
				[
					'reference_id' => md5($post->id . $package->id . uniqid('', true)), // Unique value
					'description'  => Str::limit($package->name, 122), // Maximum length: 127.
					'amount'       => [
						'value'         => $amount,
						'currency_code' => $package->currency_code,
					],
				],
			],
			'application_context' => [
				'cancel_url' => parent::$uri['paymentCancelUrl'],
				'return_url' => parent::$uri['paymentReturnUrl'],
				'brand_name' => config('app.name'),
			],
		];
		
		// Local Parameters
		$localParams = [
			'payment_method_id' => $request->input('payment_method_id'),
			'post_id'           => $post->id,
			'package_id'        => $package->id,
			'amount'            => $amount,
			'currency_code'     => $package->currency_code,
		];
		
		// Try to make the Payment
		try {
			// Creating an environment
			$clientId = config('payment.paypal.clientId');
			$clientSecret = config('payment.paypal.clientSecret');
			
			if (config('payment.paypal.mode') == 'sandbox') {
				$environment = new SandboxEnvironment($clientId, $clientSecret);
			} else {
				$environment = new ProductionEnvironment($clientId, $clientSecret);
			}
			$client = new PayPalHttpClient($environment);
			
			// Creating an Order
			$request = new OrdersCreateRequest();
			$request->prefer('return=representation');
			$request->body = $providerParams;
			
			// Make the payment
			// Call API with your client and get a response for your call
			$response = $client->execute($request);
			
			// Payment by Credit Card when Card info are provide from the form.
			if (
				isset($response->statusCode, $response->result, $response->result->status)
				&& $response->statusCode == 201
				&& $response->result->status == 'CREATED'
			) {
				
				// Save the Transaction ID at the Provider
				if (isset($response->result->id)) {
					$localParams['transaction_id'] = $response->result->id;
				}
				
				// Save local parameters into session
				session()->put('params', $localParams);
				session()->save(); // If redirection to an external URL will be done using PHP header() function
				
				if (isset($response->result->links)) {
					$link = null;
					for ($i = 0; $i < count($response->result->links); ++$i) {
						$link = $response->result->links[$i];
						if ($link->rel == 'approve') {
							break;
						}
					}
					if (!is_null($link)) {
						// Make the payment
						// Redirect the client to the PayPal payment summary page
						redirectUrl($link->href);
					}
				}
				
				// Apply actions when Payment failed
				return parent::paymentFailureActions($post, 'PayPal approved link not proved.');
				
			} else {
				
				// Apply actions when Payment failed
				return parent::paymentFailureActions($post, 'Error during PayPal order creation.');
				
			}
		} catch (HttpException|\Throwable $e) {
			
			// Apply actions when API failed
			return parent::paymentApiErrorActions($post, $e);
			
		}
	}
	
	/**
	 * @param $params
	 * @param $post
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public static function paymentConfirmation($params, $post)
	{
		// Set form page URL
		parent::$uri['previousUrl'] = str_replace(['#entryToken', '#entryId'], [$post->tmp_token, $post->id], parent::$uri['previousUrl']);
		parent::$uri['nextUrl'] = str_replace(['#entryToken', '#entryId', '#entrySlug'], [$post->tmp_token, $post->id, $post->slug], parent::$uri['nextUrl']);
		
		// Get Charge ID
		$approvedOrderId = $params['transaction_id'] ?? null;
		
		// Try to make the Payment
		try {
			// Creating an environment
			$clientId = config('payment.paypal.clientId');
			$clientSecret = config('payment.paypal.clientSecret');
			
			if (config('payment.paypal.mode') == 'sandbox') {
				$environment = new SandboxEnvironment($clientId, $clientSecret);
			} else {
				$environment = new ProductionEnvironment($clientId, $clientSecret);
			}
			$client = new PayPalHttpClient($environment);
			
			// Capturing an Order
			// Before capture, Order should be approved by the buyer using the approval URL returned to the creation order response.
			$request = new OrdersCaptureRequest($approvedOrderId);
			$request->prefer('return=representation');
			
			// Make the payment
			// Call API with your client and get a response for your call
			$response = $client->execute($request);
			
			// Check the Payment
			if (
				isset($response->statusCode, $response->result, $response->result->status)
				&& $response->statusCode == 201
				&& $response->result->status == 'COMPLETED'
			) {
				
				// Save the Transaction ID at the Provider
				if (isset($response->result->id)) {
					$params['transaction_id'] = $response->result->id;
				}
				
				// Apply actions after successful Payment
				return parent::paymentConfirmationActions($params, $post);
				
			} else {
				
				// Apply actions when Payment failed
				return parent::paymentFailureActions($post);
				
			}
		} catch (\Throwable $e) {
			
			// Apply actions when API failed
			return parent::paymentApiErrorActions($post, $e);
			
		}
	}
	
	/**
	 * @return array
	 */
	public static function getOptions(): array
	{
		$options = [];
		
		$paymentMethod = PaymentMethod::active()->where('name', 'paypal')->first();
		if (!empty($paymentMethod)) {
			$options[] = (object)[
				'name'     => mb_ucfirst(trans('admin.settings')),
				'url'      => admin_url('payment_methods/' . $paymentMethod->id . '/edit'),
				'btnClass' => 'btn-info',
			];
		}
		
		return $options;
	}
	
	/**
	 * @return bool
	 */
	public static function installed(): bool
	{
		$paymentMethod = PaymentMethod::active()->where('name', 'paypal')->first();
		if (empty($paymentMethod)) {
			return false;
		}
		
		return true;
	}
	
	/**
	 * @return bool
	 */
	public static function install(): bool
	{
		// Remove the plugin entry
		self::uninstall();
		
		// Plugin data
		$data = [
			'id'                => 1,
			'name'              => 'paypal',
			'display_name'      => 'PayPal',
			'description'       => 'Payment with PayPal',
			'has_ccbox'         => 0,
			'is_compatible_api' => 0,
			'countries'         => null,
			'lft'               => 0,
			'rgt'               => 0,
			'depth'             => 1,
			'active'            => 1,
		];
		
		try {
			// Create plugin data
			$paymentMethod = PaymentMethod::create($data);
			if (empty($paymentMethod)) {
				return false;
			}
		} catch (\Throwable $e) {
			return false;
		}
		
		return true;
	}
	
	/**
	 * @return bool
	 */
	public static function uninstall(): bool
	{
		$paymentMethod = PaymentMethod::where('name', 'paypal')->first();
		if (!empty($paymentMethod)) {
			$deleted = $paymentMethod->delete();
			if ($deleted > 0) {
				return true;
			}
		}
		
		return false;
	}
}
