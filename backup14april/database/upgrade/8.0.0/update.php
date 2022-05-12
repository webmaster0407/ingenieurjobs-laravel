<?php

try {
	
	/* FILES */
	\File::deleteDirectory(app_path('Http/Controllers/Account/'));
	\File::deleteDirectory(app_path('Http/Controllers/Ajax/'));
	\File::deleteDirectory(app_path('Http/Controllers/Auth/'));
	\File::deleteDirectory(app_path('Http/Controllers/Install/'));
	\File::deleteDirectory(app_path('Http/Controllers/Locale/'));
	\File::deleteDirectory(app_path('Http/Controllers/Post/'));
	\File::deleteDirectory(app_path('Http/Controllers/Search/'));
	\File::deleteDirectory(app_path('Http/Controllers/Traits/'));
	\File::delete(app_path('Http/Controllers/CountriesController.php'));
	\File::delete(app_path('Http/Controllers/FileController.php'));
	\File::delete(app_path('Http/Controllers/FrontController.php'));
	\File::delete(app_path('Http/Controllers/HomeController.php'));
	\File::delete(app_path('Http/Controllers/PageController.php'));
	\File::delete(app_path('Http/Controllers/SitemapController.php'));
	\File::delete(app_path('Http/Controllers/SitemapsController.php'));
	
	\File::delete(resource_path('views/post/createOrEdit/multiSteps/packages.blade.php'));
	
	
	/* DATABASE */
	if (!\Schema::hasTable('personal_access_tokens')) {
		$res = \DB::table('migrations')->where('migration', 'LIKE', '%personal_access_tokens%')->delete();
		
		\Artisan::call('migrate', [
			'--path'  => '/vendor/laravel/sanctum/database/migrations',
			'--force' => true,
		]);
	}
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}
