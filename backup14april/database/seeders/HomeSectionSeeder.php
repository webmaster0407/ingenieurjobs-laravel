<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSectionSeeder extends Seeder
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
				'method'    => 'getSearchForm',
				'name'      => 'Search Form Area',
				'value'     => null,
				'view'      => 'home.inc.search',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '0',
				'rgt'       => '0',
				'depth'     => '1',
				'active'    => '1',
			],
			[
				'method'    => 'getSponsoredPosts',
				'name'      => 'Sponsored Ads',
				'value'     => null,
				'view'      => 'home.inc.featured',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '2',
				'rgt'       => '3',
				'depth'     => '1',
				'active'    => '1',
			],
			[
				'method'    => 'getLatestPosts',
				'name'      => 'Latest Ads',
				'value'     => null,
				'view'      => 'home.inc.latest',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '4',
				'rgt'       => '5',
				'depth'     => '1',
				'active'    => '1',
			],
			[
				'method'    => 'getCategories',
				'name'      => 'Categories',
				'value'     => null,
				'view'      => 'home.inc.categories',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '6',
				'rgt'       => '7',
				'depth'     => '1',
				'active'    => '1',
			],
			[
				'method'    => 'getLocations',
				'name'      => 'Locations & Country Map',
				'value'     => null,
				'view'      => 'home.inc.locations',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '8',
				'rgt'       => '9',
				'depth'     => '1',
				'active'    => '1',
			],
			[
				'method'    => 'getFeaturedPostsCompanies',
				'name'      => 'Companies',
				'value'     => null,
				'view'      => 'home.inc.companies',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '10',
				'rgt'       => '11',
				'depth'     => '1',
				'active'    => '1',
			],
			[
				'method'    => 'getStats',
				'name'      => 'Mini Stats',
				'value'     => null,
				'view'      => 'home.inc.stats',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '12',
				'rgt'       => '13',
				'depth'     => '1',
				'active'    => '1',
			],
			[
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
			],
			[
				'method'    => 'getTopAdvertising',
				'name'      => 'Advertising #1',
				'value'     => null,
				'view'      => 'layouts.inc.advertising.top',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '16',
				'rgt'       => '17',
				'depth'     => '1',
				'active'    => '0',
			],
			[
				'method'    => 'getBottomAdvertising',
				'name'      => 'Advertising #2',
				'value'     => null,
				'view'      => 'layouts.inc.advertising.bottom',
				'field'     => null,
				'parent_id' => null,
				'lft'       => '18',
				'rgt'       => '19',
				'depth'     => '1',
				'active'    => '0',
			],
		];
		
		$tableName = (new HomeSection())->getTable();
		foreach ($entries as $entry) {
			DB::table($tableName)->insert($entry);
		}
	}
}
