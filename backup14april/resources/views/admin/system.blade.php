@extends('admin.layouts.master')

@section('header')
	<div class="row page-titles">
		<div class="col-md-6 col-12 align-self-center">
			<h2 class="mb-0">
				{{ trans('admin.system_info') }}
			</h2>
		</div>
		<div class="col-md-6 col-12 align-self-center d-none d-md-flex justify-content-end">
			<ol class="breadcrumb mb-0 p-0 bg-transparent">
				<li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
				<li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.system') }}</li>
			</ol>
		</div>
	</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="card rounded">
				<div class="card-header">
					<h3 class="card-title"><i class="fas fa-info-circle"></i> {{ trans('admin.system') }}</h3>
				</div>
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							@foreach ($system as $key => $item)
								<div class="row mt-2 mb-2">
									<div class="col-xl-2 col-lg-3 col-md-3 col-4 fw-bolder">
										{!! $item['name'] !!}
									</div>
									<div class="col-xl-10 col-lg-9 col-md-9 col-8">
										{!! $item['value'] !!}
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-6">
			<div class="card rounded">
				<div class="card-header">
					<h3 class="card-title"><i class="fas fa-exclamation-triangle"></i> {{ trans('messages.requirements') }}</h3>
				</div>
				
				<div class="card-body pt-0 pb-0">
					<div class="row">
						<div class="col-md-12">
							<ul class="system-info">
								@foreach ($components as $key => $item)
									<li>
										@if ($item['check'])
											<i class="fas fa-check text-success"></i>
										@else
											<i class="fas fa-times text-danger"></i>
										@endif
										<h5 class="title-5 fw-bolder">
											{{ $item['name'] }}
										</h5>
										<p>
											{!! ($item['check'] && isset($item['ok'])) ? $item['ok'] : $item['note'] !!}
										</p>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-6">
			<div class="card rounded">
				<div class="card-header">
					<h3 class="card-title"><i class="fas fa-folder-open"></i> {{ trans('messages.permissions') }}</h3>
				</div>
				
				<div class="card-body pt-0 pb-0">
					<div class="row">
						<div class="col-md-12">
							<ul class="system-info">
								@foreach ($permissions as $key => $item)
									<li>
										@if ($item['check'])
											<i class="fas fa-check text-success"></i>
										@else
											<i class="fas fa-times text-danger"></i>
										@endif
										<h5 class="title-5 fw-bolder">
											{{ relativeAppPath($item['name']) }}
										</h5>
										<p>
											{!! ($item['check'] && isset($item['ok'])) ? $item['ok'] : $item['note'] !!}
										</p>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('after_styles')
	@parent
	<style>
		/* SYSTEM INFO */
		ul.system-info {
			padding-left: 0;
		}
		ul.system-info li:first-child {
			border-top: 0;
			padding-top: 20px;
		}
		ul.system-info li:last-child {
			border-bottom: 0;
			margin-bottom: 0;
		}
		ul.system-info li {
			border-bottom: 1px solid #ddd;
			clear: both;
			list-style: outside none none;
			margin-bottom: 20px;
		}
		ul.system-info li i {
			color: #7324bc;
			float: left;
			font-size: 30px;
			height: 70px;
			margin-right: 20px;
			margin-top: 5px;
		}
	</style>
@endsection

@section('after_scripts')
	@parent
@endsection