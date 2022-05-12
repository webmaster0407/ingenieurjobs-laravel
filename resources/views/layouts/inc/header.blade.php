<?php
// Search parameters
$queryString = (request()->getQueryString() ? ('?' . request()->getQueryString()) : '');

// Check if the Multi-Countries selection is enabled
$multiCountriesIsEnabled = false;
$multiCountriesLabel = '';
if (config('settings.geo_location.show_country_flag')) {
	if (!empty(config('country.code'))) {
		if (isset($countries) && $countries->count() > 1) {
			$multiCountriesIsEnabled = true;
			$multiCountriesLabel = 'title="' . t('Select a Country') . '"';
		}
	}
}

// Logo Label
$logoLabel = '';
if (isset($multiCountriesIsEnabled) && $multiCountriesIsEnabled) {
	$logoLabel = config('settings.app.name') . ((!empty(config('country.name'))) ? ' ' . config('country.name') : '');
}
?>
 <link rel="stylesheet" href="/css/bootstrap.min.css"> <!---  css file  --->
<script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="/js/jquery.slim.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<div class="header">
	<nav class="navbar fixed-top navbar-site navbar-light bg-light navbar-expand-md" role="navigation">
		<div class="container" id="contain-head">
		<div class="left-side">
			
			<div class="navbar-identity p-sm-0">
				{{-- Logo --}}
				<a href="{{ url('/') }}" class="navbar-brand logo logo-title">
					<img src="{{ imgUrl(config('settings.app.logo'), 'logo') }}"
						 alt="{{ strtolower(config('settings.app.name')) }}" class="main-logo" data-bs-placement="bottom"
						 data-bs-toggle="tooltip"
						 title="{!! isset($logoLabel) ? $logoLabel : '' !!}"/>
				</a>
				{{-- Toggle Nav (Mobile) --}}
				<button class="navbar-toggler -toggler float-end"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarsDefault"
						aria-controls="navbarsDefault"
						aria-expanded="false"
						aria-label="Toggle navigation"
				>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
						<title>{{ t('Menu') }}</title>
						<path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
					</svg>
				</button>
				{{-- Country Flag (Mobile) --}}
				@if (isset($multiCountriesIsEnabled) && $multiCountriesIsEnabled)
					@if (!empty(config('country.icode')))
						@if (file_exists(public_path().'/images/flags/24/' . config('country.icode') . '.png'))
							<button class="flag-menu country-flag d-block d-md-none btn btn-default hidden float-end" href="#selectCountry" data-bs-toggle="modal">
								<img src="{{ url('images/flags/24/' . config('country.icode') . '.png') . getPictureVersion() }}"
									 alt="{{ config('country.name') }}"
									 style="float: left;"
								>
								<span class="caret hidden-xs"></span>
							</button>
						@endif
					@endif
				@endif
			</div>
			<ul class="nav navbar-nav ms-auto navbar-right">
					@if (config('settings.list.display_browse_jobs_link'))
						<li class="nav-item d-lg-block d-md-none d-block">
					<a href="{{ url('/') }}" class="nav-link">
					 {{ ('Home') }}
					</a>
					</li>
						<li class="nav-item d-lg-block d-md-none d-block">
							<a href="{{ \App\Helpers\UrlGen::search() }}" class="nav-link">
								<!--i class="fas fa-th-list"></i--> {{ t('Browse Jobs') }}
							</a>
						</li>
						<li class="nav-item d-lg-block d-md-none d-block">
							<a href="{{ url('/pricingplan')}}" class="nav-link">
								<!--i class="fas fa-th-list"></i--> {{ ('Pricing Plans') }}
							</a>
						</li>
					@endif
					</ul>
			</div>
			<div class="right-side">
			<div class="navbar-collapse collapse" id="navbarsDefault">
			
				
				
					<ul class="nav navbar-nav ms-auto navbar-right helo">
					@if (!auth()->check())
						
								<li class="dropdown-item" id="log-sign">
									@if (config('settings.security.login_open_in_modal'))
										<a href="#quickLogin" class="nav-link" data-bs-toggle="modal"><i class="fas fa-user"></i> {{ ('Sign in') }}</a>
									@else
										<a href="{{ \App\Helpers\UrlGen::login() }}" class="nav-link"><i class="fas fa-user"></i> {{ ('Sign in') }}</a>
									@endif
									/
									<a href="{{ \App\Helpers\UrlGen::register() }}" class="nav-link"> {{ ('Sign up') }}</a>
									
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
						<ul class="user-loged-in">
						<li class="nav-item dropdown no-arrow open-on-hover user-in" id="user-loged-in">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<i class="fas fa-user-circle"></i>
								<span class="login-user-name">{{ auth()->user()->name }}</span>
								<span class="badge badge-pill badge-important count-threads-with-new-messages d-lg-inline-block d-md-none">0</span>
								<!--i class="fas fa-chevron-down"> Select Language</i-->
							</a>
							<ul id="userMenuDropdown" class="dropdown-menu user-menu shadow-sm">
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
						<li class="nav-item postadd" id="btn-head-job">
							
							 <!--a class="btn btn-block btn-border btn-listing" href="{{ $addListingUrl }}"{!! $addListingAttr !!}>
								<i class="far fa-edit"></i> {{ t('Create Job') }}
							</a-->
							
							 <a class="btn btn-block btn-border btn-listing" href="{{ url('/pricingplan')}}"{!! $addListingAttr !!}>
								<i class="far fa-edit"></i> {{ t('Create Job') }}
							</a>
							  
							
						</li>
					@endif
					</ul>
					@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.menu.select-language', 'layouts.inc.menu.select-language'])
					
				</ul>
				
					<!--ul class="nav navbar-nav me-md-auto navbar-left">
					{{-- Country Flag --}}
					@if (config('settings.geo_location.show_country_flag'))
						@if (!empty(config('country.icode')))
							@if (file_exists(public_path() . '/images/flags/32/' . config('country.icode') . '.png'))
								<li class="flag-menu country-flag hidden-xs nav-item"
									data-bs-toggle="tooltip"
									data-bs-placement="{{ (config('lang.direction') == 'rtl') ? 'bottom' : 'right' }}" {!! $multiCountriesLabel !!}
								>
									@if (isset($multiCountriesIsEnabled) && $multiCountriesIsEnabled)
										<a class="nav-link p-0" data-bs-toggle="modal" data-bs-target="#selectCountry">
											<img class="flag-icon mt-1"
												 src="{{ url('images/flags/32/' . config('country.icode') . '.png') . getPictureVersion() }}"
												 alt="{{ config('country.name') }}"
											>
											<span class="caret d-block float-end mt-3 mx-1 d-lg-block d-md-none"></span>
										</a>
									@else
										<a class="p-0" style="cursor: default;">
											<img class="flag-icon"
												 src="{{ url('images/flags/32/' . config('country.icode') . '.png') . getPictureVersion() }}"
												 alt="{{ config('country.name') }}"
											>
										</a>
									@endif
								</li>
							@endif
						@endif
					@endif
				</ul-->
			</div>
			</div>
		</div>
	</nav>
</div>
<style>
.navbar.navbar-site {
    border-bottom-color: #f4f9fd !important;
}
#homepage .search-row .search-col:first-child .form-control{
	border-radius: 50px !important;
}

#homepage .search-row .search-col .search-btn-border{
	border-radius: 50px !important;
}
#homepage .search-row .search-col .btn {
    border-radius: 50px !important;
    height: 35px;
    padding: 6px 9px 13px 11px;
}
</style>
<script>

$(document).ready(function(){
$('#get-started-form').on('click', function(){
$(this).removeClass('hide-form').addClass('hide-form');
});
});

</script>