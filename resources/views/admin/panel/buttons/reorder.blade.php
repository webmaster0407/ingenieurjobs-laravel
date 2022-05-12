@if ($xPanel->reorder)
	@if ($xPanel->hasAccess('reorder'))
	  <a href="{{ url($xPanel->route . '/reorder') }}" class="btn btn-secondary shadow ladda-button" data-style="zoom-in">
		  <span class="ladda-label">
              <i class="fas fa-arrows-alt" aria-hidden="true"></i> {{ trans('admin.reorder') }} {!! $xPanel->entityNamePlural !!}
          </span>
      </a>
	@endif
@endif