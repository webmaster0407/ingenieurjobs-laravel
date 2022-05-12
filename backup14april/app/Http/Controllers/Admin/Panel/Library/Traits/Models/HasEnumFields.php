<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Methods for ENUM and SELECT crud fields.
|--------------------------------------------------------------------------
*/

trait HasEnumFields
{
	public static function getPossibleEnumValues(string $fieldName): array
	{
		$defaultConnection = Config::get('database.default');
		$tablePrefix = Config::get('database.connections.' . $defaultConnection . '.prefix');
		
		$instance = new static(); // create an instance of the model to be able to get the table name
		$connectionName = $instance->getConnectionName();
		$type = DB::connection($connectionName)->select(DB::raw('SHOW COLUMNS FROM ' . $tablePrefix . $instance->getTable() . ' WHERE Field = "' . $fieldName . '"'))[0]->Type;
		preg_match('/^enum\((.*)\)$/', $type, $matches);
		$enum = [];
		$exploded = explode(',', $matches[1]);
		foreach ($exploded as $value) {
			$enum[] = trim($value, "'");
		}
		
		return $enum;
	}
	
	public static function getEnumValuesAsAssociativeArray(string $fieldName): array
	{
		$instance = new static();
		$enumValues = $instance->getPossibleEnumValues($fieldName);
		
		$array = array_flip($enumValues);
		
		foreach ($array as $key => $value) {
			$array[$key] = $key;
		}
		
		return $array;
	}
}
