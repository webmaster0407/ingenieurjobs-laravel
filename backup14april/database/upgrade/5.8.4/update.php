<?php

try {
	
	/* FILES */
	\File::deleteDirectory(public_path('vendor/admin/summernote/'));
	\File::deleteDirectory(public_path('vendor/admin/tinymce/'));
	\File::deleteDirectory(public_path('vendor/admin/select2/'));
	\File::deleteDirectory(public_path('vendor/adminlte/plugins/select2/'));
	
	
	/* DATABASE */
	// 1. Check if primary key exists in the table
	$sql = "SELECT * "
		. "FROM `INFORMATION_SCHEMA`.`TABLE_CONSTRAINTS` "
		. "WHERE `CONSTRAINT_TYPE` = 'PRIMARY KEY' "
		. "AND `TABLE_NAME` = '" . \DB::getTablePrefix() . "cities' "
		. "AND `TABLE_SCHEMA` = '" . \DB::connection()->getDatabaseName() . "'";
	$results = \DB::select(\DB::raw($sql));
	if (is_array($results) && count($results) <= 0) {
		// Add ID column as primary key
		$sql = "ALTER TABLE `" . \DB::getTablePrefix() . "cities` ADD PRIMARY KEY(`id`);" . "\n";
		\DB::unprepared($sql);
	}
	
	// 2. Check if the ID column is auto_increment column (This need to execute the statements at #1 first)
	$sql = "SELECT * "
		. "FROM `INFORMATION_SCHEMA`.`COLUMNS` "
		. "WHERE `TABLE_NAME` = '" . \DB::getTablePrefix() . "cities' "
		. "AND `COLUMN_NAME` = 'id' "
		. "AND `EXTRA` LIKE '%auto_increment%'";
	$results = \DB::select(\DB::raw($sql));
	if (is_array($results) && count($results) <= 0) {
		// Change the primary key (the ID column) as auto_increment
		$sql = "ALTER TABLE `" . \DB::getTablePrefix() . "cities` CHANGE `id` `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT;" . "\n";
		\DB::unprepared($sql);
	}
	
	// Increase the Administrative Divisions codes columns
	\Schema::table('subadmin1', function ($table) {
		$table->string('code', 100)->change();
	});
	\Schema::table('subadmin2', function ($table) {
		$table->string('code', 100)->change();
		$table->string('subadmin1_code', 100)->change();
	});
	\Schema::table('cities', function ($table) {
		$table->string('subadmin1_code', 100)->change();
		$table->string('subadmin2_code', 100)->change();
	});
	
} catch (\Exception $e) {
}
