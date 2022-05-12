{{-- Example CRUD filter --}}

<li filter-name="{{ $filter->name }}"
	filter-type="{{ $filter->type }}"
	class="dropdown {{ request()->get($filter->name) ? 'active' : '' }}">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $filter->label }} <span class="caret"></span></a>
    <div class="dropdown-menu padding-10">

		{{-- dropdown content: everything you need is inside $filter --}}
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, inventore assumenda voluptate accusantium recusandae ipsam magni atque vel omnis est debitis, neque nam aspernatur ex quo fuga, nulla soluta. Rerum.

    </div>
  </li>


{{-- ########################################### --}}
{{-- Extra CSS and JS for this particular filter --}}

{{-- FILTERS EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

    {{-- @push('crud_list_styles')
        <!-- no css -->
    @endpush --}}


{{-- FILTERS EXTRA JS --}}
{{-- push things in the after_scripts section --}}


{{-- FILTER JAVASCRIPT CHECKLIST

- redirects to a new URL for standard DataTables
- replaces the search URL for ajax DataTables
- users have a way to clear this filter (and only this filter)
- filter:clear event on li[filter-name], which is called by the "Remove all filters" button, clears this filter;

END OF FILTER JAVSCRIPT CHECKLIST --}}

@push('crud_list_scripts')
    <script>
		jQuery(document).ready(function($) {
			$("li[filter-name={{ $filter->name }}] a").click(function(e) {
				e.preventDefault();

				var parameter = $(this).attr('parameter');

				@if (!$xPanel->ajaxTable())
					// behaviour for normal table
					var currentUrl = normalizeAmpersand("{{ request()->fullUrl() }}");

					if (URI(currentUrl).hasQuery(parameter)) {
						var newUrl = URI(currentUrl).removeQuery(parameter, true);
					} else {
						var newUrl = URI(currentUrl).addQuery(parameter, true);
					}

					// refresh the page to the newUrl
			    	newUrl = normalizeAmpersand(newUrl.toString());
			    	window.location.href = newUrl.toString();
			    @else
			    	// behaviour for ajax table
					var ajaxTable = $("#crudTable").DataTable();
					var currentUrl = ajaxTable.ajax.url();

					if (URI(currentUrl).hasQuery(parameter)) {
						var newUrl = URI(currentUrl).removeQuery(parameter, true);
					} else {
						var newUrl = URI(currentUrl).addQuery(parameter, true);
					}

					// replace the datatables ajax url with newUrl and reload it
					newUrl = normalizeAmpersand(newUrl.toString());
					ajaxTable.ajax.url(newUrl).load();

					// mark this filter as active in the navbar-filters
					if (URI(newUrl).hasQuery('{{ $filter->name }}', true)) {
						$("li[filter-name={{ $filter->name }}]").removeClass('active').addClass('active');
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
			});
		});
	</script>
@endpush

{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}