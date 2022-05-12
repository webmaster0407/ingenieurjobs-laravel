@if ($paginator->hasPages())
    <div class="btn-group btn-group-sm">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button type="button" class="btn btn-secondary" aria-disabled="true">
                <span class="fas fa-arrow-left"></span>
            </button>
        @else
            <a class="btn btn-secondary" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <span class="fas fa-arrow-left"></span>
            </a>
        @endif
    
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-secondary" href="{{ $paginator->nextPageUrl() }}" rel="next">
                <span class="fas fa-arrow-right"></span>
            </a>
        @else
            <button type="button" class="btn btn-secondary" aria-disabled="true">
                <span class="fas fa-arrow-right"></span>
            </button>
        @endif
    </div>
@endif
