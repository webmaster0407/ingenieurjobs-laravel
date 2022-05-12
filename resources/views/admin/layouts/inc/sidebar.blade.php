@if (auth()->check())
	<?php
	// Get plugins admin menu
	$pluginsMenu = '';
	$plugins = plugin_installed_list();
	if (!empty($plugins)) {
		foreach($plugins as $plugin) {
			if (method_exists($plugin->class, 'getAdminMenu')) {
				$pluginsMenu .= call_user_func($plugin->class . '::getAdminMenu');
			}
		}
	}
	?>
	<style>
		#adminSidebar ul li span {
			text-transform: capitalize;
		}
	</style>
	<aside class="left-sidebar" id="adminSidebar">
		{{-- Sidebar scroll --}}
		<div class="scroll-sidebar">
			{{-- Sidebar navigation --}}
			<nav class="sidebar-nav">
				<ul id="sidebarnav">
					<li class="sidebar-item user-profile">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<img src="{{ auth()->user()->photo_url }}" alt="user">
							<span class="hide-menu">{{ auth()->user()->name }}</span>
						</a>
						<ul aria-expanded="false" class="collapse first-level">
							<li class="sidebar-item">
								<a href="{{ admin_url('account') }}" class="sidebar-link p-0">
									<i class="mdi mdi-adjust"></i>
									<span class="hide-menu">{{ trans('admin.my_account') }}</span>
								</a>
							</li>
							<li class="sidebar-item">
								<a href="{{ admin_url('logout') }}" class="sidebar-link p-0">
									<i class="mdi mdi-adjust"></i>
									<span class="hide-menu">{{ trans('admin.logout') }}</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="sidebar-item">
						<a href="{{ admin_url('dashboard') }}" class="sidebar-link waves-effect waves-dark">
							<i data-feather="home" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.dashboard') }}</span>
						</a>
					</li>
					@if (
						auth()->user()->can('post-list')
						|| auth()->user()->can('category-list')
						|| auth()->user()->can('company-list')
						|| auth()->user()->can('post-type-list')
						|| auth()->user()->can('salary-type-list')
						|| userHasSuperAdminPermissions()
					)
						<li class="sidebar-item">
							<a href="#" class="sidebar-link has-arrow waves-effect waves-dark">
								<i data-feather="list"></i> <span class="hide-menu">{{ trans('admin.ads') }}</span>
							</a>
							<ul aria-expanded="false" class="collapse first-level">
								@if (auth()->user()->can('post-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('posts') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.list') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('category-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('categories') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.categories') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('company-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('companies') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.companies') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('post-type-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('p_types') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.ad types') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('salary-type-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('salary_types') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.salary type') }}</span>
										</a>
									</li>
								@endif
							</ul>
						</li>
					@endif
					
					@if (
						auth()->user()->can('user-list')
						|| auth()->user()->can('role-list')
						|| auth()->user()->can('permission-list')
						|| auth()->user()->can('gender-list')
						|| userHasSuperAdminPermissions()
					)
						<li  class="sidebar-item">
							<a href="#" class="sidebar-link has-arrow waves-effect waves-dark">
								<i data-feather="users" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.users') }}</span>
							</a>
							<ul aria-expanded="false" class="collapse first-level">
								@if (auth()->user()->can('user-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('users') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.list') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('role-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('roles') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.roles') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('permission-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('permissions') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.permissions') }}</span>
										</a>
									</li>
								@endif
								@if (auth()->user()->can('gender-list') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('genders') }}" class="sidebar-link">
											<i class="mdi mdi-adjust"></i>
											<span class="hide-menu">{{ trans('admin.titles') }}</span>
										</a>
									</li>
								@endif
							</ul>
						</li>
					@endif
					
					@if (auth()->user()->can('payment-list') || userHasSuperAdminPermissions())
						<li class="sidebar-item">
							<a href="{{ admin_url('payments') }}" class="sidebar-link">
								<i data-feather="dollar-sign" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.payments') }}</span>
							</a>
						</li>
					@endif
					@if (auth()->user()->can('page-list') || userHasSuperAdminPermissions())
						<li class="sidebar-item">
							<a href="{{ admin_url('pages') }}" class="sidebar-link">
								<i data-feather="book-open" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.pages') }}</span>
							</a>
						</li>
					@endif
					{!! $pluginsMenu !!}
					
					{{-- ======================================= --}}
					@if (
						auth()->user()->can('setting-list')
						|| auth()->user()->can('language-list')
						|| auth()->user()->can('home-section-list')
						|| auth()->user()->can('meta-tag-list')
						|| auth()->user()->can('package-list')
						|| auth()->user()->can('payment-method-list')
						|| auth()->user()->can('advertising-list')
						|| auth()->user()->can('country-list')
						|| auth()->user()->can('currency-list')
						|| auth()->user()->can('blacklist-list')
						|| auth()->user()->can('report-type-list')
						|| userHasSuperAdminPermissions()
					)
						<li class="nav-small-cap">
							<i class="mdi mdi-dots-horizontal"></i>
							<span class="hide-menu">{{ trans('admin.configuration') }}</span>
						</li>
						
						@if (
							auth()->user()->can('setting-list')
							|| auth()->user()->can('language-list')
							|| auth()->user()->can('home-section-list')
							|| auth()->user()->can('meta-tag-list')
							|| auth()->user()->can('package-list')
							|| auth()->user()->can('payment-method-list')
							|| auth()->user()->can('advertising-list')
							|| auth()->user()->can('country-list')
							|| auth()->user()->can('currency-list')
							|| auth()->user()->can('blacklist-list')
							|| auth()->user()->can('report-type-list')
							|| userHasSuperAdminPermissions()
						)
							<li class="sidebar-item">
								<a href="#" class="has-arrow sidebar-link">
									<i data-feather="settings" class="feather-icon"></i>
									<span class="hide-menu">{{ trans('admin.settings') }}</span>
								</a>
								<ul aria-expanded="false" class="collapse first-level">
									@include('admin.layouts.inc.sidebar.general-settings')
									@include('admin.layouts.inc.sidebar.tableData-settings')
								</ul>
							</li>
						@endif
					@endif
					
					@if (auth()->user()->can('plugin-list') || userHasSuperAdminPermissions())
						<li class="sidebar-item">
							<a href="{{ admin_url('plugins') }}" class="sidebar-link">
								<i data-feather="package" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.plugins') }}</span>
							</a>
						</li>
					@endif
					@if (auth()->user()->can('clear-cache') || userHasSuperAdminPermissions())
						<li class="sidebar-item">
							<a href="{{ admin_url('actions/clear_cache') }}" class="sidebar-link">
								<i data-feather="refresh-cw" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.clear cache') }}</span>
							</a>
						</li>
					@endif
					@if (auth()->user()->can('backup-list') || userHasSuperAdminPermissions())
						<li class="sidebar-item">
							<a href="{{ admin_url('backups') }}" class="sidebar-link">
								<i data-feather="hard-drive" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.backups') }}</span>
							</a>
						</li>
					@endif
					
					@if (
						auth()->user()->can('system-info')
						|| auth()->user()->can('maintenance')
						|| userHasSuperAdminPermissions()
					)
						<li  class="sidebar-item">
							<a href="#" class="sidebar-link has-arrow waves-effect waves-dark">
								<i data-feather="alert-circle"></i> <span class="hide-menu">{{ trans('admin.system') }}</span>
							</a>
							<ul aria-expanded="false" class="collapse first-level">
								@if (
									auth()->user()->can('maintenance') ||
									userHasSuperAdminPermissions()
								)
									@if (app()->isDownForMaintenance())
										@if (auth()->user()->can('maintenance') || userHasSuperAdminPermissions())
											<li class="sidebar-item">
												<a href="{{ admin_url('actions/maintenance/up') }}"
												   data-bs-toggle="tooltip"
												   title="{{ trans('admin.Leave Maintenance Mode') }}"
												   class="sidebar-link confirm-simple-action"
												>
													<span class="hide-menu">{{ trans('admin.Live Mode') }}</span>
												</a>
											</li>
										@endif
									@else
										@if (auth()->user()->can('maintenance') || userHasSuperAdminPermissions())
											<li class="sidebar-item">
												<a href="{{ admin_url('actions/maintenance/down') }}"
												   data-bs-toggle="tooltip"
												   title="{{ trans('admin.Put in Maintenance Mode') }}"
												   class="sidebar-link confirm-simple-action"
												>
													<span class="hide-menu">{{ trans('admin.Maintenance') }}</span>
												</a>
											</li>
										@endif
									@endif
								@endif
								@if (auth()->user()->can('system-info') || userHasSuperAdminPermissions())
									<li class="sidebar-item">
										<a href="{{ admin_url('system') }}" class="sidebar-link">
											<span class="hide-menu">{{ trans('admin.system_info') }}</span>
										</a>
									</li>
								@endif
							</ul>
						</li>
					@endif
					
					@if (userHasSuperAdminPermissions())
						<li class="sidebar-item">
							<a href="{{ url('docs/api') }}" target="_blank" class="sidebar-link">
								<i data-feather="book" class="feather-icon"></i> <span class="hide-menu">{{ trans('admin.api_docs') }}</span>
							</a>
						</li>
					@endif
					
				</ul>
			</nav>
			
		</div>
		
	</aside>
@endif
