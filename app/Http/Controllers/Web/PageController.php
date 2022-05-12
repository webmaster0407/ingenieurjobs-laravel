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

namespace App\Http\Controllers\Web;

use App\Helpers\UrlGen;
use App\Http\Controllers\Web\Traits\Sluggable\PageBySlug;
use App\Http\Requests\ContactRequest;
use App\Models\City;
use App\Models\Package;
use Illuminate\Support\Str;
use Torann\LaravelMetaTags\Facades\MetaTag;

class PageController extends FrontController
{
	use PageBySlug;
	
	/**
	 * @return \Illuminate\Contracts\View\View
	 * @throws \Exception
	 */
	public function pricing()
	{
		$data = [];
		
		// Get Packages
		$cacheId = 'packages.with.currency.' . config('app.locale');
		$packages = cache()->remember($cacheId, $this->cacheExpiration, function () {
			return Package::applyCurrency()->with('currency')->orderBy('lft')->get();
		});
		$data['packages'] = $packages;
		
		// Select a Package and go to previous URL ---------------------
		// Add Listing possible URLs
		$addListingUriArray = [
			'create',
			'post\/create',
		];
		// Default Add Listing URL
		$addListingUrl = UrlGen::addPost();
		if (request()->filled('from')) {
			foreach ($addListingUriArray as $uriPattern) {
				if (preg_match('#' . $uriPattern . '#', request()->get('from'))) {
					$addListingUrl = url(request()->get('from'));
					break;
				}
			}
		}
		view()->share('addListingUrl', $addListingUrl);
		// --------------------------------------------------------------
		
		// Meta Tags
		[$title, $description, $keywords] = getMetaTag('contact');
		MetaTag::set('title', $title);
		MetaTag::set('description', strip_tags($description));
		MetaTag::set('keywords', $keywords);
		
		return appView('pages.pricing', $data);
	}
	
	/**
	 * @param $slug
	 * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
	 */
	public function cms($slug)
	{
		// Get the Page
		$page = $this->getPageBySlug($slug);
		if (empty($page)) {
			abort(404);
		}
		
		view()->share('page', $page);
		view()->share('uriPathPageSlug', $slug);
		
		// Check if an external link is available
		if (!empty($page->external_link)) {
			return redirect()->away($page->external_link, 301)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		// Meta Tags
		[$title, $description, $keywords] = getMetaTag('staticPage');
		$title = str_replace('{page.title}', $page->seo_title, $title);
		$title = str_replace('{app.name}', config('app.name'), $title);
		$title = str_replace('{country.name}', config('country.name'), $title);
		
		$description = str_replace('{page.description}', $page->seo_description, $description);
		$description = str_replace('{app.name}', config('app.name'), $description);
		$description = str_replace('{country.name}', config('country.name'), $description);
		
		$keywords = str_replace('{page.keywords}', $page->seo_keywords, $keywords);
		$keywords = str_replace('{app.name}', config('app.name'), $keywords);
		$keywords = str_replace('{country.name}', config('country.name'), $keywords);
		
		if (empty($title)) {
			$title = $page->title . ' - ' . config('app.name');
		}
		if (empty($description)) {
			$description = Str::limit(str_strip(strip_tags($page->content)), 200);
		}
		
		$title = removeUnmatchedPatterns($title);
		$description = removeUnmatchedPatterns($description);
		$keywords = removeUnmatchedPatterns($keywords);
		
		MetaTag::set('title', $title);
		MetaTag::set('description', $description);
		MetaTag::set('keywords', $keywords);
		
		// Open Graph
		$this->og->title($title)->description($description);
		if (!empty($page->picture)) {
			if ($this->og->has('image')) {
				$this->og->forget('image')->forget('image:width')->forget('image:height');
			}
			$this->og->image(imgUrl($page->picture, 'bgHeader'), [
				'width'  => 600,
				'height' => 600,
			]);
		}
		view()->share('og', $this->og);
		
		return appView('pages.cms');
	}
	
	/**
	 * @return \Illuminate\Contracts\View\View
	 * @throws \Exception
	 */
	public function contact()
	{
		// Get the Country's largest city for Google Maps
		$cacheId = config('country.code') . '.city.population.desc.first';
		$city = cache()->remember($cacheId, $this->cacheExpiration, function () {
			return City::currentCountry()->orderBy('population', 'desc')->first();
		});
		view()->share('city', $city);
		
		// Meta Tags
		[$title, $description, $keywords] = getMetaTag('contact');
		MetaTag::set('title', $title);
		MetaTag::set('description', strip_tags($description));
		MetaTag::set('keywords', $keywords);
		
		return appView('pages.contact');
	}
	
	/**
	 * @param \App\Http\Requests\ContactRequest $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function contactPost(ContactRequest $request)
	{
		// Add required data in the request for API
		request()->merge([
			'country_code' => config('country.code'),
			'country_name' => config('country.name'),
		]);
		
		// Call API endpoint
		$endpoint = '/contact';
		$data = makeApiRequest('post', $endpoint, $request->all());
		
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
		
		return redirect(UrlGen::contact());
	}

	public function pricingplan()
	{
		return appView('pages.pricingplan');
	}
}
