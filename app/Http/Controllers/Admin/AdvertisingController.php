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
use App\Http\Requests\Admin\Request as StoreRequest;
use App\Http\Requests\Admin\Request as UpdateRequest;

class AdvertisingController extends PanelController
{
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Advertising');
		$this->xPanel->setRoute(admin_uri('advertisings'));
		$this->xPanel->setEntityNameStrings(trans('admin.advertising'), trans('admin.advertisings'));
		$this->xPanel->denyAccess(['create', 'delete']);
		
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// COLUMNS
		$this->xPanel->addColumn([
			'name'  => 'id',
			'label' => "ID",
		]);
		$this->xPanel->addColumn([
			'name'  => 'slug',
			'label' => trans('admin.Slug'),
		]);
		$this->xPanel->addColumn([
			'name'  => 'provider_name',
			'label' => trans('admin.Provider Name'),
		]);
		$this->xPanel->addColumn([
			'name'          => 'active',
			'label'         => trans('admin.Active'),
			'type'          => "model_function",
			'function_name' => 'getActiveHtml',
		]);
		
		$entity = $this->xPanel->getModel()->find(request()->segment(3));
		
		// FIELDS
		$this->xPanel->addField([
			'name'       => 'provider_name',
			'label'      => trans('admin.Provider Name'),
			'type'       => 'text',
			'attributes' => [
				'placeholder' => trans('admin.Provider Name'),
			],
		]);
		if (request()->segment(4) == 'edit' && !empty($entity)) {
			$this->xPanel->addField([
				'name'  => 'description',
				'type'  => 'custom_html',
				'value' => trans('admin.' . $entity->description, ['slug' => $entity->slug]),
			], 'update');
		}
		$this->xPanel->addField([
			'name'       => 'tracking_code_large',
			'label'      => trans('admin.Tracking Code'),
			'type'       => 'textarea',
			'attributes' => [
				'placeholder' => trans('admin.Enter the advertising code here'),
				'rows'        => 10,
			],
		]);
		if (request()->segment(4) == 'edit' && !empty($entity)) {
			if ($entity->integration != 'autoFit') {
				$this->xPanel->addField([
					'name'              => 'is_responsive',
					'label'             => trans('admin.is_responsive_label'),
					'type'              => 'checkbox_switch',
					'hint'              => trans('admin.is_responsive_hint'),
					'wrapperAttributes' => [
						'class' => 'col-md-6',
					],
				]);
				$this->xPanel->addField([
					'name'              => 'separator_1',
					'type'              => 'custom_html',
					'value'             => '<hr>',
					'wrapperAttributes' => [
						'class' => 'col-md-12',
					],
				]);
				$this->xPanel->addField([
					'name'              => 'tracking_code_medium',
					'label'             => trans('admin.Tracking Code') . " (" . trans('admin.Tablet Format') . ")",
					'type'              => 'textarea',
					'attributes'        => [
						'placeholder' => trans('admin.Enter the advertising code here'),
						'rows'        => 10,
					],
					'hint'              => trans('admin.tracking_code_medium_hint') . ' ' . trans('admin.tracking_code_responsive_note'),
					'wrapperAttributes' => [
						'class' => 'col-md-12',
					],
				]);
				$this->xPanel->addField([
					'name'              => 'tracking_code_small',
					'label'             => trans('admin.Tracking Code') . " (" . trans('admin.Phone Format') . ")",
					'type'              => 'textarea',
					'attributes'        => [
						'placeholder' => trans('admin.Enter the advertising code here'),
						'rows'        => 10,
					],
					'hint'              => trans('admin.tracking_code_small_hint') . ' ' . trans('admin.tracking_code_responsive_note'),
					'wrapperAttributes' => [
						'class' => 'col-md-12',
					],
				]);
			}
		}
		$this->xPanel->addField([
			'name'  => 'active',
			'label' => trans('admin.Active'),
			'type'  => 'checkbox_switch',
		]);
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
