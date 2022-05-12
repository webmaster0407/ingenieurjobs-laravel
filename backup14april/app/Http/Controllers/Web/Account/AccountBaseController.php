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

namespace App\Http\Controllers\Web\Account;

use App\Http\Controllers\Web\FrontController;
use App\Models\Company;
use App\Models\Post;
use App\Models\Payment;
use App\Models\Resume;
use App\Models\SavedPost;
use App\Models\SavedSearch;
use App\Models\Scopes\VerifiedScope;
use App\Models\Scopes\ReviewedScope;
use App\Models\Thread;

abstract class AccountBaseController extends FrontController
{
	public $countries;
	public $myPosts;
	public $archivedPosts;
	public $favouritePosts;
	public $pendingPosts;
	public $threads;
	public $threadsWithNewMessage;
	public $transactions;
	public $companies;
	public $resumes;
	
	/**
	 * AccountBaseController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			if (auth()->check()) {
				$this->leftMenuInfo();
			}
			
			return $next($request);
		});
		
		// Get Page Current Path
		$pagePath = '';
		if (request()->segment(1) == 'account') {
			$pagePath = request()->segment(2, '');
		}
		view()->share('pagePath', $pagePath);
	}
	
	public function leftMenuInfo()
	{
		// Share User Info
		view()->share('user', auth()->user());
		
		// My Posts
		$this->myPosts = Post::whereHas('country')
			->currentCountry()
			->where('user_id', auth()->user()->id)
			->verified()
			->unarchived()
			->reviewed()
			->with([
				'city',
				'latestPayment' => function ($builder) {
					$builder->with(['package']);
				},
			])->orderByDesc('id');
		view()->share('countMyPosts', $this->myPosts->count());
		
		// Archived Posts
		$this->archivedPosts = Post::whereHas('country')
			->currentCountry()
			->where('user_id', auth()->user()->id)
			->archived()
			->with([
				'city',
				'latestPayment' => function ($builder) {
					$builder->with(['package']);
				},
			])->orderByDesc('id');
		view()->share('countArchivedPosts', $this->archivedPosts->count());
		
		// Favourite Posts
		$this->favouritePosts = SavedPost::whereHas('post', function ($query) {
			$query->whereHas('country')
				->currentCountry();
		})->where('user_id', auth()->user()->id)
			->with(['post.city'])
			->orderByDesc('id');
		view()->share('countFavouritePosts', $this->favouritePosts->count());
		
		// Pending Approval Posts
		$this->pendingPosts = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
			->whereHas('country')
			->currentCountry()
			->where('user_id', auth()->user()->id)
			->unverified()
			->with([
				'city',
				'latestPayment' => function ($builder) {
					$builder->with(['package']);
				},
			])->orderByDesc('id');
		view()->share('countPendingPosts', $this->pendingPosts->count());
		
		// Save Search
		$savedSearch = SavedSearch::whereHas('country')
			->currentCountry()
			->where('user_id', auth()->user()->id)
			->orderByDesc('id');
		view()->share('countSavedSearch', $savedSearch->count());
		
		// Threads
		$this->threads = Thread::whereHas('post', function ($query) {
			$query->whereHas('country')
				->currentCountry()
				->unarchived();
		})->forUser(auth()->id())
			->latest('updated_at');
		view()->share('countThreads', $this->threads->count());
		
		// Threads (With New Messages)
		$this->threadsWithNewMessage = Thread::whereHas('post', function ($query) {
			$query->whereHas('country')
				->currentCountry()
				->unarchived();
		})->forUserWithNewMessages(auth()->id());
		view()->share('countThreadsWithNewMessage', $this->threadsWithNewMessage->count());
		
		// Payments
		$this->transactions = Payment::whereHas('post', function ($query) {
			$query->whereHas('country')
				->currentCountry()
				->whereHas('user', function ($query) {
					$query->where('user_id', auth()->user()->id);
				});
		})->whereHas('package', function ($query) {
			$query->whereHas('currency');
		})->with([
			'post',
			'paymentMethod',
			'package' => function ($builder) {
				$builder->with(['currency']);
			},
		])->orderByDesc('id');
		view()->share('countTransactions', $this->transactions->count());
		
		// Companies
		$this->companies = Company::where('user_id', auth()->user()->id)->orderByDesc('id');
		view()->share('countCompanies', $this->companies->count());
		
		// Resumes
		$this->resumes = Resume::where('user_id', auth()->user()->id)->orderByDesc('id');
		view()->share('countResumes', $this->resumes->count());
	}
}
