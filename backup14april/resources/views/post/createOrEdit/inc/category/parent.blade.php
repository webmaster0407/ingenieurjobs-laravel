{{--
Called in the ./select.blade.php file,
to be appended in the form (will replace the category field)
--}}
@if (isset($parent) && !empty($parent))
	@if (!empty($parent->parent))
		@includeFirst(
			[
				config('larapen.core.customizedViewPath') . 'post.createOrEdit.inc.category.parent',
				'post.createOrEdit.inc.category.parent'
			],
			['parent' => $parent->parent]
		)&nbsp;&raquo;&nbsp;
	@endif
	@if (isset($parent->children) && $parent->children->count() > 0)
		<a href="#browseCategories" data-bs-toggle="modal" class="cat-link" data-id="{{ $parent->id }}">
			{{ $parent->name }}
		</a>
	@else
		{{ $parent->name }}&nbsp;
		[ <a href="#browseCategories"
			 data-bs-toggle="modal"
			 class="cat-link"
			 data-id="{{ (isset($parent->parent) && !empty($parent->parent)) ? $parent->parent->id : 0 }}"
		><i class="far fa-edit"></i> {{ t('Edit') }}</a> ]
	@endif
@endif