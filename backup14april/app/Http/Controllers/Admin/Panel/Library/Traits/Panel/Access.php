<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

trait Access
{
	/*
	|--------------------------------------------------------------------------
	|                                   CRUD ACCESS
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * @param $access
	 * @return array
	 */
	public function allowAccess($access)
	{
		return $this->access = array_merge(array_diff((array)$access, $this->access), $this->access);
	}
	
	/**
	 * @param $access
	 * @return array
	 */
	public function denyAccess($access)
	{
		return $this->access = array_diff($this->access, (array)$access);
	}
	
	/**
	 * Check if a permission is enabled for a Crud Panel. Return false if not.
	 *
	 * @param $permission
	 * @return bool
	 */
	public function hasAccess($permission): bool
	{
		return in_array($permission, $this->access);
	}
	
	/**
	 * Check if any permission is enabled for a Crud Panel. Return false if not.
	 *
	 * @param $permissionArray
	 * @return bool
	 */
	public function hasAccessToAny($permissionArray): bool
	{
		foreach ($permissionArray as $key => $permission) {
			if (in_array($permission, $this->access)) {
				return true;
			}
		}
		
		return false;
	}
	
	/**
	 * Check if all permissions are enabled for a Crud Panel. Return false if not.
	 *
	 * @param $permissionArray
	 * @return bool
	 */
	public function hasAccessToAll($permissionArray): bool
	{
		foreach ($permissionArray as $key => $permission) {
			if (!in_array($permission, $this->access)) {
				return false;
			}
		}
		
		return true;
	}
	
	/**
	 * Check if a permission is enabled for a Crud Panel. Fail if not.
	 *
	 * @param $permission
	 */
	public function hasAccessOrFail($permission)
	{
		if (!in_array($permission, $this->access)) {
			abort(403, trans('admin.unauthorized_access'));
		}
	}
}