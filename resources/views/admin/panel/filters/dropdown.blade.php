{{-- Dropdown CRUD filter --}}

<li filter-name="{{ $filter->name }}"
	filter-type="{{ $filter->type }}"
	class="nav-item dropdown {{ request()->get($filter->name)?'active':'' }}">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		{{ $filter->label }} <span class="caret"></span>
	</a>
    <ul class="dropdown-menu">
		<a class="dropdown-item" parameter="{{ $filter->name }}" dropdownkey="" href="">-</a>
		<div role="separator" class="dropdown-divider"></div>
		@if (is_array($filter->values) && count($filter->values))
			@foreach($filter->values as $key => $value)
				@if ($key == 'dropdown-separator')
					<div role="separator" class="dropdown-divider"></div>
				@else
					<li class="dropdown-item {{ ($filter->isActive() && $filter->currentValue == $key)?'active':'' }}">
						<a  parameter="{{ $filter->name }}" href="" key="{{ $key }}">{{ $value }}</a>
					</li>
				@endif
			@endforeach
		@endif
    </ul>
  </li>


{{-- ########################################### --}}
{{-- Extra CSS and JS for this particular filter --}}

{{-- FILTERS EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

@push('crud_list_styles')
	<style>
		.navbar-filters .dropdown-menu {
			max-height: 320px;
			overflow-y: auto;
		}
	</style>
@endpush


{{-- FILTERS EXTRA JS --}}
{{-- push things in the after_scripts section --}}

@push('crud_list_scripts')
    <script>
		jQuery(document).ready(function($) {
			$("li.dropdown[filter-name={{ $filter->name }}] .dropdown-menu li a").click(function(e) {
				e.preventDefault();

				var value = $(this).attr('key');
				var parameter = $(this).attr('parameter');

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
					// mark dropdown items active accordingly
					if (URI(newUrl).hasQuery('{{ $filter->name }}', true)) {
						$("li[filter-name={{ $filter->name }}]").removeClass('active').addClass('active');
						$("li[filter-name={{ $filter->name }}] .dropdown-menu li").removeClass('active');
						$(this).parent().addClass('active');
					}
					else
					{
						$("li[filter-name={{ $filter->name }}]").trigger("filter:clear");
					}
			    @endif
			});

			// clear filter event (used here and by the Remove all filters button)
			$("li[filter-name={{ $filter->name }}]").on('filter:clear', function(e) {
				// console.log('dropdown filter cleared');
				$("li[filter-name={{ $filter->name }}]").removeClass('active');
				$("li[filter-name={{ $filter->name }}] .dropdown-menu li").removeClass('active');
			});
		});
	</script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}