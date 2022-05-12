{{-- Date Range CRUD filter --}}

<li filter-name="{{ $filter->name }}"
	filter-type="{{ $filter->type }}"
	class="nav-item dropdown {{ request()->get($filter->name)?'active':'' }}">
	<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		{{ $filter->label }} <span class="caret"></span>
	</a>
	<div class="dropdown-menu p-0">
		<div class="form-group backpack-filter mb-0">
			<div class="input-group date">
				<span class="input-group-text"><i class="fa fa-calendar"></i></span>
				<input class="form-control float-end"
					   id="datepicker-{{ Str::slug($filter->name) }}"
					   type="text"
					   @if ($filter->currentValue)
					   value="{{ $filter->currentValue }}"
						@endif
				>
				<span class="input-group-text datepicker{{ Str::slug($filter->name) }}-clear-button">
					<a href=""><i class="fa fa-times"></i></a>
				</span>
			</div>
		</div>
	</div>
</li>

{{-- ########################################### --}}
{{-- Extra CSS and JS for this particular filter --}}

{{-- FILTERS EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

@push('crud_list_styles')
	<link href="{{ asset('assets/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
	<style>
		.input-group.date {
			width: 320px;
			max-width: 100%;
		}
	</style>
@endpush


{{-- FILTERS EXTRA JS --}}
{{-- push things in the after_scripts section --}}

@push('crud_list_scripts')
	{{-- include select2 js--}}
	<script type="text/javascript" src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
	<script>
		jQuery(document).ready(function($) {
			var dateInput = $('#datepicker-{{ Str::slug($filter->name) }}').datepicker({
					autoclose: true,
					format: 'yyyy-mm-dd',
					todayHighlight: true
				})
				.on('changeDate', function(e) {
					var d = new Date(e.date);
					// console.log(e);
					// console.log(d);
					if (isNaN(d.getFullYear())) {
						var value = '';
					} else {
						var value = d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" + ("0" + d.getDate()).slice(-2);
					}
					
					// console.log(value);
					
					var parameter = '{{ $filter->name }}';
					
					// behaviour for ajax table
					var ajaxTable = $('#crudTable').DataTable();
					var currentUrl = ajaxTable.ajax.url();
					var newUrl = addOrUpdateUriParameter(currentUrl, parameter, value);
					
					// replace the datatables ajax url with newUrl and reload it
					newUrl = normalizeAmpersand(newUrl.toString());
					ajaxTable.ajax.url(newUrl).load();
					
					// mark this filter as active in the navbar-filters
					if (URI(newUrl).hasQuery('{{ $filter->name }}', true)) {
						$('li[filter-name={{ $filter->name }}]').removeClass('active').addClass('active');
					}
					else
					{
						$('li[filter-name={{ $filter->name }}]').trigger('filter:clear');
					}
				});
			$('li[filter-name={{ Str::slug($filter->name) }}]').on('filter:clear', function(e) {
				// console.log('date filter cleared');
				$('li[filter-name={{ $filter->name }}]').removeClass('active');
				$('#datepicker-{{ Str::slug($filter->name) }}').datepicker('clearDates');
			});
			
			// datepicker clear button
			$(".datepicker-{{ Str::slug($filter->name) }}-clear-button").click(function(e) {
				e.preventDefault();
				
				$('li[filter-name={{ Str::slug($filter->name) }}]').trigger('filter:clear');
				$('#datepicker-{{ Str::slug($filter->name) }}').trigger('changeDate');
			})
		});
	</script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}