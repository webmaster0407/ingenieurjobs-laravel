<nav class="navbar navbar-expand-lg navbar-filters mb-0 py-1 px-3">
	{{-- Brand and toggle get grouped for better mobile display --}}
	<a class="nav-item d-none d-lg-block">
		<span class="fas fa-filter"></span>
	</a>
	<button class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#bs-example-navbar-collapse-1"
			aria-controls="bs-example-navbar-collapse-1"
			aria-expanded="false"
			aria-label="Toggle filters"
	>
		<i class="fas fa-filter"></i> {{ trans('admin.Filters') }}
	</button>
	
	{{-- Collect the nav links, forms, and other content for toggling --}}
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			{{-- THE ACTUAL FILTERS --}}
			@foreach ($xPanel->filters as $filter)
				@include($filter->view)
			@endforeach
			<li>
				<a href="#" id="remove_filters_button" class="nav-link {{ count(request()->input()) != 0 ? '' : 'invisible' }}">
					<i class="fa fa-eraser"></i> {{ trans('admin.Remove filters') }}
				</a>
			</li>
		</ul>
	</div>
</nav>


@push('crud_list_styles')
	<style>
		.navbar-filters .nav > li > a {
			position: relative;
			display: block;
			padding: 10px 15px;
		}
		
		.backpack-filter label {
			color: #868686;
			font-weight: 600;
			text-transform: uppercase;
		}
		
		.navbar-filters {
			min-height: 25px;
			border-radius: 0;
			margin-bottom: 10px;
			background: #f9f9f9;
			border-color: #f4f4f4;
		}
		
		.navbar-filters .navbar-collapse {
			padding: 0;
		}
		
		.navbar-filters .navbar-toggle {
			padding: 10px 15px;
			border-radius: 0;
		}
		
		.navbar-filters .navbar-brand {
			height: 25px;
			padding: 5px 15px;
			font-size: 14px;
			text-transform: uppercase;
		}
		
		@media (min-width: 768px) {
			.navbar-filters .navbar-nav > li > a {
				padding-top: 5px;
				padding-bottom: 5px;
			}
		}
		
		@media (max-width: 768px) {
			.navbar-filters .navbar-nav {
				/*margin: 0;*/
			}
		}
	</style>
@endpush

@push('crud_list_scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/URI.js/1.18.2/URI.min.js" type="text/javascript"></script>
	<script>
		function addOrUpdateUriParameter(uri, parameter, value) {
			var newUrl = normalizeAmpersand(uri);
			
			newUrl = URI(newUrl).normalizeQuery();
			
			if (newUrl.hasQuery(parameter)) {
				newUrl.removeQuery(parameter);
			}
			
			if (value != '') {
				newUrl = newUrl.addQuery(parameter, value);
			}
			
			return newUrl.toString();
		}
		
		function normalizeAmpersand(string) {
			return string.replace(/&amp;/g, "&").replace(/amp%3B/g, "");
		}
		
		// button to remove all filters
		jQuery(document).ready(function ($) {
			$("#remove_filters_button").click(function (e) {
				e.preventDefault();
				
				@if (!$xPanel->ajaxTable())
					// behaviour for normal table
					var cleanUrl = '{{ request()->url() }}';
					
					// refresh the page to the cleanUrl
					window.location.href = cleanUrl;
				@else
					// behaviour for ajax table
					var newUrl = '{{ url($xPanel->route . '/search') }}';
					var ajaxTable = $("#crudTable").DataTable();
					
					// replace the datatables ajax url with newUrl and reload it
					ajaxTable.ajax.url(newUrl).load();
					
					// clear all filters
					$(".navbar-filters li[filter-name]").trigger('filter:clear');
				@endif
			});
		});
	</script>
@endpush