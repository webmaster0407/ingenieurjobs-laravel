{{-- Select2 CRUD filter --}}

<li filter-name="{{ $filter->name }}"
	filter-type="{{ $filter->type }}"
	class="nav-item dropdown {{ request()->get($filter->name)?'active':'' }}"
>
	<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		{{ $filter->label }} <span class="caret"></span>
	</a>
	<div class="dropdown-menu p-0">
		<div class="backpack-filter mb-0" style="min-width: 200px;">
			<select id="filter_{{ $filter->name }}"
					name="filter_{{ $filter->name }}"
					class="form-control input-sm select2"
					data-filter-type="select2"
					data-filter-name="{{ $filter->name }}"
					placeholder="{{ $filter->placeholder }}"
			>
				<option value="">-</option>
				@if (is_array($filter->values) && count($filter->values))
					@foreach ($filter->values as $key => $value)
						<option value="{{ $key }}"
								@if ($filter->isActive() && $filter->currentValue == $key)
								selected
								@endif
						>
							{{ $value }}
						</option>
					@endforeach
				@endif
			</select>
		</div>
	</div>
</li>

{{-- ########################################### --}}
{{-- Extra CSS and JS for this particular filter --}}

{{-- FILTERS EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

@push('crud_list_styles')
	{{-- include select2 css--}}
	<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<style>
		.form-inline .select2-container {
			display: inline-block;
		}
		
		.select2-drop-active {
			border: none;
		}
		
		.select2-container .select2-choices .select2-search-field input, .select2-container .select2-choice, .select2-container .select2-choices {
			border: none;
		}
		
		.select2-container-active .select2-choice {
			border: none;
			box-shadow: none;
		}
	</style>
@endpush


{{-- FILTERS EXTRA JS --}}
{{-- push things in the after_scripts section --}}

@push('crud_list_scripts')
	{{-- include select2 js--}}
	<script src="{{ asset('assets/plugins/select2/js/select2.js') }}"></script>
	<script>
		jQuery(document).ready(function ($) {
			// trigger select2 for each untriggered select2 box
			$('.select2').each(function (i, obj) {
				if (!$(obj).data("select2")) {
					$(obj).select2({
						allowClear: true,
						placeholder: "{{ $filter->placeholder ? $filter->placeholder : ' ' }}",
						closeOnSelect: true,
						theme: "bootstrap"
					});
				}
			});
		});
	</script>
	
	<script>
		jQuery(document).ready(function ($) {
			$("select[name=filter_{{ $filter->name }}]").change(function () {
				var value = $(this).val();
				var parameter = '{{ $filter->name }}';
				
				@if (!$xPanel->ajaxTable())
				// behaviour for normal table
				var currentUrl = normalizeAmpersand('{{ request()->fullUrl() }}');
				var newUrl = addOrUpdateUriParameter(currentUrl, parameter, value);
				
				// refresh the page to the newUrl
				newUrl = normalizeAmpersand(newUrl.toString());
				window.location.href = newUrl;
				@else
				// behaviour for ajax table
				var ajaxTable = $("#crudTable").DataTable();
				var currentUrl = ajaxTable.ajax.url();
				var newUrl = addOrUpdateUriParameter(currentUrl, parameter, value);
				
				// replace the datatables ajax url with newUrl and reload it
				newUrl = normalizeAmpersand(newUrl.toString());
				ajaxTable.ajax.url(newUrl).load();
				
				// mark this filter as active in the navbar-filters
				if (URI(newUrl).hasQuery('{{ $filter->name }}', true)) {
					$("li[filter-name={{ $filter->name }}]").removeClass('active').addClass('active');
				} else {
					$("li[filter-name={{ $filter->name }}]").trigger("filter:clear");
				}
				@endif
			});
			
			// when the dropdown is opened, autofocus on the select2
			$("li[filter-name={{ $filter->name }}]").on('shown.bs.dropdown', function () {
				$('#filter_{{ $filter->name }}').select2('open');
			});
			
			// clear filter event (used here and by the Remove all filters button)
			$("li[filter-name={{ $filter->name }}]").on('filter:clear', function (e) {
				// console.log('select2 filter cleared');
				$("li[filter-name={{ $filter->name }}]").removeClass('active');
				/* $("li[filter-name={{ $filter->name }}] .select2").select2("val", ""); */
				$('#filter_{{ $filter->name }}').val('');
			});
		});
	</script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}