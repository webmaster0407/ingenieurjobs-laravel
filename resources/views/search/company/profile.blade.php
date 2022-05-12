{{--
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
--}}
@extends('layouts.master')

@section('search')
	@parent
	@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.form', 'search.inc.form'])
	@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.breadcrumbs', 'search.inc.breadcrumbs'])
	@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.advertising.top', 'layouts.inc.advertising.top'])
@endsection

@section('content')
	@includeFirst([config('larapen.core.customizedViewPath') . 'common.spacer', 'common.spacer'])
	<div class="main-container" id="jobs-search-div">
		<div class="container">
			
			<div class="section-content">
				<div class="inner-box">
					<div class="row">
						<?php
							$colDetails = 'col-12';
							$colContact = null;
							if (
								(isset($company->address) && !empty($company->address))
								|| (isset($company->phone) && !empty($company->phone))
								|| (isset($company->mobile) && !empty($company->mobile))
								|| (isset($company->fax) && !empty($company->fax))
							) {
								$colDetails = 'col-lg-8 col-md-6 col-sm-12';
								$colContact = 'col-lg-4 col-md-6 col-sm-12';
							}
						?>
						<div class="{{ $colDetails }}">
							<div class="seller-info seller-profile">
								<div class="seller-profile-img">
									<a><img src="{{ imgUrl(\App\Models\Company::getLogo($company->logo), 'medium') }}" class="img-fluid img-thumbnail" alt="img"></a>
								</div>
								<h3 class="no-margin no-padding link-color uppercase">
									@if (auth()->check())
										@if (auth()->user()->id == $company->user_id)
											<a href="{{ url('account/companies/' . $company->id . '/edit') }}" class="btn btn-default">
												<i class="far fa-edit"></i> {{ t('Edit') }}
											</a>
										@endif
									@endif
									{{ $company->name }}
								</h3>
								
								<div class="text-muted">
									{!! $company->description !!}
								</div>
								
								<div class="seller-social-list">
									<ul class="share-this-post">
										@if (isset($company->linkedin) and !empty($company->linkedin))
											<li><a href="{{ $company->linkedin }}" target="_blank"><i class="fa icon-linkedin-rect"></i></a></li>
										@endif
										@if (isset($company->facebook) and !empty($company->facebook))
											<li><a class="facebook" href="{{ $company->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
										@endif
										@if (isset($company->twitter) and !empty($company->twitter))
											<li><a href="{{ $company->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
										@endif
										@if (isset($company->pinterest) and !empty($company->pinterest))
											<li><a class="pinterest" href="{{ $company->pinterest }}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										@endif
									</ul>
								</div>
							</div>
						</div>
						
						@if (!empty($colContact))
							<div class="{{ $colContact }}">
								<div class="seller-contact-info mt5">
									<h3 class="no-margin"> {{ t('Contact Information') }} </h3>
									<dl class="dl-horizontal">
										@if (isset($company->address) and !empty($company->address))
											<dt>{{ t('Address') }}:</dt>
											<dd class="contact-sensitive">{!! $company->address !!}</dd>
										@endif
										
										@if (isset($company->phone) and !empty($company->phone))
											<dt>{{ t('phone') }}:</dt>
											<dd class="contact-sensitive">{{ $company->phone }}</dd>
										@endif
										
										@if (isset($company->mobile) and !empty($company->mobile))
											<dt>{{ t('Mobile Phone') }}:</dt>
											<dd class="contact-sensitive">{{ $company->mobile }}</dd>
										@endif
										
										@if (isset($company->fax) and !empty($company->fax))
											<dt>{{ t('Fax') }}:</dt>
											<dd class="contact-sensitive">{{ $company->fax }}</dd>
										@endif
										
										@if (isset($company->website) and !empty($company->website))
											<dt>{{ t('Website') }}:</dt>
											<dd class="contact-sensitive">
												<a href="{!! $company->website !!}" target="_blank">
													{!! $company->website !!}
												</a>
											</dd>
										@endif
									</dl>
								</div>
							</div>
						@endif
					</div>
				</div>
				
				<div class="section-block mt-3">
					<div class="category-list">
						<div class="tab-box clearfix">
							
							{{-- Nav tabs --}}
							<div class="col-lg-12 box-title no-border">
								<div class="inner">
									<h2 class="mx-3">
										<small>{{ $count->get('all') }} {{ t('Jobs Found') }}</small>
									</h2>
								</div>
							</div>
							
							{{-- Mobile Filter bar --}}
							<div class="mobile-filter-bar col-lg-12"></div>
							<div class="menu-overly-mask"></div>
							
							{{-- Tab Filter --}}
							<div class="tab-filter hide-xs"></div>
						
						</div>
						
						<div class="listing-filter hidden-xs">
							<div class="float-start col-sm-10 col-12">
								<div class="breadcrumb-list text-center-xs">
									{!! (isset($htmlTitle)) ? $htmlTitle : '' !!}
								</div>
							</div>
							<div class="float-end col-sm-2 col-12 text-end text-center-xs listing-view-action">
								@if (!empty(request()->all()))
									<a class="clear-all-button text-muted" href="{!! \App\Helpers\UrlGen::search() !!}">{{ t('Clear all') }}</a>
								@endif
							</div>
							<div style="clear:both;"></div>
						</div>
						<!--/.listing-filter-->
						
						<div class="posts-wrapper jobs-list">
							@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.posts.template.list', 'search.inc.posts.template.list'])
						</div>
						<!--/.posts-wrapper-->
						
						<div class="tab-box save-search-bar text-center">
							@if (request()->filled('q') && request()->get('q') != '' && $count->get('all') > 0)
								<a id="saveSearch"
								   data-name="{!! qsUrl(request()->url(), request()->except(['_token', 'location'])) !!}"
								   data-count="{{ $count->get('all') }}"
								>
									<i class="icon-star-empty"></i> {{ t('Save Search') }}
								</a>
							@else
								<a href="#"> &nbsp; </a>
							@endif
						</div>
					</div>
					
					@if ($posts->hasPages())
						<div class="pagination-bar text-center">
							{!! $posts->appends(request()->query())->links() !!}
						</div>
					@endif
				</div>
				
				<div style="clear:both;"></div>
				
				{{-- Advertising --}}
				@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.advertising.bottom', 'layouts.inc.advertising.bottom'])
			</div>
		
		</div>
	</div>
@endsection