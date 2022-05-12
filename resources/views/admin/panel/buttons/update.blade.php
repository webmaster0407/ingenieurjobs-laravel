@if ($xPanel->hasAccess('update'))
	@if (!$xPanel->model->translationEnabled())
		
		{{-- Single edit button --}}
		<a href="{{ url($xPanel->route . '/' . $entry->getKey() . '/edit') }}" class="btn btn-xs btn-primary">
			<i class="far fa-edit"></i> {{ trans('admin.edit') }}
		</a>
	
	@else
		
		{{-- Edit button group --}}
		<div class="btn-group">
			<a href="{{ url($xPanel->route . '/' . $entry->getKey() . '/edit') }}" class="btn btn-xs btn-primary">
				<i class="far fa-edit"></i> {{ trans('admin.edit') }}
			</a>
			<a class="btn btn-xs btn-primary dropdown-toggle dropdown-toggle-split text-white" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="sr-only">Toggle</span>
			</a>
			<ul class="dropdown-menu dropdown-menu-end">
				<li class="dropdown-header">{{ trans('admin.edit_translations') }}:</li>
				@foreach ($xPanel->model->getAvailableLocales() as $locale => $localeName)
					<a class="dropdown-item ps-3 pe-3 pt-1 pb-1" href="{{ url($xPanel->route . '/' . $entry->getKey() . '/edit') }}?locale={{ $locale }}">
						{{ $localeName }}
					</a>
				@endforeach
			</ul>
		</div>
	
	@endif
@endif