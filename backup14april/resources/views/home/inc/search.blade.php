<?php
// Init.
$sForm = [
	'enableFormAreaCustomization' => '0',
	'hideTitles'                  => '0',
	'title'                       => t('homepage_title_text'),
	'subTitle'                    => t('simple_fast_and_efficient'),
	'bigTitleColor'               => '', // 'color: #FFF;',
	'subTitleColor'               => '', // 'color: #FFF;',
	'backgroundColor'             => '', // 'background-color: #444;',
	'backgroundImage'             => '', // null,
	'height'                      => '', // '450px',
	'parallax'                    => '0',
	'hideForm'                    => '0',
	'formBorderColor'             => '', // 'background-color: #7324bc;',
	'formBorderSize'              => '', // '5px',
	'formBtnBackgroundColor'      => '', // 'background-color: #7324bc; border-color: #7324bc;',
	'formBtnTextColor'            => '', // 'color: #FFF;',
];

// Get Search Form Options
if (isset($searchFormOptions)) {
	if (isset($searchFormOptions['enable_form_area_customization']) and !empty($searchFormOptions['enable_form_area_customization'])) {
		$sForm['enableFormAreaCustomization'] = $searchFormOptions['enable_form_area_customization'];
	}
	if (isset($searchFormOptions['hide_titles']) and !empty($searchFormOptions['hide_titles'])) {
		$sForm['hideTitles'] = $searchFormOptions['hide_titles'];
	}
	if (isset($searchFormOptions['title_' . config('app.locale')]) and !empty($searchFormOptions['title_' . config('app.locale')])) {
		$sForm['title'] = $searchFormOptions['title_' . config('app.locale')];
		$sForm['title'] = replaceGlobalPatterns($sForm['title']);
	}
	if (isset($searchFormOptions['sub_title_' . config('app.locale')]) and !empty($searchFormOptions['sub_title_' . config('app.locale')])) {
		$sForm['subTitle'] = $searchFormOptions['sub_title_' . config('app.locale')];
		$sForm['subTitle'] = replaceGlobalPatterns($sForm['subTitle']);
	}
	if (isset($searchFormOptions['parallax']) and !empty($searchFormOptions['parallax'])) {
		$sForm['parallax'] = $searchFormOptions['parallax'];
	}
	if (isset($searchFormOptions['hide_form']) and !empty($searchFormOptions['hide_form'])) {
		$sForm['hideForm'] = $searchFormOptions['hide_form'];
	}
}

// Country Map status (shown/hidden)
$showMap = false;
if (file_exists(config('larapen.core.maps.path') . config('country.icode') . '.svg')) {
	if (isset($citiesOptions) and isset($citiesOptions['show_map']) and $citiesOptions['show_map'] == '1') {
		$showMap = true;
	}
}
$hideOnMobile = '';
if (isset($searchFormOptions, $searchFormOptions['hide_on_mobile']) and $searchFormOptions['hide_on_mobile'] == '1') {
	$hideOnMobile = ' hidden-sm';
}
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.24limousine.com/wp-content/themes/24Limousine/assets/js/owl.carousel.min.js"></script>
@if (isset($sForm['enableFormAreaCustomization']) and $sForm['enableFormAreaCustomization'] == '1')
	
	@if (isset($firstSection) and !$firstSection)
		<div class="p-0 mt-lg-4 mt-md-3 mt-3"></div>
	@endif
	
	<?php $parallax = (isset($sForm['parallax']) and $sForm['parallax'] == '1') ? ' parallax' : ''; ?>
	
		<div class="container-home">
		<div class="container create-job-outer">
	<div class="create-job-left">
	<div class="new-class">
	<span><strong>NEW</strong> job class</span>
	</div>
	<div class="job-text">
	<span>Create New <strong> Job</strong></span><br>
	<span>We Are Here<strong> To Help</strong></span>
	</div>
	<div class="post-text">
	<p>Do you have a post to be filled within your company? Find the right <br>candidate in a few clicks at Ingenieurjobs.</p>
	</div>
	
	<div class="creat-btn">
	<ul>
		
					
					
						<li class="nav-item postadd">
							<a class="btn btn-block btn-border btn-listing" href="{{ url('/pricingplan')}}">
								<i class="fa fa-plus"></i> {{ t('Create Job') }}
							</a>
						</li>
				
					
					
					
				</ul>
	</ul>
	</div>
	</div>
	<div class="create-job-right">
	<img src="./images/smiling-woman.png">
	</div>
	</div>
	</div>
	
	<!------logoslider-------------->
	
	
	<link rel="stylesheet" type="text/css" href="http://www.24limousine.com/wp-content/themes/24Limousine/assets/css/owl.carousel.min.css">
<div class="cover-wrapper">
	<div id="client-logos" class="owl-carousel text-center">
	 <div class="item">
	    	<div class="client-inners">
			<a href="" target="_blank">
		      <img src="./images/BRETLA-ENGG (1).png" alt=""/>
			  </a>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/airfinity_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/aptiv_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/worley_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/rina1_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/eutelsat_new_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/airbus_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/nelr_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/lely1_logo_80x40.png" alt=""/>
		    </div>
	    </div>
	    <div class="item">
	    	<div class="client-inners">
		      <img src="./images/eurocontrol_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		 <div class="item">
	    	<div class="client-inners">
		      <img src="./images/ams_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		 <div class="item">
	    	<div class="client-inners">
		      <img src="./images/asml_logo_2020_80x40.png" alt=""/>
		    </div>
	    </div>
		 <div class="item">
	    	<div class="client-inners">
		      <img src="./images/stryker_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		 <div class="item">
	    	<div class="client-inners">
		      <img src="./images/capgemini_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		 <div class="item">
	    	<div class="client-inners">
		      <img src="./images/ceres_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/air_liquide_logo_new_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/aston_martin_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/ge_aviation_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/whirlpool_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/vishay_measurements_group_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/vitesco_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/honeywell_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/ge_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/stellantis_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/h2_green_steel_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/eaton_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		<div class="item">
	    	<div class="client-inners">
		      <img src="./images/isx_financial_logo_80x40.png" alt=""/>
		    </div>
	    </div>
		
	</div>
</div>

	
	
	<!------logosliderend-------------->
	<div class="Find-job">
	<div class="intro {{ $hideOnMobile }}{{ $parallax }}">
			
			@if ($sForm['hideTitles'] != '1')
				<h1 class="intro-title animated fadeInDown">
					{{ $sForm['title'] }}
				</h1>
				<p class="sub animateme fittext3 animated fadeIn">
					{!! $sForm['subTitle'] !!}
				</p>
			@endif
			
			@if ($sForm['hideForm'] != '1')
				<form id="search" name="search" action="{{ \App\Helpers\UrlGen::search() }}" method="GET">
					<div class="row search-row animated fadeInUp">
						
						<div class="col-md-5 col-sm-12 search-col relative mb-1 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0">
							<div class="search-col-inner">
								<i class="fas {{ (config('lang.direction')=='rtl') ? 'fa-angle-double-left' : 'fa-angle-double-right' }} icon-append"></i>
								<div class="search-col-input" id="serh-input">
									<input class="form-control has-icon" name="q" placeholder="{{ t('what') }}" type="text" value="">
								</div>
							</div>
						</div>
						
						<input type="hidden" id="lSearch" name="l" value="">
						
						<div class="col-md-5 col-sm-12 search-col relative locationicon mb-1 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0">
							<div class="search-col-inner">
								<i class="fas fa-map-marker-alt icon-append"></i>
								<div class="search-col-input">
									@if ($showMap)
										<input class="form-control locinput input-rel searchtag-input has-icon"
											   id="locSearch"
											   name="location"
											   placeholder="{{ t('where') }}"
											   type="text"
											   value=""
											   data-bs-placement="top"
											   data-bs-toggle="tooltipHover"
											   title="{{ t('Enter a city name OR a state name with the prefix', ['prefix' => t('area')]) . t('State Name') }}"
										>
									@else
										<input class="form-control locinput input-rel searchtag-input has-icon"
											   id="locSearch"
											   name="location"
											   placeholder="{{ t('where') }}"
											   type="text"
											   value=""
										>
									@endif
								</div>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-12 search-col">
							<div class="search-btn-border bg-primary" id="search-btn">
								<button class="btn btn-primary btn-search btn-block btn-gradient">
									<!--i class="fas fa-search"></i--> <strong>{{ ('Search') }}</strong>
								</button>
							</div>
						</div>
					
					</div>
				</form>
			@endif
		
		</div>
		</div>
	

@else
	
	@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'])
	<div class="intro only-search-bar{{ $hideOnMobile }}">
		<div class="container text-center">
			
			@if ($sForm['hideForm'] != '1')
				<form id="search" name="search" action="{{ \App\Helpers\UrlGen::search() }}" method="GET">
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
									@if ($showMap)
										<input class="form-control locinput input-rel searchtag-input has-icon"
											   id="locSearch"
											   name="location"
											   placeholder="{{ t('where') }}"
											   type="text"
											   value=""
											   data-bs-placement="top"
											   data-bs-toggle="tooltipHover"
											   title="{{ t('Enter a city name OR a state name with the prefix', ['prefix' => t('area')]) . t('State Name') }}"
										>
									@else
										<input class="form-control locinput input-rel searchtag-input has-icon"
											   id="locSearch"
											   name="location"
											   placeholder="{{ t('where') }}"
											   type="text"
											   value=""
										>
									@endif
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
			@endif
		
		</div>
	</div>
	
@endif
<script>
$(document).ready(function() {
    $('#client-logos').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
		 slidesToShow: 7,
		pauseOnHover: true,
		autoplay:true,
        autoplaySpeed: 300,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        },
        navText: ["<img src='http://pixsector.com/cache/a8009c95/av8a49a4f81c3318dc69d.png'/>","<img src='http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png'/>"]
    });

  });
</script>