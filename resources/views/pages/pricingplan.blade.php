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
@section('content')
 <link rel="stylesheet" href="/css/bootstrap.min.css"> <!---  css file  --->
<script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
<!--script type="text/javascript" src="/js/jquery.slim.min.js"></script-->
<!--script type="text/javascript" src="/js/popper.min.js"></script-->
<div class="container" id="pricing-table">
<div class="new-class"> <span><strong>Pricing</strong> job class</span> </div>
<div class="inner" id="pricing-inner"> <h2> <span class="title-3">Choose Right <span style="font-weight: bold;">Plan For Your</span></span> </h2> </div>
  <div class="row flex-items-xs-middle flex-items-xs-center" id="pricing-table-inner">

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header" id="card-head-one">
          <div class="new-class"> <span><strong> Pricing </strong>  &nbsp;ingenieurjobs </span> </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            PURE
          </h4>
          <Span>Free for two months</span>
         <!--div class="get-btn">
		 <a href="#" class="btn btn-gradient mt-2">Get Started <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div-->
		
		<!------pop-up------>
		<div class="container" id="pricing-popup">
  <!--h2>Modal Example</h2-->
  <!-- Button to Open the Modal -->
  <div class="get-btn">
   @if (!auth()->check())
  <button type="button" class="btn btn-primary" id="btn-before-login" data-toggle="modal" data-target="#myModal"> Gets Started
   <i class="fa fa-arrow-right" aria-hidden="true"></i>
  </button>
  @else
	 <button type="button" class="btn btn-primary" id="btn-before-login">
   <a href="https://ingenieurjobs.com/posts/create">  Gets Started  <i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
  </button> 
  @endif
  </div>
  
  @if (!auth()->check())

  <!-- The Modal -->
  <div class="modal fade" id="myModal" style="padding-right: 0px;">
    <div class="modal-dialog" id="get-started-form">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <!--h4 class="modal-title">Modal Heading</h4-->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <p> Please login or register yourself first to post job offer.</p>
		 <ul class="nav navbar-nav ms-auto navbar-right helo" id="pricing-login">
					@if (!auth()->check())
						
						
								<li class="dropdown-item" id="log-sign">
									@if (config('settings.security.login_open_in_modal'))
										<a href="#quickLogin" class="nav-link" data-bs-toggle="modal"><i class="fas fa-user"></i> {{ ('Sign in') }}</a>
									@else
										<a href="{{ \App\Helpers\UrlGen::login() }}" class="nav-link"><i class="fas fa-user"></i> {{ ('Sign in') }}</a>
									@endif
									/
									<a href="{{ \App\Helpers\UrlGen::register() }}" class="nav-link"> <i class="fas fa-user-plus" aria-hidden="true"></i> {{ ('Sign up') }}</a>
									
								</li>
								
							
							
						<li class="nav-item dropdown no-arrow open-on-hover d-md-block d-none" id="old-login">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<i class="fas fa-user"></i>
								<span>{{ t('log_in') }}</span>
								<i class="fas fa-chevron-down"></i>
							</a>
							<ul id="authDropdownMenu" class="dropdown-menu user-menu shadow-sm">
								<li class="dropdown-item">
									@if (config('settings.security.login_open_in_modal'))
										<a href="#quickLogin" class="nav-link" data-bs-toggle="modal"><i class="fas fa-user"></i> {{ t('log_in') }}</a>
									@else
										<a href="{{ \App\Helpers\UrlGen::login() }}" class="nav-link"><i class="fas fa-user"></i> {{ t('log_in') }}</a>
									@endif
								</li>
								<li class="dropdown-item">
									<a href="{{ \App\Helpers\UrlGen::register() }}" class="nav-link"><i class="far fa-user"></i> {{ t('sign_up') }}</a>
								</li>
							</ul>
						</li>
						<li class="nav-item d-md-none d-block" id="mobo-login">
							@if (config('settings.security.login_open_in_modal'))
								<a href="#quickLogin" class="nav-link" data-bs-toggle="modal"><i class="fas fa-user"></i> {{ t('log_in') }}</a>
							@else
								<a href="{{ \App\Helpers\UrlGen::login() }}" class="nav-link"><i class="fas fa-user"></i> {{ t('log_in') }}</a>
							@endif
						</li>
						<li class="nav-item d-md-none d-block" id="mobo-login">
							<a href="{{ \App\Helpers\UrlGen::register() }}" class="nav-link"><i class="far fa-user"></i> {{ t('sign_up') }}</a>
						</li>
					@else
						<!--ul class="user-logged-in">
						<li class="nav-item dropdown no-arrow open-on-hover user-in" id="user-loged-in">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<i class="fas fa-user-circle"></i>
								<span class="login-user-name">{{ auth()->user()->name }}</span>
								<span class="badge badge-pill badge-important count-threads-with-new-messages d-lg-inline-block d-md-none">0</span>
								<!--i class="fas fa-chevron-down"> Select Language</i>
							</a-->
							<!--ul id="userMenuDropdown" class="dropdown-menu user-menu shadow-sm">
								@if (isset($userMenu) && !empty($userMenu))
									@php
										$currentPath = '';
										if (request()->segment(1) == 'account') {
											$currentPath = request()->segment(2, '');
										}
										$menuGroup = '';
										$dividerNeeded = false;
									@endphp
									@foreach($userMenu as $key => $value)
										@continue(!$value['inDropdown'])
										@php
											if ($menuGroup != $value['group']) {
												$menuGroup = $value['group'];
												if (!empty($menuGroup) && !$loop->first) {
													$dividerNeeded = true;
												}
											} else {
												$dividerNeeded = false;
											}
										@endphp
										@if ($dividerNeeded)
											<li class="dropdown-divider"></li>
										@endif
										<li class="dropdown-itemmm{!! ($value['path']===$currentPath) ? ' active' : '' !!}">
											<a href="{{ $value['url'] }}">
												<i class="{{ $value['icon'] }}"></i> {{ $value['name'] }}
												@if (isset($value['countVar'], $value['countCustomClass']) && !empty($value['countVar']) && !empty($value['countCustomClass']))
													<span class="badge badge-pill badge-important{{ $value['countCustomClass'] }}">0</span>
												@endif
											</a>
										</li>
									@endforeach
								@endif
							</ul>
						</li>
					@endif
					
					@if (!auth()->check() || (auth()->check() && in_array(auth()->user()->user_type_id, [1])))
						@if (config('settings.single.pricing_page_enabled') == '2')
							<li class="nav-item pricing">
								<a href="{{ \App\Helpers\UrlGen::pricing() }}" class="nav-link">
									<i class="fas fa-tags"></i> {{ t('pricing_label') }}
								</a>
							</li>
						@endif
					@endif
						
					<?php
						$addListingCanBeShown = false;
						$addListingUrl = \App\Helpers\UrlGen::addPost();
						$addListingAttr = '';
						if (!auth()->check()) {
							$addListingCanBeShown = true;
							if (config('settings.single.guests_can_post_listings') != '1') {
								$addListingUrl = '#quickLogin';
								$addListingAttr = ' data-bs-toggle="modal"';
							}
						} else {
							if (in_array(auth()->user()->user_type_id, [1])) {
								$addListingCanBeShown = true;
							}
						}
						if (config('settings.single.pricing_page_enabled') == '1') {
							$addListingUrl = \App\Helpers\UrlGen::pricing();
							$addListingAttr = '';
						}
					?>
					@if ($addListingCanBeShown)
						<!--li class="nav-item postadd" id="btn-head-job">
							<a class="btn btn-block btn-border btn-listing" href="{{ $addListingUrl }}"{!! $addListingAttr !!}>
								<i class="far fa-edit"></i> {{ t('Create Job') }}
							</a>
						</li-->
					@endif
					</ul>
				
					
				</ul>
		  
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <!--button type="button" class="btn btn-danger" data-dismiss="modal">Close</button-->
		  <span class="thank">Thank you</span>
        </div>
        
      </div>
    </div>
  </div>
  @endif
  
</div>

		<!-----popupend-------->
		
        </div>
		
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center" id="card-two-inner">
        <div class="card-header" id="card-head-two">
          <div class="new-class"> <span><strong> Pricing </strong>  &nbsp;ingenieurjobs </span> </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            PLUS...<span>Come later</span>
          </h4>
          
          
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header" id="card-head-three">
          <div class="new-class"> <span><strong> Pricing </strong>  &nbsp;ingenieurjobs </span> </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            PRIME...<span>Come later</span>
          </h4>
         
    
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
@section('after_scripts')
@endsection



