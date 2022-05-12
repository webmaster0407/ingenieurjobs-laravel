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

@section('search')
	@parent
	@include('pages.inc.contact-intro')
@endsection

@section('content')
	@include('common.spacer')
	<div class="main-container">
		<div class="container">
			<div class="row clearfix">
				
				@if (isset($errors) && $errors->any())
					<div class="col-xl-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<h5><strong>{{ t('oops_an_error_has_occurred') }}</strong></h5>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
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
				
				<div class="col-md-12">
					<div class="contact-form">
						<h5 class="list-title gray mt-0">
							<strong>{{ t('Contact Us') }}</strong>
						</h5>
						
						<form class="form-horizontal needs-validation" method="post" action="{{ \App\Helpers\UrlGen::contact() }}">
							{!! csrf_field() !!}
							<fieldset>
								<div class="row">
									<div class="col-md-6 mb-3">
										<?php $firstNameError = (isset($errors) and $errors->has('first_name')) ? ' is-invalid' : ''; ?>
										<div class="form-floating required">
											<input id="first_name" name="first_name" type="text" placeholder="{{ t('first_name') }}"
												   class="form-control{{ $firstNameError }}" value="{{ old('first_name') }}">
											<label for="first_name">{{ t('first_name') }}</label>
										</div>
									</div>
									
									<div class="col-md-6 mb-3">
										<?php $lastNameError = (isset($errors) and $errors->has('last_name')) ? ' is-invalid' : ''; ?>
										<div class="form-floating required">
											<input id="last_name" name="last_name" type="text" placeholder="{{ t('last_name') }}"
												   class="form-control{{ $lastNameError }}" value="{{ old('last_name') }}">
											<label for="last_name">{{ t('last_name') }}</label>
										</div>
									</div>
									
									<div class="col-md-6 mb-3">
										<?php $companyNameError = (isset($errors) and $errors->has('company_name')) ? ' is-invalid' : ''; ?>
										<div class="form-floating required">
											<input id="company_name" name="company_name" type="text" placeholder="{{ t('company_name') }}"
												   class="form-control{{ $companyNameError }}" value="{{ old('company_name') }}">
											<label for="company_name">{{ t('company_name') }}</label>
										</div>
									</div>
									
									<div class="col-md-6 mb-3">
										<?php $emailError = (isset($errors) and $errors->has('email')) ? ' is-invalid' : ''; ?>
										<div class="form-floating required">
											<input id="email" name="email" type="text" placeholder="{{ t('email_address') }}" class="form-control{{ $emailError }}"
												   value="{{ old('email') }}">
											<label for="email">{{ t('email_address') }}</label>
										</div>
									</div>
									
									<div class="col-md-12 mb-3">
										<?php $messageError = (isset($errors) and $errors->has('message')) ? ' is-invalid' : ''; ?>
										<div class="form-floating required">
											<textarea class="form-control{{ $messageError }}" id="message" name="message" placeholder="{{ t('Message') }}"
													  rows="7" style="height: 150px">{{ old('message') }}</textarea>
											<label for="message">{{ t('Message') }}</label>
										</div>
									</div>
									
									<div class="col-md-12">
										@include('layouts.inc.tools.captcha', ['label' => true])
									</div>
									
									<div class="col-md-12 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">{{ t('submit') }}</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('after_scripts')
	<script src="{{ url('assets/js/form-validation.js') }}"></script>
@endsection
