<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Models;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Methods for working with relationships inside select/relationship fields.
|--------------------------------------------------------------------------
*/
trait HasRelationshipFields
{
	public static function isColumnNullable(string $columnName): bool
	{
		$instance = new static(); // create an instance of the model to be able to get the table name
		
		try {
			$sql = "SELECT IS_NULLABLE
                FROM INFORMATION_SCHEMA.COLUMNS
                WHERE TABLE_NAME='" . DB::getTablePrefix() . $instance->getTable() . "'
                    AND COLUMN_NAME='" . $columnName . "'
                    AND table_schema='" . env('DB_DATABASE') . "'";
			$answer = DB::select(DB::raw($sql))[0];
		} catch (\Throwable $e) {
			return $instance->isColumnNullable2($columnName);
		}
		
		return $answer->IS_NULLABLE === 'YES';
	}
	
	public static function isColumnNullable2(string $columnName): bool
	{
		// create an instance of the model to be able to get the table name
		$instance = new static();
		
		// register the enum, json and jsonb column type, because Doctrine doesn't support it
		DB::connection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
		DB::connection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('json', 'json_array');
		DB::connection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('jsonb', 'json_array');
		
		return !DB::connection()->getDoctrineColumn($instance->getTable(), $columnName)->getNotnull();
	}
}
