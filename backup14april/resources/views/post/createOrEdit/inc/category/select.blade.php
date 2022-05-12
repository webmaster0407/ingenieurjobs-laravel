@if (isset($hasChildren) && !$hasChildren)
	
	{{-- To append in the form (will replace the category field) --}}
	
	@if (isset($category) && !empty($category))
		{{--
		@if (!empty($category->parent))
			@includeFirst(
				[
					config('larapen.core.customizedViewPath') . 'post.createOrEdit.inc.category.parent',
					'post.createOrEdit.inc.category.parent'
				],
				['parent' => $category->parent]
			)&nbsp;&raquo;&nbsp;
		@endif
		--}}
		@if (isset($category->children) && $category->children->count() > 0)
			<a href="#browseCategories" data-bs-toggle="modal" class="cat-link" data-id="{{ $category->id }}">
				{{ $category->name }}
			</a>
		@else
			{{ $category->name }}&nbsp;
			[ <a href="#browseCategories"
				 data-bs-toggle="modal"
				 class="cat-link"
				 data-id="{{ (isset($category->parent) && !empty($category->parent)) ? $category->parent->id : 0 }}"
			><i class="far fa-edit"></i> {{ t('Edit') }}</a> ]
		@endif
	@else
		<a href="#browseCategories" data-bs-toggle="modal" class="cat-link" data-id="0">
			{{ t('select_a_category') }}
		</a>
	@endif
	
@else
	
	{{-- To append in the modal (will replace the modal content) --}}

	@if (isset($category) && !empty($category))
		<p>
			<a href="#" class="btn btn-sm btn-success cat-link" data-id="{{ $category->parent_id }}">
				<i class="fas fa-reply"></i> {{ t('go_to_parent_categories') }}
			</a>&nbsp;
			<strong>{{ $category->name }}</strong>
		</p>
		<div style="clear:both"></div>
	@endif
	
	@if (isset($categories) && $categories->count() > 0)
		@if (isset($categoriesOptions) && isset($categoriesOptions['cat_display_type']))
			<div class="col-xl-12 content-box layout-section">
				<div class="row row-featured row-featured-category">
					@if ($categoriesOptions['cat_display_type'] == 'c_picture_list')
						
						@foreach($categories as $key => $cat)
							<?php
							$_hasChildren = (isset($cat->children) && $cat->children->count() > 0) ? 1 : 0;
							$_parentId = (isset($cat->parent) && !empty($cat->parent)) ? $cat->parent->id : 0;
							?>
							<div class="col-lg-2 col-md-3 col-sm-4 col-6 f-category">
								<a href="#" class="cat-link"
								   data-id="{{ $cat->id }}"
								   data-parent-id="{{ $_parentId }}"
								   data-has-children="{{ $_hasChildren }}"
								>
									<img src="{{ imgUrl($cat->picture, 'cat') }}" class="lazyload img-fluid" alt="{{ $cat->name }}">
									<h6>
										{{ $cat->name }}
									</h6>
								</a>
							</div>
						@endforeach
					
					@elseif ($categoriesOptions['cat_display_type'] == 'c_bigIcon_list')
						
						@foreach($categories as $key => $cat)
							<?php
							$_hasChildren = (isset($cat->children) && $cat->children->count() > 0) ? 1 : 0;
							$_parentId = (isset($cat->parent) && !empty($cat->parent)) ? $cat->parent->id : 0;
							?>
							<div class="col-lg-2 col-md-3 col-sm-4 col-6 f-category">
								<a href="#" class="cat-link"
								   data-id="{{ $cat->id }}"
								   data-parent-id="{{ $_parentId }}"
								   data-has-children="{{ $_hasChildren }}"
								>
									@if (in_array(config('settings.list.show_category_icon'), [2, 6, 7, 8]))
										<i class="{{ $cat->icon_class ?? 'fas fa-folder' }}"></i>
									@endif
									<h6>
										{{ $cat->name }}
									</h6>
								</a>
							</div>
						@endforeach
						
					@elseif (in_array($categoriesOptions['cat_display_type'], ['cc_normal_list', 'cc_normal_list_s']))
						
						<div style="clear: both;"></div>
						<?php $styled = ($categoriesOptions['cat_display_type'] == 'cc_normal_list_s') ? ' styled' : ''; ?>
						
						<div class="col-xl-12">
							<div class="list-categories-children{{ $styled }}">
								<div class="row">
									@foreach ($categories as $key => $cols)
										<div class="col-md-4 col-sm-4 {{ (count($categories) == $key+1) ? 'last-column' : '' }}">
											@foreach ($cols as $iCat)
												
												<?php
												$randomId = '-' . substr(uniqid(rand(), true), 5, 5);
												$_hasChildren = (isset($iCat->children) && $iCat->children->count() > 0) ? 1 : 0;
												$_parentId = (isset($iCat->parent) && !empty($iCat->parent)) ? $iCat->parent->id : 0;
												?>
												
												<div class="cat-list">
													<h3 class="cat-title rounded">
														@if (in_array(config('settings.list.show_category_icon'), [2, 6, 7, 8]))
															<i class="{{ $iCat->icon_class ?? 'fas fa-check' }}"></i>&nbsp;
														@endif
														<a href="#" class="cat-link"
														   data-id="{{ $iCat->id }}"
														   data-parent-id="{{ $_parentId }}"
														   data-has-children="{{ $_hasChildren }}"
														>
															{{ $iCat->name }}
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
														@if (isset($subCategories) && $subCategories->has($iCat->id))
															@foreach ($subCategories->get($iCat->id) as $iSubCat)
																<?php
																$_hasChildren2 = (isset($iSubCat->children) && $iSubCat->children->count() > 0) ? 1 : 0;
																$_parentId2 = (isset($iSubCat->parent) && !empty($iSubCat->parent)) ? $iSubCat->parent->id : 0;
																?>
																<li>
																	<a href="#" class="cat-link"
																	   data-id="{{ $iSubCat->id }}"
																	   data-parent-id="{{ $_parentId2 }}"
																	   data-has-children="{{ $_hasChildren2 }}"
																	>
																		{{ $iSubCat->name }}
																	</a>
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
					
					@else
						
						<?php
						$listTab = [
							'c_border_list' => 'list-border',
						];
						$catListClass = (isset($listTab[$categoriesOptions['cat_display_type']])) ? 'list ' . $listTab[$categoriesOptions['cat_display_type']] : 'list';
						?>
						<div class="col-xl-12">
							<div class="list-categories">
								<div class="row">
									@foreach ($categories as $key => $items)
										<ul class="cat-list {{ $catListClass }} col-md-4 {{ (count($categories) == $key+1) ? 'cat-list-border' : '' }}">
											@foreach ($items as $k => $cat)
												<?php
												$_hasChildren = (isset($cat->children) && $cat->children->count() > 0) ? 1 : 0;
												$_parentId = (isset($cat->parent) && !empty($cat->parent)) ? $cat->parent->id : 0;
												?>
												<li>
													@if (in_array(config('settings.list.show_category_icon'), [2, 6, 7, 8]))
														<i class="{{ $cat->icon_class ?? 'fas fa-check' }}"></i>&nbsp;
													@endif
													<a href="#" class="cat-link"
													   data-id="{{ $cat->id }}"
													   data-parent-id="{{ $_parentId }}"
													   data-has-children="{{ $_hasChildren }}"
													>
														{{ $cat->name }}
													</a>
												</li>
											@endforeach
										</ul>
									@endforeach
								</div>
							</div>
						</div>
						
					@endif
				
				</div>
			</div>
		@endif
	@else
		{{ t('no_categories_found') }}...
	@endif
@endif

@section('before_scripts')
	@parent
	@if (isset($categoriesOptions) && isset($categoriesOptions['max_sub_cats']) && $categoriesOptions['max_sub_cats'] >= 0)
		<script>
			var maxSubCats = {{ (int)$categoriesOptions['max_sub_cats'] }};
		</script>
	@endif
@endsection
