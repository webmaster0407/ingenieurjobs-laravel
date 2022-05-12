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

namespace App\Http\Controllers\Api\User;

use App\Models\Permission;
use App\Models\Scopes\VerifiedScope;
use App\Models\User;

trait Delete
{
	/**
	 * Close the User's Account
	 *
	 * @param $id
	 * @return mixed
	 */
	public function closeAccount($id)
	{
		// Get User
		$user = User::withoutGlobalScopes([VerifiedScope::class])->where('id', $id)->first();
		
		if (empty($user)) {
			return $this->respondNotFound(t('User not found'));
		}
		
		// Check logged User
		// Get the User Personal Access Token Object
		$personalAccess = request()->user()->tokens()->where('id', getApiAuthToken())->first();
		if (!empty($personalAccess)) {
			if ($personalAccess->tokenable_id != $user->id) {
				return $this->respondUnauthorized();
			}
		} else {
			$guard = (isFromApi()) ? 'sanctum' : null;
			$validUserFromGuard = (auth($guard)->check() && auth($guard)->user()->id == $user->id);
			if (!$validUserFromGuard) {
				return $this->respondUnauthorized();
			}
		}
		
		// Admin users can not be deleted by this way
		if ($user->can(Permission::getStaffPermissions())) {
			return $this->respondUnAuthorized(t('admin_users_cannot_be_deleted'));
		}
		
		// Close User's session (by revoking all the user's tokens)
		$user->tokens()->delete();
		
		// Delete User
		$user->delete();
		
		$message = t('your_account_has_been_deleted_1');
		
		return $this->respondNoContentResource($message);
	}
}
