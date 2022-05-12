<?php

try {
	
	/* FILES */
	\File::delete(base_path('app/Observers/MessageObserver.php'));
	\File::deleteDirectory(public_path('assets/fonts/fontawesome-free/'));
	\File::deleteDirectory(public_path('assets/fonts/glyphicons/'));
	\File::deleteDirectory(public_path('assets/fonts/fontello/'));
	\File::delete(public_path('assets/fonts/fontawesome-webfont.eot'));
	\File::delete(public_path('assets/fonts/fontawesome-webfont.svg'));
	\File::delete(public_path('assets/fonts/fontawesome-webfont.ttf'));
	\File::delete(public_path('assets/fonts/fontawesome-webfont.woff'));
	\File::delete(public_path('assets/fonts/fontawesome-webfont.woff2'));
	\File::delete(public_path('assets/fonts/FontAwesome.otf'));
	\File::delete(public_path('assets/fonts/fontello.eot'));
	\File::delete(public_path('assets/fonts/fontello.svg'));
	\File::delete(public_path('assets/fonts/fontello.ttf'));
	\File::delete(public_path('assets/fonts/fontello.woff'));
	\File::delete(public_path('assets/fonts/glyphicons-halflings-regular.eot'));
	\File::delete(public_path('assets/fonts/glyphicons-halflings-regular.svg'));
	\File::delete(public_path('assets/fonts/glyphicons-halflings-regular.ttf'));
	\File::delete(public_path('assets/fonts/glyphicons-halflings-regular.woff'));
	\File::delete(public_path('assets/fonts/glyphicons-halflings-regular.woff2'));
	\File::deleteDirectory(public_path('assets/plugins/fontawesome/'));
	\File::deleteDirectory(public_path('vendor/admin/bootstrap-iconpicker/bootstrap-3.2.0/'));
	\File::deleteDirectory(public_path('vendor/admin/bootstrap-iconpicker/bootstrap-iconpicker/'));
	\File::deleteDirectory(public_path('vendor/admin/bootstrap-iconpicker/icon-fonts/'));
	\File::delete(public_path('vendor/admin/bootstrap-iconpicker/.gitignore'));
	\File::delete(public_path('vendor/admin/bootstrap-iconpicker/.travis.yml'));
	\File::delete(public_path('vendor/admin/bootstrap-iconpicker/LICENSE'));
	\File::delete(public_path('vendor/admin-theme/css/style2.min.css'));
	\File::delete(config_path('fontello.php'));
	\File::delete(app_path('Models/Setting/ListingSetting.php'));
	\File::delete(app_path('Observers/Traits/Setting/ListingTrait.php'));
	if (file_exists(storage_path('framework/plugins/domainmapping'))) {
		\File::delete(base_path('extras/plugins/domainmapping/app/Models/Setting/ListingSetting.php'));
		\File::delete(base_path('extras/plugins/domainmapping/app/Observers/Traits/Setting/ListingTrait.php'));
	}
	\File::deleteDirectory(public_path('vendor/admin/pnotify/'));
	\File::delete(public_path('assets/plugins/pnotify/pnotify.custom.min.css'));
	\File::delete(public_path('assets/plugins/pnotify/pnotify.custom.min.js'));
	
	
	/* DATABASE */
	$setting = \App\Models\Setting::where('key', 'listing')->first();
	if (!empty($setting)) {
		$setting->key = 'list';
		$setting->name = 'List & Search';
		$setting->description = 'List & Search Options';
		$setting->save();
	}
	$setting = \App\Models\Setting::where('key', 'single')->first();
	if (!empty($setting)) {
		$setting->name = 'Single (Page & Form)';
		$setting->description = 'Single (Page & Form) Options';
		$setting->save();
	}
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}
