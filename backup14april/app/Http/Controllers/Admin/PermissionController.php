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

namespace App\Http\Controllers\Admin;

use App\Helpers\DBTool;
use App\Http\Requests\Admin\PermissionRequest as StoreRequest;
use App\Http\Requests\Admin\PermissionRequest as UpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\Panel\PanelController;
use Prologue\Alerts\Facades\Alert;

class PermissionController extends PanelController
{
	public function setup()
	{
		$role_model = config('permission.models.role');
		$permission_model = config('permission.models.permission');
		
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel($permission_model);
		$this->xPanel->setRoute(admin_uri('permissions'));
		$this->xPanel->setEntityNameStrings(trans('admin.permission_singular'), trans('admin.permission_plural'));
		
		$this->xPanel->addButtonFromModelFunction('top', 'create_default_entries', 'createDefaultEntriesBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deletion_btn', 'bulkDeletionBtn', 'end');
		
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// COLUMNS
		$this->xPanel->addColumn([
			'name'      => 'id',
			'label'     => '',
			'type'      => 'checkbox',
			'orderable' => false,
		]);
		$this->xPanel->addColumn([
			'name'  => 'name',
			'label' => trans('admin.name'),
			'type'  => 'text',
		]);
		$this->xPanel->addColumn([
			// n-n relationship (with pivot table)
			'label'     => trans('admin.roles_have_permission'),
			'type'      => 'select_multiple',
			'name'      => 'roles',
			'entity'    => 'roles',
			'attribute' => 'name',
			'model'     => $role_model,
			'pivot'     => true,
		]);
		
		// FIELDS
		$this->xPanel->addField([
			'name'    => 'name',
			'label'   => trans('admin.name'),
			'type'    => 'select2_from_array',
			'options' => Permission::defaultPermissions(),
		], 'create');
		$permission = Permission::find(request()->segment(3));
		if (!empty($permission)) {
			$this->xPanel->addField([
				'name'  => 'name_html',
				'type'  => 'custom_html',
				'value' => '<h3><strong>' . trans('admin.permission') . '</strong>: ' . $permission->name . '</h3>',
			], 'update');
		}
		$this->xPanel->addField([
			'label'     => trans('admin.roles'),
			'type'      => 'checklist',
			'name'      => 'roles',
			'entity'    => 'roles',
			'attribute' => 'name',
			'model'     => $role_model,
			'pivot'     => true,
		]);
		
		if (!config('larapen.admin.allow_permission_create')) {
			$this->xPanel->denyAccess('create');
		}
		if (!config('larapen.admin.allow_permission_update')) {
			$this->xPanel->denyAccess('update');
		}
		if (!config('larapen.admin.allow_permission_delete')) {
			$this->xPanel->denyAccess('delete');
		}
	}
	
	public function store(StoreRequest $request)
	{
		$this->setPermissionDefaultRoles();
		
		return parent::storeCrud();
	}
	
	public function update(UpdateRequest $request)
	{
		$this->setPermissionDefaultRoles();
		
		return parent::updateCrud();
	}
	
	/**
	 * Auto-creation of default permissions
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function createDefaultEntries()
	{
		$success = false;
		
		$aclTableNames = config('permission.table_names');
		
		// Get all permissions
		if (isset($aclTableNames['permissions'])) {
			$permissions = Permission::defaultPermissions();
			if (!empty($permissions)) {
				DB::statement('ALTER TABLE ' . DBTool::table($aclTableNames['permissions']) . ' AUTO_INCREMENT = 1;');
				foreach ($permissions as $permission) {
					if (Permission::where('name', '=', $permission)->count() <= 0) {
						$entry = new Permission();
						$entry->name = $permission;
						$entry->save();
						
						$success = true;
					}
				}
			}
		}
		
		if ($success) {
			Alert::success(trans('admin.The default permissions were been created'))->flash();
		} else {
			Alert::warning(trans('admin.Default permissions have already been created'))->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Set permission's default (or required) roles
	 */
	private function setPermissionDefaultRoles()
	{
		// Get request roles
		$roleIds = request()->input('roles');
		$roleIds = collect($roleIds)->map(function ($item, $key) {
			return (int)$item;
		})->toArray();
		
		// Set the 'super-admin' role for the permission (if needed),
		$permission = Permission::find(request()->segment(3));
		if (!empty($permission)) {
			// Get all the default Super Admin permissions
			$superAdminPermissionsArr = Permission::getSuperAdminPermissions();
			$superAdminPermissionsArrLower = collect($superAdminPermissionsArr)->map(function ($item, $key) {
				return strtolower($item);
			})->toArray();
			
			// If the permission is a Super Admin permission,
			// Then assign it to the 'super-admin' role.
			if (in_array(strtolower($permission->name), $superAdminPermissionsArrLower)) {
				$superAdminRoles = Role::where('name', '=', Role::getSuperAdminRole()); // Return One Entry!
				if ($superAdminRoles->count() > 0) {
					$superAdminRolesIds = collect($superAdminRoles->get())->keyBy('id')->keys()->toArray();
					$roleIds = array_merge($roleIds, $superAdminRolesIds);
				}
			}
		}
		
		// Update the request value
		request()->request->set('roles', $roleIds);
	}
}
