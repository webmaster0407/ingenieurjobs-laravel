<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
				'parent_id'   => null,
				'name'        => [
					'en' => 'Engineering',
					'fr' => 'Ingénierie',
					'es' => 'Ingenieria',
					'ar' => 'هندسة',
				],
				'slug'        => 'engineering',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '2',
				'rgt'         => '3',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Financial Services',
					'fr' => 'Services financiers',
					'es' => 'Servicios financieros',
					'ar' => 'الخدمات المالية',
				],
				'slug'        => 'financial-services',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '4',
				'rgt'         => '5',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Banking',
					'fr' => 'Banque',
					'es' => 'Bancos',
					'ar' => 'الخدمات المصرفية',
				],
				'slug'        => 'banking',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '6',
				'rgt'         => '7',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Security & Safety',
					'fr' => 'Sécurité & Sureté',
					'es' => 'Seguridad',
					'ar' => 'السلامة والأمن',
				],
				'slug'        => 'security-safety',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '8',
				'rgt'         => '9',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Training',
					'fr' => 'Formation',
					'es' => 'Formación',
					'ar' => 'تدريب',
				],
				'slug'        => 'training',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '10',
				'rgt'         => '11',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Public Service',
					'fr' => 'Service public',
					'es' => 'Servicio público',
					'ar' => 'خدمة عامة',
				],
				'slug'        => 'public-service',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '12',
				'rgt'         => '13',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Real Estate',
					'fr' => 'Immobilier',
					'es' => 'Bienes raíces',
					'ar' => 'العقارات',
				],
				'slug'        => 'real-estate',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '14',
				'rgt'         => '15',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Independent & Freelance',
					'fr' => 'Indépendants & Freelance',
					'es' => 'Independiente y Autónomo',
					'ar' => 'مستقلة مستقلة',
				],
				'slug'        => 'independent-freelance',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '16',
				'rgt'         => '17',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'IT & Telecoms',
					'fr' => 'Informatique & Télécoms',
					'es' => 'TI y Telecomunicaciones',
					'ar' => 'تكنولوجيا المعلومات والاتصالات',
				],
				'slug'        => 'it-telecoms',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '18',
				'rgt'         => '19',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Marketing & Communication',
					'fr' => 'Marketing & Communication',
					'es' => 'Marketing y Comunicación',
					'ar' => 'الاتصالات التسويقية',
				],
				'slug'        => 'marketing-communication',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '20',
				'rgt'         => '21',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Babysitting & Nanny Work',
					'fr' => 'Garderie',
					'es' => 'Trabajo de niñera y Niñera',
					'ar' => 'خدمة مجالسة الأطفال و مربية',
				],
				'slug'        => 'babysitting-nanny-work',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '22',
				'rgt'         => '23',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Human Resources',
					'fr' => 'Ressources humaines',
					'es' => 'Recursos humanos',
					'ar' => 'الموارد البشرية',
				],
				'slug'        => 'human-resources',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '24',
				'rgt'         => '25',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Medical & Healthcare',
					'fr' => 'Médecine & Santé',
					'es' => 'Médico y Sanitario',
					'ar' => 'الطبية والرعاية الصحية',
				],
				'slug'        => 'medical-healthcare',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '26',
				'rgt'         => '27',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Tourism & Restaurants',
					'fr' => 'Tourisme & Restaurants',
					'es' => 'Turismo y Restaurantes',
					'ar' => 'السياحة والمطاعم',
				],
				'slug'        => 'tourism-restaurants',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '28',
				'rgt'         => '29',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
			[
				'parent_id'   => null,
				'name'        => [
					'en' => 'Transportation & Logistics',
					'fr' => 'Transport et Logistique',
					'es' => 'Transportación',
					'ar' => 'النقل والخدمات اللوجستية',
				],
				'slug'        => 'transportation-logistics',
				'description' => null,
				'picture'     => 'app/default/categories/fa-folder-default.png',
				'icon_class'  => null,
				'lft'         => '30',
				'rgt'         => '31',
				'depth'       => '0',
				'active'      => '1',
				'children'    => [],
			],
		];
		
		$tableName = (new Category())->getTable();
		foreach ($entries as $entry) {
			$subEntries = [];
			if (isset($entry['children'])) {
				$subEntries = $entry['children'];
				unset($entry['children']);
			}
			
			$lft = isset($rgt) ? ($rgt + 1) : 1;
			
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
			
			DB::table($tableName)->where('id', $entryId)->update(['lft' => $lft]);
			
			if (!empty($subEntries)) {
				foreach ($subEntries as $subEntry) {
					$lft = $lft + 1;
					$rgt = $lft + 1;
					
					$subEntry = arrayTranslationsToJson($subEntry);
					$subEntryId = DB::table($tableName)->insertGetId($subEntry);
					DB::table($tableName)->where('id', $subEntryId)->update([
						'parent_id' => $entryId,
						'lft'       => $lft,
						'rgt'       => $rgt,
					]);
				}
				$rgt = isset($rgt) ? ($rgt + 1) : 2;
			} else {
				$rgt = isset($lft) ? ($lft + 1) : 2;
			}
			
			DB::table($tableName)->where('id', $entryId)->update(['rgt' => $rgt]);
		}
	}
}
