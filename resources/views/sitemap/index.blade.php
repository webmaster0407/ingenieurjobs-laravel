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
@endsection

@section('content')
	@includeFirst([config('larapen.core.customizedViewPath') . 'common.spacer', 'common.spacer'])
	<div class="main-container inner-page">
		<div class="container">
			<div class="section-content">
				<div class="row">

					@if (session('message'))
						<div class="alert alert-danger">
							{{ session('message') }}
						</div>
					@endif

					@if (session()->has('flash_notification'))
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									@include('flash::message')
								</div>
							</div>
						</div>
					@endif
					
					@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'])
					<h1 class="text-center title-1"><strong>{{ t('sitemap') }}</strong></h1>
					<hr class="center-block small mt-0">
					
					<div class="col-12">
						<div class="content-box">
							<div class="row row-featured-category">
								<div class="col-12 box-title">
									<div class="inner">
										<h2 class="px-3">
											<span class="title-3 fw-bold">{{ t('List of Categories and Sub-categories') }}</span>
										</h2>
									</div>
								</div>
								
								<div class="col-12">
									<div class="list-categories-children styled">
										<div class="row">
											@foreach ($cats as $key => $col)
												<div class="col-md-4 col-sm-4{{ (count($cats) == $key+1) ? ' last-column' : '' }}">
													@foreach ($col as $iCat)
														
														<?php
															$randomId = '-' . substr(uniqid(rand(), true), 5, 5);
														?>
													
														<div class="cat-list">
															<h3 class="cat-title rounded">
																<a href="{{ \App\Helpers\UrlGen::category($iCat) }}">
																	<i class="{{ $iCat->icon_class ?? 'icon-ok' }}"></i>
																	{{ $iCat->name }} <span class="count"></span>
																</a>
																@if (isset($subCats) and $subCats->has($iCat->id))
																	<span class="btn-cat-collapsed collapsed"
																		  data-bs-toggle="collapse"
																		  data-bs-target=".cat-id-{{ $iCat->id . $randomId }}"
																		  aria-expanded="false"
																	>
																		<span class="icon-down-open-big"></span>
																	</span>
																@endif
															</h3>
															<ul class="cat-collapse collapse show cat-id-{{ $iCat->id . $randomId }} long-list-home">
																@if (isset($subCats) and $subCats->has($iCat->id))
																	@foreach ($subCats->get($iCat->id) as $iSubCat)
																		<li>
																			<a href="{{ \App\Helpers\UrlGen::category($iSubCat) }}">
																				{{ $iSubCat->name }}
																			</a>
																		</li>
																	@endforeach
																@endif
															</ul>
														</div>
													@endforeach
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					@if (isset($cities))
						@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'])
						<div class="col-12">
							<div class="content-box mb-0">
								<div class="row row-featured-category">
									<div class="col-12 box-title">
										<div class="inner">
											<h2 class="px-3">
												<span class="title-3 fw-bold">
													<i class="fas fa-map-marker-alt"></i> {{ t('List of Cities in') }} {{ config('country.name') }}
												</span>
											</h2>
										</div>
									</div>
									
									<div class="col-12">
										<div class="list-categories-children">
											<div class="row">
												@foreach ($cities as $key => $cols)
													<ul class="cat-list col-lg-3 col-md-4 col-sm-6 px-4{{ ($cities->count() == $key+1) ? ' cat-list-border' : '' }}">
														@foreach ($cols as $j => $city)
															<li>
																<a href="{{ \App\Helpers\UrlGen::city($city) }}" title="{{ t('Free Ads') }} {{ $city->name }}">
																	<strong>{{ $city->name }}</strong>
																</a>
															</li>
														@endforeach
													</ul>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endif

				</div>
				
				@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.social.horizontal', 'layouts.inc.social.horizontal'])
				
			</div>
		</div>
	</div>
@endsection

@section('before_scripts')
	@parent
	<script>
		var maxSubCats = 15;
	</script>
@endsection
