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

namespace App\Helpers\Search;

use App\Helpers\Search\Traits\Filters;
use App\Helpers\Search\Traits\GroupBy;
use App\Helpers\Search\Traits\Having;
use App\Helpers\Search\Traits\OrderBy;
use App\Helpers\Search\Traits\Relations;
use App\Helpers\Search\Traits\Select;
use App\Models\Post;

class PostQueries
{
	use Select, Relations, Filters, GroupBy, Having, OrderBy;
	
	protected static $cacheExpiration = 300; // 5mn (60s * 5)
	
	public $country;
	public $lang;
	public $perPage = 12;
	
	// Pre-Search Objects
	public $cat = null;
	public $city = null;
	public $admin = null;
	
	// Default Columns Selected
	protected $select = [];
	protected $groupBy = [];
	protected $having = [];
	protected $orderBy = [];
	
	protected $posts;
	protected $postsTable;
	
	// 'queryStringKey' => ['name' => 'column', 'order' => 'direction']
	public $orderByParametersFields = [];
	
	/**
	 * PostQueries constructor.
	 *
	 * @param array $preSearch
	 */
	public function __construct(array $preSearch = [])
	{
		// Pre-Search
		if (isset($preSearch['cat']) && !empty($preSearch['cat'])) {
			$this->cat = $preSearch['cat'];
		}
		if (isset($preSearch['city']) && !empty($preSearch['city'])) {
			$this->city = $preSearch['city'];
		}
		if (isset($preSearch['admin']) && !empty($preSearch['admin'])) {
			$this->admin = $preSearch['admin'];
		}
		
		// Entries per page
		$perPage = config('settings.list.items_per_page');
		if (is_numeric($perPage) && $perPage > 1 && $perPage <= 50) {
			$this->perPage = $perPage;
		}
		
		// Init. Builder
		$this->posts = Post::query();
		$this->postsTable = (new Post())->getTable();
		
		// Add Default Select Columns
		$this->setSelect();
		
		// Relations
		$this->setRelations();
	}
	
	/**
	 * Get the results
	 *
	 * @return array
	 */
	public function fetch(): array
	{
		// Apply Requested Filters
		$this->applyFilters();
		
		// Apply Aggregation & Reorder Statements
		$this->applyGroupBy();
		$this->applyHaving();
		$this->applyOrderBy();
		
		// Get Results
		$posts = $this->posts->paginate((int)$this->perPage);
		
		// Use the current URL in the pagination
		// $posts->setPath(request()->url());
		
		// Remove Distance from Request
		$this->removeDistanceFromRequest();
		
		// Get Count Results
		$count = collect(['all' => $posts->total()]);
		
		// Results Data
		$data = [
			'posts' => $posts,
			'count' => $count,
		];
		
		if (config('settings.list.show_listings_tags')) {
			$data['tags'] = $this->getPostsTags($posts);
		}
		
		return $data;
	}
	
	/**
	 * Get found posts' tags (per page)
	 *
	 * @param $posts
	 * @return array|false|string|null
	 */
	private function getPostsTags($posts)
	{
		$tags = [];
		if ($posts->count() > 0) {
			foreach ($posts as $post) {
				if (!empty($post->tags)) {
					$tags = array_merge($tags, $post->tags);
				}
			}
			$tags = tagCleaner($tags);
		}
		
		return $tags;
	}
}
