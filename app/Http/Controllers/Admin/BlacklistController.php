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

use App\Models\Blacklist;
use App\Models\Permission;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Admin\Panel\PanelController;
use App\Http\Requests\Admin\BlacklistRequest as StoreRequest;
use App\Http\Requests\Admin\BlacklistRequest as UpdateRequest;
use Prologue\Alerts\Facades\Alert;

class BlacklistController extends PanelController
{
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Blacklist');
		$this->xPanel->setRoute(admin_uri('blacklists'));
		$this->xPanel->setEntityNameStrings(trans('admin.blacklist'), trans('admin.blacklists'));
		$this->xPanel->orderBy('id', 'DESC');
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deletion_btn', 'bulkDeletionBtn', 'end');
		
		// Filters
		// -----------------------
		$this->xPanel->disableSearchBar();
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'entryType',
			'type'  => 'dropdown',
			'label' => mb_ucfirst(trans('admin.type')),
		], [
			'domain' => 'domain',
			'email'  => 'email',
			'ip'     => 'ip',
			'word'   => 'word',
		], function ($value) {
			$this->xPanel->addClause('where', 'type', '=', $value);
		});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'entry',
			'type'  => 'text',
			'label' => mb_ucfirst(trans('admin.Entry')),
		],
			false,
			function ($value) {
				$this->xPanel->addClause('where', 'entry', 'LIKE', "%$value%");
			});
		
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
			'name'  => 'type',
			'label' => trans('admin.Type'),
		]);
		$this->xPanel->addColumn([
			'name'  => 'entry',
			'label' => trans('admin.Entry'),
		]);
		
		// FIELDS
		$this->xPanel->addField([
			'name'  => 'type',
			'label' => trans('admin.Type'),
			'type'  => 'enum',
		]);
		$this->xPanel->addField([
			'name'       => 'entry',
			'label'      => trans('admin.Entry'),
			'type'       => 'text',
			'attributes' => [
				'placeholder' => trans('admin.Entry'),
			],
		]);
	}
	
	public function store(StoreRequest $request)
	{
		// Check admin users (Don't ban admin users)
		if ($this->isAnAdminUser()) {
			return redirect()->back();
		}
		
		return parent::storeCrud();
	}
	
	public function update(UpdateRequest $request)
	{
		// Check admin users (Don't ban admin users)
		if ($this->isAnAdminUser()) {
			return redirect()->back();
		}
		
		return parent::updateCrud();
	}
	
	/**
	 * Ban user by email address (from link)
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function banUserByEmail(): \Illuminate\Http\RedirectResponse
	{
		// Get email address
		$email = request()->get('email');
		
		// Get previous URL
		$previousUrl = url()->previous();
		
		// Exceptions
		if (empty($email)) {
			$message = trans('admin.no_action_is_performed');
			
			if (isAdminPanel($previousUrl)) {
				Alert::info($message)->flash();
			} else {
				flash($message)->info();
			}
			
			return redirect()->back();
		}
		
		// Check admin users (Don't ban admin users)
		if ($this->isAnAdminUser($email)) {
			return redirect()->back();
		}
		
		// Check the email has been banned
		$banned = Blacklist::where('type', 'email')->where('entry', $email)->first();
		if (!empty($banned)) {
			/*
			 * This for old email addresses banned...
			 * New ban actions trigger the Blacklist's Observer
			 * that delete the user and its posts (if exist).
			 */
			
			// Delete the banned user related to the email address
			$user = User::where('email', $banned->entry)->first();
			if (!empty($user)) {
				$user->delete();
			}
			
			// Delete the banned user's posts related to the email address
			$posts = Post::where('email', $banned->entry)->get();
			if ($posts->count() > 0) {
				foreach ($posts as $post) {
					$post->delete();
				}
			}
		} else {
			// Add the email address to the blacklist
			$banned = new Blacklist();
			$banned->type = 'email';
			$banned->entry = $email;
			$banned->save();
		}
		
		$message = trans('admin.email_address_banned_successfully', ['email' => $email]);
		if (isAdminPanel($previousUrl)) {
			Alert::success($message)->flash();
		} else {
			flash($message)->success();
		}
		
		// Get next URL
		$nextUrl = '/';
		if (isAdminPanel($previousUrl)) {
			$tmp = preg_split('#\/[0-9]+\/edit#ui', $previousUrl);
			$nextUrl = $tmp[0] ?? $previousUrl;
		}
		
		return redirect($nextUrl)->withHeaders(config('larapen.core.noCacheHeaders'));
	}
	
	/**
	 * Check if the current email address belongs to an admin user
	 * Prevent admin users to be banned
	 *
	 * @param $email
	 * @return bool
	 */
	private function isAnAdminUser($email = null): bool
	{
		if (empty($email)) {
			if (request()->filled('type') && request()->filled('entry')) {
				if (request()->get('type') == 'email') {
					$email = request()->get('entry');
				}
			}
		}
		
		// Check admin users (Don't ban admin users)
		if (!empty($email)) {
			$user = User::where('email', $email)->first();
			if (!empty($user)) {
				if ($user->can(Permission::getStaffPermissions())) {
					$msg = t('admin_users_cannot_be_banned');
					if (isAdminPanel(url()->previous())) {
						Alert::error($msg)->flash();
					} else {
						flash($msg)->error();
					}
					
					return true;
				}
			}
		}
		
		return false;
	}
}
