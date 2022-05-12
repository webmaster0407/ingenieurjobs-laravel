<?php

try {
	
	/* FILES */
	\File::delete(resource_path('views/auth/login.blade.php'));
	\File::delete(resource_path('views/layouts/inc/modal/login.blade.php'));
	
	
	/* DATABASE */
	include_once __DIR__ . '/../../../app/Helpers/Functions/upgrade.php';
	
	if (!\Schema::hasColumn('categories', 'hide_description')) {
		\Schema::table('categories', function ($table) {
			if (\Schema::hasColumn('categories', 'description')) {
				$table->boolean('hide_description')->nullable()->after('description');
			} else {
				$table->boolean('hide_description')->nullable()->after('icon_class');
			}
		});
	}
	if (!\Schema::hasColumn('categories', 'seo_title')) {
		\Schema::table('categories', function ($table) {
			$table->text('seo_title')->nullable()->after('icon_class');
		});
	}
	if (!\Schema::hasColumn('categories', 'seo_description')) {
		\Schema::table('categories', function ($table) {
			$table->text('seo_description')->nullable()->after('seo_title');
		});
	}
	if (!\Schema::hasColumn('categories', 'seo_keywords')) {
		\Schema::table('categories', function ($table) {
			$table->text('seo_keywords')->nullable()->after('seo_description');
		});
	}
	
	if (!\Schema::hasColumn('pages', 'seo_title')) {
		\Schema::table('pages', function ($table) {
			$table->text('seo_title')->nullable()->after('target_blank');
		});
	}
	if (!\Schema::hasColumn('pages', 'seo_description')) {
		\Schema::table('pages', function ($table) {
			$table->text('seo_description')->nullable()->after('seo_title');
		});
	}
	if (!\Schema::hasColumn('pages', 'seo_keywords')) {
		\Schema::table('pages', function ($table) {
			$table->text('seo_keywords')->nullable()->after('seo_description');
		});
	}
	
	checkAndDropIndex('posts', 'tags');
	if (\Schema::hasColumn('posts', 'tags')) {
		\Schema::table('posts', function ($table) {
			$table->text('tags')->nullable()->change();
		});
	}
	
	// Insert a New Home Section
	$tableName = (new \App\Models\HomeSection())->getTable();
	$setting = \DB::table($tableName)->where('method', 'getTextArea')->first();
	if (empty($setting)) {
		$homeTxtAreaData = [
			'method'    => 'getTextArea',
			'name'      => 'Text Area',
			'value'     => null,
			'view'      => 'home.inc.text-area',
			'field'     => null,
			'parent_id' => null,
			'lft'       => '14',
			'rgt'       => '15',
			'depth'     => '1',
			'active'    => '0',
		];
		\DB::table($tableName)->insert($homeTxtAreaData);
	}
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}
