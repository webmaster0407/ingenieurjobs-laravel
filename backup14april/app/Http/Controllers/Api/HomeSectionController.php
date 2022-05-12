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

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\HomeSection\SectionDataTrait;
use App\Http\Controllers\Api\HomeSection\SectionSettingTrait;
use App\Http\Resources\EntityCollection;
use App\Models\HomeSection;
use Illuminate\Support\Facades\Cache;

/**
 * @group Home
 */
class HomeSectionController extends BaseController
{
	use SectionDataTrait, SectionSettingTrait;
	
	/**
	 * List sections
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$countryCode = config('country.code');
		
		// Get all homepage sections
		$cacheId = $countryCode . '.homeSections';
		$sections = Cache::remember($cacheId, $this->cacheExpiration, function () use ($countryCode) {
			$sections = collect();
			
			// Check if the Domain Mapping plugin is available
			if (config('plugins.domainmapping.installed')) {
				try {
					$sections = \extras\plugins\domainmapping\app\Models\DomainHomeSection::query()
						->where('country_code', $countryCode)
						->orderBy('lft')
						->get();
				} catch (\Throwable $e) {
				}
			}
			
			// Get the entry from the core
			if ($sections->count() <= 0) {
				$sections = HomeSection::query()->orderBy('lft')->get();
			}
			
			return $sections;
		});
		
		$homeSections = [];
		if ($sections->count() > 0) {
			$sections = $sections->keyBy('method');
			foreach ($sections as $key => $section) {
				// Clear method name
				$method = str_replace(strtolower($countryCode) . '_', '', $section->method);
				
				// Check if method exists
				if (!method_exists($this, $method)) {
					continue;
				}
				
				$settingMethod = $method . 'Settings';
				
				// Call the method
				try {
					$homeSections[$key]['data'] = $this->{$method}($section->value);
					$homeSections[$key]['view'] = $section->view;
					if (method_exists($this, $settingMethod)) {
						$homeSections[$key]['settings'] = $this->{$settingMethod}($section->value);
					} else {
						$homeSections[$key]['settings'] = $section->value;
					}
					$homeSections[$key]['lft'] = $section->lft;
				} catch (\Throwable $e) {
					return $this->respondError($e->getMessage());
				}
			}
		}
		
		$resourceCollection = new EntityCollection(class_basename($this), $homeSections);
		
		return $this->respondWithCollection($resourceCollection);
	}
}
