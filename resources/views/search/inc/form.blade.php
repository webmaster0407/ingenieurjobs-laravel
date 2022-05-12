<?php
// Keywords
$keywords = rawurldecode(request()->get('q'));

// Category
$qCategory = (isset($cat) && !empty($cat)) ? $cat->id : request()->get('c');

// Location
if (isset($city) && !empty($city)) {
	$qLocationId = (isset($city->id)) ? $city->id : 0;
	$qLocation = $city->name;
    $qAdmin = request()->get('r');
} else {
	$qLocationId = request()->get('l');
    $qLocation = (request()->filled('r')) ? t('area') . rawurldecode(request()->get('r')) : request()->get('location');
    $qAdmin = request()->get('r');
}
?>
@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'])
<div class="container mb-2 serp-search-bar" id="search-form-outer">
	<form class="roo" id="search" name="search" action="{{ \App\Helpers\UrlGen::search() }}" method="GET">
		<div class="row m-0">
			<div class="col-12 px-1 py-sm-1 bg-primary rounded">
				<div class="row gx-1 gy-1">
					
					<div class="col-xl-3 col-md-3 col-sm-12 col-12">
						<select name="c" id="catSearch" class="form-control selecter">
							<option value="" {{ ($qCategory=='') ? 'selected="selected"' : '' }}>
								{{ t('all_categories') }}
							</option>
							@if (isset($rootCats) && $rootCats->count() > 0)
								@foreach ($rootCats as $itemCat)
									<option {{ ($qCategory == $itemCat->id) ? ' selected="selected"' : '' }} value="{{ $itemCat->id }}">
										{{ $itemCat->name }}
									</option>
								@endforeach
							@endif
						</select>
					</div>
					
					<div class="col-xl-4 col-md-4 col-sm-12 col-12">
						<input name="q" class="form-control keyword" type="text" placeholder="{{ t('what') }}" value="{{ $keywords }}">
					</div>
					
					<input type="hidden" id="rSearch" name="r" value="{{ $qAdmin }}">
					<input type="hidden" id="lSearch" name="l" value="{{ $qLocationId }}">
					
					<div class="col-xl-3 col-md-3 col-sm-12 col-12 search-col locationicon">
						<input type="text" id="locSearch" name="location" class="form-control locinput input-rel searchtag-input"
							   placeholder="{{ t('where') }}" value="{{ $qLocation }}" data-bs-placement="top"
							   data-bs-toggle="tooltipHover"
							   title="{{ t('Enter a city name OR a state name with the prefix', ['prefix' => t('area')]) . t('State Name') }}"
						>
					</div>
					
					<div class="col-xl-2 col-md-2 col-sm-12 col-12">
						<button class="btn btn-block btn-primary">
							<i class="fa fa-search"></i> <strong>{{ t('find') }}</strong>
						</button>
					</div>
				
				</div>
			</div>
		</div>
	</form>
</div>

@section('after_scripts')
	@parent
	<script>
		$(document).ready(function () {
			$('#locSearch').on('change', function () {
				if ($(this).val() == '') {
					$('#lSearch').val('');
					$('#rSearch').val('');
				}
			});
		});
	</script>
@endsection
