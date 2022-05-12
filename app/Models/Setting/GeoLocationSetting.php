<?php
/*
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

namespace App\Models\Setting;

class GeoLocationSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['driver'] = 'ipapi';
			$value['show_country_flag'] = '1';
			
		} else {
			
			if (!isset($value['active'])) {
				if (isset($value['geolocation_activation'])) {
					$value['active'] = $value['geolocation_activation'];
				}
			}
			if (!isset($value['driver'])) {
				$value['driver'] = 'ipapi';
			}
			if (!isset($value['show_country_flag'])) {
				$value['show_country_flag'] = '1';
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		return $value;
	}
	
	public static function getFields($diskName)
	{
		$fields = [
			[
				'name'              => 'geolocation_title',
				'type'              => 'custom_html',
				'value'             => trans('admin.geolocation_title'),
				'wrapperAttributes' => [
					'style' => 'margin-bottom: 0 !important;',
				],
			],
			[
				'name'              => 'active',
				'label'             => trans('admin.geolocation_active_label'),
				'type'              => 'checkbox_switch',
				'attributes'        => [
					'id' => 'geolocationCheckbox',
				],
				'hint'              => trans('admin.geolocation_active_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'driver_separator_1',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'driver',
				'label'             => trans('admin.geoip_driver_label'),
				'type'              => 'select2_from_array',
				'options'           => [
					'dbip'             => 'db-ip.com',
					'freegeoip'        => 'freegeoip.app',
					'ip2location'      => 'ip2location.com',
					'ipapi'            => 'ip-api.com', // No API Key
					'ipapico'          => 'ipapi.co',   // No API Key
					'ipgeolocation'    => 'ipgeolocation.io',
					'iplocation'       => 'iplocation.net',
					'ipstack'          => 'ipstack.com',
					'maxmind_api'      => 'maxmind.com (Web Services)',
					'maxmind_database' => 'maxmind.com (Database)', // No API Key (But need to download DB)
				],
				'attributes'        => [
					'id' => 'driver',
				],
				'hint'              => trans('admin.geoip_driver_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'validate_driver',
				'label'             => trans('admin.validate_geoip_driver_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.validate_geoip_driver_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'              => 'dbip_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.dbip_info'),
				'wrapperAttributes' => [
					'class' => 'dbip',
				],
			],
			[
				'name'              => 'dbip_pro',
				'label'             => trans('admin.geoip_driver_pro_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6 dbip',
				],
			],
			[
				'name'              => 'dbip_api_key',
				'label'             => trans('admin.dbip_api_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 dbip',
				],
			],
			
			[
				'name'              => 'freegeoip_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.freegeoip_info'),
				'wrapperAttributes' => [
					'class' => 'freegeoip',
				],
			],
			[
				'name'              => 'freegeoip_api_key',
				'label'             => trans('admin.freegeoip_api_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 freegeoip',
				],
			],
			
			[
				'name'              => 'ip2location_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.ip2location_info'),
				'wrapperAttributes' => [
					'class' => 'ip2location',
				],
			],
			[
				'name'              => 'ip2location_api_key',
				'label'             => trans('admin.ip2location_api_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ip2location',
				],
			],
			
			[
				'name'              => 'ipapi_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.ipapi_info'),
				'wrapperAttributes' => [
					'class' => 'ipapi',
				],
			],
			[
				'name'              => 'ipapi_pro',
				'label'             => trans('admin.geoip_driver_pro_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ipapi',
				],
			],
			
			[
				'name'              => 'ipapico_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.ipapico_info'),
				'wrapperAttributes' => [
					'class' => 'ipapico',
				],
			],
			
			[
				'name'              => 'ipgeolocation_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.ipgeolocation_info'),
				'wrapperAttributes' => [
					'class' => 'ipgeolocation',
				],
			],
			[
				'name'              => 'ipgeolocation_api_key',
				'label'             => trans('admin.ipgeolocation_api_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ipgeolocation',
				],
			],
			
			[
				'name'              => 'iplocation_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.iplocation_info'),
				'wrapperAttributes' => [
					'class' => 'iplocation',
				],
			],
			[
				'name'              => 'iplocation_pro',
				'label'             => trans('admin.geoip_driver_pro_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6 iplocation',
				],
			],
			[
				'name'              => 'iplocation_api_key',
				'label'             => trans('admin.iplocation_api_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 iplocation',
				],
			],
			
			[
				'name'              => 'ipstack_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.ipstack_info'),
				'wrapperAttributes' => [
					'class' => 'ipstack',
				],
			],
			[
				'name'              => 'ipstack_pro',
				'label'             => trans('admin.geoip_driver_pro_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ipstack',
				],
			],
			[
				'name'              => 'ipstack_access_key',
				'label'             => trans('admin.ipstack_access_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ipstack',
				],
			],
			
			[
				'name'              => 'maxmind_api_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.maxmind_api_info'),
				'wrapperAttributes' => [
					'class' => 'maxmind_api',
				],
			],
			[
				'name'              => 'maxmind_api_license_key',
				'label'             => trans('admin.maxmind_api_license_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 maxmind_api',
				],
			],
			[
				'name'              => 'maxmind_api_account_id',
				'label'             => trans('admin.maxmind_api_account_id_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 maxmind_api',
				],
			],
			
			[
				'name'              => 'maxmind_database_info',
				'type'              => 'custom_html',
				'value'             => trans('admin.maxmind_database_info'),
				'wrapperAttributes' => [
					'class' => 'maxmind_database',
				],
			],
			[
				'name'              => 'maxmind_database_license_key',
				'label'             => trans('admin.maxmind_database_license_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 maxmind_database',
				],
			],
			
			[
				'name'  => 'driver_separator_2',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			
			[
				'name'  => 'geolocation_other',
				'type'  => 'custom_html',
				'value' => trans('admin.geolocation_other'),
			],
			[
				'name'              => 'default_country_code',
				'label'             => trans('admin.Default Country'),
				'type'              => 'select2',
				'attribute'         => 'name',
				'model'             => '\\App\\Models\\Country',
				'allows_null'       => 'true',
				'attributes'        => [
					'id' => 'defaultCountry',
				],
				'hint'              => trans('admin.default_country_code_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_1',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'show_country_flag',
				'label'             => trans('admin.show_country_flag_label'),
				'type'              => 'checkbox_switch',
				'hint'              => '<br>',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'local_currency_packages_activation',
				'label'             => trans('admin.Allow users to pay the Packages in their country currency'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.package_currency_by_country_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'  => 'javascript',
				'type'  => 'custom_html',
				'value' => '<script>
docReady(function(e) {
	let driverEl = document.querySelector("#driver");
	getDriverFields(driverEl);
	/*
	driverEl.addEventListener("change", function (event) {
		getDriverFields(this);
	});
	*/
	try {
		$("#driver").on("change", function (event) {
			getDriverFields(this);
		});
	} catch (error) {
		console.log(error);
	}
	
	let geolocationCheckboxEl = document.querySelector("#geolocationCheckbox");
	geolocationCheckboxEl.addEventListener("change", function (event) {
		unsetDefaultCountry(this);
	});
	
	/*
	let defaultCountryEl = document.querySelector("#defaultCountry");
	defaultCountryEl.addEventListener("change", function (event) {
		toggleGeolocation(this);
	});
	*/
	try {
		$("#defaultCountry").on("change", function (event) {
			toggleGeolocation(this);
		});
	} catch (error) {
		console.log(error);
	}
});

function unsetDefaultCountry(geolocationCheckboxEl) {
	let defaultCountryEl = document.querySelector("#defaultCountry");
	
	if (geolocationCheckboxEl.checked) {
		defaultCountryEl.value = "";
		/*
		 * Trigger Change event when the Input value changed programmatically (for select2)
		 * https://stackoverflow.com/a/36084475
		*/
		defaultCountryEl.dispatchEvent(new Event("change"));
		
		let alertMessage = "' . trans('admin.activating_geolocation') . '";
		pnAlert(alertMessage, "info");
	} else {
		/* Focus on the Default Country field */
		defaultCountryEl.focus();
		
		let alertMessage = "' . trans('admin.disabling_geolocation') . '";
		pnAlert(alertMessage, "notice");
	}
}

function toggleGeolocation(defaultCountryEl) {
	let geolocationCheckboxEl = document.querySelector("#geolocationCheckbox");
	
	if (geolocationCheckboxEl.checked && defaultCountryEl.value != "") {
		geolocationCheckboxEl.checked = false;
		
		let alertMessage = "' . trans('admin.specifying_default_country') . '";
		pnAlert(alertMessage, "info");
	}
	if (!geolocationCheckboxEl.checked && defaultCountryEl.value == "") {
		geolocationCheckboxEl.checked = true;
		
		let alertMessage = "' . trans('admin.removing_default_country') . '";
		pnAlert(alertMessage, "notice");
	}
}

function getDriverFields(driverEl) {
	let driverElValue = driverEl.value;
	
	hideEl(document.querySelectorAll(".dbip, .freegeoip, .ip2location, .ipapi, .ipapico, .ipgeolocation, .iplocation, .ipstack, .maxmind_api, .maxmind_database"));
	
	if (driverElValue === "dbip") {
		showEl(document.querySelectorAll(".dbip"));
	}
	if (driverElValue === "freegeoip") {
		showEl(document.querySelectorAll(".freegeoip"));
	}
	if (driverElValue === "ip2location") {
		showEl(document.querySelectorAll(".ip2location"));
	}
	if (driverElValue === "ipapi") {
		showEl(document.querySelectorAll(".ipapi"));
	}
	if (driverElValue === "ipapico") {
		showEl(document.querySelectorAll(".ipapico"));
	}
	if (driverElValue === "ipgeolocation") {
		showEl(document.querySelectorAll(".ipgeolocation"));
	}
	if (driverElValue === "iplocation") {
		showEl(document.querySelectorAll(".iplocation"));
	}
	if (driverElValue === "ipstack") {
		showEl(document.querySelectorAll(".ipstack"));
	}
	if (driverElValue === "maxmind_api") {
		showEl(document.querySelectorAll(".maxmind_api"));
	}
	if (driverElValue === "maxmind_database") {
		showEl(document.querySelectorAll(".maxmind_database"));
	}
}
</script>',
			],
		];
		
		return $fields;
	}
}
