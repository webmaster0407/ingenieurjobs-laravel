<div class="row">
	@if (isset($countUnactivatedPosts))
	<div class="col-lg-3 col-6">
		
		<div class="card bg-orange rounded shadow">
			<div class="card-body">
				<div class="row py-2">
					<div class="col-8 d-flex align-items-center">
						<div>
							<h2 class="fw-light">
								<a href="{{ admin_url('posts?active=0') }}" class="text-white" style="font-weight: bold;">
								{{ $countUnactivatedPosts }}
								</a>
							</h2>
							<h6 class="text-white">
								<a href="{{ admin_url('posts?active=0') }}" class="text-white">
								{{ trans('admin.Unactivated ads') }}
								</a>
							</h6>
						</div>
					</div>
					<div class="col-4 d-flex align-items-center justify-content-end">
						<span class="text-white display-6">
							<a href="{{ admin_url('posts?active=0') }}" class="text-white">
							<i class="fa fa-edit"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@endif
	
	@if (isset($countActivatedPosts))
	<div class="col-lg-3 col-6">
		
		<div class="card bg-success rounded shadow">
			<div class="card-body">
				<div class="row py-2">
					<div class="col-8 d-flex align-items-center">
						<div>
							<h2 class="fw-light">
								<a href="{{ admin_url('posts?active=1') }}" class="text-white" style="font-weight: bold;">
								{{ $countActivatedPosts }}
								</a>
							</h2>
							<h6 class="text-white">
								<a href="{{ admin_url('posts?active=1') }}" class="text-white">
								{{ trans('admin.Activated ads') }}
								</a>
							</h6>
						</div>
					</div>
					<div class="col-4 d-flex align-items-center justify-content-end">
						<span class="text-white display-6">
							<a href="{{ admin_url('posts?active=1') }}" class="text-white">
							<i class="far fa-check-circle"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@endif
	
	@if (isset($countUsers))
	<div class="col-lg-3 col-6">
		
		<div class="card bg-info rounded shadow">
			<div class="card-body">
				<div class="row py-2">
					<div class="col-8 d-flex align-items-center">
						<div>
							<h2 class="fw-light">
								<a href="{{ admin_url('users') }}" class="text-white" style="font-weight: bold;">
								{{ $countUsers }}
								</a>
							</h2>
							<h6 class="text-white">
								<a href="{{ admin_url('users') }}" class="text-white">
								{{ mb_ucfirst(trans('admin.users')) }}
								</a>
							</h6>
						</div>
					</div>
					<div class="col-4 d-flex align-items-center justify-content-end">
						<span class="text-white display-6">
							<a href="{{ admin_url('users') }}" class="text-white">
							<i class="far fa-user-circle"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@endif
	
	@if (isset($countCountries))
	<div class="col-lg-3 col-6">
		
		<div class="card bg-inverse text-white rounded shadow">
			<div class="card-body">
				<div class="row py-2">
					<div class="col-8 d-flex align-items-center">
						<div>
							<h2 class="fw-light">
								<a href="{{ admin_url('countries') }}" class="text-white" style="font-weight: bold;">
								{{ $countCountries }}
								</a>
							</h2>
							<h6 class="text-white">
								<a href="{{ admin_url('countries') }}" class="text-white">
								{{ trans('admin.Activated countries') }}
								</a>
								<span class="badge bg-light text-dark"
									  data-bs-placement="bottom"
									  data-bs-toggle="tooltip"
									  type="button"
									  title="{!! trans('admin.launch_your_website_for_several_countries') . ' ' . trans('admin.disabling_or_removing_a_country_info') !!}"
								>
									{{ trans('admin.Help') }} <i class="far fa-life-ring"></i>
								</span>
							</h6>
						</div>
					</div>
					<div class="col-4 d-flex align-items-center justify-content-end">
						<span class="text-white display-6">
							<a href="{{ admin_url('countries') }}" class="text-white">
							<i class="fa fa-globe"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@endif
</div>

@push('dashboard_styles')
@endpush

@push('dashboard_scripts')
@endpush
