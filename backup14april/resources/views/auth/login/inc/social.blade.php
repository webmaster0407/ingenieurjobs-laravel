@if (socialLoginIsEnabled())
	@if (isset($boxedCol) && !empty($boxedCol) && is_numeric($boxedCol))
		<div class="col-12">
			<div class="row d-flex justify-content-center">
				<div class="col-{{ $boxedCol }}"> {{-- col-8 --}}
					@endif
					
					<?php
					$sGutter = 'gx-2 gy-2';
					if (isset($socialCol) && !empty($socialCol) && is_numeric($socialCol)) {
						if ($socialCol >= 10) {
							$sGutter = 'gx-2 gy-1';
						}
						$sCol = 'col-xl-6 col-lg-6 col-md-6';
						$sCol = str_replace('-6', '-' . $socialCol, $sCol);
					} else {
						$sCol = 'col-xl-6 col-lg-6 col-md-6';
					}
					?>
					
					<div class="row mb-3 d-flex justify-content-center {{ $sGutter }}">
						@if (config('settings.social_auth.facebook_client_id') && config('settings.social_auth.facebook_client_secret'))
							<div class="{{ $sCol }} col-sm-12 col-12">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 btn btn-fb">
									<a href="{{ url('auth/facebook') }}" title="{!! strip_tags(t('Login with Facebook')) !!}">
										<i class="fab fa-facebook"></i> {!! t('Login with Facebook') !!}
									</a>
								</div>
							</div>
						@endif
						@if (config('settings.social_auth.linkedin_client_id') && config('settings.social_auth.linkedin_client_secret'))
							<div class="{{ $sCol }} col-sm-12 col-12">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 btn btn-lkin">
									<a href="{{ url('auth/linkedin') }}" title="{!! strip_tags(t('Login with LinkedIn')) !!}">
										<i class="fab fa-linkedin"></i> {!! t('Login with LinkedIn') !!}
									</a>
								</div>
							</div>
						@endif
						@if (config('settings.social_auth.twitter_client_id') && config('settings.social_auth.twitter_client_secret'))
							<div class="{{ $sCol }} col-sm-12 col-12">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 btn btn-tw">
									<a href="{{ url('auth/twitter') }}" title="{!! strip_tags(t('Login with Twitter')) !!}">
										<i class="fab fa-twitter"></i> {!! t('Login with Twitter') !!}
									</a>
								</div>
							</div>
						@endif
						@if (config('settings.social_auth.google_client_id') && config('settings.social_auth.google_client_secret'))
							<div class="{{ $sCol }} col-sm-12 col-12">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 btn btn-ggl">
									<a href="{{ url('auth/google') }}" title="{!! strip_tags(t('Login with Google')) !!}">
										<i class="fab fa-google"></i> {!! t('Login with Google') !!}
									</a>
								</div>
							</div>
						@endif
					</div>
					
					<div class="row d-flex justify-content-center loginOr my-4">
						<div class="col-xl-12">
							<hr class="hrOr">
							<span class="spanOr rounded">{{ t('or') }}</span>
						</div>
					</div>
					
					@if (isset($boxedCol) && !empty($boxedCol) && is_numeric($boxedCol))
				</div>
			</div>
		</div>
	@endif
@endif