<?php
$hideOnMobile = '';
if (isset($categoriesOptions, $categoriesOptions['hide_on_mobile']) and $categoriesOptions['hide_on_mobile'] == '1') {
	$hideOnMobile = ' hidden-sm';
}
?>
@if (isset($categoriesOptions) and isset($categoriesOptions['cat_display_type']))
	@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'], ['hideOnMobile' => $hideOnMobile])
	<div class="containerr{{ $hideOnMobile }}" id="cat-listing">
		<div class="container col-xl-12 content-box layout-section">
			<div class="row row-featured row-featured-category hii">
				<div class="col-xl-12 box-title no-border">
					<div class="inner">
						<h2>
							<span class="title-3">{{ t('Browse by') }} <span style="font-weight: bold;">{{ t('category') }}</span></span>
							
						</h2>
					</div>
					
				</div>
				
				@if ($categoriesOptions['cat_display_type'] == 'c_picture_list')
					
					@if (isset($categories) and $categories->count() > 0)
						@foreach($categories as $key => $cat)
							<div class="col-lg-2 col-md-3 col-sm-4 col-6 f-category">
								<a href="{{ \App\Helpers\UrlGen::category($cat) }}">
									<img src="{{ imgUrl($cat->picture, 'cat') }}" class="img-fluid" alt="{{ $cat->name }}">
									<h6>
										{{ $cat->name }}
										@if (config('settings.list.count_categories_listings'))
											&nbsp;({{ $countPostsByCat->get($cat->id)->total ?? 0 }})
										@endif
									</h6>
								</a>
							</div>
						@endforeach
					@endif
				
				@elseif ($categoriesOptions['cat_display_type'] == 'c_bigIcon_list')
					
					@if (isset($categories) and $categories->count() > 0)
						@foreach($categories as $key => $cat)
							<div class="col-lg-2 col-md-3 col-sm-4 col-6 f-category">
								<a href="{{ \App\Helpers\UrlGen::category($cat) }}">
									@if (in_array(config('settings.list.show_category_icon'), [2, 6, 7, 8]))
										<i class="{{ $cat->icon_class ?? 'fas fa-folder' }}"></i>
									@endif
									<h6>
										{{ $cat->name }}
										@if (config('settings.list.count_categories_listings'))
											&nbsp;({{ $countPostsByCat->get($cat->id)->total ?? 0 }})
										@endif
									</h6>
								</a>
							</div>
						@endforeach
					@endif
				
				@elseif (in_array($categoriesOptions['cat_display_type'], ['cc_normal_list', 'cc_normal_list_s']))
					
					<div style="clear: both;"></div>
					<?php $styled = ($categoriesOptions['cat_display_type'] == 'cc_normal_list_s') ? ' styled' : ''; ?>
					
					@if (isset($categories) and $categories->count() > 0)
						<div class="col-xl-12">
							<div class="list-categories-children{{ $styled }}">
								<div class="row px-3">
									@foreach ($categories as $key => $cols)
										<div class="col-md-4 col-sm-4 {{ (count($categories) == $key+1) ? 'last-column' : '' }}">
											@foreach ($cols as $iCat)
												
												<?php
													$randomId = '-' . substr(uniqid(rand(), true), 5, 5);
												?>
											
												<div class="cat-list">
													<h3 class="cat-title rounded">
														@if (in_array(config('settings.list.show_category_icon'), [2, 6, 7, 8]))
															<i class="{{ $iCat->icon_class ?? 'fas fa-check' }}"></i>&nbsp;
														@endif
														<a href="{{ \App\Helpers\UrlGen::category($iCat) }}">
															{{ $iCat->name }}
															@if (config('settings.list.count_categories_listings'))
																&nbsp;({{ $countPostsByCat->get($iCat->id)->total ?? 0 }})
															@endif
														</a>
														<span class="btn-cat-collapsed collapsed"
															  data-bs-toggle="collapse"
															  data-bs-target=".cat-id-{{ $iCat->id . $randomId }}"
															  aria-expanded="false"
														>
															<span class="icon-down-open-big"></span>
														</span>
													</h3>
													<ul class="cat-collapse collapse show cat-id-{{ $iCat->id . $randomId }} long-list-home">
														@if (isset($subCategories) and $subCategories->has($iCat->id))
															@foreach ($subCategories->get($iCat->id) as $iSubCat)
																<li>
																	<a href="{{ \App\Helpers\UrlGen::category($iSubCat) }}">
																		{{ $iSubCat->name }}
																	</a>
																	@if (config('settings.list.count_categories_listings'))
																		&nbsp;({{ $countPostsByCat->get($iSubCat->id)->total ?? 0 }})
																	@endif
																</li>
															@endforeach
														@endif
													</ul>
												</div>
											@endforeach
										</div>
									@endforeach
								</div>
							</div>
							
							<div style="clear: both;"></div>
						</div>
						
					@endif
				
				@else
					
					<?php
					$listTab = [
						'c_border_list' => 'list-border',
					];
					$rowPx = $categoriesOptions['cat_display_type'] ?? '';
					$catListClass = (isset($listTab[$categoriesOptions['cat_display_type']])) ? 'list ' . $listTab[$categoriesOptions['cat_display_type']] : 'list';
					?>
					@if (isset($categories) and $categories->count() > 0)
						<div class="col-xl-12">
							<div class="list-categories">
								<div class="row">
									@foreach ($categories as $key => $items)
										<ul class="cat-list {{ $catListClass }} col-md-4 {{ (count($categories) == $key+1) ? 'cat-list-border' : '' }}">
											@foreach ($items as $k => $cat)
												<li>
													@if (in_array(config('settings.list.show_category_icon'), [2, 6, 7, 8]))
														<i class="{{ $cat->icon_class ?? 'fas fa-check' }}"></i>&nbsp;
													@endif
													<a href="{{ \App\Helpers\UrlGen::category($cat) }}">
														{{ $cat->name }}
													</a>
													@if (config('settings.list.count_categories_listings'))
														&nbsp;({{ $countPostsByCat->get($cat->id)->total ?? 0 }})
													@endif
												</li>
											@endforeach
										</ul>
									@endforeach
								</div>
								<div class="view-more">
					<a href="{{ \App\Helpers\UrlGen::sitemap() }}" class="sell-your-item">
								{{ t('View more') }} <i class="fa fa-arrow-right" aria-hidden="true"></i>
							</a>
					</div>
							</div>
							
						</div>
						
					@endif
				
				@endif
		
			</div>
		</div>
	</div>
@endif

@section('before_scripts')
	@parent
	@if (isset($categoriesOptions) and isset($categoriesOptions['max_sub_cats']) and $categoriesOptions['max_sub_cats'] >= 0)
		<script>
			var maxSubCats = {{ (int)$categoriesOptions['max_sub_cats'] }};
		</script>
	@endif
@endsection
