<?php
$hideOnMobile = '';
if (isset($featuredCompaniesOptions, $featuredCompaniesOptions['hide_on_mobile']) and $featuredCompaniesOptions['hide_on_mobile'] == '1') {
	$hideOnMobile = ' hidden-sm';
}
?>
@if (isset($featuredCompanies) and !empty($featuredCompanies))
	@if (isset($featuredCompanies->companies) and $featuredCompanies->companies->count() > 0)
		@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'], ['hideOnMobile' => $hideOnMobile])
		<div class="container{{ $hideOnMobile }}">
			<div class="col-lg-12 content-box layout-section">
				<div class="row row-featured row-featured-category row-featured-company">
					<div class="col-lg-12  box-title no-border">
						<div class="inner">
							<h2>
								<span class="title-3">{!! $featuredCompanies->title !!}</span>
								<a class="sell-your-item" href="{{ $featuredCompanies->link }}">
									{{ t('View more') }}
									<i class="fas fa-bars"></i>
								</a>
							</h2>
						</div>
					</div>
			
					@foreach($featuredCompanies->companies as $key => $iCompany)
						<?php
							$companyUrl = \App\Helpers\UrlGen::company(null, $iCompany->id);
						?>
						<div class="col-lg-2 col-md-3 col-sm-3 col-4 f-category">
							<a href="{{ $companyUrl }}">
								<img alt="{{ $iCompany->name }}" class="img-fluid" src="{{ imgUrl(\App\Models\Company::getLogo($iCompany->logo), 'medium') }}">
								<h6> {{ t('Jobs at') }}
									<span class="company-name">{{ $iCompany->name }}</span>
									<span class="jobs-count text-muted">({{ $iCompany->posts_count }})</span>
								</h6>
							</a>
						</div>
					@endforeach
			
				</div>
			</div>
		</div>
	@endif
@endif
