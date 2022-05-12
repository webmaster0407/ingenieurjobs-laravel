<?php

try {
	
	/* FILES */
	$oldFile = public_path('images/maps/uk.svg');
	$newFile = public_path('images/maps/gb.svg');
	if (!\Illuminate\Support\Facades\File::exists($newFile)) {
		if (\Illuminate\Support\Facades\File::exists($oldFile)) {
			\Illuminate\Support\Facades\File::move($oldFile, $newFile);
		}
	}
	$oldDir = storage_path('app/private/resumes/uk/');
	$newDir = storage_path('app/private/resumes/gb/');
	if (\Illuminate\Support\Facades\File::exists($oldDir)) {
		\Illuminate\Support\Facades\File::moveDirectory($oldDir, $newDir, true);
	}
	$oldDir = storage_path('app/public/avatars/uk/');
	$newDir = storage_path('app/public/avatars/gb/');
	if (\Illuminate\Support\Facades\File::exists($oldDir)) {
		\Illuminate\Support\Facades\File::moveDirectory($oldDir, $newDir, true);
	}
	$oldDir = storage_path('app/public/files/uk/');
	$newDir = storage_path('app/public/files/gb/');
	if (\Illuminate\Support\Facades\File::exists($oldDir)) {
		\Illuminate\Support\Facades\File::moveDirectory($oldDir, $newDir, true);
	}
	$oldFile = storage_path('database/geonames/countries/uk.sql');
	$newFile = storage_path('database/geonames/countries/gb.sql');
	if (!\Illuminate\Support\Facades\File::exists($newFile)) {
		if (\Illuminate\Support\Facades\File::exists($oldFile)) {
			\Illuminate\Support\Facades\File::move($oldFile, $newFile);
		}
	}
	if (\Illuminate\Support\Facades\File::exists($newFile)) {
		$content = \Illuminate\Support\Facades\File::get($newFile);
		
		$content = str_replace("'UK", "'GB", $content);
		
		\Illuminate\Support\Facades\File::replace($newFile, $content);
	}
	
	
	/* DATABASE */
	$tablePrefix = \Illuminate\Support\Facades\DB::getTablePrefix();
	
	// countries
	$sql = "UPDATE " . $tablePrefix . "countries" . "\n"
		. "SET code = 'GB'" . "\n"
		. "WHERE code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// subadmin1
	$sql = "UPDATE " . $tablePrefix . "subadmin1" . "\n"
		. "SET code = REPLACE(code, 'UK.', 'GB.')," . "\n"
		. "country_code = 'GB'" . "\n"
		. "WHERE code LIKE 'UK.%';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// subadmin2
	$sql = "UPDATE " . $tablePrefix . "subadmin2" . "\n"
		. "SET code = REPLACE(code, 'UK.', 'GB.')," . "\n"
		. "country_code = 'GB'," . "\n"
		. "subadmin1_code = REPLACE(subadmin1_code, 'UK.', 'GB.')" . "\n"
		. "WHERE code LIKE 'UK.%';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// cities
	$sql = "UPDATE " . $tablePrefix . "cities" . "\n"
		. "SET country_code = 'GB'," . "\n"
		. "subadmin1_code = REPLACE(subadmin1_code, 'UK.', 'GB.')," . "\n"
		. "subadmin2_code = REPLACE(subadmin2_code, 'UK.', 'GB.')" . "\n"
		. "WHERE country_code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// posts
	$sql = "UPDATE " . $tablePrefix . "posts" . "\n"
		. "SET country_code = 'GB'," . "\n"
		. "logo = REPLACE(logo, '/uk/', '/gb/')" . "\n"
		. "WHERE country_code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// pictures
	if (\Illuminate\Support\Facades\Schema::hasTable('pictures')) {
		$sql = "UPDATE " . $tablePrefix . "pictures" . "\n"
			. "SET filename = REPLACE(filename, '/uk/', '/gb/')" . "\n"
			. "WHERE filename LIKE '%/uk/%';";
		\Illuminate\Support\Facades\DB::statement($sql);
	}
	
	// threads_messages
	$sql = "UPDATE " . $tablePrefix . "threads_messages" . "\n"
		. "SET filename = REPLACE(filename, '/uk/', '/gb/')" . "\n"
		. "WHERE filename LIKE '%/uk/%';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// saved_search
	$sql = "UPDATE " . $tablePrefix . "saved_search" . "\n"
		. "SET country_code = 'GB'" . "\n"
		. "WHERE country_code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// users
	$sql = "UPDATE " . $tablePrefix . "users" . "\n"
		. "SET country_code = 'GB'," . "\n"
		. "photo = REPLACE(photo, '/uk/', '/gb/')" . "\n"
		. "WHERE country_code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// companies
	$sql = "UPDATE " . $tablePrefix . "companies" . "\n"
		. "SET country_code = 'GB'," . "\n"
		. "logo = REPLACE(logo, '/uk/', '/gb/')" . "\n"
		. "WHERE country_code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// resumes
	$sql = "UPDATE " . $tablePrefix . "resumes" . "\n"
		. "SET country_code = 'GB'," . "\n"
		. "filename = REPLACE(filename, '/uk/', '/gb/')" . "\n"
		. "WHERE country_code = 'UK';";
	\Illuminate\Support\Facades\DB::statement($sql);
	
	// domain_home_sections
	if (\Illuminate\Support\Facades\Schema::hasTable('domain_home_sections')) {
		$sql = "UPDATE " . $tablePrefix . "domain_home_sections" . "\n"
			. "SET country_code = 'GB'" . "\n"
			. "WHERE country_code = 'UK';";
		\Illuminate\Support\Facades\DB::statement($sql);
	}
	
	// domain_meta_tags
	if (\Illuminate\Support\Facades\Schema::hasTable('domain_meta_tags')) {
		$sql = "UPDATE " . $tablePrefix . "domain_meta_tags" . "\n"
			. "SET country_code = 'GB'" . "\n"
			. "WHERE country_code = 'UK';";
		\Illuminate\Support\Facades\DB::statement($sql);
	}
	
	// domain_settings
	if (\Illuminate\Support\Facades\Schema::hasTable('domain_settings')) {
		$sql = "UPDATE " . $tablePrefix . "domain_settings" . "\n"
			. "SET country_code = 'GB'" . "\n"
			. "WHERE country_code = 'UK';";
		\Illuminate\Support\Facades\DB::statement($sql);
	}
	
	// domains
	if (\Illuminate\Support\Facades\Schema::hasTable('domains')) {
		$sql = "UPDATE " . $tablePrefix . "domains" . "\n"
			. "SET country_code = 'GB'" . "\n"
			. "WHERE country_code = 'UK';";
		\Illuminate\Support\Facades\DB::statement($sql);
	}
	
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}
