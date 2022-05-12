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
use App\Models\Company;
use Illuminate\Http\Request;
use Torann\LaravelMetaTags\Facades\MetaTag;

class CompanyController extends BaseController
{
	private $perPage = 10;
	public $isCompanySearch = true;
	public $company;
	
	public function __construct(Request $request)
	{
		parent::__construct($request);
		
		$this->perPage = (is_numeric(config('settings.list.items_per_page')))
			? config('settings.list.items_per_page')
			: $this->perPage;
	}
	
	/**
	 * Listing of Companies
	 *
	 * @return \Illuminate\Contracts\View\View
	 */
	public function index()
	{
		// Get Companies List
		$companies = Company::whereHas('posts', function ($query) {
			$query->currentCountry();
		})->withCount([
			'posts' => function ($query) {
				$query->currentCountry();
			},
		]);
		
		// Apply search filter
		if (request()->filled('q')) {
			$keywords = rawurldecode(request()->get('q'));
			$companies = $companies->where('name', 'LIKE', '%' . $keywords . '%')
				->whereOr('description', 'LIKE', '%' . $keywords . '%');
		}
		
		// Get Companies List with pagination
		$companies = $companies->orderByDesc('id')->paginate($this->perPage);
		
		// Meta Tags
		MetaTag::set('title', t('Companies List'));
		MetaTag::set('description', t('Companies List - :appName', ['appName' => config('settings.app.name')]));
		
		return appView('search.company.index')->with('companies', $companies);
	}
	
	/**
	 * Show a Company profiles (with its Jobs ads)
	 *
	 * @param $countryCode
	 * @param $companyId
	 * @return \Illuminate\Contracts\View\View
	 */
	public function profile($countryCode, $companyId = null)
	{
		// Check multi-countries site parameters
		if (!config('settings.seo.multi_countries_urls')) {
			$companyId = $countryCode;
		}
		
		// Get Company
		$this->company = Company::find($companyId);
		if (empty($this->company)) {
			abort(404, t('company_not_found'));
		}
		
		// Get the Company's Jobs
		$data = $this->jobs($this->company->id);
		
		// Share the Company's info with the view
		$data['company'] = $this->company;
		
		return appView('search.company.profile', $data);
	}
	
	/**
	 * Get the Company Jobs ads
	 *
	 * @param $companyId
	 * @return array
	 */
	private function jobs($companyId): array
	{
		view()->share('isCompanySearch', $this->isCompanySearch);
		
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
		view()->share('uriPathCompanyId', $companyId);
		
		return $data;
	}
}
