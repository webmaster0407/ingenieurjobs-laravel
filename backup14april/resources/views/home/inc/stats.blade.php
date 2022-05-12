<?php
$iconPosts = $statsOptions['icon_count_posts'] ?? 'fas fa-briefcase';
$iconUsers = $statsOptions['icon_count_users'] ?? 'fas fa-users';
$iconLocations = $statsOptions['icon_count_locations'] ?? 'far fa-map';
$prefixPosts = $statsOptions['prefix_count_posts'] ?? '';
$suffixPosts = $statsOptions['suffix_count_posts'] ?? '';
$prefixUsers = $statsOptions['prefix_count_users'] ?? '';
$suffixUsers = $statsOptions['suffix_count_users'] ?? '';
$prefixLocations = $statsOptions['prefix_count_locations'] ?? '';
$suffixLocations = $statsOptions['suffix_count_locations'] ?? '';
$disableCounterUp = $statsOptions['disable_counter_up'] ?? false;
$counterUpDelay = $statsOptions['counter_up_delay'] ?? 10;
$counterUpTime = $statsOptions['counter_up_time'] ?? 2000;
$hideOnMobile = (isset($statsOptions, $statsOptions['hide_on_mobile']) && $statsOptions['hide_on_mobile'] == '1') ? ' hidden-sm' : '';
?>
@if (isset($countPosts, $countUsers, $countLocations))
@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'], ['hideOnMobile' => $hideOnMobile])
<div class="container-state{{ $hideOnMobile }}">
	<div class="container page-info page-info-lite rounded">
		<div class="text-center section-promo">
			<div class="row">
				
				@if (isset($countPosts))
				<div class="col-sm-4 col-12">
					<div class="iconbox-wrap">
						<div class="iconbox">
							<div class="iconbox-wrap-icon">
								<i class="{{ $iconPosts }}"></i>
							</div>
							<div class="iconbox-wrap-content">
								<h5>
									@if (isset($prefixPosts) && !empty($prefixPosts))<span>{{ $prefixPosts }}</span>@endif
									<span class="counter">{{ $countPosts }}</span>
									@if (isset($suffixPosts) && !empty($suffixPosts))<span>{{ $suffixPosts }}</span>@endif
								</h5>
								<div class="iconbox-wrap-text">{{ t('Jobs') }}</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				
				@if (isset($countUsers))
				<div class="col-sm-4 col-12">
					<div class="iconbox-wrap">
						<div class="iconbox">
							<div class="iconbox-wrap-icon">
								<i class="fas fa-users"></i>
							</div>
							<div class="iconbox-wrap-content">
								<h5>
									@if (isset($prefixUsers) && !empty($prefixUsers))<span>{{ $prefixUsers }}</span>@endif
									<span class="counter">{{ $countUsers }}</span>
									@if (isset($suffixUsers) && !empty($suffixUsers))<span>{{ $suffixUsers }}</span>@endif
								</h5>
								<div class="iconbox-wrap-text">{{ t('Users') }}</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				
				@if (isset($countLocations))
				<div class="col-sm-4 col-12">
					<div class="iconbox-wrap">
						<div class="iconbox">
							<div class="iconbox-wrap-icon">
								<i class="far fa-map"></i>
							</div>
							<div class="iconbox-wrap-content">
								<h5>
									@if (isset($prefixLocations) && !empty($prefixLocations))<span>{{ $prefixLocations }}</span>@endif
									<span class="counter">{{ $countLocations }}</span>
									@if (isset($suffixLocations) && !empty($suffixLocations))<span>{{ $suffixLocations }}</span>@endif
								</h5>
								<div class="iconbox-wrap-text">{{ t('locations') }}</div>
							</div>
						</div>
					</div>
				</div>
				@endif
	
			</div>
		</div>
	</div>
</div>
@endif

@section('after_scripts')
	@parent
	@if (!isset($disableCounterUp) || !$disableCounterUp)
		<script>
			let counterUpEl = $('.counter');
			counterUpEl.counterUp({
				delay: {{ $counterUpDelay }},
				time: {{ $counterUpTime }}
			});
			counterUpEl.addClass('animated fadeInDownBig');
			$('.iconbox-wrap-text').addClass('animated fadeIn');
		</script>
	@endif
@endsection
