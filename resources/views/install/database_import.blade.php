@extends('install.layouts.master')

@section('title', trans('messages.database'))

@section('content')
    
    <h3 class="title-3"><i class="fas fa-database"></i> {{ trans('messages.database_configuration') }}</h3>
    
    <h5 class="">
        The settings was successfully configured!
        Click <strong>{!! trans('messages.setup_database') !!}</strong> button to start importing data to database '{{ $database["database"] }}'.
    </h5>
    
    <div class="text-end">
        <a href="{{ $installUrl . '/database' }}" class="btn btn-default">
            <i class="fas fa-chevron-left"></i> {!! trans('messages.back') !!}
        </a>
        <a href="{{ $installUrl . '/database_import?action=import' }}" class="btn btn-primary">
            {!! trans('messages.setup_database') !!} <i class="fas fa-chevron-right position-right"></i>
        </a>
    </div>
    
@endsection

@section('after_scripts')
    <script type="text/javascript" src="{{ url()->asset('assets/plugins/forms/styling/uniform.min.js') }}"></script>
@endsection
