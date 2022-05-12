<?php
// Search parameters
$queryString = (request()->getQueryString() ? ('?' . request()->getQueryString()) : '');

// Check if the Multi-Countries selection is enabled
$multiCountriesIsEnabled = false;
$multiCountriesLabel = '';

// Logo Label
$logoLabel = '';
if (request()->segment(1) != 'countries') {
	if (isset($multiCountriesIsEnabled) && $multiCountriesIsEnabled) {
		$logoLabel = config('settings.app.name') . ((!empty(config('country.name'))) ? ' ' . config('country.name') : '');
	}
}
?>
<div class="header">
	<nav class="navbar fixed-top navbar-site navbar-light bg-light navbar-expand-md" role="navigation">
		<div class="container">
			
			<div class="navbar-identity p-sm-0">
				{{-- Logo --}}
				<a href="{{ url('/') }}" class="navbar-brand logo logo-title">
					<img src="{{ imgUrl(config('settings.app.logo', config('larapen.core.logo')), 'logo') }}" class="main-logo" />
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
				@if (request()->segment(1) != 'countries')
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
				@endif
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					{{-- Country Flag --}}
					@if (request()->segment(1) != 'countries')
						@if (config('settings.geo_location.show_country_flag'))
							@if (!empty(config('country.icode')))
								@if (file_exists(public_path() . '/images/flags/32/' . config('country.icode') . '.png'))
									<li class="flag-menu country-flag hidden-xs nav-item"
										data-bs-toggle="tooltip"
										data-bs-placement="{{ (config('lang.direction') == 'rtl') ? 'bottom' : 'right' }}"
									>
										@if (isset($multiCountriesIsEnabled) && $multiCountriesIsEnabled)
											<a class="nav-link p-0" data-bs-toggle="modal" data-bs-target="#selectCountry">
												<img class="flag-icon"
													 src="{{ url('images/flags/32/' . config('country.icode') . '.png') . getPictureVersion() }}"
													 alt="{{ config('country.name') }}"
												>
												<span class="caret d-block float-end mt-3 mx-1 hidden-sm"></span>
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
					@endif
				</ul>
				
				<ul class="nav navbar-nav ms-auto navbar-right">
					@if (config('settings.list.display_browse_jobs_link'))
						<li class="nav-item d-lg-block d-md-none d-block">
							<a href="{{ \App\Helpers\UrlGen::search() }}" class="nav-link">
								<i class="fas fa-th-list"></i> {{ t('Browse Jobs') }}
							</a>
						</li>
					@endif
					
					<li class="nav-item dropdown no-arrow open-on-hover d-md-block d-none">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fas fa-user"></i>
							<span>{{ t('log_in') }}</span>
							<i class="fas fa-chevron-down"></i>
						</a>
						<ul id="authDropdownMenu" class="dropdown-menu user-menu shadow-sm">
							<li class="dropdown-item">
								<a href="{{ \App\Helpers\UrlGen::login() }}" class="nav-link"><i class="fas fa-user"></i> {{ t('log_in') }}</a>
							</li>
							<li class="dropdown-item">
								<a href="{{ \App\Helpers\UrlGen::register() }}" class="nav-link"><i class="far fa-user"></i> {{ t('sign_up') }}</a>
							</li>
						</ul>
					</li>
					<li class="nav-item d-md-none d-block">
						<a href="{{ \App\Helpers\UrlGen::login() }}" class="nav-link"><i class="fas fa-user"></i> {{ t('log_in') }}</a>
					</li>
					<li class="nav-item d-md-none d-block">
						<a href="{{ \App\Helpers\UrlGen::register() }}" class="nav-link"><i class="far fa-user"></i> {{ t('sign_up') }}</a>
					</li>
					
					@if (!auth()->check() || (auth()->check() && in_array(auth()->user()->user_type_id, [1])))
						@if (config('settings.single.pricing_page_enabled') == '2')
							<li class="nav-item pricing">
								<a href="{{ \App\Helpers\UrlGen::pricing() }}" class="nav-link">
									<i class="fas fa-tags"></i> {{ t('pricing_label') }}
								</a>
							</li>
						@endif
					@endif
					
					<li class="nav-item postadd">
						@if (config('settings.single.guests_can_post_listings') != '1')
							<a class="btn btn-block btn-border btn-listing" href="#quickLogin" data-bs-toggle="modal">
								<i class="far fa-edit"></i> {{ t('Create Job') }}
							</a>
						@else
							<a class="btn btn-block btn-border btn-listing" href="{{ \App\Helpers\UrlGen::addPost(true) }}">
								<i class="far fa-edit"></i> {{ t('Create Job') }}
							</a>
						@endif
					</li>
					
					@if (!empty(config('lang.abbr')))
						@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.menu.select-language', 'layouts.inc.menu.select-language'])
					@endif
				</ul>

			</div>
		</div>
	</nav>
</div>
