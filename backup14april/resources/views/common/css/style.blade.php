@include('common.css.skin')

<style>
/* === Body === */

<?php
// Logo Max Sizes
$logoMaxWidth = config('larapen.core.logoSize.max.width', 430);
$logoMaxHeight = config('larapen.core.logoSize.max.height', 80);
if (!empty(config('settings.style.header_height'))) {
	$logoMaxHeight = strToDigit(config('settings.style.header_height'), $logoMaxHeight);
}

// Logo Sizes
$logoWidth = strToDigit(config('settings.style.logo_width'), 216);
$logoHeight = strToDigit(config('settings.style.logo_height'), 40);
if (config('settings.style.logo_aspect_ratio')) {
	if ($logoHeight <= $logoWidth) {
		$logoWidth = 'auto';
		$logoHeight = $logoHeight . 'px';
	} else {
		$logoWidth = $logoWidth . 'px';
		$logoHeight = 'auto';
	}
} else {
	$logoWidth = $logoWidth . 'px';
	$logoHeight = $logoHeight . 'px';
}
?>
.main-logo {
	width: {{ $logoWidth }};
	height: {{ $logoHeight }};
	max-width: {{ $logoMaxWidth }}px !important;
	max-height: {{ $logoMaxHeight }}px !important;
}
@if (!empty(config('settings.style.page_width')))
	<?php $pageWidth = strToDigit(config('settings.style.page_width')) . 'px'; ?>
	@media (min-width: 1200px) {
		.container {
			max-width: {{ $pageWidth }};
		}
	}
@endif
@if (!empty(config('settings.style.body_background_color')) || !empty(config('settings.style.body_text_color')) || !empty(config('settings.style.body_background_image')))
	body {
	@if (!empty(config('settings.style.body_background_color')))
		background-color: {{ config('settings.style.body_background_color') }};
	@endif
	@if (!empty(config('settings.style.body_text_color')))
		color: {{ config('settings.style.body_text_color') }};
	@endif
	@if (!empty(config('settings.style.body_background_image')))
		background-image: url({{ imgUrl(config('settings.style.body_background_image'), 'bgBody') }});
		background-repeat: repeat;
		@if (!empty(config('settings.style.body_background_image_fixed')))
			background-attachment: fixed;
		@endif
	@endif
	}
@endif
@if (!empty(config('settings.style.body_background_color')) || !empty(config('settings.style.body_background_image')))
	#wrapper { background-color: rgba(0, 0, 0, 0); }
@endif
@if (!empty(config('settings.style.title_color')))
	.skin h1,
	.skin h2,
	.skin h3,
	.skin h4,
	.skin h5,
	.skin h6 {
		color: {{ config('settings.style.title_color') }};
	}
@endif
@if (!empty(config('settings.style.link_color')))
	.skin a,
	.skin .link-color {
		color: {{ config('settings.style.link_color') }};
	}
@endif
@if (!empty(config('settings.style.link_color_hover')))
	.skin a:hover,
	.skin a:focus {
		color: {{ config('settings.style.link_color_hover') }};
	}
@endif
@if (!empty(config('settings.style.progress_background_color')))
	.skin .pace .pace-progress {
		background: {{ config('settings.style.progress_background_color') }} none repeat scroll 0 0;
	}
@endif

/* === Header === */
@if (!empty(config('settings.style.header_sticky')))
	.navbar.navbar-site {
		position: fixed !important;
	}
@else
	.navbar.navbar-site {
		position: absolute !important;
	}
@endif
@if (!empty(config('settings.style.header_height')))
	<?php
	// Default values
	$defaultHeight = 80;
	$defaultPadding = 20;
	$defaultMargin = 0;
	
	// Get known value from Settings
	$headerHeight = strToDigit(config('settings.style.header_height'));
	
	$headerBottomBorderSize = 0;
	if (!empty(config('settings.style.header_bottom_border_width'))) {
		$headerBottomBorderSize = strToDigit(config('settings.style.header_bottom_border_width'));
	}
	$wrapperPaddingTop = $headerHeight + $headerBottomBorderSize;
	
	// Calculate unknown values
	$padding = floor(($headerHeight * $defaultPadding) / $defaultHeight);
	$margin = floor(($headerHeight * $defaultMargin) / $defaultHeight);
	$padding = abs(($padding - ($defaultPadding / 2)) * 2);
	$margin = abs(($margin - ($defaultMargin / 2)) * 2);
	
	// $wrapperPaddingTop + 4 for default margin/padding values
	?>
	#wrapper {
		padding-top: {{ ($wrapperPaddingTop + 4) }}px;
	}
	
	.navbar.navbar-site .navbar-identity .navbar-brand {
		height: {{ $headerHeight }}px;
		padding-top: {{ $padding }}px;
		padding-bottom: {{ $padding }}px;
	}
	
	@media (max-width: 767px) {
		#wrapper {
			padding-top: {{ $wrapperPaddingTop }}px;
		}
		.navbar-site.navbar .navbar-identity {
			height: {{ $headerHeight }}px;
		}
		.navbar-site.navbar .navbar-identity .btn,
		.navbar-site.navbar .navbar-identity .navbar-toggler {
			margin-top: {{ $padding }}px;
		}
	}
	
	@media (max-width: 479px) {
		#wrapper {
			padding-top: {{ $wrapperPaddingTop }}px;
		}
		.navbar-site.navbar .navbar-identity {
			height: {{ $headerHeight }}px;
		}
	}
	
	@media (min-width: 768px) and (max-width: 992px) {
		.navbar.navbar-site .navbar-identity a.logo {
			height: {{ $headerHeight }}px;
		}
		.navbar.navbar-site .navbar-identity a.logo-title {
			padding-top: {{ $padding }}px;
		}
	}
	
	@media (min-width: 768px) {
		.navbar.navbar-site .navbar-identity {
			margin-top: {{ $margin }}px;
		}
		.navbar.navbar-site .navbar-collapse {
			margin-top: {{ $margin }}px;
		}
	}
@endif
@if (!empty(config('settings.style.header_background_color')))
	.navbar.navbar-site {
		background-color: {{ config('settings.style.header_background_color') }} !important;
	}
@endif
@if (!empty(config('settings.style.header_bottom_border_width')))
	<?php $headerBottomBorderSize = strToDigit(config('settings.style.header_bottom_border_width')) . 'px'; ?>
	.navbar.navbar-site {
		border-bottom-width: {{ $headerBottomBorderSize }} !important;
		border-bottom-style: solid !important;
	}
@endif
@if (!empty(config('settings.style.header_bottom_border_color')))
	.navbar.navbar-site {
		border-bottom-color: {{ config('settings.style.header_bottom_border_color') }} !important;
	}
@endif
@if (!empty(config('settings.style.header_link_color')))
	@media (min-width: 768px) {
		.navbar.navbar-site ul.navbar-nav > li > a {
			color: {{ config('settings.style.header_link_color') }} !important;
		}
	}
	
	.navbar.navbar-site ul.navbar-nav > .open > a,
	.navbar.navbar-site ul.navbar-nav > .open > a:focus,
	.navbar.navbar-site ul.navbar-nav > .open > a:hover {
		color: {{ config('settings.style.header_link_color') }} !important;
	}
@endif
@if (!empty(config('settings.style.header_link_color_hover')))
	@media (min-width: 768px) {
		.navbar.navbar-site ul.navbar-nav > li > a:hover,
		.navbar.navbar-site ul.navbar-nav > li > a:focus {
			color: {{ config('settings.style.header_link_color_hover') }} !important;
		}
	}
@endif

/* === Footer === */
@if (!empty(config('settings.style.footer_background_color')))
	.footer-content {
		background: {{ config('settings.style.footer_background_color') }};
	}
@endif
@if (!empty(config('settings.style.footer_text_color')))
	.footer-content {
		color: {{ config('settings.style.footer_text_color') }};
	}
@endif
@if (!empty(config('settings.style.footer_title_color')))
	.footer-title {
		color: {{ config('settings.style.footer_title_color') }};
	}
@endif
@if (!empty(config('settings.style.footer_link_color')))
	.footer-nav li a:not(.btn):not(.icon-color),
	.copy-info a {
		color: {{ config('settings.style.footer_link_color') }} !important;
	}
@endif
@if (!empty(config('settings.style.footer_link_color_hover')))
	.skin .footer-nav li a:not(.btn):not(.icon-color):hover,
	.skin .footer-nav li a:not(.btn):not(.icon-color):focus,
	.copy-info a:focus,
	.copy-info a:hover {
		color: {{ config('settings.style.footer_link_color_hover') }} !important;
	}
@endif
@if (!empty(config('settings.style.payment_icon_top_border_width')))
	<?php $paymentIconTopBorderSize = strToDigit(config('settings.style.payment_icon_top_border_width')) . 'px'; ?>
	.payment-method-logo {
		border-top-width: {{ $paymentIconTopBorderSize }};
	}
	.footer-content hr {
		border-top-width: {{ $paymentIconTopBorderSize }};
	}
@endif
@if (!empty(config('settings.style.payment_icon_top_border_color')))
	.payment-method-logo {
		border-top-color: {{ config('settings.style.payment_icon_top_border_color') }};
	}
	.footer-content hr {
		border-top-color: {{ config('settings.style.payment_icon_top_border_color') }};
	}
@endif
@if (!empty(config('settings.style.payment_icon_bottom_border_width')))
	<?php $paymentIconBottomBorderSize = strToDigit(config('settings.style.payment_icon_bottom_border_width')) . 'px'; ?>
	.payment-method-logo {
		border-bottom-width: {{ $paymentIconBottomBorderSize }};
	}
@endif
@if (!empty(config('settings.style.payment_icon_bottom_border_color')))
	.payment-method-logo {
		border-bottom-color: {{ config('settings.style.payment_icon_bottom_border_color') }};
	}
@endif

/* === Button: Add Listing === */
@if (!empty(config('settings.style.btn_listing_bg_top_color')) || !empty(config('settings.style.btn_listing_bg_bottom_color')))
	<?php
	$btnBackgroundTopColor = '#ffeb43';
	$btnBackgroundBottomColor = '#fcde11';
	if (!empty(config('settings.style.btn_listing_bg_top_color'))) {
		$btnBackgroundTopColor = config('settings.style.btn_listing_bg_top_color');
	}
	if (!empty(config('settings.style.btn_listing_bg_bottom_color'))) {
		$btnBackgroundBottomColor = config('settings.style.btn_listing_bg_bottom_color');
	}
	?>
	a.btn-listing,
	button.btn-listing,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing,
	#homepage a.btn-listing {
		background-image: linear-gradient(to bottom, {{ $btnBackgroundTopColor }} 0,{{ $btnBackgroundBottomColor }} 100%);
	}
@endif
@if (!empty(config('settings.style.btn_listing_border_color')))
	a.btn-listing,
	button.btn-listing,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing,
	#homepage a.btn-listing {
		border-color: {{ config('settings.style.btn_listing_border_color') }};
	}
@endif
@if (!empty(config('settings.style.btn_listing_text_color')))
	a.btn-listing,
	button.btn-listing,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing,
	#homepage a.btn-listing {
		color: {{ config('settings.style.btn_listing_text_color') }} !important;
	}
@endif
@if (!empty(config('settings.style.btn_listing_bg_top_color_hover')) || !empty(config('settings.style.btn_listing_bg_bottom_color_hover')))
	<?php
	$btnBackgroundTopColorHover = '#fff860';
	$btnBackgroundBottomColorHover = '#ffeb43';
	if (!empty(config('settings.style.btn_listing_bg_top_color_hover'))) {
		$btnBackgroundTopColorHover = config('settings.style.btn_listing_bg_top_color_hover');
	}
	if (!empty(config('settings.style.btn_listing_bg_bottom_color_hover'))) {
		$btnBackgroundBottomColorHover = config('settings.style.btn_listing_bg_bottom_color_hover');
	}
	?>
	a.btn-listing:hover,
	a.btn-listing:focus,
	button.btn-listing:hover,
	button.btn-listing:focus,
	li.postadd > a.btn-listing:hover,
	li.postadd > a.btn-listing:focus,
	#homepage a.btn-listing:hover,
	#homepage a.btn-listing:focus {
		background-image: linear-gradient(to bottom, {{ $btnBackgroundTopColorHover }} 0,{{ $btnBackgroundBottomColorHover }} 100%) !important;
	}
@endif
@if (!empty(config('settings.style.btn_listing_border_color_hover')))
	a.btn-listing:hover,
	a.btn-listing:focus,
	button.btn-listing:hover,
	button.btn-listing:focus,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing:hover,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing:focus,
	#homepage a.btn-listing:hover,
	#homepage a.btn-listing:focus {
		border-color: {{ config('settings.style.btn_listing_border_color_hover') }} !important;
	}
@endif
@if (!empty(config('settings.style.btn_listing_text_color_hover')))
	a.btn-listing:hover,
	a.btn-listing:focus,
	button.btn-listing:hover,
	button.btn-listing:focus,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing:hover,
	.navbar.navbar-site ul.navbar-nav > li.postadd > a.btn-listing:focus,
	#homepage a.btn-listing:hover,
	#homepage a.btn-listing:focus {
		color: {{ config('settings.style.btn_listing_text_color_hover') }} !important;
	}
@endif

/* === Other: Grid View Columns === */
@if (!empty(config('settings.list.grid_view_cols')))
	<?php
	$gridViewCols = config('settings.list.grid_view_cols');
	$gridWidth = round_val(100 / $gridViewCols, 2);
	
	/* Ribbons */
	$gridRibbonLeft = round_val((($gridViewCols * 30) / 4) - (4 - $gridViewCols), 2); 		   /* 30px => 4 items */
	$noSidebarGridRibbonLeft = round_val((($gridViewCols * 22) / 4) - (4 - $gridViewCols), 2); /* 22px => 4 items */
	
	/* Ribbons: Media Screen - Dynamic */
	$gridRibbonLeft992 = round_val((($gridViewCols * 36) / 4) - (4 - $gridViewCols), 2); 		  /* 36px => 4 items */
	$noSidebarGridRibbonLeft992 = round_val((($gridViewCols * 26) / 4) - (4 - $gridViewCols), 2); /* 26px => 4 items */
	$gridRibbonLeft768 = round_val((($gridViewCols * 35) / 4) - (4 - $gridViewCols), 2); 		  /* 35px => 4 items */
	$noSidebarGridRibbonLeft768 = round_val((($gridViewCols * 25) / 4) - (4 - $gridViewCols), 2); /* 25px => 4 items */
	?>
	@if (config('lang.direction') == 'rtl')
		.make-grid .item-list {
			width: {{ $gridWidth }}% !important;
		}
		@media (max-width: 767px) {
			.make-grid .item-list {
				width: 50% !important;
			}
		}
		
		/* Ribbons */
		.make-grid .item-list .cornerRibbons {
			right: -{{ $gridRibbonLeft }}%; top: 8%;
		}
		.make-grid.noSideBar .item-list .cornerRibbons {
			right: -{{ $noSidebarGridRibbonLeft }}%; top: 8%;
		}
		
		/* Ribbons: Media Screen - Dynamic */
		@media (min-width: 992px) and (max-width: 1119px) {
			.make-grid .item-list .cornerRibbons {
				right: -{{ $gridRibbonLeft992 }}%; top: 8%;
			}
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -{{ $noSidebarGridRibbonLeft992 }}%; top: 8%;
			}
		}
		@media (min-width: 768px) and (max-width: 991px) {
			.make-grid .item-list .cornerRibbons {
				right: -{{ $gridRibbonLeft768 }}%; top: 8%;
			}
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -{{ $noSidebarGridRibbonLeft768 }}%; top: 8%;
			}
		}
		/* Ribbons: Media Screen - Fix */
		@media (max-width: 767px) {
			.make-grid .item-list {
				width: 50%;
			}
		}
		@media (max-width: 767px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -10%; top: 8%;
			}
		}
		@media (max-width: 736px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -12%; top: 8%;
			}
		}
		@media (max-width: 667px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -13%; top: 8%;
			}
		}
		@media (max-width: 568px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -14%; top: 8%;
			}
		}
		@media (max-width: 480px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				right: -22%; top: 8%;
			}
		}
		
		/* Item Border */
		.posts-wrapper.make-grid .item-list:nth-child(4n+4),
		.category-list.make-grid .item-list:nth-child(4n+4) {
			border-left: solid 1px #ddd;
		}
		
		.posts-wrapper.make-grid .item-list:nth-child(3n+3),
		.category-list.make-grid .item-list:nth-child(3n+3) {
			border-left: solid 1px #ddd;
		}
		
		.posts-wrapper.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}),
		.category-list.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}) {
			border-left: none;
		}
		
		@media (max-width: 991px) {
			.posts-wrapper.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}),
			.category-list.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}) {
				border-left-style: solid;
				border-left-width: 1px;
				border-left-color: #ddd;
			}
		}
	@else
		.make-grid .item-list {
			width: {{ $gridWidth }}% !important;
		}
		@media (max-width: 767px) {
			.make-grid .item-list {
				width: 50% !important;
			}
		}
		
		/* Ribbons */
		.make-grid .item-list .cornerRibbons {
			left: -{{ $gridRibbonLeft }}%; top: 8%;
		}
		.make-grid.noSideBar .item-list .cornerRibbons {
			left: -{{ $noSidebarGridRibbonLeft }}%; top: 8%;
		}
		
		/* Ribbons: Media Screen - Dynamic */
		@media (min-width: 992px) and (max-width: 1119px) {
			.make-grid .item-list .cornerRibbons {
				left: -{{ $gridRibbonLeft992 }}%; top: 8%;
			}
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -{{ $noSidebarGridRibbonLeft992 }}%; top: 8%;
			}
		}
		@media (min-width: 768px) and (max-width: 991px) {
			.make-grid .item-list .cornerRibbons {
				left: -{{ $gridRibbonLeft768 }}%; top: 8%;
			}
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -{{ $noSidebarGridRibbonLeft768 }}%; top: 8%;
			}
		}
		/* Ribbons: Media Screen - Fix */
		@media (max-width: 767px) {
			.make-grid .item-list {
				width: 50%;
			}
		}
		@media (max-width: 767px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -10%; top: 8%;
			}
		}
		@media (max-width: 736px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -12%; top: 8%;
			}
		}
		@media (max-width: 667px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -13%; top: 8%;
			}
		}
		@media (max-width: 568px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -14%; top: 8%;
			}
		}
		@media (max-width: 480px) {
			.make-grid .item-list .cornerRibbons,
			.make-grid.noSideBar .item-list .cornerRibbons {
				left: -22%; top: 8%;
			}
		}
		
		/* Item Border */
		.posts-wrapper.make-grid .item-list:nth-child(4n+4),
		.category-list.make-grid .item-list:nth-child(4n+4) {
			border-right: solid 1px #ddd;
		}
		
		.posts-wrapper.make-grid .item-list:nth-child(3n+3),
		.category-list.make-grid .item-list:nth-child(3n+3) {
			border-right: solid 1px #ddd;
		}
		
		.posts-wrapper.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}),
		.category-list.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}) {
			border-right: none;
		}
		
		@media (max-width: 991px) {
			.posts-wrapper.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}),
			.category-list.make-grid .item-list:nth-child({{ $gridViewCols }}n+{{ $gridViewCols }}) {
				border-right-style: solid;
				border-right-width: 1px;
				border-right-color: #ddd;
			}
		}
	@endif
@endif
</style>

<style>
/* === CSS Fix === */
.f-category h6 {
	color: #333;
}
.photo-count {
	color: #292b2c;
}
.page-info-lite h5 {
	color: #999999;
}
h4.item-price {
	color: #292b2c;
}
h5.company-title a {
	color: #999;
}
</style>
