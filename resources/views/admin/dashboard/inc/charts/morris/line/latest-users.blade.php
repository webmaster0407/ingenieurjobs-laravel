<div class="col-lg-6 col-md-12">
	<div class="card rounded shadow-sm">
		<div class="card-body">
			<div class="d-flex">
				<div>
					<h4 class="card-title fw-bold">
						<span class="lstick d-inline-block align-middle"></span>{{ $latestUsersChart->title }}
					</h4>
				</div>
				<div class="ms-auto">
					<ul class="list-inline mb-0 ms-auto text-end">
						<li class="list-inline-item">
							<h5><i class="fa fa-circle" style="color: #398bf7;"></i> {{ trans('admin.Activated') }}</h5>
						</li>
						<li class="list-inline-item">
							<h5><i class="fa fa-circle" style="color: #dddddd;"></i> {{ trans('admin.Unactivated') }}</h5>
						</li>
					</ul>
				</div>
			</div>
			<div id="lineChartUsers" class="position-relative" style="height:300px;"></div>
		</div>
	</div>
</div>

@push('dashboard_styles')
@endpush

@push('dashboard_scripts')
    <script>
        $(function () {
            "use strict";
			
			/* Users Chart */
            var lineChartUsers = new Morris.Line({
                element: 'lineChartUsers',
                resize: true,
                data: {!! $latestUsersChart->data !!},
                xkey: 'y',
                ykeys: ['activated', 'unactivated'],
                labels: ['{{ trans('admin.Activated') }}', '{{ trans('admin.Unactivated') }}'],
				gridLineColor: '#e0e0e0',
				lineColors: ['#398bf7', '#dddddd'],
                hideHover: 'auto',
                parseTime: false
            });
			
			let alreadyRedrawn = false;
			let haveToResizeCharts = false;
			$(window).resize(function() {
				haveToResizeCharts = true;
			});
			setInterval(function() {
				if (lineChartUsers) {
					if (!alreadyRedrawn) {
						lineChartUsers.redraw();
						alreadyRedrawn = true;
					}
					if (haveToResizeCharts) {
						lineChartUsers.redraw();
						haveToResizeCharts = false;
					}
				}
			}, 200);
			
        });
    </script>
@endpush
