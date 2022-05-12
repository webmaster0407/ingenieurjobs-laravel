@if (config('settings.app.show_countries_charts'))
@php
	$postsDataArr = json_decode($postsPerCountry->data, true);
	$countPostsLabels = (isset($postsDataArr['labels']) && is_array($postsDataArr['labels']) && count($postsDataArr['labels']) > 1) ? count($postsDataArr['labels']) : 0;
@endphp

@if ($postsPerCountry->countCountries > 1)
	<div class="col-lg-6 col-md-12">
		<div class="card rounded shadow-sm">
			<div class="card-body">
				<div class="d-flex">
					<div>
						<h4 class="card-title mb-1 fw-bold">
							<span class="lstick d-inline-block align-middle"></span>{{ $postsPerCountry->title }}
						</h4>
					</div>
					<div class="ms-auto">
					
					</div>
				</div>
				<div class="position-relative chart-responsive">
					@if ($countPostsLabels > 0)
						<canvas id="pieChartPosts"></canvas>
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
		@if ($postsPerCountry->countCountries > 1)
		@if ($countPostsLabels > 0)
			@php
				$postsDisplayLegend = ($countPostsLabels <= 15) ? 'true' : 'false';
			@endphp
			
			var config1 = {
				type: 'pie', /* pie, doughnut */
				data: {!! $postsPerCountry->data !!},
				options: {
					responsive: true,
					legend: {
						display: {{ $postsDisplayLegend }},
						position: 'left'
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
				var ctx = document.getElementById('pieChartPosts').getContext('2d');
				window.myPostsDoughnut = new Chart(ctx, config1);
			});
		@endif
		@endif
	</script>
@endpush
@endif
