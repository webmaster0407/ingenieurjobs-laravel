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
use App\Observers\SettingObserver;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;

class Setting extends BaseModel
{
	use Crud;
	
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'settings';
	
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
	 * The primary key for the model.
	 *
	 * @var string
	 */
	protected $guarded = ['id'];
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'key', 'name', 'value', 'description', 'field', 'parent_id', 'lft', 'rgt', 'depth', 'active'];
	
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
		
		Setting::observe(SettingObserver::class);
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
		$url = admin_url('settings/' . $this->id . '/edit');
		
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
	| SCOPES
	|--------------------------------------------------------------------------
	*/
	public function scopeActive($builder)
	{
		return $builder->where('active', 1);
	}
	
	/*
	|--------------------------------------------------------------------------
	| ACCESSORS
	|--------------------------------------------------------------------------
	*/
	public function getNameAttribute($value)
	{
		if (isset($this->key)) {
			$transKey = 'settings.' . $this->key;
			
			if (trans()->has($transKey)) {
				$value = trans($transKey);
			}
		}
		
		return $value;
	}
	
	public function getDescriptionAttribute($value)
	{
		if (isset($this->key)) {
			$transKey = 'settings.description_' . $this->key;
			
			if (trans()->has($transKey)) {
				$value = trans($transKey);
			}
		}
		
		return $value;
	}
	
	public function getValueAttribute($value)
	{
		// IMPORTANT
		// The line below means that the all Storage providers need to be load before the AppServiceProvider,
		// to prevent all errors during the retrieving of the settings in the AppServiceProvider.
		$disk = StorageDisk::getDisk();
		
		// Hide all these fake field content
		$hiddenValues = [
			'smtp_username',
			'smtp_password',
			'mailgun_secret',
			'mailgun_username',
			'mailgun_password',
			'postmark_token',
			'postmark_username',
			'postmark_password',
			'ses_key',
			'ses_secret',
			'ses_username',
			'ses_password',
			'mandrill_secret',
			'mandrill_username',
			'mandrill_password',
			'sparkpost_secret',
			'sparkpost_username',
			'sparkpost_password',
			'sendmail_username',
			'sendmail_password',
			'nexmo_key',
			'nexmo_secret',
			'twilio_username',
			'twilio_password',
			'twilio_auth_token',
			'twilio_account_sid',
			'twilio_sms_service_sid',
			'dbip_api_key',
			'freegeoip_api_key',
			'ip2location_api_key',
			'ipgeolocation_api_key',
			'iplocation_api_key',
			'ipstack_api_key',
			'maxmind_api_license_key',
			'maxmind_api_account_id',
			'maxmind_database_license_key',
			'recaptcha_v2_site_key',
			'recaptcha_v2_secret_key',
			'recaptcha_v3_site_key',
			'recaptcha_v3_secret_key',
			'recaptcha_site_key',
			'recaptcha_secret_key',
			'stripe_secret',
			'paypal_username',
			'paypal_password',
			'paypal_signature',
			'facebook_client_id',
			'facebook_client_secret',
			'linkedin_client_id',
			'linkedin_client_secret',
			'twitter_client_id',
			'twitter_client_secret',
			'google_client_id',
			'google_client_secret',
			'google_maps_key',
		];
		
		// Get 'value' field value
		$value = jsonToArray($value);
		
		// Handle 'value' field value
		// Get the right Setting
		$settingClassName = ucfirst(Str::camel($this->key)) . 'Setting';
		$settingNamespace = '\\App\Models\Setting\\';
		$settingClass = $settingNamespace . $settingClassName;
		if (class_exists($settingClass)) {
			if (method_exists($settingClass, 'getValues')) {
				$value = $settingClass::getValues($value, $disk);
			}
		} else {
			$settingNamespace = plugin_namespace($this->key) . '\app\Models\Setting\\';
			$settingClass = $settingNamespace . $settingClassName;
			// Get the plugin's setting
			if (class_exists($settingClass)) {
				if (method_exists($settingClass, 'getValues')) {
					$value = $settingClass::getValues($value, $disk);
				}
			}
		}
		
		// Demo: Secure some Data (Applied for all Entries)
		if (isAdminPanel() && isDemoDomain()) {
			foreach ($value as $key => $item) {
				if (!in_array(request()->segment(2), ['password', 'login'])) {
					if (in_array($key, $hiddenValues)) {
						$value[$key] = '************************';
					}
				}
			}
		}
		
		return $value;
	}
	
	public function getFieldAttribute($value)
	{
		$diskName = StorageDisk::getDiskName();
		
		// Get 'field' field value
		$value = jsonToArray($value);
		
		$breadcrumb = trans('admin.Admin panel') . ' &rarr; '
			. mb_ucwords(trans('admin.settings')) . ' &rarr; '
			. mb_ucwords(trans('admin.general_settings')) . ' &rarr; ';
		
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
		$settingClassName = ucfirst(Str::camel($this->key)) . 'Setting';
		$settingNamespace = '\\App\Models\Setting\\';
		$settingClass = $settingNamespace . $settingClassName;
		if (class_exists($settingClass)) {
			if (method_exists($settingClass, 'getFields')) {
				$value = $settingClass::getFields($diskName);
			}
		} else {
			$settingNamespace = plugin_namespace($this->key) . '\app\Models\Setting\\';
			$settingClass = $settingNamespace . $settingClassName;
			// Get the plugin's setting
			if (class_exists($settingClass)) {
				if (method_exists($settingClass, 'getFields')) {
					$value = $settingClass::getFields($diskName);
				}
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
		// Get value
		$value = jsonToArray($value);
		
		// Handle 'value' field value
		// Get the right Setting
		$settingClassName = ucfirst(Str::camel($this->key)) . 'Setting';
		$settingNamespace = '\\App\Models\Setting\\';
		$settingClass = $settingNamespace . $settingClassName;
		if (class_exists($settingClass)) {
			if (method_exists($settingClass, 'setValues')) {
				$value = $settingClass::setValues($value, $this);
			}
		} else {
			$settingNamespace = plugin_namespace($this->key) . '\app\Models\Setting\\';
			$settingClass = $settingNamespace . $settingClassName;
			// Get the plugin's setting
			if (class_exists($settingClass)) {
				if (method_exists($settingClass, 'setValues')) {
					$value = $settingClass::setValues($value, $this);
				}
			}
		}
		
		$this->attributes['value'] = json_encode($value);
	}
}
