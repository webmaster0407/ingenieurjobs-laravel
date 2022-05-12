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
			<div class="row clearfix">
				
				@includeFirst([config('larapen.core.customizedViewPath') . 'post.inc.notification', 'post.inc.notification'])
					
				<div class="col-md-12">
					<div class="contact-form">
						
						<h3 class="gray mt-0">
							<strong><a href="{{ \App\Helpers\UrlGen::post($post) }}">{{ $title }}</a></strong>
						</h3>
						
						<hr class="border-0 bg-secondary mt-1">
						
						<h4>{{ t('There is something wrong with this ad') }}</h4>
						
						<form role="form" method="POST" action="{{ \App\Helpers\UrlGen::reportPost($post) }}">
							{!! csrf_field() !!}
							<fieldset>
								<div class="row">
									{{-- report_type_id --}}
									<?php $reportTypeIdError = (isset($errors) and $errors->has('report_type_id')) ? ' is-invalid' : ''; ?>
									<div class="col-md-6 col-12 mb-3 required">
										<label for="report_type_id" class="control-label{{ $reportTypeIdError }}">{{ t('Reason') }} <sup>*</sup></label>
										<select id="reportTypeId" name="report_type_id" class="form-control selecter{{ $reportTypeIdError }}">
											<option value="">{{ t('Select a reason') }}</option>
											@foreach($reportTypes as $reportType)
												<option value="{{ $reportType->id }}" {{ (old('report_type_id', 0)==$reportType->id) ? 'selected="selected"' : '' }}>
													{{ $reportType->name }}
												</option>
											@endforeach
										</select>
									</div>
									
									{{-- email --}}
									@if (auth()->check() and isset(auth()->user()->email))
										<input type="hidden" name="email" value="{{ auth()->user()->email }}">
									@else
										<?php $emailError = (isset($errors) and $errors->has('email')) ? ' is-invalid' : ''; ?>
										<div class="col-md-6 col-12 mb-3 required">
											<label for="email" class="control-label">{{ t('Your Email') }} <sup>*</sup></label>
											<div class="input-group">
												<span class="input-group-text"><i class="far fa-envelope"></i></span>
												<input id="email" name="email" type="text" maxlength="60" class="form-control{{ $emailError }}" value="{{ old('email') }}">
											</div>
										</div>
									@endif
								
									{{-- message --}}
									<?php $messageError = (isset($errors) and $errors->has('message')) ? ' is-invalid' : ''; ?>
									<div class="col-md-12 col-12 mb-3 required">
										<label for="message" class="control-label">{{ t('Message') }} <sup>*</sup> <span class="text-count"></span></label>
										<textarea id="message"
												  name="message"
												  class="form-control{{ $messageError }}"
												  rows="10"
												  style="height: 200px;"
										>{{ old('message') }}</textarea>
									</div>
									
									@include('layouts.inc.tools.captcha', ['label' => true])
				
									<input type="hidden" name="post_id" value="{{ $post->id }}">
									<input type="hidden" name="abuseForm" value="1">
									
									<div class="mb-3">
										<a href="{{ rawurldecode(URL::previous()) }}" class="btn btn-default btn-lg">{{ t('Back') }}</a>
										<button type="submit" class="btn btn-primary btn-lg">{{ t('Send Report') }}</button>
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