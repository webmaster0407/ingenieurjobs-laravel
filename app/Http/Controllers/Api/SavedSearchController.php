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

use App\Helpers\Search\PostQueries;
use App\Http\Controllers\Api\Post\Search\LocationTrait;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\SavedSearchResource;
use App\Models\SavedSearch;
use Illuminate\Http\Request;

/**
 * @group Saved Searches
 */
class SavedSearchController extends BaseController
{
	use LocationTrait;
	
	/**
	 * List saved searches
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at. Example: created_at
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$user = auth('sanctum')->user();
		
		$countryCode = request()->get('country_code', config('country.code'));
		
		// Get QueryString
		$tmp = parse_url(url(request()->getRequestUri()));
		$queryString = (isset($tmp['query']) ? $tmp['query'] : 'false');
		$queryString = preg_replace('|\&pag[^=]*=[0-9]*|i', '', $queryString);
		
		// Get Saved Searches
		$savedSearches = SavedSearch::countryOf($countryCode)
			->where('user_id', $user->id);
		
		// Sorting
		$orderBy = request()->get('orderBy');
		if (request()->request->has('sort')) {
			request()->request->replace(['sort' => $orderBy]);
		} else {
			request()->request->add(['sort' => $orderBy]);
		}
		$savedSearches = $this->applySorting($savedSearches, ['created_at']);
		
		$savedSearches = $savedSearches->simplePaginate($this->perPage, ['*'], 'pag');
		
		$savedSearchesCollection = new EntityCollection(class_basename($this), $savedSearches);
		
		// Get Current Saved Search Results
		if (collect($savedSearches->getCollection())
			->keyBy('query')
			->keys()
			->contains(function ($value, $key) use ($queryString) {
				$qs1 = preg_replace('/(\s|%20)/ui', '+', $queryString);
				$qs2 = preg_replace('/(\s|\+)/ui', '%20', $queryString);
				$qs3 = preg_replace('/(\+|%20)/ui', ' ', $queryString);
				
				return ($value == $qs1 || $value == $qs2 || $value == $qs3);
			})) {
			
			parse_str($queryString, $queryArray);
			
			// QueryString Vars
			$cityId = $queryArray['l'] ?? null;
			$location = $queryArray['location'] ?? null;
			$adminName = $queryArray['r'] ?? null;
			
			// Search
			if ($savedSearches->getCollection()->count() > 0) {
				// Pre-Search
				$preSearch = [
					'city'  => $this->getCity($cityId, $location),
					'admin' => $this->getAdmin($adminName),
				];
				
				// Search
				$searchData = (new PostQueries($preSearch))->fetch();
				$searchData['preSearch'] = $preSearch;
			}
		}
		
		$result = [];
		$result['savedSearches'] = $savedSearchesCollection;
		$result['searchData'] = $searchData ?? [];
		
		$data = [];
		$data['success'] = true;
		$data['result'] = $result;
		
		return $this->apiResponse($data);
	}
	
	/**
	 * Store/Delete saved search
	 *
	 * Save a search result in favorite, or remove it from favorite.
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @bodyParam url string required Search URL to save. Example: https://demo.laraclassifier.com/search/?q=test&l=
	 * @bodyParam count_posts int required The number of posts found for the URL. Example: 29
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(Request $request)
	{
		$guard = 'sanctum';
		if (!auth($guard)->check()) {
			return $this->respondUnAuthorized();
		}
		
		$data = [
			'success' => false,
			'result'  => null,
		];
		
		// Get the 'url' field
		$queryUrl = $request->input('url');
		if (empty($queryUrl)) {
			$data['message'] = 'The "url" field need to be filled.';
			
			return $this->apiResponse($data, 400);
		}
		
		// Extract the keyword by extracting the 'q' parameter of the filled 'url'
		$tmp = parse_url($queryUrl);
		$query = $tmp['query'];
		parse_str($query, $tab);
		$keyword = $tab['q'];
		
		// Get the 'count_posts' field
		$countPosts = $request->input('count_posts');
		if ($keyword == '') {
			$data['message'] = 'The "count_posts" field need to be filled.';
			
			return $this->apiResponse($data, 400);
		}
		
		$data['success'] = true;
		
		$user = auth($guard)->user();
		
		$savedSearch = SavedSearch::where('user_id', $user->id)->where('keyword', $keyword)->where('query', $query);
		if ($savedSearch->count() > 0) {
			// Delete SavedSearch
			$savedSearch->delete();
			
			$data['message'] = t('Search deleted successfully');
		} else {
			// Store SavedSearch
			$savedSearchArray = [
				'country_code' => config('country.code'),
				'user_id'      => $user->id,
				'keyword'      => $keyword,
				'query'        => $query,
				'count'        => $countPosts,
			];
			$savedSearch = new SavedSearch($savedSearchArray);
			$savedSearch->save();
			
			$resource = new SavedSearchResource($savedSearch);
			
			$data['message'] = t('Search saved successfully');
			$data['result'] = $resource;
		}
		
		return $this->apiResponse($data);
	}
	
	/**
	 * Delete saved search(es)
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @urlParam ids string required The ID or comma-separated IDs list of saved search(es).
	 *
	 * @param $ids
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function destroy($ids)
	{
		$user = auth('sanctum')->user();
		
		$data = [
			'success' => false,
			'message' => t('no_deletion_is_done'),
			'result'  => null,
		];
		
		// Get Entries ID (IDs separated by comma accepted)
		$ids = explode(',', $ids);
		
		// Delete
		$res = false;
		foreach ($ids as $id) {
			$savedSearch = SavedSearch::query()
				->where('user_id', $user->id)
				->where('id', $id)
				->first();
			
			if (!empty($savedSearch)) {
				$res = $savedSearch->delete();
			}
		}
		
		// Confirmation
		if ($res) {
			$data['success'] = true;
			
			$count = count($ids);
			if ($count > 1) {
				$data['message'] = t('x entities has been deleted successfully', ['entities' => t('saved searches'), 'count' => $count]);
			} else {
				$data['message'] = t('1 entity has been deleted successfully', ['entity' => t('saved search')]);
			}
		}
		
		return $this->apiResponse($data);
	}
}
