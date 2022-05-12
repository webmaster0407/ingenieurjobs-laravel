<?php

namespace Database\Seeders;

use App\Models\PostType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTypeSeeder extends Seeder
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
					'en' => 'Full-time',
					'fr' => 'Plein temps',
					'es' => 'Tiempo completo',
					'ar' => 'وقت كامل',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Part-time',
					'fr' => 'Temps partiel',
					'es' => 'Tiempo parcial',
					'ar' => 'دوام جزئى',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Temporary',
					'fr' => 'Temporaire',
					'es' => 'Temporal',
					'ar' => 'مؤقت',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Contract',
					'fr' => 'Contract',
					'es' => 'Contract',
					'ar' => 'عقد',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Internship',
					'fr' => 'Intérimaire',
					'es' => 'Internship',
					'ar' => 'فترة تدريب',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Permanent',
					'fr' => 'Permanent',
					'es' => 'Permanent',
					'ar' => 'دائم',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Optional',
					'fr' => 'Optional',
					'es' => 'Optional',
					'ar' => 'اختياري',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
		];
		
		$tableName = (new PostType())->getTable();
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
		}
	}
}
