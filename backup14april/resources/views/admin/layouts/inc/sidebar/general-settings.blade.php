@if (auth()->user()->can('setting-list') || userHasSuperAdminPermissions())
	@if (config('settings.app.general_settings_as_submenu_in_sidebar'))
		<li class="sidebar-item">
			<a href="#general-settings" class="has-arrow sidebar-link">
				<span class="hide-menu">{{ trans('admin.general_settings') }}</span>
			</a>
			<ul aria-expanded="false" class="collapse second-level">
				@if (isset($settings) && $settings->count() > 0)
					@foreach($settings as $setting)
						<li class="sidebar-item">
							<a href="{{ admin_url('settings/' . $setting->id . '/edit') }}" class="sidebar-link">
								<span class="hide-menu">{{ $setting->name }}</span>
							</a>
						</li>
					@endforeach
					<li class="sidebar-item">&nbsp;</li>
				@endif
			</ul>
		</li>
	@else
		<li class="sidebar-item">
			<a href="{{ admin_url('settings') }}" class="sidebar-link">
				<span class="hide-menu">{{ trans('admin.general_settings') }}</span>
			</a>
		</li>
	@endif
@endif