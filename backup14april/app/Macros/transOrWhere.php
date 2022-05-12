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
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\SpatieTranslatable\HasTranslations;

Builder::macro('transOrWhere', function ($column, $operator = null, $value = null) {
	
	if (!(isset($this->query) && $this->query instanceof \Illuminate\Database\Query\Builder)) {
		return $this;
	}
	
	if ($column instanceof \Closure) {
		
		$this->query->orWhere($column, $operator, $value);
		
	} else {
		
		$isTranslatableModel = (
			isset($this->model)
			&& in_array(HasTranslations::class, class_uses($this->model))
			&& in_array($column, $this->model->translatable)
		);
		
		if ($isTranslatableModel) {
			if (func_num_args() == 2 && empty($value)) {
				$value = $operator;
			}
			
			$locale = $locale ?? app()->getLocale();
			$masterLocale = config('translatable.fallback_locale') ?? config('app.fallback_locale');
			
			// Escaping Quote
			$value = str_replace(['\''], ['\\\''], $value);
			
			// JSON columns manipulation is only available in:
			// MySQL 5.7 or above & MariaDB 10.2.3 or above
			$jsonMethodsAreAvailable = (
				(!DBTool::isMariaDB() && DBTool::isMySqlMinVersion('5.7'))
				|| (DBTool::isMariaDB() && DBTool::isMySqlMinVersion('10.2.3'))
			);
			if ($jsonMethodsAreAvailable) {
				
				$this->query->orWhere(function ($query) use ($column, $locale, $value, $masterLocale) {
					$jsonColumn = jsonExtract($column, $locale);
					$jsonColumn = 'LOWER(' . $jsonColumn . ')';
					$jsonColumn = 'BINARY ' . $jsonColumn;
					
					$value = 'LOWER(\'' . $value . '\')';
					$value = 'BINARY ' . $value;
					
					$query->whereRaw($jsonColumn . ' LIKE ' . $value);
					
					if (!empty($masterLocale) && $locale != $masterLocale) {
						$jsonColumn = jsonExtract($column, $masterLocale);
						$jsonColumn = 'LOWER(' . $jsonColumn . ')';
						$jsonColumn = 'BINARY ' . $jsonColumn;
						
						$query->orWhereRaw($jsonColumn . ' LIKE ' . $value);
					}
				});
				
			} else {
				
				// $value = trim(json_encode($value), '"');
				
				if (!Str::startsWith($value, '%')) {
					$value = '%' . ltrim($value, '%');
				}
				if (!Str::endsWith($value, '%')) {
					$value = rtrim($value, '%') . '%';
				}
				
				$this->query->orWhere($column, 'LIKE', $value);
				
			}
		} else {
			
			$this->query->orWhere($column, $operator, $value);
			
		}
		
	}
	
	return $this;
});
