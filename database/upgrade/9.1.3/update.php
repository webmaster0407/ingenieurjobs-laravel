<?php

try {
	
	/* FILES */
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/bootstrap-icons/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/crypto-icons/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/flag-icon-css/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/font-awesome/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/material-design-iconic-font/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/remixicon-icons/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/simple-line-icons/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/themify-icons/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/css/icons/weather-icons/'));
	\File::delete(public_path('assets/css/skins/skin-blue.css'));
	\File::delete(public_path('assets/css/skins/skin-green.css'));
	\File::delete(public_path('assets/css/skins/skin-red.css'));
	\File::delete(public_path('assets/css/skins/skin-yellow.css'));
	\File::delete(resource_path('views/layouts/inc/tools/style.blade.php'));
	\File::deleteDirectory(storage_path('app/public/app/categories/skin-blue/'));
	\File::deleteDirectory(storage_path('app/public/app/categories/skin-default/'));
	\File::deleteDirectory(storage_path('app/public/app/categories/skin-green/'));
	\File::deleteDirectory(storage_path('app/public/app/categories/skin-red/'));
	\File::deleteDirectory(storage_path('app/public/app/categories/skin-yellow/'));
	\File::delete(storage_path('app/public/app/default/categories/fa-folder-skin-blue.png'));
	\File::delete(storage_path('app/public/app/default/categories/fa-folder-skin-default.png'));
	\File::delete(storage_path('app/public/app/default/categories/fa-folder-skin-green.png'));
	\File::delete(storage_path('app/public/app/default/categories/fa-folder-skin-red.png'));
	\File::delete(storage_path('app/public/app/default/categories/fa-folder-skin-yellow.png'));
	
	
	/* DATABASE */
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}
