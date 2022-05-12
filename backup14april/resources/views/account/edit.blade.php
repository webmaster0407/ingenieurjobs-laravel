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
	@include('common.spacer')
	<div class="main-container" id="account-page">
		<div class="container">
			<div class="row">
				<div class="col-md-3 page-sidebar">
					@include('account.inc.sidebar')
				</div>

				<div class="col-md-9 page-content">

					@include('flash::message')

					@if (isset($errors) && $errors->any())
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<h5><strong>{{ t('oops_an_error_has_occurred') }}</strong></h5>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					<div id="avatarUploadError" class="center-block" style="width:100%; display:none"></div>
					<div id="avatarUploadSuccess" class="alert alert-success fade show" style="display:none;"></div>
					
					<div class="inner-box default-inner-box">
						<div class="row">
							<div class="col-md-5 col-sm-4 col-12">
								<h3 class="no-padding text-center-480 useradmin">
									<a href="">
										<img id="userImg" class="userImg" src="{{ $user->photo_url }}" alt="user">&nbsp;
										{{ $user->name }}
									</a>
								</h3>
							</div>
							<div class="col-md-7 col-sm-8 col-12">
								<div class="header-data text-center-xs">
									{{-- Threads Stats --}}
									<div class="hdata">
										<div class="mcol-left">
											<i class="fas fa-envelope ln-shadow"></i></div>
										<div class="mcol-right">
											{{-- Number of messages --}}
											<p>
												<a href="{{ url('account/messages') }}">
													{{ isset($countThreads) ? \App\Helpers\Number::short($countThreads) : 0 }}
													<em>{{ trans_choice('global.count_mails', getPlural($countThreads), [], config('app.locale')) }}</em>
												</a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>
									
									@if (isset($user) && in_array($user->user_type_id, [1]))
									{{-- Traffic Stats --}}
									<div class="hdata">
										<div class="mcol-left">
											<i class="fa fa-eye ln-shadow"></i>
										</div>
										<div class="mcol-right">
											{{-- Number of visitors --}}
											<p>
												<a href="{{ url('account/my-posts') }}">
													<?php $totalPostsVisits = (isset($countPostsVisits) && $countPostsVisits->total_visits) ? $countPostsVisits->total_visits : 0 ?>
                                                    {{ \App\Helpers\Number::short($totalPostsVisits) }}
												    <em>{{ trans_choice('global.count_visits', getPlural($totalPostsVisits), [], config('app.locale')) }}</em>
                                                </a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>
									
									{{-- Ads Stats --}}
									<div class="hdata">
										<div class="mcol-left">
											<i class="fas fa-bullhorn ln-shadow"></i>
										</div>
										<div class="mcol-right">
											{{-- Number of ads --}}
											<p>
												<a href="{{ url('account/my-posts') }}">
                                                    {{ \App\Helpers\Number::short($countPosts) }}
												    <em>{{ trans_choice('global.count_posts', getPlural($countPosts), [], config('app.locale')) }}</em>
                                                </a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>
									@endif
                                    
                                    @if (isset($user) && in_array($user->user_type_id, [2]))
									{{-- Favorites Stats --}}
									<div class="hdata">
										<div class="mcol-left">
											<i class="fa fa-user ln-shadow"></i>
										</div>
										<div class="mcol-right">
											{{-- Number of favorites --}}
											<p>
												<a href="{{ url('account/favourite') }}">
                                                    {{ \App\Helpers\Number::short($countFavoritePosts) }}
												    <em>{{ trans_choice('global.count_favorites', getPlural($countFavoritePosts), [], config('app.locale')) }} </em>
                                                </a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>
                                    @endif
								</div>
							</div>
						</div>
					</div>

					<div class="inner-box default-inner-box">
						<div class="welcome-msg">
							<h3 class="page-sub-header2 clearfix no-padding">{{ t('Hello') }} {{ $user->name }} ! </h3>
							<span class="page-sub-header-sub small">
                                {{ t('You last logged in at') }}: {{ \App\Helpers\Date::format($user->last_login_at, 'datetime') }}
                            </span>
						</div>
						
						<div id="accordion" class="panel-group">
							{{-- PHOTO --}}
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title">
										<a href="#photoPanel" data-bs-toggle="collapse" data-parent="#accordion">{{ t('Photo or Avatar') }}</a>
									</h4>
								</div>
								<?php
								$photoPanelClass = '';
								$photoPanelClass = request()->filled('panel')
									? (request()->get('panel') == 'photo' ? 'show' : $photoPanelClass)
									: ((old('panel')=='' || old('panel') =='photo') ? 'show' : $photoPanelClass);
								$photoPanelClass = empty($user->user_type_id) ? '' : $photoPanelClass;
								?>
								<div class="panel-collapse collapse {{ $photoPanelClass }}" id="photoPanel">
									<div class="card-body">
										<form name="details" class="form-horizontal" role="form" method="POST" action="{{ url('account/' . $user->id . '/photo') }}">
											<div class="row">
												<div class="col-xl-12 text-center">
													
													<?php $photoError = (isset($errors) and $errors->has('photo')) ? ' is-invalid' : ''; ?>
													<div class="photo-field">
														<div class="file-loading">
															<input id="photoField" name="photo" type="file" class="file {{ $photoError }}">
														</div>
													</div>
												
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							{{-- USER --}}
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title"><a href="#userPanel" data-bs-toggle="collapse" data-parent="#accordion">{{ t('Account Details') }}</a></h4>
								</div>
								<?php
								$userPanelClass = '';
								$userPanelClass = request()->filled('panel')
									? (request()->get('panel') == 'user' ? 'show' : $userPanelClass)
									: ((old('panel')=='' || old('panel')=='user') ? 'show' : $userPanelClass);
								?>
								<div class="panel-collapse collapse {{ $userPanelClass }}" id="userPanel">
									<div class="card-body">
										<form name="details"
											  class="form-horizontal"
											  role="form"
											  method="POST"
											  action="{{ url('account') }}"
											  enctype="multipart/form-data"
										>
											{!! csrf_field() !!}
											<input name="_method" type="hidden" value="PUT">
											<input name="panel" type="hidden" value="user">
                                            
                                            @if (empty($user->user_type_id) || $user->user_type_id == 0)
												
												{{-- user_type_id --}}
												<?php $userTypeIdError = (isset($errors) && $errors->has('user_type_id')) ? ' is-invalid' : ''; ?>
                                                <div class="row mb-3 required">
                                                    <label class="col-md-3 col-form-label{{ $userTypeIdError }}">{{ t('you_are_a') }} <sup>*</sup></label>
                                                    <div class="col-md-9">
                                                        <select name="user_type_id" id="userTypeId" class="form-control selecter{{ $userTypeIdError }}">
                                                            <option value="0"
																	@if (old('user_type_id')=='' || old('user_type_id')==0)
																		selected="selected"
																	@endif
															>
                                                                {{ t('Select') }}
                                                            </option>
                                                            @foreach ($userTypes as $type)
                                                                <option value="{{ $type->id }}"
																		@if (old('user_type_id', $user->user_type_id)==$type->id)
																			selected="selected"
																		@endif
																>
                                                                    {{ t($type->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                    
                                            @else
												
												{{-- gender_id --}}
												<?php $genderIdError = (isset($errors) && $errors->has('gender_id')) ? ' is-invalid' : ''; ?>
                                                <div class="row mb-3 required">
                                                    <label class="col-md-3 col-form-label">{{ t('gender') }} <sup>*</sup></label>
                                                    <div class="col-md-9">
                                                        @if ($genders->count() > 0)
                                                            @foreach ($genders as $gender)
																<div class="form-check form-check-inline pt-2">
																	<input name="gender_id"
																		   id="gender_id-{{ $gender->id }}"
																		   value="{{ $gender->id }}"
																		   class="form-check-input{{ $genderIdError }}"
																		   type="radio" {{ (old('gender_id', $user->gender_id)==$gender->id) ? 'checked="checked"' : '' }}
																	>
																	<label class="form-check-label" for="gender_id">
																		{{ $gender->name }}
																	</label>
																</div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
												
												{{-- name --}}
												<?php $nameError = (isset($errors) && $errors->has('name')) ? ' is-invalid' : ''; ?>
                                                <div class="row mb-3 required">
                                                    <label class="col-md-3 col-form-label">{{ t('Name') }} <sup>*</sup></label>
                                                    <div class="col-md-9">
                                                        <input name="name" type="text" class="form-control{{ $nameError }}" placeholder="" value="{{ old('name', $user->name) }}">
                                                    </div>
                                                </div>
												
												{{-- username --}}
												<?php $usernameError = (isset($errors) && $errors->has('username')) ? ' is-invalid' : ''; ?>
												<div class="row mb-3 required">
													<label class="col-md-3 col-form-label" for="email">{{ t('Username') }}</label>
													<div class="col-md-9">
														<div class="input-group">
															<span class="input-group-text"><i class="far fa-user"></i></span>
															<input id="username"
																   name="username"
																   type="text"
																   class="form-control{{ $usernameError }}"
																   placeholder="{{ t('Username') }}"
																   value="{{ old('username', $user->username) }}"
															>
														</div>
													</div>
												</div>
												
												{{-- email --}}
												<?php $emailError = (isset($errors) && $errors->has('email')) ? ' is-invalid' : ''; ?>
                                                <div class="row mb-3 required">
                                                    <label class="col-md-3 col-form-label">{{ t('email') }}
														@if (!isEnabledField('phone'))
															<sup>*</sup>
														@endif
													</label>
													<div class="col-md-9">
														<div class="input-group">
															<span class="input-group-text"><i class="far fa-envelope"></i></span>
															<input id="email"
																   name="email"
																   type="email"
																   class="form-control{{ $emailError }}"
																   placeholder="{{ t('email') }}"
																   value="{{ old('email', $user->email) }}"
															>
														</div>
													</div>
                                                </div>
												
												{{-- country_code --}}
                                                <?php
                                                /*
                                                <?php $countryCodeError = (isset($errors) and $errors->has('country_code')) ? ' is-invalid' : ''; ?>
                                                <div class="row mb-3 required">
                                                    <label class="col-md-3 col-form-label{{ $countryCodeError }}" for="country_code">{{ t('your_country') }} <sup>*</sup></label>
                                                    <div class="col-md-9">
                                                        <select name="country_code" class="form-control large-data-selecter{{ $countryCodeError }}">
                                                            <option value="0" {{ (!old('country_code') or old('country_code')==0) ? 'selected="selected"' : '' }}>
                                                                {{ t('select_a_country') }}
                                                            </option>
                                                            @foreach ($countries as $item)
                                                                <option value="{{ $item->get('code') }}" {{ (old('country_code', $user->country_code)==$item->get('code')) ? 'selected="selected"' : '' }}>
                                                                    {{ $item->get('name') }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                */
                                                ?>
                                                <input name="country_code" type="hidden" value="{{ $user->country_code }}">
												
												{{-- phone --}}
												<?php $phoneError = (isset($errors) && $errors->has('phone')) ? ' is-invalid' : ''; ?>
                                                <div class="row mb-3 required">
                                                    <label for="phone" class="col-md-3 col-form-label">{{ t('phone') }}
														@if (!isEnabledField('email'))
															<sup>*</sup>
														@endif
													</label>
													<div class="col-md-9">
														<div class="input-group">
															<span id="phoneCountry" class="input-group-text">{!! getPhoneIcon(old('country_code', $user->country_code)) !!}</span>
															<input id="phone" name="phone" type="text" class="form-control{{ $phoneError }}"
																   placeholder="{{ (!isEnabledField('email')) ? t('Mobile Phone Number') : t('phone_number') }}"
																   value="{{ phoneFormat(old('phone', $user->phone), old('country_code', $user->country_code)) }}">
															<span class="input-group-text">
																<input name="phone_hidden" id="phoneHidden" type="checkbox"
																	   value="1" {{ (old('phone_hidden', $user->phone_hidden)=='1') ? 'checked="checked"' : '' }}>&nbsp;
																<small>{{ t('Hide') }}</small>
															</span>
														</div>
													</div>
                                                </div>
                                                
                                            @endif

											<div class="row mb-3">
												<div class="offset-md-3 col-md-9"></div>
											</div>
											
											{{-- button --}}
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-primary">{{ t('Update') }}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							{{-- SETTINGS --}}
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title"><a href="#settingsPanel" data-bs-toggle="collapse" data-parent="#accordion">{{ t('Settings') }}</a></h4>
								</div>
								<?php
								$settingsPanelClass = '';
								$settingsPanelClass = request()->filled('panel')
									? (request()->get('panel') == 'settings' ? 'show' : $settingsPanelClass)
									: ((old('panel')=='settings') ? 'show' : $settingsPanelClass);
								?>
								<div class="panel-collapse collapse {{ $settingsPanelClass }}" id="settingsPanel">
									<div class="card-body">
										<form name="settings"
											  class="form-horizontal"
											  role="form"
											  method="POST"
											  action="{{ url('account/settings') }}"
											  enctype="multipart/form-data"
										>
											{!! csrf_field() !!}
											<input name="_method" type="hidden" value="PUT">
											<input name="panel" type="hidden" value="settings">
											
											<input name="gender_id" type="hidden" value="{{ $user->gender_id }}">
											<input name="name" type="hidden" value="{{ $user->name }}">
											<input name="phone" type="hidden" value="{{ $user->phone }}">
											<input name="email" type="hidden" value="{{ $user->email }}">
										
											@if (config('settings.single.activation_facebook_comments') && config('services.facebook.client_id'))
												{{-- disable_comments --}}
												<div class="row mb-3">
													<label class="col-md-3 col-form-label"></label>
													<div class="col-md-9">
														<div class="form-check pt-2">
															<input id="disable_comments"
																   name="disable_comments"
																   class="form-check-input"
																   value="1"
																   type="checkbox" {{ ($user->disable_comments==1) ? 'checked' : '' }}
															>
															<label class="form-check-label" for="disable_comments" style="font-weight: normal;">
																{{ t('Disable comments on my ads') }}
															</label>
														</div>
													</div>
												</div>
											@endif
											
											{{-- password --}}
											<?php $passwordError = (isset($errors) && $errors->has('password')) ? ' is-invalid' : ''; ?>
											<div class="row mb-2">
												<label class="col-md-3 col-form-label">{{ t('New Password') }}</label>
												<div class="col-md-9">
													<input id="password" name="password" type="password" class="form-control{{ $passwordError }}" placeholder="{{ t('password') }}">
												</div>
											</div>
											
											{{-- password_confirmation --}}
											<?php $passwordError = (isset($errors) && $errors->has('password')) ? ' is-invalid' : ''; ?>
											<div class="row mb-3 <?php echo (isset($errors) && $errors->has('password')) ? ' is-invalid' : ''; ?>">
												<label class="col-md-3 col-form-label">{{ t('Confirm Password') }}</label>
												<div class="col-md-9">
													<input id="password_confirmation" name="password_confirmation" type="password"
														   class="form-control{{ $passwordError }}" placeholder="{{ t('Confirm Password') }}">
												</div>
											</div>
											
											@if ($user->accept_terms != 1)
												{{-- accept_terms --}}
												<?php $acceptTermsError = (isset($errors) && $errors->has('accept_terms')) ? ' is-invalid' : ''; ?>
												<div class="row mb-3 required">
													<label class="col-md-3 col-form-label"></label>
													<div class="col-md-9">
														<div class="form-check">
															<input name="accept_terms" id="acceptTerms"
																   class="form-check-input{{ $acceptTermsError }}"
																   value="1"
																   type="checkbox" {{ (old('accept_terms', $user->accept_terms)=='1') ? 'checked="checked"' : '' }}
															>
															
															<label class="form-check-label" for="acceptTerms" style="font-weight: normal;">
																{!! t('accept_terms_label', ['attributes' => getUrlPageByType('terms')]) !!}
															</label>
														</div>
														<div style="clear:both"></div>
													</div>
												</div>
												
												<input type="hidden" name="user_accept_terms" value="{{ (int)$user->accept_terms }}">
											@endif
											
											{{-- accept_marketing_offers --}}
											<?php $acceptMarketingOffersError = (isset($errors) && $errors->has('accept_marketing_offers')) ? ' is-invalid' : ''; ?>
											<div class="row mb-3 required">
												<label class="col-md-3 col-form-label"></label>
												<div class="col-md-9">
													<div class="form-check">
														<input name="accept_marketing_offers" id="acceptMarketingOffers"
															   class="form-check-input{{ $acceptMarketingOffersError }}"
															   value="1"
															   type="checkbox" {{ (old('accept_marketing_offers', $user->accept_marketing_offers)=='1') ? 'checked="checked"' : '' }}
														>
														
														<label class="form-check-label" for="acceptMarketingOffers" style="font-weight: normal;">
															{!! t('accept_marketing_offers_label') !!}
														</label>
													</div>
													<div style="clear:both"></div>
												</div>
											</div>
											
											{{-- time_zone --}}
											<?php $timeZoneError = (isset($errors) && $errors->has('time_zone')) ? ' is-invalid' : ''; ?>
											<div class="row mb-3 required">
												<label class="col-md-3 col-form-label{{ $timeZoneError }}" for="time_zone">
													{{ t('preferred_time_zone_label') }} <sup>*</sup>
												</label>
												<div class="col-md-9">
													<select name="time_zone" class="form-control large-data-selecter{{ $timeZoneError }}">
														<option value="" {{ (empty(old('time_zone'))) ? 'selected="selected"' : '' }}>
															{{ t('select_a_time_zone') }}
														</option>
														<?php $tz = !empty($user->time_zone) ? $user->time_zone : ''; ?>
														@foreach (\App\Helpers\Date::getTimeZones() as $key => $item)
															<option value="{{ $key }}" {{ (old('time_zone', $tz)==$key) ? 'selected="selected"' : '' }}>
																{{ $item }}
															</option>
														@endforeach
													</select>
													<div class="form-text text-muted">
														@if (auth()->user()->can(\App\Models\Permission::getStaffPermissions()))
															{!! t('admin_preferred_time_zone_info', [
																	'frontTz' => config('country.time_zone'),
																	'country' => config('country.name'),
																	'adminTz' => config('app.timezone'),
																]) !!}
														@else
															{!! t('preferred_time_zone_info', [
																'frontTz' => config('country.time_zone'),
																'country' => config('country.name'),
															]) !!}
														@endif
													</div>
												</div>
											</div>
											
											{{-- button --}}
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-primary">{{ t('Update') }}</button>
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
		.file-loading:before {
			content: " {{ t('loading_wd') }}";
		}
	</style>
	<style>
		/* Avatar Upload */
		.photo-field {
			display: inline-block;
			vertical-align: middle;
		}
		.photo-field .krajee-default.file-preview-frame,
		.photo-field .krajee-default.file-preview-frame:hover {
			margin: 0;
			padding: 0;
			border: none;
			box-shadow: none;
			text-align: center;
		}
		.photo-field .file-input {
			display: table-cell;
			width: 150px;
		}
		.photo-field .krajee-default.file-preview-frame .kv-file-content {
			width: 150px;
			height: 160px;
		}
		.kv-reqd {
			color: red;
			font-family: monospace;
			font-weight: normal;
		}
		
		.file-preview {
			padding: 2px;
		}
		.file-drop-zone {
			margin: 2px;
			min-height: 100px;
		}
		.file-drop-zone .file-preview-thumbnails {
			cursor: pointer;
		}
		
		.krajee-default.file-preview-frame .file-thumbnail-footer {
			height: 30px;
		}
		
		/* Allow clickable uploaded photos (Not possible) */
		.file-drop-zone {
			padding: 20px;
		}
		.file-drop-zone .kv-file-content {
			padding: 0
		}
	</style>
@endsection

@section('after_scripts')
	<script src="{{ url('assets/plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('assets/plugins/bootstrap-fileinput/js/fileinput.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('assets/plugins/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
	<script src="{{ url('common/js/fileinput/locales/' . config('app.locale') . '.js') }}" type="text/javascript"></script>
	<script>
		var uploadExtraData = {
			_token:'{{ csrf_token() }}',
			_method:'PUT',
			name:'{{ $user->name }}',
			phone:'{{ $user->phone }}',
			email:'{{ $user->email }}'
		};
		var initialPreviewConfigExtra = uploadExtraData;
		initialPreviewConfigExtra.remove_photo = 1;
		
		var photoInfo = '<h6 class="text-muted pb-0">{{ t('Click to select') }}</h6>';
		var footerPreview = '<div class="file-thumbnail-footer pt-2">\n' +
			'    {actions}\n' +
			'</div>';
		
		$('#photoField').fileinput(
			{
				theme: 'fas',
				language: '{{ config('app.locale') }}',
				@if (config('lang.direction') == 'rtl')
				rtl: true,
				@endif
				overwriteInitial: true,
				showCaption: false,
				showPreview: true,
				allowedFileExtensions: {!! getUploadFileTypes('image', true) !!},
				uploadUrl: '{{ url('account/photo') }}',
				uploadExtraData: uploadExtraData,
				uploadAsync: false,
				showBrowse: false,
				showCancel: true,
				showUpload: false,
				showRemove: false,
				minFileSize: {{ (int)config('settings.upload.min_image_size', 0) }}, {{-- in KB --}}
				maxFileSize: {{ (int)config('settings.upload.max_image_size', 1000) }}, {{-- in KB --}}
				browseOnZoneClick: true,
				minFileCount: 0,
				maxFileCount: 1,
				validateInitialCount: true,
				uploadClass: 'btn btn-primary',
				defaultPreviewContent: '<img src="{{ url('images/user.jpg') }}" alt="{{ t('Your Photo or Avatar') }}">' + photoInfo,
				/* Retrieve current images */
				/* Setup initial preview with data keys */
				initialPreview: [
					@if (isset($user->photo) && !empty($user->photo))
						'{{ imgUrl($user->photo, 'user') }}'
					@endif
				],
				initialPreviewAsData: true,
				initialPreviewFileType: 'image',
				/* Initial preview configuration */
				initialPreviewConfig: [
					{
						<?php
							// Get the file size
							try {
								$fileSize = (isset($disk) && $disk->exists($user->photo)) ? (int)$disk->size($user->photo) : 0;
							} catch (\Throwable $e) {
								$fileSize = 0;
							}
							?>
								@if (isset($user->photo) && !empty($user->photo))
						caption: '{{ basename($user->photo) }}',
						size: {{ $fileSize }},
						url: '{{ url('account/photo/delete') }}',
						key: {{ (int)$user->id }},
						extra: initialPreviewConfigExtra
						@endif
					}
				],
				
				showClose: false,
				fileActionSettings: {
					showDrag: false, /* Show/hide move (rearrange) icon */
					removeIcon: '<i class="far fa-trash-alt"></i>',
					removeClass: 'btn btn-danger btn-sm',
					zoomClass: 'btn btn-outline-secondary btn-sm',
					removeTitle: '{{ t('Remove file') }}'
				},
				
				elErrorContainer: '#avatarUploadError',
				msgErrorClass: 'alert alert-block alert-danger',
				
				layoutTemplates: {main2: '{preview} {remove} {browse}', footer: footerPreview}
			});
		
		/* Auto-upload added file */
		$('#photoField').on('filebatchselected', function(event, data, id, index) {
			$(this).fileinput('upload');
		});
		
		/* Show upload status message */
		$('#photoField').on('filebatchpreupload', function(event, data, id, index) {
			$('#avatarUploadSuccess').html('<ul></ul>').hide();
		});
		
		/* Show success upload message */
		$('#photoField').on('filebatchuploadsuccess', function(event, data, previewId, index) {
			/* Show uploads success messages */
			var out = '';
			$.each(data.files, function(key, file) {
				if (typeof file !== 'undefined') {
					var fname = file.name;
					out = out + {!! t('Uploaded file X successfully') !!};
				}
			});
			$('#avatarUploadSuccess ul').append(out);
			$('#avatarUploadSuccess').fadeIn('slow');
			
			$('#userImg').attr({'src':$('.photo-field .kv-file-content .file-preview-image').attr('src')});
		});
		
		/* Delete picture */
		$('#photoField').on('filepredelete', function(xhr) {
			var abort = true;
			if (confirm("{{ t('Are you sure you want to delete this picture') }}")) {
				abort = false;
			}
			
			return abort;
		});
		
		$('#photoField').on('filedeleted', function() {
			$('#userImg').attr({'src':'{!! url('images/businessman (1).png') !!}'});
			
			var out = "{{ t('Your photo or avatar has been deleted') }}";
			$('#avatarUploadSuccess').html('<ul><li></li></ul>').hide();
			$('#avatarUploadSuccess ul li').append(out);
			$('#avatarUploadSuccess').fadeIn('slow');
		});
	</script>
@endsection
