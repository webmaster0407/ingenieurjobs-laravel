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

namespace App\Helpers\Search\Traits\Filters;

use App\Helpers\DBTool;
use App\Helpers\Number;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait KeywordFilter
{
	protected $searchableColumns = [
		// Post
		'title'                    => 10,
		'{postsTable}.description' => 10,
		'tags'                     => 8,
		// Category
		'tCategory.name'           => 5,
		'tParentCat.name'          => 2,
	];
	
	protected $forceAverage = true; // Force relevance's average
	protected $average = 1;         // Set relevance's average
	public static $queryLength = 1; // Minimum query characters
	
	// Ban this words in query search
	// protected $bannedWords = ['sell', 'buy', 'vendre', 'vente', 'achat', 'acheter', 'ses', 'sur', 'de', 'la', 'le', 'les', 'des', 'pour', 'latest'];
	protected $bannedWords = [];
	
	/**
	 * Keyword Filter
	 */
	protected function applyKeywordFilter()
	{
		if (!(isset($this->posts) && isset($this->postsTable) && isset($this->having) && isset($this->groupBy) && isset($this->orderBy))) {
			return;
		}
		
		if (!request()->filled('q')) {
			return;
		}
		
		$keywords = request()->get('q');
		
		if (trim($keywords) == '') {
			return;
		}
		
		// Get valid columns name
		$searchableColumns = collect($this->searchableColumns)->mapWithKeys(function ($value, $key) {
			$key = str_replace('{postsTable}', $this->postsTable, $key);
			
			if (Str::contains($key, '.')) {
				$key = DB::getTablePrefix() . $key;
			}
			
			return [$key => $value];
		})->toArray();
		
		// Ban the Country'sname from keywords
		array_push($this->bannedWords, strtolower(config('country.name')));
		
		// Query search SELECT array
		$select = [];
		$bindings = [];
		
		// Get all keywords in array
		$wordsArray = preg_split('/[\s,\+]+/', $keywords);
		
		//-- If third parameter is set as true, it will check if the column starts with the search
		//-- if then it adds relevance * 30
		//-- this ensures that relevant results will be at top
		$select[] = "(CASE WHEN title LIKE ? THEN 300 ELSE 0 END) ";
		$bindings[] = $keywords . '%';
		
		foreach ($searchableColumns as $column => $relevance) {
			$tmp = [];
			
			foreach ($wordsArray as $key => $word) {
				// Skip short keywords
				if (strlen($word) <= self::$queryLength) {
					continue;
				}
				
				// @todo: Find another way
				if (in_array(mb_strtolower($word), $this->bannedWords)) {
					continue;
				}
				
				$wordFilter = $column . " LIKE ?";
				$wordBinding = '%' . $word . '%';
				
				$masterLocaleWordFilter = '';
				$masterLocaleWordBinding = '';
				
				if (Str::contains($column, 'tCategory.') || Str::contains($column, 'tParentCat.')) {
					$modelColumn = last(explode('.', $column));
					if ((new Category)->isTranslatableAttribute($modelColumn)) {
						$locale = app()->getLocale();
						$masterLocale = config('translatable.fallback_locale') ?? config('app.fallback_locale');
						
						// JSON columns manipulation is only available in:
						// MySQL 5.7 or above & MariaDB 10.2.3 or above
						$jsonMethodsAreAvailable = (
							(!DBTool::isMariaDB() && DBTool::isMySqlMinVersion('5.7'))
							|| (DBTool::isMariaDB() && DBTool::isMySqlMinVersion('10.2.3'))
						);
						if ($jsonMethodsAreAvailable) {
							
							// Convert non-JSON value column to the right JSON format
							$jsonObjColumn = 'JSON_OBJECT(\'' . $locale . '\', ' . $column . ')';
							$isValidJson = 'JSON_VALID(' . $column . ')';
							$column = 'IF(' . $isValidJson . ', ' . $column . ', ' . $jsonObjColumn . ')';
							
							// Apply WHERE clause using MySQL JSON methods
							$jsonColumn = 'JSON_UNQUOTE(JSON_EXTRACT(' . $column . ', \'$.' . $locale . '\'))';
							$jsonColumn = 'LOWER(' . $jsonColumn . ')';
							$jsonColumn = 'BINARY ' . $jsonColumn;
							
							$wordFilter = $jsonColumn . ' LIKE BINARY LOWER(?)';
							$wordBinding = '%' . $word . '%';
							
							if (!empty($masterLocale) && $locale != $masterLocale) {
								$jsonColumn = 'JSON_UNQUOTE(JSON_EXTRACT(' . $column . ', \'$.' . $masterLocale . '\'))';
								$jsonColumn = 'LOWER(' . $jsonColumn . ')';
								$jsonColumn = 'BINARY ' . $jsonColumn;
								
								$masterLocaleWordFilter = $jsonColumn . ' LIKE BINARY LOWER(?)';
								$masterLocaleWordBinding = '%' . $word . '%';
							}
							
						} else {
							
							// $word = trim(json_encode($word), '"');
							// Escaping Quote
							$word = str_replace(['\''], ['\\\''], $word);
							
							$wordFilter = $column . ' LIKE ?';
							$wordBinding = '%' . $word . '%';
							
						}
					}
				}
				
				$tmp[] = $wordFilter;
				$bindings[] = $wordBinding;
				
				if (!empty($masterLocaleWordFilter) && !empty($masterLocaleWordBinding)) {
					$tmp[] = $masterLocaleWordFilter;
					$bindings[] = $masterLocaleWordBinding;
				}
			}
			
			if (is_array($tmp) && count($tmp) > 0) {
				$select[] = "(CASE WHEN " . implode(' || ', $tmp) . " THEN " . $relevance . " ELSE 0 END) ";
			}
		}
		
		if (!is_array($select) || !is_array($bindings)) {
			return;
		}
		if (count($select) <= 0) {
			return;
		}
		
		// Make possible the orderBy 'relevance'
		$this->orderByParametersFields['relevance'] = ['name' => 'relevance', 'order' => 'DESC'];
		
		//-- Select
		$this->posts->addSelect(DB::raw("(" . implode("+\n", $select) . ") AS relevance"));
		if (count($bindings) > 0) {
			foreach ($bindings as $binding) {
				$this->posts->addBinding($binding, 'select');
			}
		}
		
		//-- Having
		//-- Selects only the rows that have more than
		//-- the sum of all attributes relevances and divided by count of attributes
		//-- e.i. (20 + 5 + 2) / 4 = 6.75
		$average = array_sum($searchableColumns) / count($searchableColumns);
		$average = Number::toFloat($average);
		if ($this->forceAverage) {
			$average = $this->average;
		}
		$this->having[] = 'relevance >= ' . $average;
		
		//-- Group By (relevance)
		$this->groupBy[] = "relevance";
		
		//-- Orders By (relevance)
		$this->orderBy[] = 'relevance DESC';
	}
}
