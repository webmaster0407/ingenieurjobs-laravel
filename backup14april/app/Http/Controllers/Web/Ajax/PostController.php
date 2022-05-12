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

namespace App\Http\Controllers\Web\Ajax;

use App\Helpers\UrlGen;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Http\Request;
use Larapen\TextToImage\Facades\TextToImage;

class PostController extends FrontController
{
	/**
	 * PostController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function savePost(Request $request)
	{
		// Call API endpoint
		$endpoint = '/savedPosts';
		$data = makeApiRequest('post', $endpoint, $request->all(), [], true);
		
		// Parsing the API response
		$status = data_get($data, 'status');
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			return response()->json(['message' => $message], $status, [], JSON_UNESCAPED_UNICODE);
		}
		
		// Get entry resource
		$savedPost = data_get($data, 'result');
		
		// AJAX response data
		$result = [
			'isLogged' => !($status == 401), // No longer used. Will be removed.
			'postId'   => $request->input('post_id'),
			'isSaved'  => !empty($savedPost),
			'message'  => $message,
			'loginUrl' => UrlGen::login(), // No longer used. Will be removed.
		];
		
		return response()->json($result, $status, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function saveSearch(Request $request)
	{
		// Call API endpoint
		$endpoint = '/savedSearches';
		$data = makeApiRequest('post', $endpoint, $request->all(), [], true);
		
		// Parsing the API response
		$status = data_get($data, 'status');
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			return response()->json(['message' => $message], $status, [], JSON_UNESCAPED_UNICODE);
		}
		
		// Validate data extraction
		$query = null;
		$queryUrl = $request->input('url');
		if (!empty($queryUrl)) {
			$tmp = parse_url($queryUrl);
			$query = $tmp['query'] ?? null;
		}
		if (empty($query)) {
			$errorMsg = 'The "query" parameter cannot not be extracted.';
			
			return response()->json(['message' => $errorMsg], 400, [], JSON_UNESCAPED_UNICODE);
		}
		
		// Get entry resource
		$savedSearch = data_get($data, 'result');
		
		// AJAX response data
		$result = [
			'isLogged' => !($status == 401), // No longer used. Will be removed.
			'query'    => $query,
			'isSaved'  => !empty($savedSearch),
			'message'  => $message,
			'loginUrl' => UrlGen::login(), // No longer used. Will be removed.
		];
		
		return response()->json($result, $status, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getPhone(Request $request)
	{
		// Call API endpoint
		$endpoint = '/posts/' . $request->input('post_id', 0);
		$data = makeApiRequest('get', $endpoint, $request->all());
		
		// Parsing the API response
		$status = data_get($data, 'status');
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			return response()->json(['message' => $message], $status, [], JSON_UNESCAPED_UNICODE);
		}
		
		// Get entry resource
		$post = data_get($data, 'result');
		
		// Get the phone
		$phone = data_get($post, 'phone');
		$phoneLink = 'tel:' . $phone;
		
		if (config('settings.single.convert_phone_number_to_img')) {
			try {
				$phone = TextToImage::make($phone, config('larapen.core.textToImage'));
			} catch (\Throwable $e) {
				$phone = data_get($post, 'phone');
			}
		}
		
		$data = [
			'phone' => $phone,
			'link'  => $phoneLink,
		];
		
		return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
	}
}
