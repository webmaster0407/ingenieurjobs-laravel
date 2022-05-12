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

				@if (isset($errors) && $errors->any())
					<div class="col-xl-12">
						<div class="alert alert-danger">
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif

				@if (session('code'))
					<div class="col-xl-12">
						<div class="alert alert-danger">
							<p>{{ session('code') }}</p>
						</div>
					</div>
				@endif

				@if (session()->has('flash_notification'))
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								@include('flash::message')
							</div>
						</div>
					</div>
				@endif
					
				<div class="col-xl-12">
					<div class="alert alert-info">
						{{ getTokenMessage() }}:
					</div>
				</div>

				<div class="col-lg-5 col-md-8 col-sm-10 col-12 login-box mt-2">
					<div class="card card-default">
						
						<div class="panel-intro">
							<div class="d-flex justify-content-center">
								<h2 class="logo-title"><strong>{{ t('Code') }}</strong></h2>
							</div>
						</div>
						
						<div class="card-body">
							<form id="tokenForm" role="form" method="POST" action="{{ url(getRequestPath('.*/verify/.*')) }}">
								{!! csrf_field() !!}
								
								{{-- code --}}
								<?php $codeError = (isset($errors) and $errors->has('code')) ? ' is-invalid' : ''; ?>
								<div class="mb-3">
									<label for="code" class="col-form-label">{{ getTokenLabel() }}:</label>
									<div class="input-icon">
										<i class="fa icon-lock-2"></i>
										<input id="code"
											   name="code"
											   type="text"
											   placeholder="{{ t('Enter the validation code') }}"
											   class="form-control{{ $codeError }}"
											   value="{{ old('code') }}"
											   autocomplete="one-time-code"
										>
									</div>
								</div>
								
								<div class="mb-3">
									<button id="tokenBtn" type="submit" class="btn btn-primary btn-lg btn-block">{{ t('submit') }}</button>
								</div>
							</form>
						</div>
						
						<div class="card-footer text-center">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('after_scripts')
	<script>
		$(document).ready(function () {
			$("#tokenBtn").click(function () {
				$("#tokenForm").submit();
				return false;
			});
		});
	</script>
@endsection