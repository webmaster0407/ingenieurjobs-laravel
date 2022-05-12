<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$entries = [
			[
				'abbr'                  => 'en',
				'locale'                => 'en_US',
				'name'                  => 'English',
				'native'                => 'English',
				'flag'                  => 'flag-icon-gb',
				'app_name'              => 'english',
				'script'                => 'Latn',
				'direction'             => 'ltr',
				'russian_pluralization' => '0',
				'date_format'           => 'MMM Do, YYYY',
				'datetime_format'       => 'MMM Do, YYYY [at] HH:mm',
				'active'                => '1',
				'default'               => '1',
				'parent_id'             => null,
				'lft'                   => '2',
				'rgt'                   => '3',
				'depth'                 => '0',
				'deleted_at'            => null,
				'created_at'            => now()->format('Y-m-d H:i:s'),
				'updated_at'            => now()->format('Y-m-d H:i:s'),
			],
			[
				'abbr'                  => 'fr',
				'locale'                => 'fr_FR',
				'name'                  => 'French',
				'native'                => 'Français',
				'flag'                  => 'flag-icon-fr',
				'app_name'              => 'french',
				'script'                => 'Latn',
				'direction'             => 'ltr',
				'russian_pluralization' => '0',
				'date_format'           => 'Do MMM YYYY',
				'datetime_format'       => 'Do MMM YYYY [à] H[h]mm',
				'active'                => '1',
				'default'               => '0',
				'parent_id'             => null,
				'lft'                   => '4',
				'rgt'                   => '5',
				'depth'                 => '1',
				'deleted_at'            => null,
				'created_at'            => now()->format('Y-m-d H:i:s'),
				'updated_at'            => now()->format('Y-m-d H:i:s'),
			],
			[
				'abbr'                  => 'es',
				'locale'                => 'es_ES',
				'name'                  => 'Spanish',
				'native'                => 'Español',
				'flag'                  => 'flag-icon-es',
				'app_name'              => 'spanish',
				'script'                => 'Latn',
				'direction'             => 'ltr',
				'russian_pluralization' => '0',
				'date_format'           => 'D [de] MMMM [de] YYYY',
				'datetime_format'       => 'D [de] MMMM [de] YYYY HH:mm',
				'active'                => '1',
				'default'               => '0',
				'parent_id'             => null,
				'lft'                   => '6',
				'rgt'                   => '7',
				'depth'                 => '1',
				'deleted_at'            => null,
				'created_at'            => now()->format('Y-m-d H:i:s'),
				'updated_at'            => now()->format('Y-m-d H:i:s'),
			],
			[
				'abbr'                  => 'ar',
				'locale'                => 'ar_SA',
				'name'                  => 'Arabic',
				'native'                => 'العربية',
				'flag'                  => 'flag-icon-sa',
				'app_name'              => 'arabic',
				'script'                => 'Arab',
				'direction'             => 'rtl',
				'russian_pluralization' => '0',
				'date_format'           => 'DD/MMMM/YYYY',
				'datetime_format'       => 'DD/MMMM/YYYY HH:mm',
				'active'                => '1',
				'default'               => '0',
				'parent_id'             => null,
				'lft'                   => '8',
				'rgt'                   => '9',
				'depth'                 => '1',
				'deleted_at'            => null,
				'created_at'            => now()->format('Y-m-d H:i:s'),
				'updated_at'            => now()->format('Y-m-d H:i:s'),
			],
		];
		
		$tableName = (new Language())->getTable();
		foreach ($entries as $entry) {
			DB::table($tableName)->insert($entry);
		}
	}
}
