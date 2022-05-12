<style>
@if (isset($primaryBgColor) && !empty($primaryBgColor))
/* === Skin === */
	{{-- ========= START BTN ========= --}}
	{{-- .btn-primary --}}
	.skin .btn-primary {
		color: {{ $primaryColor }};
		background-color: {{ $primaryBgColor }};
		border-color: {{ $primaryBgColor }};
	}
	.skin .btn-primary:hover,
	.skin .btn-primary:focus,
	.skin .btn-primary:active,
	.skin .btn-primary:active:focus,
	.skin .btn-primary.active,
	.skin .btn-primary.active:focus,
	.skin .show > .btn-primary.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-primary {
		color: {{ $primaryColor }};
		background-color: {{ $primaryBgColor10 }};
		border-color: {{ $primaryBgColor10 }};
		background-image: none;
	}
	.skin .btn-check:focus+.btn-primary,
	.skin .btn-primary:focus,
	.skin .btn-primary.focus {
		box-shadow: none;
	}
	
	{{-- .btn-primary-dark --}}
	.skin .btn-primary-dark {
		color: {{ $primaryDarkColor }};
		background-color: {{ $primaryDarkBgColor }};
		border-color: {{ $primaryDarkBgColor }};
	}
	.skin .btn-primary-dark:hover,
	.skin .btn-primary-dark:focus,
	.skin .btn-primary-dark:active,
	.skin .btn-primary-dark:active:focus,
	.skin .btn-primary-dark.active,
	.skin .btn-primary-dark.active:focus,
	.skin .show > .btn-primary-dark.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-primary-dark {
		color: {{ $primaryDarkColor }};
		background-color: {{ $primaryDarkBgColor10 }};
		border-color: {{ $primaryDarkBgColor10 }};
		background-image: none;
	}
	.skin .btn-check:focus+.btn-primary-dark,
	.skin .btn-primary-dark:focus,
	.skin .btn-primary-dark.focus {
		box-shadow: none;
	}
	
	{{-- .btn-outline-primary --}}
	.skin .btn-outline-primary {
		color: {{ $primaryBgColor }};
		background-color: {{ $primaryColor }};
		border-color: {{ $primaryBgColor }};
	}
	.skin .btn-outline-primary:hover,
	.skin .btn-outline-primary:focus,
	.skin .btn-outline-primary:active,
	.skin .btn-outline-primary:active:focus,
	.skin .btn-outline-primary.active,
	.skin .btn-outline-primary.active:focus,
	.skin .show > .btn-outline-primary.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-outline-primary {
		color: {{ $primaryColor }};
		background-color: {{ $primaryBgColor }};
		border-color: {{ $primaryBgColor }};
		background-image: none;
	}
	.skin .btn-check:focus+.btn-outline-primary,
	.skin .btn-outline-primary:focus,
	.skin .btn-outline-primary.focus {
		box-shadow: none;
	}
	
	{{-- .btn-primary.btn-gradient --}}
	.skin .btn-primary.btn-gradient {
		color: {{ $primaryColor }};
		background: -webkit-linear-gradient(292deg, {{ $primaryBgColor20d }} 44%, {{ $primaryBgColor }} 85%);
		background: -moz-linear-gradient(292deg, {{ $primaryBgColor20d }} 44%, {{ $primaryBgColor }} 85%);
		background: -o-linear-gradient(292deg, {{ $primaryBgColor20d }} 44%, {{ $primaryBgColor }} 85%);
		background: linear-gradient(158deg, {{ $primaryBgColor20d }} 44%, {{ $primaryBgColor }} 85%);
		border-color: {{ $primaryBgColor20d }};
		-webkit-transition: all 0.25s linear;
		-moz-transition: all 0.25s linear;
		-o-transition: all 0.25s linear;
		transition: all 0.25s linear;
	}
	.skin .btn-primary.btn-gradient:hover,
	.skin .btn-primary.btn-gradient:focus,
	.skin .btn-primary.btn-gradient:active,
	.skin .btn-primary.btn-gradient:active:focus,
	.skin .btn-primary.btn-gradient.active,
	.skin .btn-primary.btn-gradient.active:focus,
	.skin .show > .btn-primary.btn-gradient.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-primary.btn-gradient {
		color: {{ $primaryColor }};
		background-color: {{ $primaryBgColor }};
		border-color: {{ $primaryBgColor }};
		background-image: none;
	}
	.skin .btn-check:focus+.btn-primary.btn-gradient,
	.skin .btn-primary.btn-gradient:focus,
	.skin .btn-primary.btn-gradient.focus {
		box-shadow: 0 0 0 2px {{ $primaryBgColor50 }};
	}
	
	{{-- .btn-success --}}
	.skin .btn-success {
		color: #fff;
		background-color: #2ecc71;
		border-color: #2ecc71;
	}
	.skin .btn-success:hover,
	.skin .btn-success:focus,
	.skin .btn-success:active,
	.skin .btn-success:active:focus,
	.skin .btn-success.active,
	.skin .btn-success.active:focus,
	.skin .show > .btn-success.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-success {
		color: #fff;
		background-color: rgba(46, 204, 113, .9);
		border-color: rgba(46, 204, 113, .9);
		background-image: none;
	}
	.skin .btn-check:focus+.btn-success,
	.skin .btn-success:focus,
	.skin .btn-success.focus {
		box-shadow: none;
	}
	
	{{-- .btn-outline-success --}}
	.skin .btn-outline-success {
		color: #2ecc71;
		background-color: #fff;
		border-color: #2ecc71;
	}
	.skin .btn-outline-success:hover,
	.skin .btn-outline-success:focus,
	.skin .btn-outline-success:active,
	.skin .btn-outline-success:active:focus,
	.skin .btn-outline-success.active,
	.skin .btn-outline-success.active:focus,
	.skin .show > .btn-outline-success.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-outline-success {
		color: #fff;
		background-color: #2ecc71;
		border-color: #2ecc71;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-outline-success,
	.skin .btn-outline-success:focus,
	.skin .btn-outline-success.focus {
		box-shadow: none;
	}
	
	{{-- .btn-danger --}}
	.skin .btn-danger {
		color: #fff;
		background-color: #d9534f;
		border-color: #d9534f;
	}
	.skin .btn-danger:hover,
	.skin .btn-danger:focus,
	.skin .btn-danger:active,
	.skin .btn-danger:active:focus,
	.skin .btn-danger.active,
	.skin .btn-danger.active:focus,
	.skin .show > .btn-danger.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-danger {
		color: #fff;
		background-color: rgba(201, 48, 44, 0.9);
		border-color: rgba(201, 48, 44, 0.9);
		background-image: none;
	}
	.skin .btn-check:focus+.btn-danger,
	.skin .btn-danger:focus,
	.skin .btn-danger.focus {
		box-shadow: 0 0 0 2px rgba(201, 48, 44, 0.5);
	}
	
	{{-- .btn-outline-danger --}}
	.skin .btn-outline-danger {
		color: #d9534f;
		background-color: #fff;
		border-color: #d9534f;
	}
	.skin .btn-outline-danger:hover,
	.skin .btn-outline-danger:focus,
	.skin .btn-outline-danger:active,
	.skin .btn-outline-danger:active:focus,
	.skin .btn-outline-danger.active,
	.skin .btn-outline-danger.active:focus,
	.skin .show > .btn-outline-danger.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-outline-danger {
		color: #fff;
		background-color: #d9534f;
		border-color: #d9534f;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-outline-danger,
	.skin .btn-outline-danger:focus,
	.skin .btn-outline-danger.focus {
		box-shadow: 0 0 0 2px rgba(201, 48, 44, 0.5);
	}
	
	{{-- .btn-info --}}
	.skin .btn-info {
		color: #fff;
		background-color: #186dde;
		border-color: #186dde;
	}
	.skin .btn-info:hover,
	.skin .btn-info:focus,
	.skin .btn-info:active,
	.skin .btn-info:active:focus,
	.skin .btn-info.active,
	.skin .btn-info.active:focus,
	.skin .show > .btn-info.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-info {
		color: #fff;
		background-color: rgba(24, 109, 222, 0.9);
		border-color: rgba(24, 109, 222, 0.9);
		background-image: none;
	}
	.skin .btn-check:focus+.btn-info,
	.skin .btn-info:focus,
	.skin .btn-info.focus {
		box-shadow: 0 0 0 2px rgba(24, 109, 222, 0.5);
	}
	
	{{-- .btn-outline-info --}}
	.skin .btn-outline-info {
		color: #186dde;
		background-color: #fff;
		border-color: #186dde;
	}
	.skin .btn-outline-info:hover,
	.skin .btn-outline-info:focus,
	.skin .btn-outline-info:active,
	.skin .btn-outline-info:active:focus,
	.skin .btn-outline-info.active,
	.skin .btn-outline-info.active:focus,
	.skin .show > .btn-outline-info.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-outline-info {
		color: #fff;
		background-color: #186dde;
		border-color: #186dde;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-outline-info,
	.skin .btn-outline-info:focus,
	.skin .btn-outline-info.focus {
		box-shadow: 0 0 0 2px rgba(24, 109, 222, 0.5);
	}
	
	{{-- .btn-warning --}}
	.skin .btn-warning {
		color: #fff;
		background-color: #ffbf4b;
		border-color: #ffbf4b;
	}
	.skin .btn-warning:hover,
	.skin .btn-warning:focus,
	.skin .btn-warning:active,
	.skin .btn-warning:active:focus,
	.skin .btn-warning.active,
	.skin .btn-warning.active:focus,
	.skin .show > .btn-warning.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-warning {
		color: #fff;
		background-color: rgba(255, 191, 75, 0.9);
		border-color: rgba(255, 191, 75, 0.9);
		background-image: none;
	}
	.skin .btn-check:focus+.btn-warning,
	.skin .btn-warning:focus,
	.skin .btn-warning.focus {
		box-shadow: none;
	}
	
	{{-- .btn-outline-warning --}}
	.skin .btn-outline-warning {
		color: #ffbf4b;
		background-color: #fff;
		border-color: #ffbf4b;
	}
	.skin .btn-outline-warning:hover,
	.skin .btn-outline-warning:focus,
	.skin .btn-outline-warning:active,
	.skin .btn-outline-warning:active:focus,
	.skin .btn-outline-warning.active,
	.skin .btn-outline-warning.active:focus,
	.skin .show > .btn-outline-warning.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-outline-warning {
		color: #fff;
		background-color: #ffbf4b;
		border-color: #ffbf4b;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-outline-warning,
	.skin .btn-outline-warning:focus,
	.skin .btn-outline-warning.focus {
		box-shadow: none;
	}
	
	{{-- .btn-default --}}
	.skin .btn-default {
		color: #292b2c;
		background-color: #fff;
		border-color: #ccc;
	}
	.skin .btn-default:hover,
	.skin .btn-default:focus,
	.skin .btn-default:active,
	.skin .btn-default:active:focus,
	.skin .btn-default.active,
	.skin .btn-default.active:focus,
	.skin .show > .btn-default.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-default {
		color: #292b2c;
		background-color: #e6e6e6;
		border-color: #adadad;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-default,
	.skin .btn-default:focus,
	.skin .btn-default.focus {
		box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
	}
	
	{{-- .btn-default-lite --}}
	.skin .btn-default-lite {
		color: #6d6d6d;
		background-color: #e5e5e5;
		border-color: #e5e5e5;
	}
	.skin .btn-default-lite:hover,
	.skin .btn-default-lite:focus,
	.skin .btn-default-lite:active,
	.skin .btn-default-lite:active:focus,
	.skin .btn-default-lite.active,
	.skin .btn-default-lite.active:focus,
	.skin .show > .btn-default-lite.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-default-lite {
		color: #6d6d6d;
		background-color: rgba(236, 236, 236, 0.9);
		border-color: rgba(236, 236, 236, 0.9);
		background-image: none;
	}
	.skin .btn-check:focus+.btn-default-lite,
	.skin .btn-default-lite:focus,
	.skin .btn-default-lite.focus {
		box-shadow: 0 0 0 2px rgba(236, 236, 236, 0.5);
	}
	
	{{-- .btn-secondary --}}
	.skin .btn-secondary {
		color: #fff;
		background-color: #474d52;
		border-color: #474d52;
	}
	.skin .btn-secondary:hover,
	.skin .btn-secondary:focus,
	.skin .btn-secondary:active,
	.skin .btn-secondary:active:focus,
	.skin .btn-secondary.active,
	.skin .btn-secondary.active:focus,
	.skin .btn-secondary.focus,
	.skin .show > .btn-secondary.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-secondary {
		color: #fff !important;
		background-color: rgba(71, 77, 82, 0.9);
		border-color: rgba(71, 77, 82, 0.9);
		background-image: none;
	}
	.skin .btn-check:focus+.btn-secondary,
	.skin .btn-secondary:focus,
	.skin .btn-secondary.focus {
		box-shadow: none;
	}
	
	{{-- .btn-outline-secondary --}}
	.skin .btn-outline-secondary {
		color: #474d52;
		background-color: #fff;
		border-color: #474d52;
	}
	.skin .btn-outline-secondary:hover,
	.skin .btn-outline-secondary:focus,
	.skin .btn-outline-secondary:active,
	.skin .btn-outline-secondary:active:focus,
	.skin .btn-outline-secondary.active,
	.skin .btn-outline-secondary.active:focus,
	.skin .show > .btn-outline-secondary.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-outline-secondary {
		color: #fff;
		background-color: #474d52;
		border-color: #474d52;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-outline-secondary,
	.skin .btn-outline-secondary:focus,
	.skin .btn-outline-secondary.focus {
		box-shadow: none;
	}
	
	{{-- .btn-listing --}}
	.skin .btn-listing {
		font-family: "Roboto", Helvetica, Arial, sans-serif;
		font-size: 14px;
		font-weight: bold;
		text-transform: none;
		text-align: center;
		color: #333;
		background-image: linear-gradient(to bottom, #ffeb43 0%, #fcde11 100%);
		background-repeat: repeat-x;
		background-color: #fff447;
		border: 1px solid #f6d80f;
		border-radius: 6px;
		box-shadow: 0 1px 1px 0 #aaa;
		line-height: 17px;
		padding: 12px 20px 12px;
	}
	.skin .btn-listing:hover,
	.skin .btn-listing:focus,
	.skin .btn-listing:active,
	.skin .btn-listing:active:focus,
	.skin .btn-listing.active,
	.skin .btn-listing.active:focus,
	.skin .show > .btn-listing.dropdown-toggle,
	.skin .open .dropdown-toggle.btn-listing {
		color: #333;
		background-color: #fff447;
		border-color: #f6d80f;
		background-image: none;
	}
	.skin .btn-check:focus+.btn-listing,
	.skin .btn-listing:focus,
	.skin .btn-listing.focus {
		box-shadow: none;
	}
	
	{{-- .btn- .disabled --}}
	.skin .btn-primary:disabled,
	.skin .btn-primary.disabled,
	.skin .btn-primary-dark:disabled,
	.skin .btn-primary-dark.disabled,
	.skin .btn-success:disabled,
	.skin .btn-success.disabled,
	.skin .btn-danger:disabled,
	.skin .btn-danger.disabled,
	.skin .btn-info:disabled,
	.skin .btn-info.disabled,
	.skin .btn-warning:disabled,
	.skin .btn-warning.disabled,
	.skin .btn-default:disabled,
	.skin .btn-default.disabled,
	.skin .btn-default-lite:disabled,
	.skin .btn-default-lite.disabled,
	.skin .btn-secondary:disabled,
	.skin .btn-secondary.disabled {
		color: #666666;
		background-color: #e3e3e3;
		border-color: #999;
	}
	
	{{-- ========= END BTN ========= --}}
	
	.skin a,
	.skin .nav-link,
	.skin .link-color {
		color: {{ $primaryBgColor10d }};
	}
	.skin .text-primary {
		color: {{ $primaryBgColor10d }} !important;
	}
	
	.skin .nav-link:focus,
	.skin .nav-link:hover {
		color: {{ $primaryDarkBgColor }};
	}
	
	.skin a:not(.btn):hover,
	.skin a:not(.btn):focus {
		color: #fa7722;
	}
	
	.skin .f-category i {
		color: {{ $primaryBgColor }};
	}
	.skin .f-category a:hover i,
	.skin .f-category a:focus i {
		color: #fa7722;
	}
	
	.skin .footer-nav li a:not(.btn):hover,
	.skin .footer-nav li a:not(.btn):focus {
		color: #333;
		opacity: .6;
	}
	
	.skin .footer-nav-inline.social-list-color li a:hover,
	.skin .footer-nav-inline.social-list-color li a:focus {
		color: #fff;
		opacity: .6;
	}
	
	.skin ::selection {
		color: {{ $primaryColor }};
		background: {{ $primaryBgColor }};
	}
	
	.skin ::-moz-selection {
		color: {{ $primaryColor }};
		background: {{ $primaryBgColor }};
	}
	
	.skin .pace .pace-progress {
		background: {{ $primaryBgColor }} none repeat scroll 0 0;
	}
	
	.skin .search-row .search-col:first-child .search-col-inner,
	.skin .search-row .search-col .search-col-inner,
	.skin .search-row .search-col .search-btn-border {
		border-color: {{ $primaryBgColor }};
	}
	
	.skin .p-price-tag {
		background: {{ $primaryBgColor10 }};
	}
	.skin .p-price-tag::before {
		border-top-color: {{ $primaryBgColor }};
	}
	
	.skin .bg-primary {
		background-color: {{ $primaryBgColor }} !important;
	}
	.skin .border-color-primary {
		border-color: {{ $primaryBgColor }} !important;
	}
	
	.skin .badge-primary {
		background-color: {{ $primaryBgColor }};
		color: {{ $primaryColor }};
	}
	.skin .badge-primary[href]:focus, .badge-primary[href]:hover {
		background-color: {{ $primaryDarkBgColor }};
		color: {{ $primaryDarkColor }};
	}
	
	.skin .form-control,
	.skin .select2-container--default .select2-selection--multiple {
		border-color: #ddd;
	}
	.skin .form-control:focus,
	.skin .select2-container--default.select2-container--focus .select2-selection--multiple {
		border-color: {{ $primaryBgColor }};
		box-shadow: 0 1px 0 {{ $primaryBgColor }}, 0 -1px 0 {{ $primaryBgColor }}, -1px 0 0 {{ $primaryBgColor }}, 1px 0 0 {{ $primaryBgColor }};
		outline: 0 none;
	}
	
	.skin .logo,
	.skin .logo-title {
		color: {{ $primaryBgColor }};
	}
	
	.skin .cat-list h3 a,
	.skin .cat-list h3 {
		color: {{ $primaryBgColor }};
	}
	.skin .cat-list h3 a:hover,
	.skin .cat-list h3 a:focus {
		color: #ff8c00;
	}
	
	.skin .cat-list ul li a:not(.btn):hover,
	.skin .cat-list a:not(.btn):hover {
		text-decoration: underline;
		color: {{ $primaryBgColor20d }};
	}
	
	.skin .list-filter ul li p.maxlist-more a {
		color: {{ $primaryBgColor10d }};
	}
	
	.skin ul.list-link li a:not(.btn):hover {
		color: {{ $primaryBgColor20d }};
	}
	
	.skin .bxslider-pager .bx-thumb-item:focus {
		-webkit-box-shadow: 0 0 2px {{ $primaryBgColor10d }};
		-moz-box-shadow: 0 0 2px {{ $primaryBgColor10d }};
		box-shadow: 0 0 2px {{ $primaryBgColor10d }};
		outline: none;
	}
	.skin .bxslider-pager .bx-thumb-item.active,
	.skin .thumbs-gallery .swiper-slide.swiper-slide-thumb-active {
		border: 1px solid {{ $primaryBgColor10d }};
		border-bottom: 4px solid {{ $primaryBgColor10d }} !important;
	}
	
	.skin .page-bottom-info {
		background: {{ $primaryBgColor }};
	}
	
	.skin button.btn-search {
		text-shadow: 0 2px 2px {{ $primaryBgColor }};
		-webkit-text-shadow: 0 2px 2px {{ $primaryBgColor }};
	}
	
	.skin .nav-pills > li.active > a:not(.btn),
	.skin .nav-pills > li.active > a:not(.btn):focus,
	.skin .nav-pills > li.active > a:not(.btn):hover {
		background-color: {{ $primaryBgColor10 }};
		color: #fff;
	}
	
	.skin .nav-pills .nav-link.active,
	.skin .nav-pills .nav-link.active:focus,
	.skin .nav-pills .nav-link.active:hover {
		background-color: {{ $primaryBgColor10 }};
		color: #fff;
	}
	
	.skin .number-range-slider .noUi-connect {
		background: {{ $primaryBgColor }};
	}
	
	.skin .cat-list li a,
	.skin .cat-list a {
		color: #4e575d;
	}
	
	{{-- SHODOW --}}
	.skin .ln-shadow {
		background-color: {{ $primaryBgColor }};
		color: #fff;
		text-shadow: 1px 1px {{ $primaryBgColor20d }}, 2px 2px {{ $primaryBgColor20d }}, 3px 3px {{ $primaryBgColor20d }}, 4px 4px {{ $primaryBgColor20d }}, 5px 5px {{ $primaryBgColor20d }}, 6px 6px {{ $primaryBgColor20d }}, 7px 7px {{ $primaryBgColor20d }}, 8px 8px {{ $primaryBgColor20d }}, 9px 9px {{ $primaryBgColor20d }}, 10px 10px {{ $primaryBgColor20d }}, 11px 11px {{ $primaryBgColor20d }}, 12px 12px {{ $primaryBgColor20d }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		-webkit-text-shadow: 1px 1px {{ $primaryBgColor20d }}, 2px 2px {{ $primaryBgColor20d }}, 3px 3px {{ $primaryBgColor20d }}, 4px 4px {{ $primaryBgColor20d }}, 5px 5px {{ $primaryBgColor20d }}, 6px 6px {{ $primaryBgColor20d }}, 7px 7px {{ $primaryBgColor20d }}, 8px 8px {{ $primaryBgColor20d }}, 9px 9px {{ $primaryBgColor20d }}, 10px 10px {{ $primaryBgColor20d }}, 11px 11px {{ $primaryBgColor20d }}, 12px 12px {{ $primaryBgColor20d }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		-moz-text-shadow: 1px 1px {{ $primaryBgColor20d }}, 2px 2px {{ $primaryBgColor20d }}, 3px 3px {{ $primaryBgColor20d }}, 4px 4px {{ $primaryBgColor20d }}, 5px 5px {{ $primaryBgColor20d }}, 6px 6px {{ $primaryBgColor20d }}, 7px 7px {{ $primaryBgColor20d }}, 8px 8px {{ $primaryBgColor20d }}, 9px 9px {{ $primaryBgColor20d }}, 10px 10px {{ $primaryBgColor20d }}, 11px 11px {{ $primaryBgColor20d }}, 12px 12px {{ $primaryBgColor20d }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
	}
	
	.skin .shape-0 {
		text-shadow: 1px 1px {{ $primaryBgColor }}, 2px 2px {{ $primaryBgColor }}, 3px 3px {{ $primaryBgColor }}, 4px 4px {{ $primaryBgColor }}, 5px 5px {{ $primaryBgColor }}, 6px 6px {{ $primaryBgColor }}, 7px 7px {{ $primaryBgColor }}, 8px 8px {{ $primaryBgColor }}, 9px 9px {{ $primaryBgColor }}, 10px 10px {{ $primaryBgColor }}, 11px 11px {{ $primaryBgColor }}, 12px 12px {{ $primaryBgColor }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		-moz-text-shadow: 1px 1px {{ $primaryBgColor }}, 2px 2px {{ $primaryBgColor }}, 3px 3px {{ $primaryBgColor }}, 4px 4px {{ $primaryBgColor }}, 5px 5px {{ $primaryBgColor }}, 6px 6px {{ $primaryBgColor }}, 7px 7px {{ $primaryBgColor }}, 8px 8px {{ $primaryBgColor }}, 9px 9px {{ $primaryBgColor }}, 10px 10px {{ $primaryBgColor }}, 11px 11px {{ $primaryBgColor }}, 12px 12px {{ $primaryBgColor }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		
		-webkit-text-shadow: 1px 1px {{ $primaryBgColor }}, 2px 2px {{ $primaryBgColor }}, 3px 3px {{ $primaryBgColor }}, 4px 4px {{ $primaryBgColor }}, 5px 5px {{ $primaryBgColor }}, 6px 6px {{ $primaryBgColor }}, 7px 7px {{ $primaryBgColor }}, 8px 8px {{ $primaryBgColor }}, 9px 9px {{ $primaryBgColor }}, 10px 10px {{ $primaryBgColor }}, 11px 11px {{ $primaryBgColor }}, 12px 12px {{ $primaryBgColor }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		
		background-color: {{ $primaryBgColor }};
	}
	
	.skin .shape-0-shadow {
		text-shadow: 1px 1px {{ $primaryBgColor20d }}, 2px 2px {{ $primaryBgColor20d }}, 3px 3px {{ $primaryBgColor20d }}, 4px 4px {{ $primaryBgColor20d }}, 5px 5px {{ $primaryBgColor20d }}, 6px 6px {{ $primaryBgColor20d }}, 7px 7px {{ $primaryBgColor20d }}, 8px 8px {{ $primaryBgColor20d }}, 9px 9px {{ $primaryBgColor20d }}, 10px 10px {{ $primaryBgColor20d }}, 11px 11px {{ $primaryBgColor20d }}, 12px 12px {{ $primaryBgColor20d }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		-moz-text-shadow: 1px 1px {{ $primaryBgColor20d }}, 2px 2px {{ $primaryBgColor20d }}, 3px 3px {{ $primaryBgColor20d }}, 4px 4px {{ $primaryBgColor20d }}, 5px 5px {{ $primaryBgColor20d }}, 6px 6px {{ $primaryBgColor20d }}, 7px 7px {{ $primaryBgColor20d }}, 8px 8px {{ $primaryBgColor20d }}, 9px 9px {{ $primaryBgColor20d }}, 10px 10px {{ $primaryBgColor20d }}, 11px 11px {{ $primaryBgColor20d }}, 12px 12px {{ $primaryBgColor20d }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		
		-webkit-text-shadow: 1px 1px {{ $primaryBgColor20d }}, 2px 2px {{ $primaryBgColor20d }}, 3px 3px {{ $primaryBgColor20d }}, 4px 4px {{ $primaryBgColor20d }}, 5px 5px {{ $primaryBgColor20d }}, 6px 6px {{ $primaryBgColor20d }}, 7px 7px {{ $primaryBgColor20d }}, 8px 8px {{ $primaryBgColor20d }}, 9px 9px {{ $primaryBgColor20d }}, 10px 10px {{ $primaryBgColor20d }}, 11px 11px {{ $primaryBgColor20d }}, 12px 12px {{ $primaryBgColor20d }}, 13px 13px {{ $primaryBgColor }}, 14px 14px {{ $primaryBgColor }}, 15px 15px {{ $primaryBgColor }}, 16px 16px {{ $primaryBgColor }}, 17px 17px {{ $primaryBgColor }}, 18px 18px {{ $primaryBgColor }}, 19px 19px {{ $primaryBgColor }}, 20px 20px {{ $primaryBgColor }}, 21px 21px {{ $primaryBgColor }}, 22px 22px {{ $primaryBgColor }}, 23px 23px {{ $primaryBgColor }}, 24px 24px {{ $primaryBgColor }}, 25px 25px {{ $primaryBgColor }}, 26px 26px {{ $primaryBgColor }}, 27px 27px {{ $primaryBgColor }}, 28px 28px {{ $primaryBgColor }};
		
		background-color: {{ $primaryBgColor }};
	}
	
	{{-- Bootstrap Pagination Color --}}
	.skin .pagination > li > a,
	.skin .pagination > li > span {
		color: {{ $primaryBgColor }};
	}
	.skin .pagination > li > a:hover,
	.skin .pagination > li > span:hover,
	.skin .pagination > li > a:focus,
	.skin .pagination > li > span:focus {
		color: {{ $primaryBgColor20d }};
	}
	.skin .pagination > li.page-item.active .page-link,
	.skin .pagination > .active > a,
	.skin .pagination > .active > span,
	.skin .pagination > .active > a:hover,
	.skin .pagination > .active > span:hover,
	.skin .pagination > .active > a:focus,
	.skin .pagination > .active > span:focus {
		background-color: {{ $primaryBgColor }};
		border-color: {{ $primaryBgColor }};
		color: #fff;
	}
	
	{{-- Cookie Consent --}}
	.skin .cookie-consent__agree {
		background-color: {{ $primaryBgColor }};
		box-shadow: 0 2px 5px rgba(70, 130, 180, 0.15);
	}
	.skin .cookie-consent__agree:hover {
		background-color: {{ $primaryBgColor20d }};
	}
	
	.skin .cornerRibbons a {
		color: #fff;
	}
	
	.skin .footer ul li a {
		color: #999;
	}
	
	.skin .dropdown-menu > li a:focus,
	.skin .dropdown-menu > li a:hover {
		color: #333;
	}
	
	.skin .add-title a {
		color: #333;
	}
	.skin .add-title a:hover,
	.skin .add-title a:focus{
		color: #666;
	}
	.skin .tags a:hover {
		border-color: {{ $primaryBgColor10d }};
	}
	
	{{-- Customizations --}}
	@if (in_array($selectedSkin, ['yellow', 'sunFlower']))
	.skin .breadcrumb-item a,
	.skin .category-links a,
	.skin .backtolist a,
	.skin .card-user-info .to a,
	.skin .items-details-info .detail-line-lite a,
	.skin #postType .nav-item a {
		font-weight: bold;
	}
	@endif
	
	{{-- Header --}}
	@if (in_array($selectedSkin, ['yellow', 'sunFlower']))
	.skin .navbar.navbar-site {
		background-color: {{ $primaryBgColor }} !important;
		border: 1px solid {{ $primaryBgColor }} !important;
	}
	.skin .navbar.navbar-site .navbar-nav .nav-link {
		color: {{ $primaryColor }} !important;
	}
	@endif
	
	.skin .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
		background-color: {{ $primaryBgColor10 }};
	}
	
	.skin .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
		background-color: {{ $primaryBgColor10 }};
	}
	
	.skin .custom-radio .custom-control-input:checked ~ .custom-control-label::before {
		background-color: {{ $primaryBgColor10 }};
	}
	
	.skin .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
		background-color: {{ $primaryBgColor10d }};
	}
	
	{{-- Swal Alert --}}
	.skin .swal2-styled.swal2-confirm {
		background-color: {{ $primaryBgColor }} !important;
		color: #fff !important;
	}
	.skin .swal2-actions:not(.swal2-loading) .swal2-styled:active {
		background-image: linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2)) !important;
	}
	.skin .swal2-styled.swal2-confirm:focus {
		box-shadow: 0 0 0 3px {{ $primaryBgColor50 }} !important;
	}
@endif
</style>