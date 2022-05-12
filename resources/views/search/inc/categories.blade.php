@if (
	(isset($cat) && !empty($cat))
	|| (isset($cats) && $cats->count() > 0)
)
	<div class="container mb-3 hide-xs">
		@if (isset($cat) && !empty($cat))
			@if (isset($cat->children) && $cat->children->count() > 0)
				<div class="row row-cols-lg-4 row-cols-md-3 p-2 g-2" id="categoryBadge">
					@foreach ($cat->children as $iSubCat)
						<div class="col">
							<a href="{{ \App\Helpers\UrlGen::category($iSubCat, null, $city ?? null) }}">
								@if (in_array(config('settings.list.show_category_icon'), [3, 5, 7, 8]))
									<i class="{{ $iSubCat->icon_class ?? 'fas fa-folder' }}"></i>
								@endif
								{{ $iSubCat->name }}
							</a>
						</div>
					@endforeach
				</div>
			@else
				@if (isset($cat->parent, $cat->parent->children) && $cat->parent->children->count() > 0)
					<div class="row row-cols-lg-4 row-cols-md-3 p-2 g-2" id="categoryBadge">
						@foreach ($cat->parent->children as $iSubCat)
							<div class="col">
								@if ($iSubCat->id == $cat->id)
									<span class="fw-bold">
										@if (in_array(config('settings.list.show_category_icon'), [3, 5, 7, 8]))
											<i class="{{ (isset($iSubCat->icon_class) && !empty($iSubCat->icon_class)) ? $iSubCat->icon_class : 'fas fa-folder' }}"></i>
										@endif
										{{ $iSubCat->name }}
									</span>
								@else
									<a href="{{ \App\Helpers\UrlGen::category($iSubCat, null, $city ?? null) }}">
										@if (in_array(config('settings.list.show_category_icon'), [3, 5, 7, 8]))
											<i class="{{ (isset($iSubCat->icon_class) && !empty($iSubCat->icon_class)) ? $iSubCat->icon_class : 'fas fa-folder' }}"></i>
										@endif
										{{ $iSubCat->name }}
									</a>
								@endif
							</div>
						@endforeach
					</div>
				@else
					
					@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.categories-root', 'search.inc.categories-root'])
				
				@endif
			@endif
		@else
			
			@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.categories-root', 'search.inc.categories-root'])
		
		@endif
	</div>
@endif