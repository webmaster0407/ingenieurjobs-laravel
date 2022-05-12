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
use App\Http\Requests\Admin\CurrencyRequest as StoreRequest;
use App\Http\Requests\Admin\CurrencyRequest as UpdateRequest;

class CurrencyController extends PanelController
{
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Currency');
		$this->xPanel->setRoute(admin_uri('currencies'));
		$this->xPanel->setEntityNameStrings(trans('admin.currency'), trans('admin.currencies'));
		
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
				$this->xPanel->addClause('where', 'name', 'LIKE', "%$value%");
				$this->xPanel->addClause('orWhere', 'code', '=', "$value");
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'symbol',
			'type'  => 'dropdown',
			'label' => trans('admin.Symbol in left'),
		], [
			1 => trans('admin.yes'),
			2 => trans('admin.no'),
		], function ($value) {
			if ($value == 1) {
				$this->xPanel->addClause('where', 'in_left', '=', 1);
			}
			if ($value == 2) {
				$this->xPanel->addClause('where', 'in_left', '=', 0);
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
			'label' => trans('admin.Code') . ' (ISO 4217)',
		]);
		$this->xPanel->addColumn([
			'name'          => 'name',
			'label'         => trans('admin.Name'),
			'type'          => 'model_function',
			'function_name' => 'getNameHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'symbol',
			'label'         => trans('admin.symbol_label'),
			'type'          => 'model_function',
			'function_name' => 'getSymbolHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'in_left',
			'label'         => trans('admin.Symbol in left'),
			'type'          => 'model_function',
			'function_name' => 'getPositionHtml',
		]);
		
		// FIELDS
		$this->xPanel->addField([
			'name'       => 'code',
			'label'      => trans('admin.Code') . ' (ISO 4217)',
			'type'       => 'text',
			'attributes' => [
				'placeholder' => trans('admin.Enter the currency code'),
			],
		], 'create');
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
			'name'              => 'symbol',
			'label'             => trans('admin.symbol_label'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.symbol_hint'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'html_entities',
			'label'             => trans('admin.symbol_html_entities_label'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.symbol_html_entities_label'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'in_left',
			'label'             => trans('admin.Symbol in left'),
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		
		$this->xPanel->addField([
			'name'  => 'decimal_section_line',
			'type'  => 'custom_html',
			'value' => '<hr>',
		]);
		
		$this->xPanel->addField([
			'name'              => 'decimal_places',
			'label'             => trans('admin.Decimal Places'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the decimal places'),
			],
			'hint'              => trans('admin.Number after decimal'),
			'wrapperAttributes' => [
				'class' => 'col-md-4',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'decimal_separator',
			'label'             => trans('admin.Decimal Separator'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the decimal separator'),
				'maxlength'   => 1,
			],
			'hint'              => trans('admin.decimal_separator_hint'),
			'wrapperAttributes' => [
				'class' => 'col-md-4',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'thousand_separator',
			'label'             => trans('admin.Thousand Separator'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.Enter the thousand separator'),
				'maxlength'   => 1,
			],
			'hint'              => trans('admin.thousand_separator_hint'),
			'wrapperAttributes' => [
				'class' => 'col-md-4',
			],
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
