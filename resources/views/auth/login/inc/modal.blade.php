<div class="modal fade after-pricing" id="quickLogin" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header px-3">
				<h4 class="modal-title"><i class="fas fa-sign-in-alt"></i> {{ t('log_in') }} </h4>
				
				<button type="button" class="close" data-bs-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">{{ t('Close') }}</span>
				</button>
			</div>
			
			<form role="form" method="POST" action="{{ \App\Helpers\UrlGen::login() }}">
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							
							{!! csrf_field() !!}
							<input type="hidden" name="language_code" value="{{ config('app.locale') }}">
							<input type="hidden" name="quickLoginForm" value="1">
							
							@if (isset($errors) && $errors->any() && old('quickLoginForm')=='1')
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
									<ul class="list list-check">
										@foreach($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							
							@includeFirst([config('larapen.core.customizedViewPath') . 'auth.login.inc.social', 'auth.login.inc.social'], ['socialCol' => 12])
							<?php $mtAuth = !socialLoginIsEnabled() ? ' mt-3' : ''; ?>
							
							<?php
							$loginValue = (session()->has('login')) ? session('login') : old('login');
							$loginField = getLoginField($loginValue);
							if ($loginField == 'phone') {
								$loginValue = phoneFormat($loginValue, old('country', config('country.code')));
							}
							?>
							{{-- login --}}
							<?php $loginError = (isset($errors) && $errors->has('login')) ? ' is-invalid' : ''; ?>
							<div class="mb-3{{ $mtAuth }}">
								<label for="login" class="control-label">{{ t('login') . ' (' . getLoginLabel() . ')' }}</label>
								<div class="input-group">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
									<input id="mLogin" name="login" type="text" placeholder="{{ getLoginLabel() }}" class="form-control{{ $loginError }}" value="{{ $loginValue }}">
								</div>
							</div>
							
							{{-- password --}}
							<?php $passwordError = (isset($errors) && $errors->has('password')) ? ' is-invalid' : ''; ?>
							<div class="mb-3">
								<label for="password" class="control-label">{{ t('password') }}</label>
								<div class="input-group show-pwd-group">
									<span class="input-group-text"><i class="fas fa-lock"></i></span>
									<input id="mPassword" name="password" type="password" class="form-control{{ $passwordError }}" placeholder="{{ t('password') }}" autocomplete="off">
									<span class="icon-append show-pwd">
										<button type="button" class="eyeOfPwd">
											<i class="far fa-eye-slash"></i>
										</button>
									</span>
								</div>
							</div>
							
							{{-- remember --}}
							<?php $rememberError = (isset($errors) && $errors->has('remember')) ? ' is-invalid' : ''; ?>
							<div class="mb-3">
								<label class="checkbox form-check-label float-start mt-2" for="rememberMe2" style="font-weight: normal;">
									<input type="checkbox" value="1" name="remember_me" id="rememberMe2" class="{{ $rememberError }}"> {{ t('keep_me_logged_in') }}
								</label>
								<p class="float-end mt-2">
									<a href="{{ url('password/reset') }}">
										{{ t('lost_your_password') }}
									</a> / <a href="{{ \App\Helpers\UrlGen::register() }}">
										{{ t('register') }}
									</a>
								</p>
								<div style=" clear:both"></div>
							</div>
							
							@include('layouts.inc.tools.captcha', ['label' => true])
						
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary float-end">{{ t('log_in') }}</button>
					<button type="button" class="btn btn-default" data-bs-dismiss="modal">{{ t('Cancel') }}</button>
				</div>
			</form>
		
		</div>
	</div>
</div>
