<header class="topbar">
	<?php
	$navbarTheme = (config('settings.style.admin_navbar_bg') == 'skin6') ? 'navbar-light' : 'navbar-dark';
	?>
	<nav class="navbar top-navbar navbar-expand-md {{ $navbarTheme }}">
		
		<div class="navbar-header">
			
			{{-- This is for the sidebar toggle which is visible on mobile only --}}
			<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
				<i class="fas fa-bars"></i>
			</a>
			
			{{-- Logo --}}
			<a class="navbar-brand" href="{{ url('/') }}" target="_blank">
				{{-- Logo text --}}
				<span class="logo-text">
					<img src="{{ imgUrl(config('settings.app.logo_dark'), 'adminLogo') }}" alt="{{ strtolower(config('settings.app.name')) }}" class="dark-logo img-fluid"/>
					<img src="{{ imgUrl(config('settings.app.logo_light'), 'adminLogo') }}" alt="{{ strtolower(config('settings.app.name')) }}" class="light-logo img-fluid"/>
				</span>
			</a>
			
			{{-- Toggle which is visible on mobile only --}}
			<a class="topbartoggler d-block d-md-none waves-effect waves-light"
			   href="javascript:void(0)"
			   data-bs-toggle="collapse"
			   data-bs-target="#navbarSupportedContent"
			   aria-controls="navbarSupportedContent"
			   aria-expanded="false"
			   aria-label="Toggle navigation"
			>
				<i class="bi bi-three-dots"></i>
			</a>
			
		</div>
		
		<div class="navbar-collapse collapse" id="navbarSupportedContent">
			{{-- Toggle and nav items --}}
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark" href="javascript:void(0)">
						<i class="fas fa-bars"></i>
					</a>
				</li>
			</ul>
			
			{{-- Right side toggle and nav items --}}
			<ul class="navbar-nav justify-content-end">
				{{-- Profile --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle waves-effect waves-dark"
					   href=""
					   data-bs-toggle="dropdown"
					   aria-haspopup="true"
					   aria-expanded="false"
					>
						<img src="{{ auth()->user()->photo_url }}"
							 alt="user"
							 width="30"
							 class="profile-pic rounded-circle"
						/>
					</a>
					<div class="dropdown-menu dropdown-menu-end user-dd">
						<div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
							<div class="">
								<img src="{{ auth()->user()->photo_url }}" alt="user" class="rounded-circle" width="60">
							</div>
							<div class="ms-2">
								<h4 class="mb-0 text-white">{{ auth()->user()->name }}</h4>
								<p class="mb-0">{{ auth()->user()->email }}</p>
							</div>
						</div>
						<a class="dropdown-item" href="{{ admin_url('account') }}">
							<i data-feather="user" class="feather-sm text-info me-1 ms-1"></i> {{ trans('admin.my_account') }}
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ admin_url('logout') }}">
							<i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i> {{ trans('admin.logout') }}
						</a>
					</div>
				</li>
			</ul>
		</div>
		
	</nav>
</header>
