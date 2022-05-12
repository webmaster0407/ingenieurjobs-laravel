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

namespace App\Http\Controllers\Api\Auth\Traits;

use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait VerificationTrait
{
	use EmailVerificationTrait, PhoneVerificationTrait, RecognizedUserActionsTrait;
	
	public $entitiesRefs = [
		'users' => [
			'slug'      => 'users',
			'namespace' => '\\App\Models\User',
			'name'      => 'name',
			'scopes'    => [
				\App\Models\Scopes\VerifiedScope::class,
			],
		],
		'posts' => [
			'slug'      => 'posts',
			'namespace' => '\\App\Models\Post',
			'name'      => 'contact_name',
			'scopes'    => [
				\App\Models\Scopes\VerifiedScope::class,
				\App\Models\Scopes\ReviewedScope::class,
			],
		],
	];
	
	/**
	 * Verification
	 *
	 * Verify the user's email address or mobile phone number
	 *
	 * @queryParam entitySlug string The slug of the entity to verify ('users' or 'posts'). Example: users
	 *
	 * @param $field
	 * @param null $token
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function verification($field, $token = null)
	{
		if (empty($token)) {
			return $this->respondError(t('The token or code to verify is empty'));
		}
		
		$entitySlug = request()->get('entitySlug');
		
		// Get Entity
		$entityRef = $this->getEntityRef($entitySlug);
		if (empty($entityRef)) {
			return $this->respondNotFound(t('Entity ID not found'));
		}
		
		// Get Field Label
		$fieldLabel = t('email_address');
		if ($field == 'phone') {
			$fieldLabel = t('phone_number');
		}
		
		$data = [];
		
		$data['result'] = null;
		
		// Get Entity by Token
		$model = $entityRef['namespace'];
		$entity = $model::withoutGlobalScopes($entityRef['scopes'])->where($field . '_token', $token)->first();
		
		if (empty($entity)) {
			return $this->respondError(t('Your field verification has failed', ['field' => $fieldLabel]));
		}
		
		if ($entity->{'verified_' . $field} != 1) {
			// Verified
			$entity->{'verified_' . $field} = 1;
			$entity->save();
			
			$message = t('Your field has been verified', ['name' => $entity->{$entityRef['name']}, 'field' => $fieldLabel]);
			
			$data['success'] = true;
			$data['message'] = $message;
		} else {
			$message = t('Your field is already verified', ['field' => $fieldLabel]);
			
			$data['success'] = false;
			$data['message'] = $message;
			
			if ($entityRef['slug'] == 'users') {
				$data['result'] = new UserResource($entity);
			}
			if ($entityRef['slug'] == 'posts') {
				$data['result'] = new PostResource($entity);
			}
			
			return $this->apiResponse($data);
		}
		
		// Is It User Entity?
		if ($entityRef['slug'] == 'users') {
			$data['result'] = new UserResource($entity);
			
			// Match User's Posts (posted as Guest)
			$this->findAndMatchPostsToUser($entity);
			
			// Get User creation next URL
			// Login the User
			if (
				isVerifiedUser($entity)
				&& $entity->blocked != 1
				&& $entity->closed != 1
			) {
				// Create the API access token
				$deviceName = request()->input('device_name', 'Desktop Web');
				$token = $entity->createToken($deviceName);
				
				$extra = [];
				
				$extra['authToken'] = $token->plainTextToken;
				$extra['tokenType'] = 'Bearer';
				
				$data['extra'] = $extra;
			}
		}
		
		// Is It Post Entity?
		if ($entityRef['slug'] == 'posts') {
			$data['result'] = new PostResource($entity);
			
			// Match User's ads (posted as Guest) & User's data (if missed)
			$this->findAndMatchUserToPost($entity);
		}
		
		return $this->apiResponse($data);
	}
	
	/**
	 * @param null $entityRefId
	 * @return null
	 */
	public function getEntityRef($entityRefId = null)
	{
		if (empty($entityRefId)) {
			if (
				Str::contains(Route::currentRouteAction(), 'Api\Auth\RegisterController')
				|| Str::contains(Route::currentRouteAction(), 'Api\UserController')
				|| Str::contains(Route::currentRouteAction(), 'Admin\UserController')
			) {
				$entityRefId = 'users';
			}
			
			if (
				Str::contains(Route::currentRouteAction(), 'Api\PostController')
				|| Str::contains(Route::currentRouteAction(), 'Admin\PostController')
			) {
				$entityRefId = 'posts';
			}
		}
		
		// Check if Entity exists
		if (!isset($this->entitiesRefs[$entityRefId])) {
			return null;
		}
		
		// Get Entity
		$entityRef = $this->entitiesRefs[$entityRefId];
		
		return $entityRef;
	}
}
