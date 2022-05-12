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

use App\Models\Category;
use App\Models\City;
use Torann\LaravelMetaTags\Facades\MetaTag;

class SitemapController extends FrontController
{
	/**
	 * @return \Illuminate\Contracts\View\View
	 * @throws \Exception
	 */
	public function index()
	{
		$data = [];
		
		// Get Categories
		$cacheId = 'categories.all.' . config('app.locale');
		$cats = cache()->remember($cacheId, $this->cacheExpiration, function () {
			return Category::orderBy('lft')->get();
		});
		$cats = collect($cats)->keyBy('id');
		$cats = $subCats = $cats->groupBy('parent_id');
		
		if ($cats->has(null)) {
			$col = round($cats->get(null)->count() / 3, 0, PHP_ROUND_HALF_EVEN);
			$col = ($col > 0) ? $col : 1;
			$data['cats'] = $cats->get(null)->chunk($col);
			$data['subCats'] = $subCats->forget(null);
		} else {
			$data['cats'] = collect([]);
			$data['subCats'] = collect([]);
		}
		
		// Get Cities
		$limit = 100;
		$cacheId = config('country.code') . '.cities.take.' . $limit;
		$cities = cache()->remember($cacheId, $this->cacheExpiration, function () use ($limit) {
			return City::currentCountry()->take($limit)->orderBy('population', 'DESC')->orderBy('name')->get();
		});
		
		$col = round($cities->count() / 4, 0, PHP_ROUND_HALF_EVEN);
		$col = ($col > 0) ? $col : 1;
		$data['cities'] = $cities->chunk($col);
		
		// Meta Tags
		[$title, $description, $keywords] = getMetaTag('sitemap');
		MetaTag::set('title', $title);
		MetaTag::set('description', strip_tags($description));
		MetaTag::set('keywords', $keywords);
		
		return appView('sitemap.index', $data);
	}
}
