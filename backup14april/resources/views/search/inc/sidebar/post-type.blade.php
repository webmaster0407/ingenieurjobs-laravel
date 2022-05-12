<?php
// Clear Filter Button
$clearFilterBtn = \App\Helpers\UrlGen::getTypeFilterClearLink($cat ?? null, $city ?? null);
?>
<?php
$inputPostType = [];
if (request()->filled('type')) {
	$types = request()->get('type');
	if (is_array($types)) {
		foreach ($types as $type) {
			$inputPostType[] = $type;
		}
	} else {
		$inputPostType[] = $types;
	}
}
?>
{{-- PostType --}}
<div class="list-filter">
	<h5 class="list-title">
		<span class="fw-bold">
			{{ t('Job Type') }}
		</span> {!! $clearFilterBtn !!}
	</h5>
	<div class="filter-content filter-employment-type">
		<ul id="blocPostType" class="browse-list list-unstyled">
			@if (isset($postTypes) and $postTypes->count() > 0)
				@foreach($postTypes as $key => $postType)
					<li class="form-check form-switch">
						<input type="checkbox"
							name="type[{{ $key }}]"
							id="employment_{{ $postType->id }}"
							value="{{ $postType->id }}"
							class="form-check-input emp emp-type"{{ (in_array($postType->id,  $inputPostType)) ? ' checked="checked"' : '' }}
						>
						<label class="form-check-label" for="employment_{{ $postType->id }}">{{ $postType->name }}</label>
					</li>
				@endforeach
			@endif
			<input type="hidden" id="postTypeQueryString" value="{{ \App\Helpers\Arr::query(request()->except(['page', 'type'])) }}">
		</ul>
	</div>
</div>
<div style="clear:both"></div>

@section('after_scripts')
	@parent
	
	<script>
		$(document).ready(function ()
		{
			$('#blocPostType input[type=checkbox]').click(function() {
				var postTypeQueryString = $('#postTypeQueryString').val();
				
				if (postTypeQueryString != '') {
					postTypeQueryString = postTypeQueryString + '&';
				}
				var tmpQString = '';
				$('#blocPostType input[type=checkbox]:checked').each(function(){
					if (tmpQString != '') {
						tmpQString = tmpQString + '&';
					}
					tmpQString = tmpQString + 'type[]=' + $(this).val();
				});
				postTypeQueryString = postTypeQueryString + tmpQString;
				
				var searchUrl = baseUrl + '?' + postTypeQueryString;
				redirect(searchUrl);
			});
		});
	</script>
@endsection