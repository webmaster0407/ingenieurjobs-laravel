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

use App\Helpers\Date;
use App\Http\Controllers\Web\Auth\Traits\VerificationTrait;
use App\Http\Requests\Admin\Request;
use App\Http\Requests\Admin\UserRequest as StoreRequest;
use App\Http\Requests\Admin\UserRequest as UpdateRequest;
use App\Models\Gender;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Scopes\VerifiedScope;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\Panel\PanelController;

class UserController extends PanelController
{
	use VerificationTrait;
	
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\User');
		
		// If the logged admin user has permissions to manage users and is has not 'super-admin' role,
		// don't allow him to manage 'super-admin' role's users.
		if (!auth()->user()->can(Permission::getSuperAdminPermissions())) {
			// Get 'super-admin' role's users IDs
			$usersIds = [];
			try {
				$users = User::withoutGlobalScopes([VerifiedScope::class])->role('super-admin')->get(['id', 'created_at']);
				if ($users->count() > 0) {
					$usersIds = $users->keyBy('id')->keys()->toArray();
				}
			} catch (\Throwable $e) {}
			
			// Exclude 'super-admin' role's users from list
			if (!empty($usersIds)) {
				$this->xPanel->addClause('whereNotIn', 'id', $usersIds);
			}
		}
		
		$this->xPanel->setRoute(admin_uri('users'));
		$this->xPanel->setEntityNameStrings(trans('admin.user'), trans('admin.users'));
		if (!request()->input('order')) {
			$this->xPanel->orderBy('created_at', 'DESC');
		}
		$this->xPanel->enableDetailsRow();
		$this->xPanel->allowAccess(['details_row']);
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deletion_btn', 'bulkDeletionBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('line', 'impersonate', 'impersonateBtn', 'beginning');
		$this->xPanel->removeButton('delete');
		$this->xPanel->addButtonFromModelFunction('line', 'delete', 'deleteBtn', 'end');
		
		// Filters
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'id',
			'type'  => 'text',
			'label' => 'ID',
		],
			false,
			function ($value) {
				$this->xPanel->addClause('where', 'id', '=', $value);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'from_to',
			'type'  => 'date_range',
			'label' => trans('admin.Date range'),
		],
			false,
			function ($value) {
				$dates = json_decode($value);
				$this->xPanel->addClause('where', 'created_at', '>=', $dates->from);
				$this->xPanel->addClause('where', 'created_at', '<=', $dates->to);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'name',
			'type'  => 'text',
			'label' => trans('admin.Name'),
		],
			false,
			function ($value) {
				$this->xPanel->addClause('where', 'name', 'LIKE', "%$value%");
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'country',
			'type'  => 'select2',
			'label' => trans('admin.Country'),
		],
			getCountries(),
			function ($value) {
				$this->xPanel->addClause('where', 'country_code', '=', $value);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'status',
			'type'  => 'dropdown',
			'label' => trans('admin.Status'),
		], [
			1 => trans('admin.Unactivated'),
			2 => trans('admin.Activated'),
		], function ($value) {
			if ($value == 1) {
				$this->xPanel->addClause('where', 'verified_email', '=', 0);
				$this->xPanel->addClause('orWhere', 'verified_phone', '=', 0);
			}
			if ($value == 2) {
				$this->xPanel->addClause('where', 'verified_email', '=', 1);
				$this->xPanel->addClause('where', 'verified_phone', '=', 1);
			}
		});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'type',
			'type'  => 'dropdown',
			'label' => trans('admin.permissions_roles'),
		], [
			1 => trans('admin.Has Admins Permissions'),
			2 => trans('admin.Has Super-Admins Permissions'),
			3 => trans('admin.Has Super-Admins Role'),
		], function ($value) {
			if ($value == 1) {
				$this->xPanel->addClause('permission', Permission::getStaffPermissions());
			}
			if ($value == 2) {
				$this->xPanel->addClause('permission', Permission::getSuperAdminPermissions());
			}
			if ($value == 3) {
				$this->xPanel->addClause('role', Role::getSuperAdminRole());
			}
		});
		
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		if (request()->segment(2) != 'account') {
			// COLUMNS
			$this->xPanel->addColumn([
				'name'  => 'id',
				'label' => '',
				'type'  => 'checkbox',
				'orderable' => false,
			]);
			$this->xPanel->addColumn([
				'name'  => 'created_at',
				'label' => trans('admin.Date'),
				'type'  => 'datetime',
			]);
			$this->xPanel->addColumn([
				'name'  => 'name',
				'label' => trans('admin.Name'),
			]);
			$this->xPanel->addColumn([
				'name'  => 'email',
				'label' => trans('admin.Email'),
			]);
			$this->xPanel->addColumn([
				'name'      => 'user_type_id',
				'label'     => trans('admin.Type'),
				'model'     => 'App\Models\UserType',
				'entity'    => 'userType',
				'attribute' => 'name',
				'type'      => 'select',
			]);
			$this->xPanel->addColumn([
				'label'         => trans('admin.Country'),
				'name'          => 'country_code',
				'type'          => 'model_function',
				'function_name' => 'getCountryHtml',
			]);
			$this->xPanel->addColumn([
				'name'          => 'verified_email',
				'label'         => trans('admin.Verified Email'),
				'type'          => 'model_function',
				'function_name' => 'getVerifiedEmailHtml',
			]);
			$this->xPanel->addColumn([
				'name'          => 'verified_phone',
				'label'         => trans('admin.Verified Phone'),
				'type'          => 'model_function',
				'function_name' => 'getVerifiedPhoneHtml',
			]);
			
			// FIELDS
			$this->xPanel->addField([
				'name'              => 'user_type_id',
				'label'             => trans('admin.Type'),
				'type'              => 'select2_from_array',
				'options'           => $this->userType(),
				'allows_null'       => true,
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'  => 'sep_creation_03',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			], 'create');
			$this->xPanel->addField([
				'name'       => 'email',
				'label'      => trans('admin.Email'),
				'type'       => 'email',
				'attributes' => [
					'placeholder' => trans('admin.Email'),
				],
				'prefix' => '<i class="far fa-envelope"></i>',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'       => 'password',
				'label'      => trans('admin.Password'),
				'type'       => 'password',
				'attributes' => [
					'placeholder' => trans('admin.Password'),
				],
				'prefix' => '<i class="fas fa-lock"></i>',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			], 'create');
			$this->xPanel->addField([
				'label'             => trans('admin.Gender'),
				'name'              => 'gender_id',
				'type'              => 'select2_from_array',
				'options'           => $this->gender(),
				'allows_null'       => false,
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'              => 'name',
				'label'             => trans('admin.Name'),
				'type'              => 'text',
				'attributes'        => [
					'placeholder' => trans('admin.Name'),
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'              => 'phone',
				'label'             => trans('admin.Phone'),
				'type'              => 'text',
				'attributes'        => [
					'placeholder' => trans('admin.Phone'),
				],
				'prefix' => '<i class="fas fa-mobile-alt"></i>',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'              => 'phone_hidden',
				'label'             => trans('admin.Phone hidden'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'label'             => trans('admin.Country'),
				'name'              => 'country_code',
				'model'             => 'App\Models\Country',
				'entity'            => 'country',
				'attribute'         => 'name',
				'type'              => 'select2',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'              => 'time_zone',
				'label'             => t('preferred_time_zone_label'),
				'type'              => 'select2_from_array',
				'options'           => Date::getTimeZones(),
				'allows_null'       => false,
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'  => 'sep_creation_02',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			], 'update');
			$this->xPanel->addField([
				'name'              => 'verified_email',
				'label'             => trans('admin.Verified Email'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'              => 'verified_phone',
				'label'             => trans('admin.Verified Phone'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$this->xPanel->addField([
				'name'              => 'blocked',
				'label'             => trans('admin.Blocked'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
			$entity = $this->xPanel->getModel()->find(request()->segment(3));
			if (!empty($entity)) {
				$ipLink = config('larapen.core.ipLinkBase') . $entity->ip_addr;
				$this->xPanel->addField([
					'name'  => 'ip_addr',
					'type'  => 'custom_html',
					'value' => '<h5 class="mt-4"><strong>IP:</strong> <a href="' . $ipLink . '" target="_blank">' . $entity->ip_addr . '</a></h5>',
				], 'update');
				if (!empty($entity->email)) {
					$btnUrl = admin_url('blacklists/add') . '?email=' . $entity->email;
					
					$btnText = trans('admin.ban_the_user');
					$btnHint = trans('admin.ban_the_user_email', ['email' => $entity->email]);
					$tooltip = ' data-bs-toggle="tooltip" title="' . $btnHint . '"';
					
					$btnLink = '<a href="' . $btnUrl . '" class="btn btn-danger confirm-simple-action"' . $tooltip . '>' . $btnText . '</a>';
					$this->xPanel->addField([
						'name'              => 'ban_button',
						'type'              => 'custom_html',
						'value'             => $btnLink,
						'wrapperAttributes' => [
							'style' => 'text-align:center;',
						],
					], 'update');
				}
			}
			// Only 'super-admin' can assign 'roles' or 'permissions' to users
			// Also logged admin user cannot manage his own 'role' or 'permissions'
			if (
				auth()->user()->can(Permission::getSuperAdminPermissions())
				&& auth()->user()->id != request()->segment(3)
			) {
				$this->xPanel->addField([
					'name'  => 'separator',
					'type'  => 'custom_html',
					'value' => '<hr>'
				]);
				$this->xPanel->addField([
					// two interconnected entities
					'label'             => trans('admin.user_role_permission'),
					'field_unique_name' => 'user_role_permission',
					'type'              => 'checklist_dependency',
					'name'              => 'roles_and_permissions', // the methods that defines the relationship in your Model
					'subfields'         => [
						'primary'   => [
							'label'            => trans('admin.roles'),
							'name'             => 'roles', // the method that defines the relationship in your Model
							'entity'           => 'roles', // the method that defines the relationship in your Model
							'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
							'attribute'        => 'name', // foreign key attribute that is shown to user
							'model'            => config('permission.models.role'), // foreign key model
							'pivot'            => true, // on create&update, do you need to add/delete pivot table entries?]
							'number_columns'   => 3, //can be 1,2,3,4,6
						],
						'secondary' => [
							'label'          => mb_ucfirst(trans('admin.permission_singular')),
							'name'           => 'permissions', // the method that defines the relationship in your Model
							'entity'         => 'permissions', // the method that defines the relationship in your Model
							'entity_primary' => 'roles', // the method that defines the relationship in your Model
							'attribute'      => 'name', // foreign key attribute that is shown to user
							'model'          => config('permission.models.permission'), // foreign key model
							'pivot'          => true, // on create&update, do you need to add/delete pivot table entries?]
							'number_columns' => 3, //can be 1,2,3,4,6
						],
					],
				]);
			}
		}
	}
	
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function account()
	{
		// FIELDS
		$this->xPanel->addField([
			'name'              => 'user_type_id',
			'label'             => trans('admin.Type'),
			'type'              => 'select2_from_array',
			'options'           => $this->userType(),
			'allows_null'       => true,
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'  => 'sep_account_01',
			'type'  => 'custom_html',
			'value' => '<div style="clear: both;"></div>',
		], 'update');
		$this->xPanel->addField([
			'label'             => trans('admin.Gender'),
			'name'              => 'gender_id',
			'type'              => 'select2_from_array',
			'options'           => $this->gender(),
			'allows_null'       => false,
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'name',
			'label'             => trans('admin.Name'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Name'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'email',
			'label'             => trans('admin.Email'),
			'type'              => 'email',
			'attributes' => [
				'placeholder' => trans('admin.Email'),
			],
			'prefix' => '<i class="far fa-envelope"></i>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'password',
			'label'             => trans('admin.Password'),
			'type'              => 'password',
			'attributes' => [
				'placeholder' => trans('admin.Password'),
			],
			'prefix' => '<i class="fas fa-lock"></i>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'phone',
			'label'             => trans('admin.Phone'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Phone'),
			],
			'prefix' => '<i class="fas fa-mobile-alt"></i>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'phone_hidden',
			'label'             => "Phone hidden",
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'label'             => trans('admin.Country'),
			'name'              => 'country_code',
			'model'             => 'App\Models\Country',
			'entity'            => 'country',
			'attribute'         => 'name',
			'type'              => 'select2',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'time_zone',
			'label'             => t('preferred_time_zone_label'),
			'type'              => 'select2_from_array',
			'options'           => Date::getTimeZones(),
			'allows_null'       => true,
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		
		// Get logged user
		if (auth()->check()) {
			return $this->edit(auth()->user()->id);
		} else {
			abort(403, 'Not allowed.');
		}
	}
	
	public function store(StoreRequest $request)
	{
		$this->handleInput($request);
		
		return parent::storeCrud();
	}
	
	public function update(UpdateRequest $request)
	{
		$this->handleInput($request);
		
		// Prevent user's role removal
		if (
			auth()->user()->id == request()->segment(3)
			|| Str::contains(url()->previous(), admin_uri('account'))
		) {
			$this->xPanel->disableSyncPivot();
		}
		
		return parent::updateCrud();
	}
	
	// PRIVATE METHODS
	
	/**
	 * @return array
	 */
	private function gender()
	{
		$entries = Gender::query()->get();
		
		$entries = collect($entries)->mapWithKeys(function ($item) {
			return [$item['id'] => $item['name']];
		})->toArray();
		
		return $entries;
	}
	
	/**
	 * @return array
	 */
	private function userType()
	{
		$entries = UserType::active()->get();
		
		$tab = [];
		if ($entries->count() > 0) {
			foreach ($entries as $entry) {
				$tab[$entry->id] = $entry->name;
			}
		}
		
		return $tab;
	}
	
	/**
	 * Handle Input values
	 *
	 * @param \App\Http\Requests\Admin\Request $request
	 */
	private function handleInput(Request $request)
	{
		$this->handlePasswordInput($request);
		
		if ($this->isAdminUser($request)) {
			request()->merge(['is_admin' => 1]);
		} else {
			request()->merge(['is_admin' => 0]);
		}
	}
	
	/**
	 * Handle password input fields
	 *
	 * @param Request $request
	 */
	private function handlePasswordInput(Request $request)
	{
		// Remove fields not present on the user
		$request->request->remove('password_confirmation');
		
		// Encrypt password if specified (OK)
		if (request()->filled('password')) {
			request()->merge(['password' => Hash::make(request()->input('password'))]);
		} else {
			request()->replace(request()->except(['password']));
		}
	}
	
	/**
	 * Check if the set permissions are corresponding to the Staff permissions
	 *
	 * @param \App\Http\Requests\Admin\Request $request
	 * @return bool
	 */
	private function isAdminUser(Request $request)
	{
		$isAdmin = false;
		if (request()->filled('roles')) {
			$rolesIds = request()->input('roles');
			foreach ($rolesIds as $rolesId) {
				$role = Role::find($rolesId);
				if (!empty($role)) {
					$permissions = $role->permissions;
					if ($permissions->count() > 0) {
						foreach ($permissions as $permission) {
							if (in_array($permission->name, Permission::getStaffPermissions())) {
								$isAdmin = true;
							}
						}
					}
				}
			}
		}
		
		if (request()->filled('permissions')) {
			$permissionIds = request()->input('permissions');
			foreach ($permissionIds as $permissionId) {
				$permission = Permission::find($permissionId);
				if (in_array($permission->name, Permission::getStaffPermissions())) {
					$isAdmin = true;
				}
			}
		}
		
		return $isAdmin;
	}
}
