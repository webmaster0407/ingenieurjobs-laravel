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

namespace App\Models;

use App\Models\Scopes\ActiveScope;
use App\Observers\LanguageObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;

class Language extends BaseModel
{
	use Crud, Sluggable, SluggableScopeHelpers;
	
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'languages';
	
	/**
	 * The primary key for the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'abbr';
	public $incrementing = false;
	
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;
	
	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id'];
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'abbr',
		'locale',
		'name',
		'native',
		'flag',
		'app_name',
		'script',
		'direction',
		'russian_pluralization',
		'date_format',
		'datetime_format',
		'active',
		'default',
		'parent_id',
		'lft',
		'rgt',
		'depth',
		'created_at',
		'updated_at',
	];
	
	/**
	 * The attributes that should be hidden for arrays
	 *
	 * @var array
	 */
	// protected $hidden = [];
	
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	// protected $dates = [];
	
	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/
	protected static function boot()
	{
		parent::boot();
		
		Language::observe(LanguageObserver::class);
		
		static::addGlobalScope(new ActiveScope());
	}
	
	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable(): array
	{
		return [
			'app_name' => [
				'source' => ['app_name', 'name'],
			],
		];
	}
	
	/**
	 * @return array
	 */
	public static function getActiveLanguagesArray()
	{
		$cacheExpiration = config('settings.optimization.cache_expiration', 86400);
		$activeLanguages = Cache::remember('languages.active.array', $cacheExpiration, function () {
			$activeLanguages = self::where('active', 1)->get();
			
			return $activeLanguages;
		});
		
		$activeLanguages = collect($activeLanguages)->keyBy('abbr')->toArray();
		
		return $activeLanguages;
	}
	
	/**
	 * @param bool $abbr
	 * @return mixed
	 */
	public static function findByAbbr($abbr = false)
	{
		return self::where('abbr', $abbr)->first();
	}
	
	/**
	 * @param bool $xPanel
	 * @return string
	 */
	public function syncFilesLinesBtn($xPanel = false)
	{
		$url = admin_url('languages/sync_files');
		
		$msg = trans('admin.Fill the missing lines in all languages files from the master language');
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		
		// Button
		$out = '';
		$out .= '<a class="btn btn-success shadow" href="' . $url . '"' . $tooltip . '>';
		$out .= '<i class="fas fa-exchange-alt"></i> ';
		$out .= trans('admin.Sync Languages Files Lines');
		$out .= '</a>';
		
		return $out;
	}
	
	/**
	 * @param bool $xPanel
	 * @return string
	 */
	public function filesLinesEditionBtn($xPanel = false)
	{
		$url = admin_url('languages/texts');
		
		$msg = trans('admin.site_texts');
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		
		// Button
		$out = '';
		$out .= '<a class="btn btn-primary shadow" href="' . $url . '"' . $tooltip . '>';
		$out .= '<i class="fa fa-language"></i> ';
		$out .= trans('admin.translate') . ' ' . mb_strtolower(trans('admin.site_texts'));
		$out .= '</a>';
		
		return $out;
	}
	
	public function getNameHtml()
	{
		$currentUrl = preg_replace('#/(search)$#', '', url()->current());
		$url = $currentUrl . '/' . $this->getKey() . '/edit';
		
		$out = '<a href="' . $url . '">' . $this->name . '</a>';
		
		return $out;
	}
	
	public function getDefaultHtml()
	{
		return checkboxDisplay($this->default);
	}
	
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	
	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/
	public function scopeActive($query)
	{
		return $query->where('active', 1);
	}
	
	/*
	|--------------------------------------------------------------------------
	| ACCESSORS
	|--------------------------------------------------------------------------
	*/
	public function getIdAttribute($value)
	{
		return $this->attributes['abbr'];
	}
	
	// The app_name is created automatically from the "name" field if no app_name exists.
	public function getAppNameOrNameAttribute()
	{
		if ($this->app_name != '') {
			return $this->app_name;
		}
		return $this->name;
	}
	
	public function getNativeAttribute($value)
	{
		if ($value != '') {
			return $value;
		}
		return $this->attributes['name'];
	}
	
	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
