{{--
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
--}}
@extends('layouts.master')

@section('content')
	@includeFirst([config('larapen.core.customizedViewPath') . 'common.spacer', 'common.spacer'])
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-3 page-sidebar">
					@includeFirst([config('larapen.core.customizedViewPath') . 'account.inc.sidebar', 'account.inc.sidebar'])
				</div>
				<!--/.page-sidebar-->
				
				<div class="col-md-9 page-content">
					
					@include('flash::message')
					
					@if (isset($errors) && $errors->any())
						<div class="alert alert-danger">
							<h5><strong>{{ t('oops_an_error_has_occurred') }}</strong></h5>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					<div class="inner-box">
						<h2 class="title-2"><i class="far fa-building"></i> {{ t('Create a new company') }} </h2>
						
						<div class="mb30" style="float: right; padding-right: 5px;">
							<a href="{{ url('account/companies') }}">{{ t('My companies') }}</a>
						</div>
						<div style="clear: both;"></div>
						
						<div class="panel-group" id="accordion">
							
							{{-- COMPANY --}}
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title"><a href="#companyPanel" data-bs-toggle="collapse" data-parent="#accordion"> {{ t('Company Information') }} </a></h4>
								</div>
								<div class="panel-collapse collapse show" id="companyPanel">
									<div class="card-body">
										<form name="company" class="form-horizontal" role="form" method="POST" action="{{ url('account/companies') }}" enctype="multipart/form-data">
											{!! csrf_field() !!}
											<input name="panel" type="hidden" value="companyPanel">
											
											@includeFirst([config('larapen.core.customizedViewPath') . 'account.company._form', 'account.company._form'])
											
											<div class="row mb-3">
												<div class="offset-md-3 col-md-9"></div>
											</div>
											
											{{-- Button --}}
											<div class="row mb-3">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-primary">{{ t('submit') }}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						
						</div>
						<!--/.row-box End-->
					
					</div>
				</div>
				<!--/.page-content-->
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</div>
	<!-- /.main-container -->
@endsection

@section('after_styles')
	<link href="{{ url('assets/plugins/bootstrap-fileinput/css/fileinput.min.css') }}" rel="stylesheet">
	@if (config('lang.direction') == 'rtl')
		<link href="{{ url('assets/plugins/bootstrap-fileinput/css/fileinput-rtl.min.css') }}" rel="stylesheet">
	@endif
	<style>
		.krajee-default.file-preview-frame:hover:not(.file-preview-error) {
			box-shadow: 0 0 5px 0 #666666;
		}
	</style>
@endsection

@section('after_scripts')
	<script src="{{ url('assets/plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('assets/plugins/bootstrap-fileinput/js/fileinput.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('assets/plugins/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
	<script src="{{ url('common/js/fileinput/locales/' . config('app.locale') . '.js') }}" type="text/javascript"></script>
@endsection
