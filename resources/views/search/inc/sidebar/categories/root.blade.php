{{-- Category --}}
@if (isset($cats) && $cats->count() > 0)
<div id="catsList">
	<div class="block-title has-arrow sidebar-header">
		<h5 class="list-title">
			<span class="fw-bold">
				{{ t('all_categories') }}
			</span> {!! $clearFilterBtn ?? '' !!}
		</h5>
	</div>
	<div class="block-content list-filter categories-list">
		<ul class="list-unstyled">
			@foreach ($cats as $iCat)
				<li>
					@if (isset($cat) && !empty($cat) && $iCat->id == $cat->id)
						<strong>
							<a href="{{ \App\Helpers\UrlGen::category($iCat, null, $city ?? null) }}" title="{{ $iCat->name }}">
								<span class="title">
									@if (in_array(config('settings.list.show_category_icon'), [4, 5, 6, 8]))
										<i class="{{ $iCat->icon_class ?? 'fas fa-folder' }}"></i>
									@endif
									{{ $iCat->name }}
								</span>
								@if (config('settings.list.count_categories_listings'))
									<span class="count">&nbsp;{{ $countPostsByCat->get($iCat->id)->total ?? 0 }}</span>
								@endif
							</a>
						</strong>
					@else
						<a href="{{ \App\Helpers\UrlGen::category($iCat, null, $city ?? null) }}" title="{{ $iCat->name }}">
							<span class="title">
								@if (in_array(config('settings.list.show_category_icon'), [4, 5, 6, 8]))
									<i class="{{ $iCat->icon_class ?? 'fas fa-folder' }}"></i>
								@endif
								{{ $iCat->name }}
							</span>
							@if (config('settings.list.count_categories_listings'))
								<span class="count">&nbsp;{{ $countPostsByCat->get($iCat->id)->total ?? 0 }}</span>
							@endif
						</a>
					@endif
				</li>
			@endforeach
		</ul>
	</div>
</div>
@endif