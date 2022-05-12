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

namespace App\Http\Controllers\Web\Search;

use App\Helpers\Search\PostQueries;
use App\Helpers\UrlGen;
use App\Models\User;
use Torann\LaravelMetaTags\Facades\MetaTag;

class UserController extends BaseController
{
	public $isUserSearch = true;
	public $sUser;
	
	/**
	 * @param string|null $countryCode
	 * @param int|null $userId
	 * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
	 */
	public function index(?string $countryCode, int $userId = null)
	{
		// Check multi-countries site parameters
		if (!config('settings.seo.multi_countries_urls')) {
			$userId = $countryCode;
		}
		
		view()->share('isUserSearch', $this->isUserSearch);
		
		// Get User
		$this->sUser = User::findOrFail($userId);
		
		// Redirect to User's profile If username exists
		if (!empty($this->sUser->username)) {
			$url = UrlGen::user($this->sUser, $countryCode);
			
			return redirect()->to($url, 301)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		return $this->searchByUserId($this->sUser->id);
	}
	
	/**
	 * @param string|null $countryCode
	 * @param string|null $username
	 * @return \Illuminate\Contracts\View\View
	 */
	public function profile(?string $countryCode, string $username = null)
	{
		// Check multi-countries site parameters
		if (!config('settings.seo.multi_countries_urls')) {
			$username = $countryCode;
		}
		
		view()->share('isUserSearch', $this->isUserSearch);
		
		// Get User
		$this->sUser = User::where('username', $username)->firstOrFail();
		
		return $this->searchByUserId($this->sUser->id, $this->sUser->username);
	}
	
	/**
	 * @param $userId
	 * @param string|null $username
	 * @return \Illuminate\Contracts\View\View
	 */
	private function searchByUserId($userId, string $username = null)
	{
		// Search
		$data = (new PostQueries())->fetch();
		
		// Get Titles
		$bcTab = $this->getBreadcrumb();
		$htmlTitle = $this->getHtmlTitle();
		view()->share('bcTab', $bcTab);
		view()->share('htmlTitle', $htmlTitle);
		
		// Meta Tags
		[$title, $description, $keywords] = $this->getMetaTag();
		MetaTag::set('title', $title);
		MetaTag::set('description', $description);
		MetaTag::set('keywords', $keywords);
		
		// Translation vars
		view()->share('uriPathUserId', $userId);
		view()->share('uriPathUsername', $username);
		
		return appView('search.results', $data);
	}
}
