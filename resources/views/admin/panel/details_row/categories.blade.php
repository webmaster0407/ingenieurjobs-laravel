<div class="mt-10 mb-10 ps-10 pe-10 pt-10 pb-10 bg-white">
    <div class="flex-row d-flex justify-content-center">
        <div class="col-lg-11 col-md-12">
    
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.ID') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.name') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->name }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.Slug') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->slug }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.Description') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ (!empty($entry->description)) ? $entry->description : '--' }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.Picture') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    <img src="{{ imgUrl($entry->picture, 'cat') }}" class="img-fluid" alt="{{ $entry->name }}">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.Icon') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! (!empty($entry->icon_class)) ? $entry->icon_class : '--' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.for_permanent_listings') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! ($entry->is_for_permanent == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder">{{ trans('admin.active') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2">
                    {!! ($entry->active == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            
        </div>
    </div>
</div>
