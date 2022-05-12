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
			<div id="barChartUsers" class="position-relative" style="height:300px;"></div>
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
            var barChartUsers = new Morris.Bar({
                element: 'barChartUsers',
				barGap: 0,
                resize: true,
                data: {!! $latestUsersChart->data !!},
                xkey: 'y',
                ykeys: ['activated', 'unactivated'],
                labels: ['{{ trans('admin.Activated') }}', '{{ trans('admin.Unactivated') }}'],
				gridLineColor: '#e0e0e0',
				barColors: ['#398bf7', '#dddddd'],
                hideHover: 'auto',
                parseTime: false
            });
			
			let alreadyRedrawn = false;
			let haveToResizeCharts = false;
			$(window).resize(function() {
				haveToResizeCharts = true;
			});
			setInterval(function() {
				if (barChartUsers) {
					if (!alreadyRedrawn) {
						barChartUsers.redraw();
						alreadyRedrawn = true;
					}
					if (haveToResizeCharts) {
						barChartUsers.redraw();
						haveToResizeCharts = false;
					}
				}
			}, 200);
			
        });
    </script>
@endpush
