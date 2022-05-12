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

namespace App\Macros;

use App\Helpers\DBTool;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\SpatieTranslatable\HasTranslations;

Builder::macro('orderBy', function ($column, $direction = 'asc', $locale = null) {
	
	if (!(isset($this->query) && $this->query instanceof \Illuminate\Database\Query\Builder)) {
		return $this;
	}
	
	$isTranslatableModel = (
		isset($this->model)
		&& in_array(HasTranslations::class, class_uses($this->model))
		&& in_array($column, $this->model->translatable)
	);
	
	if ($isTranslatableModel) {
		$locale = $locale ?? app()->getLocale();
		$masterLocale = config('translatable.fallback_locale') ?? config('app.fallback_locale');
		
		$jsonMethodsAreAvailable = (
			(!DBTool::isMariaDB() && DBTool::isMySqlMinVersion('5.7'))
			|| (DBTool::isMariaDB() && DBTool::isMySqlMinVersion('10.2.3'))
		);
		if ($jsonMethodsAreAvailable) {
			
			$jsonColumn = jsonExtract($column, $locale);
			$this->query->orderByRaw($jsonColumn . ' ' . $direction);
			
			if (!empty($masterLocale) && $locale != $masterLocale) {
				$jsonColumn = jsonExtract($column, $masterLocale);
				$this->query->orderByRaw($jsonColumn . ' ' . $direction);
			}
			
		} else {
			
			/*
			 * Remove the first part of the column up to and including the first "$locale":"
			 * IMPORTANT: To prevent MySQL limitation use '"en":' instead of '"en":"' that provide wrong result.
			 * DEBUG: SELECT LOCATE('"en":', name) as nPos, SUBSTR(name, LOCATE('"en":', name)+6) as cName FROM lc_categories WHERE parent_id IS NULL;
			 */
			$subStr = '"' . $locale . '":';
			$subStrPos = 'LOCATE(\'' . $subStr . '\', ' . $column . ')';
			$jsonColumn = 'SUBSTR(' . $column . ', ' . $subStrPos . '+' . (strlen($subStr) + 1) . ')';
			$jsonColumn = 'IF(' . $subStrPos . ' > 0, ' . $jsonColumn . ', NULL)';
			// With COALESCE(), returns the first non-NULL value in a specified list of arguments (here 'zz')
			$jsonColumn = 'COALESCE(' . $jsonColumn . ', \'zz\')';
			$this->query->orderByRaw($jsonColumn . ' ' . $direction);
			
			if (!empty($masterLocale) && $locale != $masterLocale) {
				$subStr = '"' . $masterLocale . '":';
				$subStrPos = 'LOCATE(\'' . $subStr . '\', ' . $column . ')';
				$jsonColumn = 'SUBSTR(' . $column . ', ' . $subStrPos . '+' . (strlen($subStr) + 1) . ')';
				$jsonColumn = 'IF(' . $subStrPos . ' > 0, ' . $jsonColumn . ', ' . $column . ')';
				$this->query->orderByRaw($jsonColumn . ' ' . $direction);
			}
			
		}
	} else {
		$this->query->orderBy($column, $direction);
	}
	
	return $this;
});
