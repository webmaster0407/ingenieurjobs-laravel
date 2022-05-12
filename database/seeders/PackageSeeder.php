<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Packages' "active" column value
		$appUrl = env('APP_URL');
		$isDemoDomain = (isDemoDomain($appUrl) || Str::contains($appUrl, 'bedigit.local') || Str::contains($appUrl, 'laraclassifier.local'));
		$activeValue = $isDemoDomain ? '1' : '0';
		
		$entries = [
			[
				'name'                  => [
					'en' => 'Regular List',
					'fr' => 'Gratuit',
					'es' => 'Lista regular',
					'ar' => 'قائمة منتظمة',
				],
				'short_name'            => [
					'en' => 'Free',
					'fr' => 'Standard',
					'es' => 'Estándar',
					'ar' => 'اساسي',
				],
				'ribbon'                => null,
				'has_badge'             => '0',
				'price'                 => '0.00',
				'currency_code'         => 'USD',
				'promo_duration'        => null,
				'duration'              => null,
				'description'           => null,
				'facebook_ads_duration' => '0',
				'google_ads_duration'   => '0',
				'twitter_ads_duration'  => '0',
				'linkedin_ads_duration' => '0',
				'recommended'           => '0',
				'parent_id'             => null,
				'lft'                   => '2',
				'rgt'                   => '3',
				'depth'                 => '0',
				'active'                => $activeValue,
			],
			[
				'name'                  => [
					'en' => 'Top page Job',
					'fr' => 'Annonce Haut de Page',
					'es' => 'Anuncio de inicio de página',
					'ar' => 'إعلان أعلى الصفحة',
				],
				'short_name'            => [
					'en' => 'Premium',
					'fr' => 'Premium',
					'es' => 'Prima',
					'ar' => 'الممتازة',
				],
				'ribbon'                => null,
				'has_badge'             => '0',
				'price'                 => '99.00',
				'currency_code'         => 'USD',
				'promo_duration'        => '7',
				'duration'              => '60',
				'description'           => [
					'en' => "Featured on the Homepage\nFeatured in the Category",
					'fr' => "En vedette à l'accueil\nEn vedette dans la catégorie",
					'es' => "Destacado en la página de inicio\nDestacado en la categoría",
					'ar' => "ظهرت في الاستقبال\nظهرت في الفئة",
				],
				'facebook_ads_duration' => '0',
				'google_ads_duration'   => '0',
				'twitter_ads_duration'  => '0',
				'linkedin_ads_duration' => '0',
				'recommended'           => '1',
				'parent_id'             => null,
				'lft'                   => '4',
				'rgt'                   => '5',
				'depth'                 => '0',
				'active'                => $activeValue,
			],
			[
				'name'                  => [
					'en' => 'Top page Job+',
					'fr' => 'Annonce Haut de Page+',
					'es' => 'Anuncio de inicio de página+',
					'ar' => 'إعلان أعلى الصفحة+',
				],
				'short_name'            => [
					'en' => 'Premium+',
					'fr' => 'Premium+',
					'es' => 'Prima+',
					'ar' => 'الممتازة+',
				],
				'ribbon'                => null,
				'has_badge'             => '0',
				'price'                 => '129.00',
				'currency_code'         => 'USD',
				'promo_duration'        => '30',
				'duration'              => '120',
				'description'           => [
					'en' => "Featured on the Homepage\nFeatured in the Category",
					'fr' => "En vedette à l'accueil\nEn vedette dans la catégorie",
					'es' => "Destacado en la página de inicio\nDestacado en la categoría",
					'ar' => "ظهرت في الاستقبال\nظهرت في الفئة",
				],
				'facebook_ads_duration' => '0',
				'google_ads_duration'   => '0',
				'twitter_ads_duration'  => '0',
				'linkedin_ads_duration' => '0',
				'recommended'           => '0',
				'parent_id'             => null,
				'lft'                   => '6',
				'rgt'                   => '7',
				'depth'                 => '0',
				'active'                => $activeValue,
			],
		];
		
		$tableName = (new Package())->getTable();
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
		}
	}
}
