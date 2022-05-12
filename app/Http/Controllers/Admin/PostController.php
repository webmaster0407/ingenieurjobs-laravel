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

use App\Http\Controllers\Web\Auth\Traits\VerificationTrait;
use App\Models\PostType;
use App\Models\Category;
use App\Models\SalaryType;
use App\Http\Controllers\Admin\Panel\PanelController;
use App\Http\Requests\Admin\PostRequest as StoreRequest;
use App\Http\Requests\Admin\PostRequest as UpdateRequest;

class PostController extends PanelController
{
	use VerificationTrait;
	
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Post');
		$this->xPanel->with(['user', 'city', 'latestPayment' => function ($builder) { $builder->with(['package']); }]);
		$this->xPanel->setRoute(admin_uri('posts'));
		$this->xPanel->setEntityNameStrings(trans('admin.ad'), trans('admin.ads'));
		$this->xPanel->denyAccess(['create']);
		if (!request()->input('order')) {
			if (config('settings.single.listings_review_activation')) {
				$this->xPanel->orderBy('reviewed', 'ASC');
			}
			$this->xPanel->orderBy('created_at', 'DESC');
		}
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_approval_btn', 'bulkApprovalBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_disapproval_btn', 'bulkDisapprovalBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_deletion_btn', 'bulkDeletionBtn', 'end');
		
		// Hard Filters
		if (request()->filled('active')) {
			if (request()->get('active') == 0) {
				$this->xPanel->addClause('where', function ($query) {
					$query->where(function ($query) {
						$query->where('verified_email', '!=', 1)->orWhereNull('verified_email');
					});
				});
				$this->xPanel->addClause('orWhere', function ($query) {
					$query->where(function ($query) {
						$query->where('verified_phone', '!=', 1)->orWhereNull('verified_phone');
					});
				});
				if (config('settings.single.listings_review_activation')) {
					$this->xPanel->addClause('orWhere', function ($query) {
						$query->where(function ($query) {
							$query->where('reviewed', '!=', 1)->orWhereNull('reviewed');
						});
					});
				}
			}
			if (request()->get('active') == 1) {
				$this->xPanel->addClause('where', 'verified_email', '=', 1);
				$this->xPanel->addClause('where', 'verified_phone', '=', 1);
				if (config('settings.single.listings_review_activation')) {
					$this->xPanel->addClause('where', 'reviewed', '=', 1);
				}
			}
		}
		
		// Filters
		// -----------------------
		$this->xPanel->disableSearchBar();
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'id',
			'type'  => 'text',
			'label' => 'ID/' . t('reference'),
		],
			false,
			function ($value) {
				$value = hashId($value, true) ?? $value;
				$this->xPanel->addClause('where', 'id', '=', $value);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'from_to',
			'type'  => 'date_range',
			'label' => trans('admin.Date range'),
		],
			false,
			function ($value) {
				$dates = json_decode($value);
				$this->xPanel->addClause('where', 'created_at', '>=', $dates->from);
				$this->xPanel->addClause('where', 'created_at', '<=', $dates->to);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'title',
			'type'  => 'text',
			'label' => trans('admin.Title'),
		],
			false,
			function ($value) {
				$this->xPanel->addClause('where', 'title', 'LIKE', "%$value%");
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'country',
			'type'  => 'select2',
			'label' => trans('admin.Country'),
		],
			getCountries(),
			function ($value) {
				$this->xPanel->addClause('where', 'country_code', '=', $value);
			});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'city',
			'type'  => 'text',
			'label' => trans('admin.city'),
		],
			false,
			function ($value) {
				$this->xPanel->query = $this->xPanel->query->whereHas('city', function ($query) use ($value) {
					$query->where('name', 'LIKE', "%$value%");
				});
			});
		// -----------------------
		$filterValues = [
			1 => trans('admin.non_premium'),
			2 => trans('admin.premium') . ' (' . trans('admin.active') . ')',
			3 => trans('admin.premium') . ' (' . trans('admin.Expired') . ')',
		];
		if (config('plugins.offlinepayment.installed')) {
			$filterValues[4] = trans('admin.featured') . ' (' . trans('admin.pushed') . ')';
		}
		$this->xPanel->addFilter([
			'name'  => 'featured',
			'type'  => 'dropdown',
			'label' => trans('admin.premium'),
		],
			$filterValues,
			function ($value) {
				if ($value == 1) {
					$this->xPanel->addClause('where', 'featured', '=', 0);
				}
				if ($value == 2) {
					$this->xPanel->addClause('where', 'featured', '=', 1);
					$this->xPanel->addClause('whereHas', 'payments', function ($query) use ($value) {
						$query->where(function ($query) {
							$query->where('transaction_id', '!=', 'featured')->orWhereNull('transaction_id');
						});
						$query->where('active', 1);
					});
				}
				if ($value == 3) {
					$this->xPanel->addClause('where', 'featured', '=', 0);
					$this->xPanel->addClause('whereHas', 'payments', function ($query) use ($value) {
						$query->where(function ($query) {
							$query->where('transaction_id', '!=', 'featured')->orWhereNull('transaction_id');
						});
						$query->where('active', 1);
					});
				}
				if ($value == 4) {
					$this->xPanel->addClause('where', 'featured', '=', 1);
					$this->xPanel->addClause('whereHas', 'payments', function ($query) use ($value) {
						$query->where('transaction_id', 'featured');
						$query->where('active', 1);
					});
				}
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
				$this->xPanel->addClause('where', 'verified_email', '=', 1);
				$this->xPanel->addClause('where', 'verified_phone', '=', 1);
				if (config('settings.single.listings_review_activation')) {
					$this->xPanel->addClause('where', 'reviewed', '=', 1);
				}
			}
			if ($value == 2) {
				$this->xPanel->addClause('where', 'verified_email', '=', 0);
				$this->xPanel->addClause('orWhere', 'verified_phone', '=', 0);
				if (config('settings.single.listings_review_activation')) {
					$this->xPanel->addClause('orWhere', 'reviewed', '=', 0);
				}
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
			'name'  => 'created_at',
			'label' => trans('admin.Date'),
			'type'  => 'datetime',
		]);
		$this->xPanel->addColumn([
			'name'          => 'title',
			'label'         => trans('admin.Title'),
			'type'          => 'model_function',
			'function_name' => 'getTitleHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'logo', // Put unused field column
			'label'         => trans('admin.Logo'),
			'type'          => 'model_function',
			'function_name' => 'getLogoHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'company_name',
			'label'         => trans('admin.company_name'),
			'type'          => 'model_function',
			'function_name' => 'getCompanyNameHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'city_id',
			'label'         => trans('admin.city'),
			'type'          => 'model_function',
			'function_name' => 'getCityHtml',
		]);
		if (config('plugins.offlinepayment.installed')) {
			$this->xPanel->addColumn([
				'name'          => 'featured',
				'label'         => mb_ucfirst(trans('offlinepayment::messages.featured')),
				'type'          => 'model_function',
				'function_name' => 'getFeaturedHtml',
			]);
		}
		$this->xPanel->addColumn([
			'name'          => 'verified_email',
			'label'         => trans('admin.Verified Email'),
			'type'          => 'model_function',
			'function_name' => 'getVerifiedEmailHtml',
		]);
		if (config('settings.sms.phone_verification')) {
			$this->xPanel->addColumn([
				'name'          => 'verified_phone',
				'label'         => trans('admin.Verified Phone'),
				'type'          => 'model_function',
				'function_name' => 'getVerifiedPhoneHtml',
			]);
		}
		if (config('settings.single.listings_review_activation')) {
			$this->xPanel->addColumn([
				'name'          => 'reviewed',
				'label'         => trans('admin.Reviewed'),
				'type'          => "model_function",
				'function_name' => 'getReviewedHtml',
			]);
		}
		
		// FIELDS
		$this->xPanel->addField([
			'label'       => trans('admin.Category'),
			'name'        => 'category_id',
			'type'        => 'select2_from_array',
			'options'     => Category::selectBoxTree(0),
			'allows_null' => false,
		]);
		$this->xPanel->addField([
			'name'       => 'company_name',
			'label'      => trans('admin.company_name'),
			'type'       => 'text',
			'attributes' => [
				'placeholder' => trans('admin.company_name'),
			],
		]);
		$this->xPanel->addField([
			'name'   => 'logo',
			'label'  => trans('admin.Logo') . ' (Supported file extensions: jpg, jpeg, png, gif)',
			'type'   => 'image',
			'upload' => true,
			'disk'   => 'public',
		]);
		$this->xPanel->addField([
			'name'       => 'company_description',
			'label'      => trans('admin.Company Description'),
			'type'       => 'textarea',
			'attributes' => [
				'placeholder' => trans('admin.Company Description'),
				'rows'        => 10,
			],
		]);
		$this->xPanel->addField([
			'name'       => 'title',
			'label'      => trans('admin.Title'),
			'type'       => 'text',
			'attributes' => [
				'placeholder' => trans('admin.Title'),
			],
		]);
		$wysiwygEditor = config('settings.single.wysiwyg_editor');
		$wysiwygEditorViewPath = '/views/admin/panel/fields/' . $wysiwygEditor . '.blade.php';
		$this->xPanel->addField([
			'name'       => 'description',
			'label'      => trans('admin.Description'),
			'type'       => ($wysiwygEditor != 'none' && file_exists(resource_path() . $wysiwygEditorViewPath))
				? $wysiwygEditor
				: 'textarea',
			'attributes' => [
				'placeholder' => trans('admin.Description'),
				'id'          => 'description',
				'rows'        => 10,
			],
		]);
		$this->xPanel->addField([
			'name'              => 'salary_min',
			'label'             => trans('admin.salary_min'),
			'type'              => 'number',
			'attributes'        => [
				'min'         => 0,
				'step'        => getInputNumberStep((int)config('currency.decimal_places', 2)),
				'placeholder' => trans('admin.salary_min'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'salary_max',
			'label'             => trans('admin.salary_max'),
			'type'              => 'number',
			'attributes'        => [
				'min'         => 0,
				'step'        => getInputNumberStep((int)config('currency.decimal_places', 2)),
				'placeholder' => trans('admin.salary_max'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'label'             => trans('admin.Salary Type'),
			'name'              => 'salary_type_id',
			'type'              => 'select2_from_array',
			'options'           => $this->salaryType(),
			'allows_null'       => false,
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'negotiable',
			'label'             => trans('admin.Negotiable Salary'),
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		
		$this->xPanel->addField([
			'name'              => 'contact_name',
			'label'             => trans('admin.User Name'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.User Name'),
			],
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'email',
			'label'             => trans('admin.User Email'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.User Email'),
			],
			'prefix'            => '<i class="far fa-envelope"></i>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'phone',
			'label'             => trans('admin.User Phone'),
			'type'              => 'text',
			'attributes'        => [
				'placeholder' => trans('admin.User Phone'),
			],
			'prefix'            => '<i class="fas fa-mobile-alt"></i>',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'phone_hidden',
			'label'             => trans('admin.Hide contact phone'),
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'label'             => trans('admin.Post Type'),
			'name'              => 'post_type_id',
			'type'              => 'select2_from_array',
			'options'           => $this->postType(),
			'allows_null'       => false,
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$entity = $this->xPanel->getModel()->find(request()->segment(3));
		$tags = (!empty($entity) && isset($entity->tags)) ? (array)$entity->tags : [];
		$this->xPanel->addField([
			'name'              => 'tags',
			'label'             => trans('admin.Tags'),
			'type'              => 'select2_tagging_from_array',
			'options'           => $tags,
			'allows_multiple'   => true,
			'hint'              => t('tags_hint', [
				'limit' => (int)config('settings.single.tags_limit', 15),
				'min'   => (int)config('settings.single.tags_min_length', 2),
				'max'   => (int)config('settings.single.tags_max_length', 30)
			]),
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'verified_email',
			'label'             => trans('admin.Verified Email'),
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$this->xPanel->addField([
			'name'              => 'verified_phone',
			'label'             => trans('admin.Verified Phone'),
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		if (config('settings.single.listings_review_activation')) {
			$this->xPanel->addField([
				'name'              => 'reviewed',
				'label'             => trans('admin.Reviewed'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			]);
		}
		$this->xPanel->addField([
			'name'              => 'archived',
			'label'             => trans('admin.Archived'),
			'type'              => 'checkbox_switch',
			'wrapperAttributes' => [
				'class' => 'col-md-6',
			],
		]);
		$entity = $this->xPanel->getModel()->find(request()->segment(3));
		if (!empty($entity)) {
			$ipLink = config('larapen.core.ipLinkBase') . $entity->ip_addr;
			$this->xPanel->addField([
				'name'  => 'ip_addr',
				'type'  => 'custom_html',
				'value' => '<h5><strong>IP:</strong> <a href="' . $ipLink . '" target="_blank">' . $entity->ip_addr . '</a></h5>',
			], 'update');
			if (!empty($entity->email)) {
				$btnUrl = admin_url('blacklists/add') . '?email=' . $entity->email;
				
				$btnText = trans('admin.ban_the_user');
				$btnHint = trans('admin.ban_the_user_email', ['email' => $entity->email]);
				$tooltip = ' data-bs-toggle="tooltip" title="' . $btnHint . '"';
				
				$btnLink = '<a href="' . $btnUrl . '" class="btn btn-danger confirm-simple-action"' . $tooltip . '>' . $btnText . '</a>';
				$this->xPanel->addField([
					'name'              => 'ban_button',
					'type'              => 'custom_html',
					'value'             => $btnLink,
					'wrapperAttributes' => [
						'style' => 'text-align:center;',
					],
				], 'update');
			}
		}
	}
	
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}
	
	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
	
	public function postType()
	{
		$entries = PostType::query()->get();
		
		$entries = collect($entries)->mapWithKeys(function ($item) {
			return [$item['id'] => $item['name']];
		})->toArray();
		
		return $entries;
	}
	
	public function salaryType()
	{
		$entries = SalaryType::query()->get();
		
		$entries = collect($entries)->mapWithKeys(function ($item) {
			return [$item['id'] => $item['name']];
		})->toArray();
		
		return $entries;
	}
}
