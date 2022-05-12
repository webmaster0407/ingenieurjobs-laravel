<?php
if (!isset($cacheExpiration)) {
    $cacheExpiration = (int)config('settings.optimization.cache_expiration');
}
$hideOnMobile = '';
if (isset($widget->options, $widget->options['hide_on_mobile']) && $widget->options['hide_on_mobile'] == '1') {
	$hideOnMobile = ' hidden-sm';
}
?>
@if (isset($widget) && !empty($widget) && $widget->posts->count() > 0)
	<?php
	$isFromHome = (
	Illuminate\Support\Str::contains(
		Illuminate\Support\Facades\Route::currentRouteAction(),
		'Web\HomeController'
	)
	);
	?>
	@if ($isFromHome)
		@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'], ['hideOnMobile' => $hideOnMobile])
	@endif
	<div class="container{{ $isFromHome ? '' : ' my-3' }}{{ $hideOnMobile }}">
		<div class="col-xl-12 content-box layout-section">
			<div class="row row-featured row-featured-category">
				
				<div class="col-xl-12 box-title no-border">
					<div class="inner">
						<h2>
							<span class="title-3">{!! $widget->title !!}</span>
							<a href="{{ $widget->link }}" class="sell-your-item">
								{{ t('View more') }} <i class="fas fa-bars"></i>
							</a>
						</h2>
					</div>
				</div>
				
				<div class="posts-wrapper jobs-list">
					<?php $posts = $widget->posts; ?>
					
					@includeFirst([config('larapen.core.customizedViewPath') . 'search.inc.posts.template.list', 'search.inc.posts.template.list'])
				</div>
				
				@if (isset($widget->options) && isset($widget->options['show_view_more_btn']) && $widget->options['show_view_more_btn'] == '1')
					<div class="tab-box save-search-bar text-center">
						<a class="text-uppercase" href="{{ \App\Helpers\UrlGen::search() }}">
							<i class="fas fa-briefcase"></i> {{ t('View all jobs') }}
						</a>
					</div>
				@endif
				
			</div>
		</div>
	</div>
@endif

@section('modal_location')
	@parent
	@includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.modal.send-by-email', 'layouts.inc.modal.send-by-email'])
@endsection

@section('after_scripts')
    @parent
@endsection