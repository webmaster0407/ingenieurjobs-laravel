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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.gender') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ (!empty($entry->gender)) ? $entry->gender->name : '--' }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.name') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->name }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ t('Photo') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    <img src="{{ $entry->photo_url }}" alt="{{ $entry->name }}">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.phone') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->phone }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.Verified Phone') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! ($entry->verified_phone == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.phone') }} ({{ t('Hide') }})</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! ($entry->phone_hidden == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ t('Username') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! (!empty($entry->username)) ? $entry->username : '--' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.email') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! $entry->email !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.Verified Email') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! ($entry->verified_email == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ t('preferred_time_zone_label') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ (!empty($entry->time_zone)) ? $entry->time_zone : '--' }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ t('terms') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! ($entry->accept_terms == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ t('accept_marketing_offers_label') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {!! ($entry->accept_marketing_offers == 1) ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>' !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.last_login_at') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->last_login_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.updated_at') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->updated_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 bg-light-inverse fw-bolder mb-1">{{ trans('admin.created_at') }}</div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-6 p-2 mb-1">
                    {{ $entry->created_at }}
                </div>
            </div>
            
        </div>
    </div>
</div>
