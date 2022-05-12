@extends('admin.layouts.master')

@section('header')
	<div class="row page-titles">
		<div class="col-md-6 col-12 align-self-center">
			<h3 class="mb-0">
				<span class="text-capitalize">{!! ucfirst($xPanel->entityName) !!}</span>
				<small>{{ trans('admin.revisions') }}</small>
			</h3>
		</div>
		<div class="col-md-6 col-12 align-self-center d-none d-md-flex justify-content-end">
			<ol class="breadcrumb mb-0 p-0 bg-transparent">
				<li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
				<li class="breadcrumb-item"><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
				<li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.revisions') }}</li>
			</ol>
		</div>
	</div>
@endsection

@section('content')
	<div class="flex-row d-flex justify-content-center">
		<?php
		$colMd = config('settings.style.admin_boxed_layout') == '1' ? ' col-md-12' : ' col-md-10';
		?>
		<div class="col-sm-12{{ $colMd }}">
			{{-- Default box --}}
			@if ($xPanel->hasAccess('list'))
				<a href="{{ url($xPanel->route) }}" class="btn btn-primary shadow">
					<i class="fa fa-angle-double-left"></i> {{ trans('admin.back_to_all') }}
					<span class="text-lowercase">{{ $xPanel->entityNamePlural }}</span>
				</a>
				<br><br>
			@endif
			
			@if (!count($revisions))
				<div class="card border-top border-primary">
					<div class="card-header">
						<h3 class="box-title">{{ trans('admin.no_revisions') }}</h3>
					</div>
				</div>
			@else
				@include('admin.panel.inc.revision_timeline')
			@endif
		</div>
	</div>
@endsection

@section('after_styles')
@endsection

@section('after_scripts')
@endsection
