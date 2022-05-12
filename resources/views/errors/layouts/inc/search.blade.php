<?php
// Fix: 404 error page don't know language and country objects.
$countryCode = 'us'; /* @fixme - Issue only in multi-countries mode. Get the real default country. */
$searchUrl = \App\Helpers\UrlGen::search();
?>
<div class="p-0 mt-lg-4 mt-md-3 mt-3"></div>
<div class="container">
	
	<div class="intro only-search-bar">
		<div class="container text-center">
			
			<form id="search" name="search" action="{{ $searchUrl }}" method="GET">
				<div class="row search-row animated fadeInUp">
					
					<div class="col-md-5 col-sm-12 search-col relative mb-1 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0">
						<div class="search-col-inner">
							<i class="fas {{ (config('lang.direction')=='rtl') ? 'fa-angle-double-left' : 'fa-angle-double-right' }} icon-append"></i>
							<div class="search-col-input">
								<input class="form-control has-icon" name="q" placeholder="{{ t('what') }}" type="text" value="">
							</div>
						</div>
					</div>
					
					<input type="hidden" id="lSearch" name="l" value="">
					
					<div class="col-md-5 col-sm-12 search-col relative locationicon mb-1 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0">
						<div class="search-col-inner">
							<i class="fas fa-map-marker-alt icon-append"></i>
							<div class="search-col-input">
								<input class="form-control locinput input-rel searchtag-input has-icon"
									   id="locSearch"
									   name="location"
									   placeholder="{{ t('where') }}"
									   type="text"
									   value=""
								>
							</div>
						</div>
					</div>
					
					<div class="col-md-2 col-sm-12 search-col">
						<div class="search-btn-border bg-primary">
							<button class="btn btn-primary btn-search btn-block btn-gradient">
								<i class="fas fa-search"></i> <strong>{{ t('find') }}</strong>
							</button>
						</div>
					</div>
				
				</div>
			</form>
		
		</div>
	</div>
	
</div>
