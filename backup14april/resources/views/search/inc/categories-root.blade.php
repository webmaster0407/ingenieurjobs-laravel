@if (isset($cats) && $cats->count() > 0)
	<div class="row row-cols-lg-4 row-cols-md-3 p-2 g-2" id="categoryBadge">
		@foreach ($cats as $iCat)
			<div class="col">
				@if (isset($cat) && !empty($cat) && $iCat->id == $cat->id)
					<span class="fw-bold">
						@if (in_array(config('settings.list.show_category_icon'), [3, 5, 7, 8]))
							<i class="{{ (isset($iCat->icon_class) && !empty($iCat->icon_class)) ? $iCat->icon_class : 'fas fa-folder' }}"></i>
						@endif
						{{ $iCat->name }}
					</span>
				@else
					<a href="{{ \App\Helpers\UrlGen::category($iCat, null, $city ?? null) }}">
						@if (in_array(config('settings.list.show_category_icon'), [3, 5, 7, 8]))
							<i class="{{ (isset($iCat->icon_class) && !empty($iCat->icon_class)) ? $iCat->icon_class : 'fas fa-folder' }}"></i>
						@endif
						{{ $iCat->name }}
					</a>
				@endif
			</div>
		@endforeach
	</div>
@endif