const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/app.rtl.scss', 'public/css');
mix.sass('resources/sass/admin.scss', 'public/css');

mix.options({ processCssUrls: false });

/* Combine CSS */
mix.combine([
	'public/css/app.css',
	'public/assets/bootstrap/css/bootstrap.min.css',
	'public/assets/plugins/select2/css/select2.min.css',
	'public/assets/css/style.css',
	'public/assets/css/style-main.css',
	'public/assets/css/skins/default.css',
	'public/assets/plugins/owlcarousel/assets/owl.carousel.min.css',
	'public/assets/plugins/owlcarousel/assets/owl.theme.default.min.css',
	'public/assets/css/flags/flags.min.css',
	'public/assets/plugins/sweetalert2/11.1.10/sweetalert2.min.css'
], 'public/css/app.css');

/* Combine RTL CSS */
mix.combine([
	'public/css/app.rtl.css',
	'public/assets/bootstrap/css/bootstrap.rtl.css',
	'public/assets/plugins/select2/css/select2.min.css',
	'public/assets/css/rtl/style.css',
	'public/assets/css/rtl/style-main.css',
	'public/assets/css/skins/default.css',
	'public/assets/plugins/owlcarousel/assets/owl.carousel.min.css',
	'public/assets/plugins/owlcarousel/assets/owl.theme.default.min.css',
	'public/assets/css/flags/flags.min.css',
	'public/assets/plugins/sweetalert2/11.1.10/sweetalert2.min.css'
], 'public/css/app.rtl.css');

/* Combine JS */
mix.combine([
	'public/assets/plugins/jquery/1.11.1/jquery.min.js',
	'public/assets/plugins/jqueryui/1.9.2/jquery-ui.min.js',
	/* 'public/assets/plugins/popper.js/1.14.7/popper.min.js', */
	/* 'public/assets/bootstrap/js/bootstrap.min.js', */
	/* Bundled JS files (bootstrap.bundle.js and minified bootstrap.bundle.min.js) include Popper, but not jQuery. */
	'public/assets/bootstrap/js/bootstrap.bundle.min.js',
	'public/js/app.js',
	'public/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.min.js',
	'public/assets/plugins/select2/js/select2.full.min.js',
	'public/assets/plugins/SocialShare/SocialShare.min.js',
	'public/assets/js/jquery.parallax-1.1.js',
	'public/assets/js/hideMaxListItem-min.js',
	'public/assets/plugins/jquery-nice-select/js/jquery.nice-select.min.js',
	'public/assets/plugins/jquery.nicescroll/dist/jquery.nicescroll.min.js',
	'public/assets/plugins/owlcarousel/owl.carousel.js',
	'public/assets/plugins/pnotify/5.2.0/dist/PNotify.js',
	'public/assets/plugins/sweetalert2/11.1.10/sweetalert2.all.min.js',
	'public/assets/plugins/autocomplete/jquery.mockjax.js',
	'public/assets/plugins/autocomplete/jquery.autocomplete.min.js',
	'public/assets/plugins/bootstrap-waitingfor/bootstrap-waitingfor.min.js',
	'public/assets/plugins/counter-up/waypoints.min.js',
	'public/assets/plugins/counter-up/jquery.counterup.min.js',
	
	'public/assets/js/ajaxSetup.js',
	'public/assets/js/global.js',
	'public/assets/js/script.js',
	'public/assets/js/form-validation.js',
	'public/assets/js/app/autocomplete.cities.js',
	'public/assets/js/app/show.phone.js',
	'public/assets/js/app/make.favorite.js'
], 'public/js/app.js');

/* ADMIN PANEL */

/* Combine CSS for Admin Panel */
mix.combine([
	'public/css/admin.css',
	'public/assets/plugins/pace/pace.min.css',
	'public/assets/plugins/pnotify/5.2.0/dist/PNotify.css',
	'public/assets/plugins/pnotify/5.2.0/modules/bootstrap4/PNotifyBootstrap4.css',
	'public/assets/plugins/pnotify/5.2.0/modules/confirm/PNotifyConfirm.css',
	'public/assets/plugins/sweetalert2/11.1.10/sweetalert2.min.css',
	
	'public/assets/admin/css/style.css',
	'public/assets/admin/css/style-main.css'
], 'public/css/admin.css');

/* Combine JS for Admin Panel */
mix.combine([
	'public/assets/plugins/jquery/3.3.1/jquery.min.js',
	'public/assets/plugins/popper.js/2.9.3/popper.min.js',
	'public/assets/bootstrap/js/bootstrap.min.js',
	'public/assets/admin/js/app.js',
	'public/assets/plugins/perfect-scrollbar/0.7.1/perfect-scrollbar.jquery.min.js',
	'public/assets/plugins/sparkline/sparkline.js',
	'public/assets/admin/js/waves.js',
	'public/assets/admin/js/sidebarmenu.js',
	'public/assets/admin/js/feather.min.js',
	'public/assets/admin/js/custom.js',
	'public/assets/plugins/pnotify/5.2.0/dist/PNotify.js',
	'public/assets/plugins/pnotify/5.2.0/modules/bootstrap4/PNotifyBootstrap4.js',
	'public/assets/plugins/pnotify/5.2.0/modules/font-awesome5/PNotifyFontAwesome5.js',
	'public/assets/plugins/pnotify/5.2.0/modules/font-awesome5-fix/PNotifyFontAwesome5Fix.js',
	'public/assets/plugins/pnotify/5.2.0/modules/confirm/PNotifyConfirm.js',
	'public/assets/plugins/sweetalert2/11.1.10/sweetalert2.all.min.js',
	'public/assets/plugins/pace/pace.min.js',
	
	'public/assets/js/ajaxSetup.js',
	'public/assets/js/global.js',
], 'public/js/admin.js');

/* Disable Compilation Notification */
/* mix.disableNotifications(); */

/* Cache Busting */
mix.version();
