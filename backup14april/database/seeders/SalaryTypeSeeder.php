<?php

namespace Database\Seeders;

use App\Models\SalaryType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaryTypeSeeder extends Seeder
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
				'name'   => [
					'en' => 'hour',
					'fr' => 'heure',
					'es' => 'hora',
					'ar' => 'ساعة',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'day',
					'fr' => 'jour',
					'es' => 'día',
					'ar' => 'يوم',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'month',
					'fr' => 'mois',
					'es' => 'mes',
					'ar' => 'شهر',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'year',
					'fr' => 'année',
					'es' => 'año',
					'ar' => 'عام',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
		];
		
		$tableName = (new SalaryType())->getTable();
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
		}
	}
}
