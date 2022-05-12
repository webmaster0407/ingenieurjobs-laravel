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
				
				@if (session()->has('flash_notification'))
					<div class="col-12">
						@include('flash::message')
					</div>
				@endif
				
				@includeFirst([config('larapen.core.customizedViewPath') . 'auth.login.inc.social', 'auth.login.inc.social'], ['boxedCol' => 8])
				<?php $mtAuth = !socialLoginIsEnabled() ? ' mt-2' : ' mt-1'; ?>
				
				<div class="col-lg-5 col-md-8 col-sm-10 col-12 login-box{{ $mtAuth }}">
					<form id="loginForm" role="form" method="POST" action="{{ url()->current() }}">
						{!! csrf_field() !!}
						<input type="hidden" name="country" value="{{ config('country.code') }}">
						<div class="card card-default">
							
							<div class="panel-intro">
								<div class="d-flex justify-content-center">
									<h2 class="logo-title"><strong>{{ t('log_in') }}</strong></h2>
								</div>
							</div>
							
							<div class="card-body px-4">
								<?php
									$loginValue = (session()->has('login')) ? session('login') : old('login');
									$loginField = getLoginField($loginValue);
									if ($loginField == 'phone') {
										$loginValue = phoneFormat($loginValue, old('country', config('country.code')));
									}
								?>
								{{-- login --}}
								<?php $loginError = (isset($errors) && $errors->has('login')) ? ' is-invalid' : ''; ?>
								<div class="mb-3">
									<label for="login" class="col-form-label">{{ t('login') . ' (' . getLoginLabel() . ')' }}:</label>
									<div class="input-group">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
										<input id="login" name="login" type="text" placeholder="{{ getLoginLabel() }}" class="form-control{{ $loginError }}" value="{{ $loginValue }}">
									</div>
								</div>
								
								{{-- password --}}
								<?php $passwordError = (isset($errors) && $errors->has('password')) ? ' is-invalid' : ''; ?>
								<div class="mb-3">
									<label for="password" class="col-form-label">{{ t('password') }}:</label>
									<div class="input-group show-pwd-group">
										<span class="input-group-text"><i class="fas fa-lock"></i></span>
										<input id="password" name="password" type="password" class="form-control{{ $passwordError }}" placeholder="{{ t('password') }}" autocomplete="off">
										<span class="icon-append show-pwd">
											<button type="button" class="eyeOfPwd">
												<i class="far fa-eye-slash"></i>
											</button>
										</span>
									</div>
								</div>
								
								@include('layouts.inc.tools.captcha', ['noLabel' => true])
								
								{{-- Submit --}}
								<div class="mb-1">
									<button id="loginBtn" class="btn btn-primary btn-block"> {{ t('log_in') }} </button>
								</div>
							</div>
							
							<div class="card-footer px-4">
								<label class="checkbox float-start mt-2 mb-2" for="rememberMe">
									<input type="checkbox" value="1" name="remember_me" id="rememberMe">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description"> {{ t('keep_me_logged_in') }}</span>
								</label>
								<div class="text-center float-end mt-2 mb-2">
									<a href="{{ url('password/reset') }}"> {{ t('lost_your_password') }} </a>
								</div>
								<div style=" clear:both"></div>
							</div>
						</div>
					</form>
					
					<div class="login-box-btm text-center">
						<p>
							{{ t('do_not_have_an_account') }}<br>
							<a href="{{ \App\Helpers\UrlGen::register() }}"><strong>{{ t('sign_up') }} !</strong></a>
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
			$("#loginBtn").click(function () {
				$("#loginForm").submit();
				return false;
			});
		});
	</script>
@endsection
