@if (auth()->user()->can('language-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('languages') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.languages') }}</span>
		</a>
	</li>
@endif
@if (auth()->user()->can('home-section-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('homepage') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.homepage') }}</span>
		</a>
	</li>
@endif
@if (auth()->user()->can('meta-tag-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('meta_tags') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.meta tags') }}</span>
		</a>
	</li>
@endif
@if (auth()->user()->can('package-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('packages') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.packages') }}</span>
		</a>
	</li>
@endif
@if (auth()->user()->can('payment-method-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('payment_methods') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.payment methods') }}</span>
		</a>
	</li>
@endif
@if (auth()->user()->can('advertising-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('advertisings') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.advertising') }}</span>
		</a>
	</li>
@endif
@if (
	auth()->user()->can('country-list')
	|| auth()->user()->can('currency-list')
	|| userHasSuperAdminPermissions()
)
	<li class="sidebar-item">
		<a href="#international" class="has-arrow sidebar-link">
			<i class="fa fa-globe"></i> <span class="hide-menu">{{ trans('admin.international') }}</span>
		</a>
		<ul aria-expanded="false" class="collapse second-level">
			@if (auth()->user()->can('country-list') || userHasSuperAdminPermissions())
				<li class="sidebar-item">
					<a href="{{ admin_url('countries') }}" class="sidebar-link">
						<i class="mdi mdi-adjust"></i>
						<span class="hide-menu">{{ trans('admin.countries') }}</span>
					</a>
				</li>
			@endif
			@if (auth()->user()->can('currency-list') || userHasSuperAdminPermissions())
				<li class="sidebar-item">
					<a href="{{ admin_url('currencies') }}" class="sidebar-link">
						<i class="mdi mdi-adjust"></i>
						<span class="hide-menu">{{ trans('admin.currencies') }}</span>
					</a>
				</li>
			@endif
			<li class="sidebar-item">&nbsp;</li>
		</ul>
	</li>
@endif
@if (auth()->user()->can('blacklist-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('blacklists') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.blacklist') }}</span>
		</a>
	</li>
@endif
@if (auth()->user()->can('report-type-list') || userHasSuperAdminPermissions())
	<li class="sidebar-item">
		<a href="{{ admin_url('report_types') }}" class="sidebar-link">
			<i class="mdi mdi-adjust"></i>
			<span class="hide-menu">{{ trans('admin.report types') }}</span>
		</a>
	</li>
@endif