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

use App\Helpers\Files\Storage\StorageDisk;
use App\Models\Scopes\ActiveScope;
use App\Observers\HomeSectionObserver;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;

class HomeSection extends BaseModel
{
	use Crud;
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'home_sections';
    
    protected $fakeColumns = ['value'];
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
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
    protected $fillable = ['method', 'name', 'value', 'view', 'field', 'parent_id', 'lft', 'rgt', 'depth', 'active'];
    
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
    
    protected $casts = [
        'value' => 'array',
    ];
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
	
		HomeSection::observe(HomeSectionObserver::class);
		
        static::addGlobalScope(new ActiveScope());
    }
	
	public function resetHomepageReOrderBtn($xPanel = false)
	{
		$url = admin_url('homepage/reset_reorder');
		
		$msg = trans('admin.Reset the homepage sections reorder');
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		
		// Button
		$out = '';
		$out .= '<a class="btn btn-warning text-white shadow" href="' . $url . '"' . $tooltip . '>';
		$out .= '<i class="fas fa-sort-amount-up"></i> ';
		$out .= trans('admin.Reset sections reorganization');
		$out .= '</a>';
		
		return $out;
	}
	
	public function resetHomepageSettingsBtn($xPanel = false)
	{
		$url = admin_url('homepage/reset_settings');
		
		$msg = trans('admin.Reset all the homepage settings');
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		
		// Button
		$out = '';
		$out .= '<a class="btn btn-danger shadow" href="' . $url . '"' . $tooltip . '>';
		$out .= '<i class="fas fa-industry"></i> ';
		$out .= trans('admin.Return to factory settings');
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
	
	public function configureBtn($xPanel = false)
	{
		$url = admin_url('homepage/' . $this->id . '/edit');
		
		$msg = trans('admin.configure_entity', ['entity' => $this->name]);
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		
		$out = '';
		$out .= '<a class="btn btn-xs btn-primary" href="' . $url . '"' . $tooltip . '>';
		$out .= '<i class="fas fa-cog"></i> ';
		$out .= mb_ucfirst(trans('admin.Configure'));
		$out .= '</a>';
		
		return $out;
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
    
    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
	public function getNameAttribute($value)
	{
		if (isset($this->method)) {
			$transKey = 'settings.home_' . $this->method;
			
			if (trans()->has($transKey)) {
				$value = trans($transKey);
			}
		}
		
		return $value;
	}
	
	public function getValueAttribute($value)
	{
		// Get 'options' field value
		$value = jsonToArray($value);
		
		// Handle 'value' field value
		// Get the right Setting
		$settingClassName = ucfirst(Str::camel($this->method));
		$settingNamespace = '\\App\Models\HomeSection\\';
		$settingClass = $settingNamespace . $settingClassName;
		if (class_exists($settingClass)) {
			if (method_exists($settingClass, 'getValues')) {
				$value = $settingClass::getValues($value);
			}
		}
		
		return $value;
	}
	
	public function getFieldAttribute($value)
	{
		$diskName = StorageDisk::getDiskName();
		
		// Get 'field' field value
		$value = jsonToArray($value);
		
		$breadcrumb = trans('admin.Admin panel') . ' &rarr; ' . mb_ucwords(trans('admin.homepage')) . ' &rarr; ';
		
		$formTitle = [
			[
				'name'         => 'group_name',
				'type'         => 'custom_html',
				'value'        => '<h2 class="setting-group-name">' . $this->name . '</h2>',
			],
			[
				'name'         => 'group_breadcrumb',
				'type'         => 'custom_html',
				'value'        => '<p class="setting-group-breadcrumb">' . $breadcrumb . $this->name . '</p>',
			],
		];
		
		// Handle 'field' field value
		// Get the right Setting
		$settingClassName = ucfirst(Str::camel($this->method));
		$settingNamespace = '\\App\Models\HomeSection\\';
		$settingClass = $settingNamespace . $settingClassName;
		if (class_exists($settingClass)) {
			if (method_exists($settingClass, 'getFields')) {
				$value = $settingClass::getFields($diskName);
			}
		}
		
		$value = array_merge($formTitle, $value);
		
		return $value;
	}
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
	public function setValueAttribute($value)
	{
		$value = jsonToArray($value);
		
		// Handle 'value' field value
		// Get the right Setting
		$settingClassName = ucfirst(Str::camel($this->method));
		$settingNamespace = '\\App\Models\HomeSection\\';
		$settingClass = $settingNamespace . $settingClassName;
		if (class_exists($settingClass)) {
			if (method_exists($settingClass, 'setValues')) {
				$value = $settingClass::setValues($value, $this);
			}
		}
		
		$this->attributes['value'] = json_encode($value);
	}
}
