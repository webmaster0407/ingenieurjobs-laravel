@extends('admin.layouts.master')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h2 class="mb-0">
                <span class="text-capitalize">{!! $xPanel->entityNamePlural !!}</span>
                <small>{{ trans('admin.add') }} {!! $xPanel->entityName !!}</small>
            </h2>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-flex justify-content-end">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
                <li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.add') }}</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="flex-row d-flex justify-content-center">
        <?php
        $colMd = config('settings.style.admin_boxed_layout') == '1' ? ' col-md-12' : ' col-md-9';
        ?>
        <div class="col-sm-12{{ $colMd }}">
            
            {{-- Default box --}}
            @if ($xPanel->hasAccess('list'))
                <a href="{{ url($xPanel->route) }}" class="btn btn-primary shadow">
                    <i class="fa fa-angle-double-left"></i> {{ trans('admin.back_to_all') }}
                    <span class="text-lowercase">{!! $xPanel->entityNamePlural !!}</span>
                </a>
                <br><br>
            @endif
            
            {!! Form::open(array('url' => $xPanel->route, 'method' => 'post', 'files' => $xPanel->hasUploadFields('create'))) !!}
            <div class="card border-top border-primary">
                
                <div class="card-header">
                    <h3 class="mb-0">{{ trans('admin.add_a_new') }} {!! $xPanel->entityName !!}</h3>
                </div>
                <div class="card-body">
                    {{-- load the view from the application if it exists, otherwise load the one in the package --}}
                    @if(view()->exists('vendor.admin.panel.' . $xPanel->entityName . '.form_content'))
                        @include('vendor.admin.panel.' . $xPanel->entityName . '.form_content', ['fields' => $xPanel->getFields('create')])
                    @elseif(view()->exists('vendor.admin.panel.form_content'))
                        @include('vendor.admin.panel.form_content', ['fields' => $xPanel->getFields('create')])
                    @else
                        @include('admin.panel.form_content', ['fields' => $xPanel->getFields('create')])
                    @endif
                </div>
                <div class="card-footer">
                    @include('admin.panel.inc.form_save_buttons')
                </div>
                
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
