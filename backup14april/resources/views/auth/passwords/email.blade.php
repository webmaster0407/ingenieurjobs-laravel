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
					<div class="col-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif
				
				@if (session()->has('status'))
					<div class="col-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<p class="mb-0">{{ session('status') }}</p>
						</div>
					</div>
				@endif
				
				@if (session()->has('email'))
					<div class="col-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<p class="mb-0">{{ session('email') }}</p>
						</div>
					</div>
				@endif
				
				@if (session()->has('phone'))
					<div class="col-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<p class="mb-0">{{ session('phone') }}</p>
						</div>
					</div>
				@endif
				
				@if (session()->has('login'))
					<div class="col-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<p class="mb-0">{{ session('login') }}</p>
						</div>
					</div>
				@endif
				
				@if (session()->has('flash_notification'))
					<div class="col-12">
						@include('flash::message')
					</div>
				@endif
				
				<div class="col-lg-5 col-md-8 col-sm-10 col-12 login-box mt-2">
					<div class="card card-default">
						
						<div class="panel-intro">
							<div class="d-flex justify-content-center">
								<h2 class="logo-title">{{ t('password') }}</h2>
							</div>
						</div>
						
						<div class="card-body">
							<form id="pwdForm" role="form" method="POST" action="{{ url('password/email') }}">
								{!! csrf_field() !!}
								
								{{-- login --}}
								<?php $loginError = (isset($errors) and $errors->has('login')) ? ' is-invalid' : ''; ?>
								<div class="form-group">
									<label for="login" class="col-form-label">{{ t('login') . ' (' . getLoginLabel() . ')' }}:</label>
									<div class="input-icon">
										<i class="fas fa-user"></i>
										<input id="login"
											   name="login"
											   type="text"
											   placeholder="{{ getLoginLabel() }}"
											   class="form-control{{ $loginError }}"
											   value="{{ old('login') }}"
										>
									</div>
								</div>
								
								@include('layouts.inc.tools.captcha', ['noLabel' => true])
								
								{{-- Submit --}}
								<div class="form-group">
									<button id="pwdBtn" type="submit" class="btn btn-primary btn-lg btn-block">{{ t('submit') }}</button>
								</div>
							</form>
						</div>
						
						<div class="card-footer text-center">
							<a href="{{ \App\Helpers\UrlGen::login() }}"> {{ t('back_to_the_log_in_page') }} </a>
						</div>
					</div>
					<div class="login-box-btm text-center">
						<p>
							{{ t('do_not_have_an_account') }} <br>
							<a href="{{ \App\Helpers\UrlGen::register() }}"><strong>{{ t('sign_up_') }}</strong></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('after_scripts')
	<script>
		$(document).ready(function () {
			$("#pwdBtn").click(function () {
				$("#pwdForm").submit();
				return false;
			});
		});
	</script>
@endsection
