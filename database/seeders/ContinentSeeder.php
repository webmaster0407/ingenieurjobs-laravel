<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
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
				'code'   => 'AF',
				'name'   => 'Africa',
				'active' => '1',
			],
			[
				'code'   => 'AN',
				'name'   => 'Antarctica',
				'active' => '1',
			],
			[
				'code'   => 'AS',
				'name'   => 'Asia',
				'active' => '1',
			],
			[
				'code'   => 'EU',
				'name'   => 'Europe',
				'active' => '1',
			],
			[
				'code'   => 'NA',
				'name'   => 'North America',
				'active' => '1',
			],
			[
				'code'   => 'OC',
				'name'   => 'Oceania',
				'active' => '1',
			],
			[
				'code'   => 'SA',
				'name'   => 'South America',
				'active' => '1',
			],
		];
		
		$tableName = (new Continent())->getTable();
		foreach ($entries as $entry) {
			DB::table($tableName)->insert($entry);
		}
	}
}
