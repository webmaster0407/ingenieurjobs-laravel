<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
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
				'name' => [
					'en' => 'Mr',
					'fr' => 'Monsieur',
					'es' => 'Señor',
					'ar' => 'السيد',
				],
			],
			[
				'name' => [
					'en' => 'Mrs',
					'fr' => 'Madame',
					'es' => 'Señora',
					'ar' => 'السيدة',
				],
			],
		];
		
		$tableName = (new Gender())->getTable();
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
		}
	}
}
