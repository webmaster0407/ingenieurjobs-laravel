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

@section('header')
	@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.lite.header', 'layouts.inc.lite.header'])
@endsection

@section('search')
	@parent
@endsection

@section('content')
	@includeFirst([config('larapen.core.customizedViewPath') . 'common.spacer', 'common.spacer'])
	<div class="main-container inner-page pb-0">
		
		@if (session()->has('flash_notification'))
			<div class="container">
				<div class="row">
					<div class="col-12">
						@include('flash::message')
					</div>
				</div>
			</div>
		@endif
		
		<div class="container">
			<div class="section-content">
				<div class="row">

					<h1 class="text-center title-1" style="text-transform: none;">
						<strong>{{ t('countries') }}</strong>
					</h1>
					<hr class="center-block small mt-0">
					
					@if (isset($countries))
						<div class="col-md-12 page-content">
							<div class="inner-box relative">
								
								<h3 class="title-2"><i class="fas fa-map-marker-alt"></i> {{ t('select_a_country') }}</h3>
								
								@if (!empty($countries))
									<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 m-0">
										@foreach ($countries as $code => $country)
											<?php
											$classBorder = (count($countries) == ($loop->index + 1)) ? ' cat-list-border' : '';
											$countryUrl = dmUrl($country, '/', true, !((bool)config('plugins.domainmapping.installed')));
											?>
											<ul class="col mb-1 cat-list{{ $classBorder }}">
												<img src="{{ url('images/blank.gif') . getPictureVersion() }}"
													 class="flag flag-{{ $country->get('icode') }}"
													 style="margin-bottom: 4px; margin-right: 5px;"
												>
												<a href="{{ $countryUrl }}" data-bs-toggle="tooltip" title="{!! $country->get('name') !!}">
													{{ Str::limit($country->get('name'), 26) }}
												</a>
											</ul>
										@endforeach
									</div>
								@else
									<div class="row m-0">
										<div class="col-12 text-center mb-3 text-danger">
											<strong>{{ t('countries_not_found') }}</strong>
										</div>
									</div>
								@endif
								
							</div>
						</div>
					@endif
					
				</div>
				
				@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.social.horizontal', 'layouts.inc.social.horizontal'])
				
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.lite.footer', 'layouts.inc.lite.footer'])
@endsection

@section('after_scripts')
@endsection
