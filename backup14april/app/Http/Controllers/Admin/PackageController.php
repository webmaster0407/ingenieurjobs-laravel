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

use App\Http\Controllers\Admin\Panel\PanelController;
use App\Http\Requests\Admin\PackageRequest as StoreRequest;
use App\Http\Requests\Admin\PackageRequest as UpdateRequest;

class PackageController extends PanelController
{
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Package');
		$this->xPanel->setRoute(admin_uri('packages'));
		$this->xPanel->setEntityNameStrings(trans('admin.package'), trans('admin.packages'));
		$this->xPanel->enableReorder('name', 1);
		$this->xPanel->allowAccess(['reorder']);
		if (!request()->input('order')) {
			$this->xPanel->orderBy('lft', 'ASC');
		}
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_activation_btn', 'bulkActivationBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deactivation_btn', 'bulkDeactivationBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deletion_btn', 'bulkDeletionBtn', 'end');
		
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
				$this->xPanel->addClause('where', function ($query) use ($value) {
					$query->where('name', 'LIKE', "%$value%")
						->orWhere('short_name', 'LIKE', "%$value%");
				});
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
			'name'          => 'name',
			'label'         => trans('admin.Name'),
			'type'          => 'model_function',
			'function_name' => 'getNameHtml',
		]);
		$this->xPanel->addColumn([
			'name'  => 'price',
			'label' => trans('admin.Price'),
		]);
		$this->xPanel->addColumn([
			'name'  => 'currency_code',
			'label' => trans('admin.Currency'),
		]);
		$this->xPanel->addColumn([
			'name'          => 'active',
			'label'         => trans('admin.Active'),
			'type'          => 'model_function',
			'function_name' => 'getActiveHtml',
			'on_display'    => 'checkbox',
		]);
		
		// FIELDS
		$this->xPanel->addField([
			'name'              => 'name',
			'label'             => trans('admin.Name'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Name'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'short_name',
			'label'             => trans('admin.Short Name'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Short Name'),
			],
			'hint'              => trans('admin.Short name for ribbon label'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'price',
			'label'             => trans('admin.Price'),
			'type'              => 'text',
			'placeholder'       => trans('admin.Price'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'label'             => trans('admin.Currency'),
			'name'              => 'currency_code',
			'model'             => 'App\Models\Currency',
			'entity'            => 'currency',
			'attribute'         => 'code',
			'type'              => 'select2',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'promo_duration',
			'label'             => trans('admin.promo_duration'),
			'type'              => 'number',
			'attributes'        => [
				'placeholder' => trans('admin.duration_in_days'),
				'min'         => 0,
				'step'        => 1,
			],
			'hint'              => trans('admin.promo_duration_hint'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'duration',
			'label'             => trans('admin.publication_duration'),
			'type'              => 'number',
			'attributes'        => [
				'placeholder' => trans('admin.duration_in_days'),
				'min'         => 0,
				'step'        => 1,
			],
			'hint'              => trans('admin.Duration to show posts'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'  => 'separator_1',
			'type'  => 'custom_html',
			'value' => '<div style="clear: both;"></div>',
		]);
		$this->xPanel->addField([
			'name'              => 'facebook_ads_duration',
			'label'             => trans('admin.facebook_ads_duration'),
			'type'              => 'number',
			'attributes'        => [
				'min'  => 0,
				'step' => 1,
			],
			'hint'              => trans('admin.external_sponsored_ads_hint', ['provider' => 'Facebook']),
			'wrapperAttributes' => [
				'class' => 'col-md-3',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'google_ads_duration',
			'label'             => trans('admin.google_ads_duration'),
			'type'              => 'number',
			'attributes'        => [
				'min'  => 0,
				'step' => 1,
			],
			'hint'              => trans('admin.external_sponsored_ads_hint', ['provider' => 'Google']),
			'wrapperAttributes' => [
				'class' => 'col-md-3',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'twitter_ads_duration',
			'label'             => trans('admin.twitter_ads_duration'),
			'type'              => 'number',
			'attributes'        => [
				'min'  => 0,
				'step' => 1,
			],
			'hint'              => trans('admin.external_sponsored_ads_hint', ['provider' => 'Twitter']),
			'wrapperAttributes' => [
				'class' => 'col-md-3',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'linkedin_ads_duration',
			'label'             => trans('admin.linkedin_ads_duration'),
			'type'              => 'number',
			'attributes'        => [
				'min'  => 0,
				'step' => 1,
			],
			'hint'              => trans('admin.external_sponsored_ads_hint', ['provider' => 'LinkedIn']),
			'wrapperAttributes' => [
				'class' => 'col-md-3',
			],
		]);
		$this->xPanel->addField([
			'name'  => 'separator_2',
			'type'  => 'custom_html',
			'value' => '<div style="clear: both;"></div>',
		]);
		$this->xPanel->addField([
			'name'       => 'description',
			'label'      => trans('admin.Description'),
			'type'       => 'textarea',
			'attributes' => [
				'placeholder' => trans('admin.Description'),
				'rows'        => 6,
			],
			'hint'       => trans('admin.package_description_hint'),
		]);
		$this->xPanel->addField([
			'name'              => 'lft',
			'label'             => trans('admin.Position'),
			'type'              => 'number',
			'attributes'        => [
				'min'  => 0,
				'step' => 1,
			],
			'hint'              => trans('admin.Quick Reorder') . ': '
				. trans('admin.Enter a position number') . ' '
				. trans('admin.position_number_note'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'  => 'separator_3',
			'type'  => 'custom_html',
			'value' => '<div style="clear: both;"></div>',
		]);
		$this->xPanel->addField([
			'name'              => 'recommended',
			'label'             => trans('admin.recommended'),
			'type'              => 'checkbox_switch',
			'hint'              => trans('admin.recommended_hint'),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'active',
			'label'             => trans('admin.Active'),
			'type'              => 'checkbox_switch',
			'default'           => '1',
			'hint'              => '<br><br>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
				'style' => 'margin-top: 35px;',
			],
		], 'create');
		$this->xPanel->addField([
			'name'              => 'active',
			'label'             => trans('admin.Active'),
			'type'              => 'checkbox_switch',
			'hint'              => '<br><br>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		], 'update');
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
