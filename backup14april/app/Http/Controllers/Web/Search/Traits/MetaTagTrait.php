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

namespace App\Http\Controllers\Web\Search\Traits;

trait MetaTagTrait
{
	/**
	 * Get Search Meta Tags
	 *
	 * @return array
	 */
	public function getMetaTag(): array
	{
		$metaTag = [];
		
		[$title, $description, $keywords] = getMetaTag('search');
		
		// Get pre-search data
		$category = $this->subCat ?? $this->cat ?? null;
		$location = (request()->filled('r') && !request()->filled('l')) ? ($this->admin ?? null) : ($this->city ?? null);
		$user = $this->sUser ?? null;
		$tag = $this->tag ?? null;
		$company = $this->company ?? null;
		
		// Init.
		$fallbackTitle = '';
		$fallbackTitle .= t('jobs_offers');
		
		// Keyword
		if (request()->filled('q')) {
			$fallbackTitle .= ' ' . t('for') . ' ';
			$fallbackTitle .= '"' . rawurldecode(request()->get('q')) . '"';
		}
		
		// Category
		if (!empty($category)) {
			[$title, $description, $keywords] = getMetaTag('searchCategory');
			$this->applyCategoryValue($category, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
			
			if (!empty($location) || !empty($user) || !empty($tag) || !empty($company)) {
				[$title, $description, $keywords] = getMetaTag('search');
				$this->applyCategoryValue($category, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				if (!empty($location)) {
					$this->applyLocationValue($location, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($user)) {
					$this->applyUserValue($user, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($tag)) {
					$this->applyTagValue($tag, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($company)) {
					$this->applyCompanyValue($company, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
			}
		}
		
		// Location
		if (!empty($location)) {
			[$title, $description, $keywords] = getMetaTag('searchLocation');
			$this->applyLocationValue($location, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
			
			if (!empty($category) || !empty($user) || !empty($tag) || !empty($company)) {
				[$title, $description, $keywords] = getMetaTag('search');
				$this->applyLocationValue($location, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				if (!empty($category)) {
					$this->applyCategoryValue($category, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($user)) {
					$this->applyUserValue($user, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($tag)) {
					$this->applyTagValue($tag, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($company)) {
					$this->applyCompanyValue($company, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
			}
		}
		
		// User
		if (!empty($user)) {
			[$title, $description, $keywords] = getMetaTag('searchProfile');
			$this->applyUserValue($user, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
			
			if (!empty($category) || !empty($location) || !empty($tag) || !empty($company)) {
				[$title, $description, $keywords] = getMetaTag('search');
				$this->applyUserValue($user, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				if (!empty($category)) {
					$this->applyCategoryValue($category, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($location)) {
					$this->applyLocationValue($location, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($tag)) {
					$this->applyTagValue($tag, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($company)) {
					$this->applyCompanyValue($company, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
			}
		}
		
		// Tag
		if (!empty($tag)) {
			[$title, $description, $keywords] = getMetaTag('searchTag');
			$this->applyTagValue($tag, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
			
			if (!empty($category) || !empty($location) || !empty($user) || !empty($company)) {
				[$title, $description, $keywords] = getMetaTag('search');
				$this->applyTagValue($tag, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				if (!empty($category)) {
					$this->applyCategoryValue($category, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($location)) {
					$this->applyLocationValue($location, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($user)) {
					$this->applyUserValue($user, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($company)) {
					$this->applyCompanyValue($company, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
			}
		}
		
		// Company
		if (!empty($company)) {
			[$title, $description, $keywords] = getMetaTag('searchProfile');
			$this->applyCompanyValue($company, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
			
			if (!empty($category) || !empty($location) || !empty($user) || !empty($tag)) {
				[$title, $description, $keywords] = getMetaTag('search');
				$this->applyCompanyValue($company, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				if (!empty($category)) {
					$this->applyCategoryValue($category, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($location)) {
					$this->applyLocationValue($location, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($user)) {
					$this->applyUserValue($user, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
				if (!empty($tag)) {
					$this->applyTagValue($tag, $title, $description, $keywords, $fallbackTitle, $fallbackDescription);
				}
			}
		}
		
		// Country
		$fallbackTitle .= ', ' . config('country.name');
		
		$title = replaceGlobalPatterns($title);
		$description = replaceGlobalPatterns($description);
		$keywords = mb_strtolower(replaceGlobalPatterns($keywords));
		
		$metaTag['title'] = !empty($title) ? $title : $fallbackTitle;
		$metaTag['description'] = !empty($description) ? $description : ($fallbackDescription ?? $fallbackTitle);
		$metaTag['keywords'] = $keywords;
		
		return array_values($metaTag);
	}
	
	/* PRIVATE METHODS */
	
	private function applyCategoryValue($cat, &$title, &$description, &$keywords, &$fallbackTitle, &$fallbackDescription)
	{
		if (empty($cat)) {
			return;
		}
		
		$title = str_replace('{category.name}', $cat->name, $title);
		$title = str_replace('{category.title}', $cat->seo_title, $title);
		$description = str_replace('{category.name}', $cat->name, $description);
		$description = str_replace('{category.description}', $cat->seo_description, $description);
		$keywords = str_replace('{category.name}', mb_strtolower($cat->name), $keywords);
		$keywords = str_replace('{category.keywords}', mb_strtolower($cat->seo_keywords), $keywords);
		
		$fallbackTitle .= ' ' . $cat->name;
		if (!empty($cat->seo_description)) {
			$fallbackDescription = $cat->seo_description . ', ' . config('country.name');
		}
	}
	
	private function applyLocationValue($location, &$title, &$description, &$keywords, &$fallbackTitle, &$fallbackDescription)
	{
		if (empty($location)) {
			return;
		}
		
		$title = str_replace('{location.name}', $location->name, $title);
		$description = str_replace('{location.name}', $location->name, $description);
		$keywords = str_replace('{location.name}', mb_strtolower($location->name), $keywords);
		
		$fallbackTitle .= ' ' . t('in') . ' ';
		$fallbackTitle .= $location->name;
		$fallbackDescription = t('ads_in_location', ['location' => $location->name])
			. ', ' . config('country.name')
			. '. ' . t('Looking for a job')
			. ' - ' . $location->name
			. ', ' . config('country.name');
	}
	
	private function applyUserValue($user, &$title, &$description, &$keywords, &$fallbackTitle, &$fallbackDescription)
	{
		if (empty($user)) {
			return;
		}
		
		$title = str_replace('{profile.name}', $user->name, $title);
		$description = str_replace('{profile.name}', $user->name, $description);
		$keywords = str_replace('{profile.name}', mb_strtolower($user->name), $keywords);
		
		$fallbackTitle .= ' ' . t('of') . ' ';
		$fallbackTitle .= $user->name;
	}
	
	private function applyTagValue($tag, &$title, &$description, &$keywords, &$fallbackTitle, &$fallbackDescription)
	{
		if (empty($tag)) {
			return;
		}
		
		$title = str_replace('{tag}', $tag, $title);
		$description = str_replace('{tag}', $tag, $description);
		$keywords = str_replace('{tag}', mb_strtolower($tag), $keywords);
		
		$fallbackTitle .= ' ' . t('for') . ' ';
		$fallbackTitle .= $tag . ' (' . t('Tag') . ')';
	}
	
	private function applyCompanyValue($company, &$title, &$description, &$keywords, &$fallbackTitle, &$fallbackDescription)
	{
		if (empty($company)) {
			return;
		}
		
		$title = str_replace('{profile.name}', $company->name, $title);
		$description = str_replace('{profile.name}', $company->name, $description);
		$keywords = str_replace('{profile.name}', mb_strtolower($company->name), $keywords);
		
		$fallbackTitle .= ' ' . t('among') . ' ';
		$fallbackTitle .= $company->name;
	}
}
