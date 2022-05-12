<?php

namespace Database\Seeders;

use App\Models\ReportType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportTypeSeeder extends Seeder
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
					'en' => 'Fraud',
					'fr' => 'Fraude',
					'es' => 'Fraude',
					'ar' => 'تزوير',
				],
			],
			[
				'name' => [
					'en' => 'Duplicate',
					'fr' => 'Dupliquée',
					'es' => 'Duplicar',
					'ar' => 'مكرر',
				],
			],
			[
				'name' => [
					'en' => 'Spam',
					'fr' => 'Indésirable',
					'es' => 'indeseable',
					'ar' => 'بريد مؤذي',
				],
			],
			[
				'name' => [
					'en' => 'Wrong category',
					'fr' => 'Mauvaise categorie',
					'es' => 'Categoría incorrecta',
					'ar' => 'فئة خاطئة',
				],
			],
			[
				'name' => [
					'en' => 'Other',
					'fr' => 'Autre',
					'es' => 'Otro',
					'ar' => 'آخر',
				],
			],
		];
		
		$tableName = (new ReportType())->getTable();
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
		}
	}
}
