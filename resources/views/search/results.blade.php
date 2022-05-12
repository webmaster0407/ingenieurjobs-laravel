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
@endsection

@section('content')
	<div class="main-container" id="result-page">
		
		@if (session()->has('flash_notification'))
			@includeFirst([config('larapen.core.customizedViewPath') . 'common.spacer', 'common.spacer'])
			<?php $paddingTopExists = true; ?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						@include('flash::message')
					</div>
				</div>
			</div>
		@endif
		
		@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.breadcrumbs', 'search.inc.breadcrumbs'])
		
		@if (config('settings.list.show_cats_in_top'))
			@if (isset($cats) && $cats->count() > 0)
				<div class="container mb-2 hide-xs">
					<div class="row p-0 m-0">
						<div class="col-12 p-0 m-0 border border-bottom-0 bg-light"></div>
					</div>
				</div>
			@endif
			@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.categories', 'search.inc.categories'])
		@endif
		
		<?php if (isset($topAdvertising) && !empty($topAdvertising)): ?>
			@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.advertising.top', 'layouts.inc.advertising.top'], ['paddingTopExists' => true])
		<?php
			$paddingTopExists = false;
		else:
			if (isset($paddingTopExists) && $paddingTopExists) {
				$paddingTopExists = false;
			}
		endif;
		?>
		
		<div class="container">
			
			@if (session()->has('flash_notification'))
				<div class="row">
					<div class="col-xl-12">
						@include('flash::message')
					</div>
				</div>
			@endif
			
			<div class="row">
				
				{{-- Sidebar --}}
				@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.sidebar', 'search.inc.sidebar'])
				
				{{-- Content --}}
				<div class="col-md-8 page-content col-thin-left mb-4">
					<div class="category-list">
						<div class="tab-box">

							{{-- Nav tabs --}}
							<div class="col-xl-12 box-title no-border">
								<div class="inner">
									<h2 class="px-2">
										<small>{{ $count->get('all') }} {{ t('Jobs Found') }}</small>
									</h2>
								</div>
							</div>

							{{-- Mobile Filter bar --}}
							<div class="col-xl-12 mobile-filter-bar">
								<ul class="list-unstyled list-inline no-margin no-padding">
									<li class="filter-toggle">
										<a class="">
											<i class="fas fa-bars"></i> {{ t('Filters') }}
										</a>
									</li>
									<li>
										{{-- OrderBy Mobile --}}
										<div class="dropdown">
											<a data-bs-toggle="dropdown" class="dropdown-toggle">{{ t('Sort by') }}</a>
											<ul class="dropdown-menu">
												@if (isset($orderByArray) && !empty($orderByArray))
													@foreach($orderByArray as $option)
														@if ($option['condition'])
															<li><a href="{!! $option['url'] !!}" rel="nofollow">{{ $option['label'] }}</a></li>
														@endif
													@endforeach
												@endif
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<div class="menu-overly-mask"></div>
							{{-- Mobile Filter bar End--}}
							
							
							<div class="tab-filter pb-2">
								{{-- OrderBy Desktop --}}
								<select id="orderBy" class="niceselecter select-sort-by small" data-style="btn-select" data-width="auto">
									@if (isset($orderByArray) && !empty($orderByArray))
										@foreach($orderByArray as $option)
											@if ($option['condition'])
												<option{{ $option['isSelected'] ? ' selected="selected"' : '' }} value="{!! $option['url'] !!}">
													{{ $option['label'] }}
												</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>

						</div>

						<div class="listing-filter hidden-xs">
							<div class="float-start col-md-9 col-sm-8 col-12">
								<h1 class="h6 pb-0 breadcrumb-list text-center-xs">
									{!! (isset($htmlTitle)) ? $htmlTitle : '' !!}
								</h1>
							</div>
							<div class="float-end col-md-3 col-sm-4 col-12 text-end text-center-xs listing-view-action">
								@if (!empty(request()->all()))
									<a class="clear-all-button text-muted" href="{!! \App\Helpers\UrlGen::search() !!}">{{ t('Clear all') }}</a>
								@endif
							</div>
							<div style="clear:both;"></div>
						</div>

						<div class="posts-wrapper jobs-list">
							@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.posts.template.list', 'search.inc.posts.template.list'])
						</div>

						<div class="tab-box save-search-bar text-center">
							@if (request()->filled('q') && request()->get('q') != '' && $count->get('all') > 0)
								<a id="saveSearch"
								   data-name="{!! qsUrl(request()->url(), request()->except(['_token', 'location']), null, false) !!}"
								   data-count="{{ $count->get('all') }}"
								>
									<i class="far fa-bell"></i> {{ t('Save Search') }}
								</a>
							@else
								<a href="#"> &nbsp; </a>
							@endif
						</div>
					</div>
					
					@if ($posts->hasPages())
						<nav class="mt-3 mb-0 pagination-sm" aria-label="">
							{!! $posts->appends(request()->query())->links() !!}
						</nav>
					@endif
					
				</div>
			</div>
		</div>
		
		{{-- Advertising --}}
		@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.advertising.bottom', 'layouts.inc.advertising.bottom'])
		
		{{-- Promo Post Button --}}
		@if (!auth()->check())
			<div class="container mb-3">
				<div class="card border-light text-dark bg-light mb-3">
					<div class="card-body text-center">
						<h2>{{ t('Looking for a job') }}</h2>
						<h5>{{ t('Upload your Resume and easily apply to jobs from any device') }}</h5>
						<a href="{{ \App\Helpers\UrlGen::register() . '?type=2' }}" class="btn btn-border btn-border btn-listing">
							<i class="fas fa-paperclip"></i> {{ t('Add Your Resume') }}
						</a>
					</div>
				</div>
			</div>
		@endif
		
		{{-- Category Description --}}
		@if (isset($cat, $cat->description) && !empty($cat->description))
			@if (!(bool)$cat->hide_description)
				<div class="container mb-3">
					<div class="card border-light text-dark bg-light mb-3">
						<div class="card-body">
							{!! $cat->description !!}
						</div>
					</div>
				</div>
			@endif
		@endif
		
		{{-- Show Posts Tags --}}
		@if (config('settings.list.show_listings_tags'))
			@if (isset($tags) && !empty($tags))
				<div class="container">
					<div class="card mb-3">
						<div class="card-body">
							<h2 class="card-title"><i class="fas fa-tags"></i> {{ t('Tags') }}:</h2>
							@foreach($tags as $iTag)
								<span class="d-inline-block border border-inverse bg-light rounded-1 py-1 px-2 my-1 me-1">
									<a href="{{ \App\Helpers\UrlGen::tag($iTag) }}">
										{{ $iTag }}
									</a>
								</span>
							@endforeach
						</div>
					</div>
				</div>
			@endif
		@endif
	</div>
@endsection

@section('modal_location')
	@parent
	@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.modal.location', 'layouts.inc.modal.location'])
@endsection

@section('after_scripts')
	<script>
        $(document).ready(function () {
			$('#postType a').click(function (e) {
				e.preventDefault();
				var goToUrl = $(this).attr('href');
				redirect(goToUrl);
			});
			$('#orderBy').change(function () {
				var goToUrl = $(this).val();
				redirect(goToUrl);
			});
		});
	</script>
@endsection
