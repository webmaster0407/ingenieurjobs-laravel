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

namespace App\Exceptions\Traits;

use App\Http\Controllers\Api\Base\ApiResponseTrait;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Response;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Throwable;

trait JsonRenderTrait
{
	use ApiResponseTrait;
	
	public function jsonRender(Throwable $e)
	{
		// Show HTTP exceptions
		if ($this->isHttpException($e)) {
			if (method_exists($e, 'getStatusCode')) {
				if ($e->getStatusCode() == 404) {
					$msg = !empty($e->getMessage()) ? $e->getMessage() : 'Page not found.';
					
					$data = [
						'success' => false,
						'message' => $msg,
					];
					
					return $this->apiResponse($data, 404);
				}
			}
		}
		
		if ($e instanceof PostTooLargeException) {
			$message = 'Maximum data (including files to upload) size to post and memory usage are limited on the server.';
			$data = [
				'success' => false,
				'message' => $message,
				'code'    => $e->getCode(),
			];
			
			if (request()->header('X-AppType') == 'web') {
				$data['error'] = $message; // for bootstrap-fileinput
			}
			
			return $this->apiResponse($data, Response::HTTP_REQUEST_ENTITY_TOO_LARGE);
		}
		
		if ($e instanceof AuthenticationException) {
			$data = [
				'success' => false,
				'message' => 'Unauthenticated or Token Expired, Please Login',
			];
			
			return $this->apiResponse($data, Response::HTTP_UNAUTHORIZED);
		}
		
		if ($e instanceof ThrottleRequestsException) {
			$data = [
				'success' => false,
				'message' => 'Too Many Requests, Please Slow Down',
			];
			
			return $this->apiResponse($data, Response::HTTP_TOO_MANY_REQUESTS);
		}
		
		if ($e instanceof ModelNotFoundException) {
			$data = [
				'success' => false,
				'message' => 'Entry for ' . str_replace('App\\', '', $e->getModel()) . ' not found',
			];
			
			return $this->apiResponse($data, 404);
		}
		
		if ($e instanceof TokenMismatchException) {
			$data = [
				'success' => false,
				'message' => t('Your session has expired'),
			];
			
			return $this->apiResponse($data, Response::HTTP_UNAUTHORIZED);
		}
		
		if ($e instanceof ValidationException) {
			$message = $e->getMessage();
			
			$data = [
				'success' => false,
				'message' => $e->getMessage(),
			];
			
			// Get validation error messages
			$errors = [];
			if (method_exists($e, 'errors')) {
				$errors = $e->errors();
				$data['errors'] = $errors;
			}
			
			if (request()->header('X-AppType') == 'web') {
				// Get errors (as String)
				if (is_array($errors) && count($errors) > 0) {
					$errorsTxt = '';
					foreach ($errors as $value) {
						if (is_array($value)) {
							foreach ($value as $v) {
								$errorsTxt .= empty($errorsTxt) ? '- ' . $v : '<br>- ' . $v;
							}
						} else {
							$errorsTxt .= empty($errorsTxt) ? '- ' . $value : '<br>- ' . $value;
						}
					}
				} else {
					$errorsTxt = $message;
				}
				
				// NOTE: 'bootstrap-fileinput' need 'error' (text) element,
				// & the optional 'errorkeys' (array) element.
				$data['error'] = $errorsTxt; // for bootstrap-fileinput
			}
			
			return $this->apiResponse($data, Response::HTTP_UNPROCESSABLE_ENTITY);
		}
		
		if ($e instanceof QueryException) {
			$data = [
				'success'   => false,
				'message'   => 'There was Issue with the Query',
				'exception' => $e,
			];
			
			return $this->apiResponse($data, 500);
		}
		
		if ($e instanceof \Error) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = 'There was some internal error';
			}
			
			$data = [
				'success'   => false,
				'message'   => $message,
				'exception' => $e,
			];
			
			if (request()->header('X-AppType') == 'web') {
				$data['error'] = $message; // for bootstrap-fileinput
			}
			
			return $this->apiResponse($data, 500);
		}
		
		$message = $e->getMessage();
		if (!empty($message)) {
			$message = !empty($e->getLine()) ? $message . ' Line: ' . $e->getLine() : $message;
			$message = !empty($e->getFile()) ? $message . ' in file: ' . $e->getFile() : $message;
		} else {
			$message = 'Unknown Error.';
		}
		
		$data = [
			'success'   => false,
			'message'   => $message,
			'exception' => $e,
		];
		
		if (request()->header('X-AppType') == 'web') {
			$data['error'] = $message; // for bootstrap-fileinput
		}
		
		return $this->apiResponse($data, Response::HTTP_BAD_REQUEST);
	}
}
