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

namespace App\Http\Controllers\Api\Base;

use App\Http\Resources\EmptyResource;
use App\Http\Resources\EmptyCollection;
use Error;
use Exception;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

trait StaticApiResponseTrait
{
	/**
	 * Return generic json response with the given data.
	 *
	 * @param array $data
	 * @param int $statusCode
	 * @param array $headers
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function apiResponse($data = [], $statusCode = 200, $headers = [])
	{
		// https://laracasts.com/discuss/channels/laravel/pagination-data-missing-from-api-resource
		
		$result = self::parseGivenData($data, $statusCode, $headers);
		
		return response()->json(
			$result['content'],
			$result['statusCode'],
			$result['headers'],
			JSON_UNESCAPED_UNICODE
		);
	}
	
	/**
	 * @param array $data
	 * @param int $statusCode
	 * @param array $headers
	 * @return array
	 */
	public static function parseGivenData($data = [], $statusCode = 200, $headers = [])
	{
		$responseStructure = [
			'success' => $data['success'],
			'message' => $data['message'] ?? null,
			'result'  => $data['result'] ?? null,
		];
		
		if (isset($data['extra'])) {
			$responseStructure['extra'] = $data['extra'];
		}
		
		if (isset($data['errors'])) {
			$responseStructure['errors'] = $data['errors'];
		}
		
		if (isset($data['status'])) {
			$statusCode = $data['status'];
		}
		
		// NOTE: 'bootstrap-fileinput' need 'error' (text) element & the optional 'errorkeys' (array) element
		if (isset($data['error'])) {
			$responseStructure['error'] = $data['error'];
		}
		
		if (isset($data['exception']) && ($data['exception'] instanceof Error || $data['exception'] instanceof Exception)) {
			if (config('app.env') !== 'production') {
				$responseStructure['exception'] = [
					'message' => $data['exception']->getMessage(),
					'file'    => $data['exception']->getFile(),
					'line'    => $data['exception']->getLine(),
					'code'    => $data['exception']->getCode(),
					'trace'   => $data['exception']->getTrace(),
				];
			}
			
			if ($statusCode === 200) {
				$statusCode = 500;
			}
		}
		
		if ($data['success'] === false) {
			if (isset($data['error_code'])) {
				$responseStructure['error_code'] = $data['error_code'];
			} else {
				$responseStructure['error_code'] = 1;
			}
		}
		
		return ['content' => $responseStructure, 'statusCode' => $statusCode, 'headers' => $headers];
	}
	
	/**
	 * @param \Illuminate\Http\Resources\Json\JsonResource $resource
	 * @param null $message
	 * @param int $statusCode
	 * @param array $headers
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondWithResource(JsonResource $resource, $message = null, $statusCode = 200, $headers = [])
	{
		// https://laracasts.com/discuss/channels/laravel/pagination-data-missing-from-api-resource
		
		return self::apiResponse([
			'success' => true,
			'result'  => $resource,
			'message' => $message,
		], $statusCode, $headers);
	}
	
	/**
	 * @param \Illuminate\Http\Resources\Json\ResourceCollection $resourceCollection
	 * @param null $message
	 * @param int $statusCode
	 * @param array $headers
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondWithCollection(ResourceCollection $resourceCollection, $message = null, $statusCode = 200, $headers = [])
	{
		// https://laracasts.com/discuss/channels/laravel/pagination-data-missing-from-api-resource
		
		return self::apiResponse([
			'success' => true,
			'result'  => $resourceCollection->response()->getData(),
		], $statusCode, $headers);
	}
	
	/**
	 * Respond with success.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondSuccess($message = '')
	{
		return self::apiResponse(['success' => true, 'message' => $message]);
	}
	
	/**
	 * Respond with error.
	 *
	 * @param $message
	 * @param int $statusCode
	 * @param \Exception|null $exception
	 * @param int $error_code
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondError($message, int $statusCode = 400, Exception $exception = null, int $error_code = 1)
	{
		return self::apiResponse([
			'success'    => false,
			'message'    => $message ?? 'There was an internal error, Pls try again later',
			'exception'  => $exception,
			'error_code' => $error_code,
		], $statusCode);
	}
	
	/**
	 * Respond with created.
	 *
	 * @param $data
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondCreated($data)
	{
		return self::apiResponse($data, Response::HTTP_CREATED);
	}
	
	/**
	 * Respond with update.
	 *
	 * @param $data
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondUpdated($data)
	{
		return self::apiResponse($data, 200);
	}
	
	/**
	 * Respond with no content.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondNoContent($message = 'No Content Found')
	{
		return self::apiResponse(['success' => false, 'message' => $message], 200);
	}
	
	/**
	 * Respond with no content.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondNoContentResource($message = 'No Content Found')
	{
		return self::respondWithResource(new EmptyResource([]), $message);
	}
	
	/**
	 * Respond with no content.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondNoContentCollection($message = 'No Content Found')
	{
		return self::respondWithCollection(new EmptyCollection([]), $message);
	}
	
	/**
	 * Respond with unauthorized.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondUnAuthorized($message = 'Unauthorized')
	{
		return self::respondError($message, Response::HTTP_UNAUTHORIZED);
	}
	
	/**
	 * Respond with forbidden.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondForbidden($message = 'Forbidden')
	{
		return self::respondError($message, Response::HTTP_FORBIDDEN);
	}
	
	/**
	 * Respond with not found.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondNotFound($message = 'Not Found')
	{
		return self::respondError($message, 404);
	}
	
	/**
	 * Respond with internal error.
	 *
	 * @param string $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondInternalError($message = 'Internal Error')
	{
		return self::respondError($message, 500);
	}
	
	/**
	 * @param \Illuminate\Validation\ValidationException $exception
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected static function respondValidationErrors(ValidationException $exception)
	{
		return self::apiResponse([
			'success' => false,
			'message' => $exception->getMessage(),
			'errors'  => $exception->errors(),
		], Response::HTTP_UNPROCESSABLE_ENTITY);
	}
}
