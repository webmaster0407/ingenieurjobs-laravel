@extends('admin.layouts.master')

@section('content-header')
	<section class="content-header">
	  <h1>
	    {{ trans('admin.preview') }} <span class="text-lowercase">{!! $xPanel->entityName !!}</span>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
	    <li><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
	    <li class="active">{{ trans('admin.preview') }}</li>
	  </ol>
	</section>
@endsection

@section('content')
	@if ($xPanel->hasAccess('list'))
		<a href="{{ url($xPanel->route) }}"><i class="fa fa-angle-double-left"></i> {{ trans('admin.back_to_all') }} <span class="text-lowercase">{!! $xPanel->entityNamePlural !!}</span></a><br><br>
	@endif

	{{-- Default box --}}
	  <div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">
            {{ trans('admin.preview') }}
            <span class="text-lowercase">{!! $xPanel->entityName !!}</span>
          </h3>
	    </div>
	    <div class="box-body">
	      {{ dump($entry) }}
	    </div><!-- /.box-body -->
	  </div><!-- /.box -->

@endsection
