<?php
/*
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

/**
 * Check if the current request is from the API
 *
 * @return bool
 */
function isFromApi(): bool
{
	$isFromApi = false;
	
	if (
		request()->segment(1) == 'api'
		|| (request()->hasHeader('X-API-CALLED') && request()->header('X-API-CALLED'))
	) {
		$isFromApi = true;
	}
	
	return $isFromApi;
}

/**
 * Make an API HTTP request
 *
 * @param string $method
 * @param string $uri
 * @param array $data
 * @param array $headers
 * @param bool $asMultipart
 * @param bool $forInternalEndpoint
 * @return array|mixed
 */
function makeApiRequest(string $method, string $uri, array $data = [], array $headers = [], bool $asMultipart = false, bool $forInternalEndpoint = true)
{
	// Check if the endpoint is an external one
	$isRemoteEndpoint = (
		Str::startsWith($uri, 'http')
		&& !Str::startsWith($uri, url('/'))
	);
	
	if (!$isRemoteEndpoint) {
		// HTTP Client default headers for API calls
		$defaultHeaders = [
			'Content-Language' => request()->input('language_code', config('app.locale')),
			'Accept'           => 'application/json',
			'X-AppType'        => 'web',
			'X-CSRF-TOKEN'     => csrf_token(),
		];
		if (env('APP_API_TOKEN')) {
			$defaultHeaders['X-AppApiToken'] = env('APP_API_TOKEN');
		}
		if (session()->has('authToken')) {
			$defaultHeaders['Authorization'] = 'Bearer ' . session()->get('authToken');
		}
		// Prevent HTTP request caching for methods that can update the database
		if (in_array(strtoupper($method), ['POST', 'PUT', 'DELETE', 'PATCH', 'CREATE', 'UPDATE'])) {
			$noCacheHeaders = config('larapen.core.noCacheHeaders');
			if (!empty($noCacheHeaders)) {
				foreach ($noCacheHeaders as $key => $value) {
					$defaultHeaders[$key] = $value;
				}
			}
		}
		$headers = array_merge($defaultHeaders, $headers);
	}
	
	if (strtolower(env('APP_HTTP_CLIENT')) == 'curl' || $isRemoteEndpoint) {
		return curlHttpRequest($method, $uri, $data, $headers, $asMultipart, $forInternalEndpoint);
	} else {
		return laravelSubRequest($method, $uri, $data, $headers, $asMultipart, $forInternalEndpoint);
	}
}

/**
 * Make an API HTTP request internally (using Laravel sub requests)
 *
 * NOTE: By sending a sub request within the application,
 * you can simply consume your applications API without having to send separated, slower HTTP requests.
 *
 * @param string $method
 * @param string $uri
 * @param array $data
 * @param array $headers
 * @param bool $asMultipart
 * @param bool $forInternalEndpoint
 * @return array|mixed
 */
function laravelSubRequest(string $method, string $uri, array $data = [], array $headers = [], bool $asMultipart = false, bool $forInternalEndpoint = true)
{
	$baseUrl = '/api';
	$endpoint = $forInternalEndpoint ? ($baseUrl . $uri) : $uri;
	
	// Store the original request headers and input data
	config()->set('request.original.headers', request()->headers->all());
	$originalInput = request()->input();
	
	try {
		
		// Request segments are not available when making sub requests,
		// The 'X-API-CALLED' header is set for the function isFromApi()
		$localHeaders = [
			'X-API-CALLED' => true,
		];
		$headers = array_merge($headers, $localHeaders);
		
		// Create the request to the internal API
		$cookies = [];
		$request = request()->create($endpoint, strtoupper($method), $data, $cookies, request()->file());
		
		// Apply the available headers to the request
		if (!empty($headers)) {
			foreach ($headers as $key => $value) {
				request()->headers->set($key, $value);
			}
		}
		
		// Dispatch the request instance with the router
		// NOTE: If you're consuming your own API,
		// use app()->handle() instead of \Route::dispatch()
		// $response = app()->handle($request);
		$response = \Route::dispatch($request);
		
		// Fetch the response
		// dd($response->getData());
		$json = $response->getContent();
		
		// dd($json); // Debug!
		$array = json_decode($json, true);
		
		$array['isSuccessful'] = $response->isSuccessful();
		$array['status'] = $response->status();
		
	} catch (\Throwable $e) {
		$message = $e->getMessage();
		if (empty($message)) {
			$message = 'Error encountered during API request.';
		}
		$array = [
			'success'      => false,
			'message'      => $message,
			'result'       => null,
			'isSuccessful' => false,
			'status'       => 500,
		];
	}
	
	// Restore the request headers & input back to the original state
	if (config('request.original.headers')) {
		request()->headers->replace(config('request.original.headers'));
	}
	request()->replace($originalInput);
	
	return $array;
}

/**
 * Make an API HTTP request remotely (using CURL)
 *
 * @param string $method
 * @param string $uri
 * @param array $data
 * @param array $headers
 * @param bool $asMultipart
 * @param bool $forInternalEndpoint
 * @return array|mixed
 */
function curlHttpRequest(string $method, string $uri, array $data = [], array $headers = [], bool $asMultipart = false, bool $forInternalEndpoint = true)
{
	$options = [
		'verify' => false,
		'debug'  => false,
	];
	
	$baseUrl = url('api');
	$endpoint = $forInternalEndpoint ? ($baseUrl . $uri) : $uri;
	
	try {
		
		$client = \Illuminate\Support\Facades\Http::withOptions($options);
		
		if (!empty($headers)) {
			$client->withHeaders($headers);
		}
		if ($asMultipart) {
			$client->asMultipart();
			$data = multipartFormData($data);
			$method = 'post';
		}
		if (strtolower($method) == 'get') {
			$response = $client->get($endpoint, $data);
		} else if (strtolower($method) == 'post') {
			$response = $client->post($endpoint, $data);
		} else if (strtolower($method) == 'put') {
			$response = $client->put($endpoint, $data);
		} else if (strtolower($method) == 'delete') {
			$response = $client->delete($endpoint, $data);
		} else {
			$options = [];
			if (!empty($data)) {
				$options = ['multipart' => $data];
			}
			$response = $client->send($method, $endpoint, $options);
		}
		$array = $response->json();
		
		$array['isSuccessful'] = $response->successful();
		$array['status'] = $response->status();
		
	} catch (\Throwable $e) {
		$array = [
			'success'      => false,
			'message'      => $e->getMessage(),
			'result'       => null,
			'isSuccessful' => false,
			'status'       => 500,
		];
	}
	
	return $array;
}

/**
 * Convert POST request to Guzzle multipart array format
 *
 * @param $inputs
 * @return array
 */
function multipartFormData($inputs): array
{
	$formData = [];
	
	$inputs = \App\Helpers\Arr::flattenPost($inputs);
	
	if (is_array($inputs) && !empty($inputs)) {
		foreach ($inputs as $key => $value) {
			if ($value instanceof \Illuminate\Http\UploadedFile) {
				$formData[] = [
					'name'     => $key,
					'contents' => fopen($value->getPathname(), 'r'),
					'filename' => $value->getClientOriginalName(),
				];
			} else {
				$formData[] = [
					'name'     => $key,
					'contents' => $value,
				];
			}
		}
	}
	
	return $formData;
}

/**
 * @return string|string[]|null
 */
function getApiAuthToken()
{
	$token = null;
	
	if (request()->hasHeader('Authorization')) {
		$authorization = request()->header('Authorization');
		if (strpos($authorization, 'Bearer') !== false) {
			$token = str_replace('Bearer ', '', $authorization);
		}
	}
	
	return $token;
}

/**
 * @return bool
 */
function isPostCreationRequest(): bool
{
	$isPostCreationRequest = false;
	
	if (isFromApi()) {
		if (Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'Api\PostController@store')) {
			$isPostCreationRequest = true;
		}
	} else {
		$isNewEntryUri = (
			(
				config('settings.single.publication_form_type') == '1'
				&& request()->segment(2) == 'create'
			)
			|| (
				config('settings.single.publication_form_type') == '2'
				&& request()->segment(1) == 'create'
			)
		);
		
		if (
			$isNewEntryUri
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'Web\Post\CreateOrEdit\MultiSteps\CreateController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'Web\Post\CreateOrEdit\SingleStep\CreateController')
		) {
			$isPostCreationRequest = true;
		}
	}
	
	return $isPostCreationRequest;
}
