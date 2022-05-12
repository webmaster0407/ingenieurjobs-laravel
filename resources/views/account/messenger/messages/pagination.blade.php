@if ($paginator->hasPages())
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <span class="text-muted">
            <a class="btn btn-sm btn-secondary rounded mb-3" href="{{ $paginator->nextPageUrl() }}" rel="next">
                {{ t('Load old messages') }}
            </a>
        </span>
    @endif
@endif
