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

use App\Helpers\Date;
use App\Helpers\Search\PostQueries;
use App\Helpers\UrlGen;
use App\Http\Controllers\Web\Search\Traits\LocationTrait;
use App\Models\Post;
use App\Models\Category;
use App\Models\SavedSearch;
use App\Notifications\PostArchived;
use App\Notifications\PostRepublished;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Torann\LaravelMetaTags\Facades\MetaTag;

class PostsController extends AccountBaseController
{
	use LocationTrait;
	
	private $perPage = 12;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->perPage = (is_numeric(config('settings.list.items_per_page'))) ? config('settings.list.items_per_page') : $this->perPage;
	}
	
	/**
	 * @param $pagePath
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
	 */
	public function getPage($pagePath)
	{
		switch ($pagePath) {
			case 'my-posts':
				return $this->getMyPosts();
				break;
			case 'archived':
				return $this->getArchivedPosts($pagePath);
				break;
			case 'favourite':
				return $this->getFavouritePosts();
				break;
			case 'pending-approval':
				return $this->getPendingApprovalPosts();
				break;
			default:
				abort(404);
		}
	}
	
	/**
	 * @param null $postId
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
	 */
	public function getMyPosts($postId = null)
	{
		$pagePath = 'my-posts';
		
		// If "offline" button is clicked
		if (Str::contains(url()->current(), $pagePath . '/' . $postId . '/offline')) {
			$post = null;
			if (is_numeric($postId) && $postId > 0) {
				$post = Post::where('user_id', auth()->user()->id)->where('id', $postId)->first();
				if (empty($post)) {
					abort(404, t('Post not found'));
				}
				
				if ($post->archived != 1) {
					$post->archived = 1;
					$post->archived_at = Carbon::now(Date::getAppTimeZone());
					$post->archived_manually = 1;
					$post->save();
					
					if ($post->archived == 1) {
						$archivedPostsExpiration = config('settings.cron.manually_archived_posts_expiration', 180);
						
						$message = t('offline_putting_message', [
							'postTitle' => $post->title,
							'dateDel'   => Date::format($post->archived_at->addDays($archivedPostsExpiration)),
						]);
						
						flash($message)->success();
						
						// Send Confirmation Email or SMS
						if (config('settings.mail.confirmation') == 1) {
							try {
								$post->notify(new PostArchived($post, $archivedPostsExpiration));
							} catch (\Exception $e) {
								flash($e->getMessage())->error();
							}
						}
					} else {
						flash(t("The putting offline has failed"))->error();
					}
				} else {
					flash(t("The ad is already offline"))->error();
				}
			} else {
				flash(t("The putting offline has failed"))->error();
			}
			
			return back();
		}
		
		$data = [];
		$data['posts'] = $this->myPosts->paginate($this->perPage);
		
		// Meta Tags
		MetaTag::set('title', t('my_ads'));
		MetaTag::set('description', t('my_ads_on', ['appName' => config('settings.app.name')]));
		
		return appView('account.posts', $data);
	}
	
	/**
	 * @param null $postId
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
	 */
	public function getArchivedPosts($postId = null)
	{
		$pagePath = 'archived';
		
		// If "repost" button is clicked
		if (Str::contains(url()->current(), $pagePath . '/' . $postId . '/repost')) {
			$post = null;
			if (is_numeric($postId) && $postId > 0) {
				$post = Post::where('user_id', auth()->user()->id)->where('id', $postId)->first();
				if (empty($post)) {
					abort(404, t('Post not found'));
				}
				
				$postUrl = UrlGen::post($post);
				
				if ($post->archived != 0) {
					$post->archived = 0;
					$post->archived_at = null;
					$post->deletion_mail_sent_at = null;
					$post->created_at = Carbon::now(Date::getAppTimeZone());
					if ($post->archived_manually != 1) {
						$post->archived_manually = 0;
					}
					$post->save();
					
					if ($post->archived == 0) {
						flash(t('the_repost_has_done_successfully'))->success();
						
						// Send Confirmation Email or SMS
						if (config('settings.mail.confirmation') == 1) {
							try {
								$post->notify(new PostRepublished($post));
							} catch (\Exception $e) {
								flash($e->getMessage())->error();
							}
						}
					} else {
						flash(t('the_repost_has_failed'))->error();
					}
				} else {
					flash(t('The ad is already online'))->error();
				}
				
				return redirect($postUrl);
			} else {
				flash(t('the_repost_has_failed'))->error();
			}
			
			return redirect('account/' . $pagePath);
		}
		
		$data = [];
		$data['posts'] = $this->archivedPosts->paginate($this->perPage);
		
		// Meta Tags
		MetaTag::set('title', t('my_archived_ads'));
		MetaTag::set('description', t('my_archived_ads_on', ['appName' => config('settings.app.name')]));
		
		return appView('account.posts', $data);
	}
	
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getFavouritePosts()
	{
		$data = [];
		$data['posts'] = $this->favouritePosts->paginate($this->perPage);
		
		// Meta Tags
		MetaTag::set('title', t('my_favourite_ads'));
		MetaTag::set('description', t('my_favourite_ads_on', ['appName' => config('settings.app.name')]));
		
		return appView('account.posts', $data);
	}
	
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getPendingApprovalPosts()
	{
		$data = [];
		$data['posts'] = $this->pendingPosts->paginate($this->perPage);
		
		// Meta Tags
		MetaTag::set('title', t('my_pending_approval_ads'));
		MetaTag::set('description', t('my_pending_approval_ads_on', ['appName' => config('settings.app.name')]));
		
		return appView('account.posts', $data);
	}
	
	/**
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getSavedSearch(HttpRequest $request)
	{
		$data = [];
		
		// Get QueryString
		$tmp = parse_url(url(request()->getRequestUri()));
		$queryString = (isset($tmp['query']) ? $tmp['query'] : 'false');
		$queryString = preg_replace('|\&pag[^=]*=[0-9]*|i', '', $queryString);
		
		// CATEGORIES COLLECTION
		$cats = Category::orderBy('lft')->get();
		$cats = collect($cats)->keyBy('id');
		view()->share('cats', $cats);
		
		// Search
		$savedSearch = SavedSearch::currentCountry()
			->where('user_id', auth()->user()->id)
			->orderBy('created_at', 'DESC')
			->simplePaginate($this->perPage, ['*'], 'pag');
		
		if (collect($savedSearch->getCollection())
			->keyBy('query')
			->keys()
			->contains(function ($value, $key) use ($queryString) {
				$qs1 = preg_replace('/(\s|%20)/ui', '+', $queryString);
				$qs2 = preg_replace('/(\s|\+)/ui', '%20', $queryString);
				$qs3 = preg_replace('/(\+|%20)/ui', ' ', $queryString);
				
				return ($value == $qs1 || $value == $qs2 || $value == $qs3);
			})) {
			
			parse_str($queryString, $queryArray);
			
			// QueryString vars
			$cityId = isset($queryArray['l']) ? $queryArray['l'] : null;
			$location = isset($queryArray['location']) ? $queryArray['location'] : null;
			$adminName = (isset($queryArray['r']) && !isset($queryArray['l'])) ? $queryArray['r'] : null;
			
			if ($savedSearch->getCollection()->count() > 0) {
				// Pre-Search
				$preSearch = [
					'city'  => $this->getCity($cityId, $location),
					'admin' => $this->getAdmin($adminName),
				];
				
				// Search
				$data = (new PostQueries($preSearch))->fetch();
			}
		}
		$data['savedSearch'] = $savedSearch;
		
		// Meta Tags
		MetaTag::set('title', t('my_saved_search'));
		MetaTag::set('description', t('my_saved_search_on', ['appName' => config('settings.app.name')]));
		
		return appView('account.saved-search', $data);
	}
	
	/**
	 * @param $pagePath
	 * @param null $id
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function destroy($pagePath, $id = null)
	{
		// Get Entries ID
		$ids = [];
		if (request()->filled('entries')) {
			$ids = request()->input('entries');
		} else {
			if (!is_numeric($id) && $id <= 0) {
				$ids = [];
			} else {
				$ids[] = $id;
			}
		}
		$ids = implode(',', $ids);
		
		// Get API endpoint
		if ($pagePath == 'favourite') {
			$endpoint = '/savedPosts/' . $ids;
		} else if ($pagePath == 'saved-search') {
			$endpoint = '/savedSearches/' . $ids;
		} else {
			$endpoint = '/posts/' . $ids;
		}
		
		// Call API endpoint
		$data = makeApiRequest('delete', $endpoint, request()->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			return back()->withErrors(['error' => $message])->withInput();
		}
		
		// Notification Message
		if (data_get($data, 'success')) {
			flash($message)->success();
		} else {
			flash($message)->error();
		}
		
		return redirect('account/' . $pagePath);
	}
}
