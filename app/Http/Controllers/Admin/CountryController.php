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

namespace App\Http\Controllers\Admin;

use App\Helpers\Date;
use App\Http\Controllers\Admin\Panel\PanelController;
use App\Http\Requests\Admin\CountryRequest as StoreRequest;
use App\Http\Requests\Admin\CountryRequest as UpdateRequest;

class CountryController extends PanelController
{
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Country');
		$this->xPanel->setRoute(admin_uri('countries'));
		$this->xPanel->setEntityNameStrings(trans('admin.Country'), trans('admin.countries'));
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deletion_btn', 'bulkDeletionBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('line', 'cities', 'citiesBtn', 'beginning');
		$this->xPanel->addButtonFromModelFunction('line', 'admin_divisions1', 'adminDivisionsBtn', 'beginning');
		
		// Filters
		// -----------------------
		$this->xPanel->disableSearchBar();
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'name',
			'type'  => 'text',
			'label' => mb_ucfirst(trans('admin.Name')),
		],
			false,
			function ($value) {
				if (preg_match('|^[A-Z]{2}$|', $value)) {
					$this->xPanel->addClause('where', 'code', '=', "$value");
				} else {
					$this->xPanel->addClause('where', 'name', 'LIKE', "%$value%");
				}
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'country',
			'type'  => 'select2',
			'label' => mb_ucfirst(trans('admin.Name')) . ' (' . trans('admin.select') . ')',
		],
			getCountries(true),
			function ($value) {
				$this->xPanel->addClause('where', 'code', '=', $value);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'continent',
			'type'  => 'dropdown',
			'label' => trans('admin.Continent'),
		], [
			'AF' => 'Africa',
			'AN' => 'Antarctica',
			'AS' => 'Asia',
			'EU' => 'Europe',
			'NA' => 'North America',
			'OC' => 'Oceania',
			'SA' => 'South America',
		], function ($value) {
			$this->xPanel->addClause('where', 'continent_code', '=', $value);
		});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'status',
			'type'  => 'dropdown',
			'label' => trans('admin.Status'),
		], [
			1 => trans('admin.Activated'),
			2 => trans('admin.Unactivated'),
		], function ($value) {
			if ($value == 1) {
				$this->xPanel->addClause('where', 'active', '=', 1);
			}
			if ($value == 2) {
				$this->xPanel->addClause('where', function ($query) {
					$query->where(function ($query) {
						$query->where('active', '!=', 1)->orWhereNull('active');
					});
				});
			}
		});
		
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// COLUMNS
		$this->xPanel->addColumn([
			'name'      => 'id',
			'label'     => '',
			'type'      => 'checkbox',
			'orderable' => false,
		]);
		$this->xPanel->addColumn([
			'name'  => 'code',
			'label' => trans('admin.Code'),
		]);
		$this->xPanel->addColumn([
			'name'          => 'name',
			'label'         => trans('admin.Name'),
			'type'          => 'model_function',
			'function_name' => 'getNameHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'active',
			'label'         => trans('admin.Active'),
			'type'          => 'model_function',
			'function_name' => 'getActiveHtml',
		]);
		
		// FIELDS
		$this->xPanel->addField([
			'name'              => 'code',
			'label'             => trans('admin.Code'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the country code'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		], 'create');
		$this->xPanel->addField([
			'name'              => 'name',
			'label'             => trans('admin.Name'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the country name'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'capital',
			'label'             => trans('admin.Capital') . ' (' . trans('admin.Optional') . ')',
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Capital'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'continent_code',
			'label'             => trans('admin.Continent'),
			'type'              => 'select2',
			'attribute'         => 'name',
			'model'             => 'App\Models\Continent',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'tld',
			'label'             => trans('admin.TLD') . ' (' . trans('admin.Optional') . ')',
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the country tld'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'phone',
			'label'             => trans('admin.Calling code') . ' (' . trans('admin.Optional') . ')',
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the country calling code'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'currency_code',
			'label'             => trans('admin.Currency Code'),
			'type'              => 'select2',
			'attribute'         => 'code',
			'model'             => 'App\Models\Currency',
			'hint'              => trans('admin.Default country currency'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'   => 'background_image',
			'label'  => trans('admin.Background Image'),
			'type'   => 'image',
			'upload' => true,
			'disk'   => 'public',
			'hint'   => trans('admin.Choose a picture from your computer') . '<br>' . trans('admin.country_background_image_info'),
		]);
		$this->xPanel->addField([
			'name'              => 'languages',
			'label'             => trans('admin.Languages'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.eg_languages_field'),
			],
			'hint'              => trans('admin.languages_codes_list_hint', ['url' => admin_url('languages')]),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'time_zone',
			'label'             => t('preferred_time_zone_label'),
			'type'              => 'select2_from_array',
			'options'           => Date::getTimeZones(),
			'allows_null'       => true,
			'hint'              => t('preferred_time_zone_hint'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		
		$dateFormatHint = (config('settings.app.php_specific_date_format')) ? 'php_date_format_hint' : 'iso_date_format_hint';
		$this->xPanel->addField([
			'name'              => 'date_format',
			'label'             => trans('admin.date_format_label'),
			'type'              => 'text',
			'hint'              => trans('admin.' . $dateFormatHint) . ' ' . trans('admin.country_date_format_hint_help'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'datetime_format',
			'label'             => trans('admin.datetime_format_label'),
			'type'              => 'text',
			'hint'              => trans('admin.' . $dateFormatHint) . ' ' . trans('admin.country_date_format_hint_help'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'  => 'admin_date_format_info',
			'type'  => 'custom_html',
			'value' => trans('admin.country_date_format_info'),
		]);
		
		$this->xPanel->addField([
			'name'              => 'admin_type',
			'label'             => trans('admin.active_admin_division_field'),
			'type'              => 'enum',
			'hint'              => trans('admin.eg_admin_division_type'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'admin_field_active',
			'label'             => trans('admin.active_admin_division_field'),
			'type'              => 'checkbox_switch',
			'hint'              => trans('admin.active_admin_division_field_hint', [
				'admin_type_hint' => trans('admin.active_admin_division_field'),
			]),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		/*
		$this->xPanel->addField([
			'name'  => 'active',
			'label' => trans('admin.Active'),
			'type'  => 'checkbox_switch',
		]);
		*/
	}
	
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}
	
	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
