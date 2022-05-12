@if (config('settings.app.show_countries_charts'))
@php
	$usersDataArr = json_decode($usersPerCountry->data, true);
	$countUsersLabels = (isset($usersDataArr['labels']) && is_array($usersDataArr['labels']) && count($usersDataArr['labels']) > 1) ? count($usersDataArr['labels']) : 0;
@endphp

@if ($usersPerCountry->countCountries > 1)
	<div class="col-lg-6 col-md-12">
		<div class="card rounded shadow-sm">
			<div class="card-body">
				<div class="d-flex">
					<div>
						<h4 class="card-title mb-1 fw-bold">
							<span class="lstick d-inline-block align-middle"></span>{{ $usersPerCountry->title }}
						</h4>
					</div>
					<div class="ms-auto">
					
					</div>
				</div>
				<div class="position-relative chart-responsive">
					@if ($countUsersLabels > 0)
						<canvas id="pieChartUsers"></canvas>
					@else
						{!! trans('admin.No data found') !!}
					@endif
				</div>
			</div>
		</div>
	</div>
@endif

@push('dashboard_styles')
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>
@endpush

@push('dashboard_scripts')
    <script>
		@if ($usersPerCountry->countCountries > 1)
		@if ($countUsersLabels > 0)
			@php
				$usersDisplayLegend = ($countUsersLabels <= 15) ? 'true' : 'false';
			@endphp
			
			var config = {
				type: 'pie', /* pie, doughnut */
				data: {!! $usersPerCountry->data !!},
				options: {
					responsive: true,
					legend: {
						display: {{ $usersDisplayLegend }},
						position: 'right'
					},
					title: {
						display: false
					},
					animation: {
						animateScale: true,
						animateRotate: true
					}
				}
			};
			
			$(function () {
				var ctx = document.getElementById('pieChartUsers').getContext('2d');
				window.myUsersDoughnut = new Chart(ctx, config);
			});
		@endif
		@endif
    </script>
@endpush
@endif
