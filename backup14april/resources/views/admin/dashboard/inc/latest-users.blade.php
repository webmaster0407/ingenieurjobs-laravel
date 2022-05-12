<div class="col-lg-6 col-md-12">
	<div class="card border-top border-primary shadow-sm">
		<div class="card-body">
			
			<div class="d-md-flex">
				<div>
					<h4 class="card-title fw-bold">
						<span class="lstick d-inline-block align-middle"></span>{{ trans('admin.Latest Users') }}
					</h4>
				</div>
				<div class="ms-auto">
					<a href="{{ admin_url('users') }}" class="btn btn-sm btn-primary rounded shadow float-end">
						{{ trans('admin.View All Users') }}
					</a>
				</div>
			</div>
			
			<div class="table-responsive mt-md-3 mt-5 no-wrap">
				<table class="table v-middle mb-0">
					<thead>
					<tr>
						<th class="border-0">{{ trans('admin.ID') }}</th>
						<th class="border-0">{{ trans('admin.Name') }}</th>
						<th class="border-0">{{ mb_ucfirst(trans('admin.Country')) }}</th>
						<th class="border-0">{{ trans('admin.Status') }}</th>
						<th class="border-0">{{ trans('admin.Date') }}</th>
					</tr>
					</thead>
					<tbody>
					@if ($latestUsers->count() > 0)
						@foreach($latestUsers as $user)
							<tr>
								<td class="td-nowrap"><a href="{{ admin_url('users/' . $user->id . '/edit') }}">{{ $user->id }}</a></td>
								<td>
									<?php
										$url = admin_url('users/' . $user->id . '/edit');
										echo linkStrLimit($url, $user->name, 35);
									?>
								</td>
								<td class="td-nowrap">{!! getCountryFlag($user) !!}</td>
								<td class="td-nowrap">
									@if (isVerifiedUser($user))
										<span class="badge bg-success">{{ trans('admin.Activated') }}</span>
									@else
										<span class="badge bg-warning text-white">{{ trans('admin.Unactivated') }}</span>
									@endif
								</td>
								<td class="td-nowrap">
									<div class="sparkbar" data-color="#00a65a" data-height="20">
										{{ \App\Helpers\Date::format($user->created_at, 'datetime') }}
									</div>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								{{ trans('admin.No users found') }}
							</td>
						</tr>
					@endif
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>

@push('dashboard_styles')
	<style>
		.td-nowrap {
			width: 10px;
			white-space: nowrap;
		}
	</style>
@endpush

@push('dashboard_scripts')
@endpush
