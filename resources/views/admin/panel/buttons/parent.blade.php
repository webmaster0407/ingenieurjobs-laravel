@if ($xPanel->hasAccess('parent'))
	<a href="{{ url($xPanel->parentRoute) }}" class="btn btn-success shadow ladda-button" data-style="zoom-in">
		<span class="ladda-label">
            <i class="fas fa-reply"></i> {{ trans('admin.go_to') }} {!! $xPanel->parentEntityNamePlural !!}
        </span>
    </a>
@endif