<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Models;

use App\Helpers\DBTool;
use App\Helpers\Files\Storage\StorageDisk;
use App\Models\Scopes\ActiveScope;
use App\Observers\CategoryObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\SpatieTranslatable\HasTranslations;
use Prologue\Alerts\Facades\Alert;

class Category extends BaseModel
{
	use Crud, Sluggable, SluggableScopeHelpers, HasTranslations;
	
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';
	
	/**
	 * The primary key for the model.
	 *
	 * @var string
	 */
	// protected $primaryKey = 'id';
	
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;
	
	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id'];
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'parent_id',
		'name',
		'slug',
		'description',
		'hide_description',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'picture',
		'icon_class',
		'active',
		'lft',
		'rgt',
		'depth',
	];
	public $translatable = ['name', 'description', 'seo_title', 'seo_description', 'seo_keywords'];
	
	/**
	 * The attributes that should be hidden for arrays
	 *
	 * @var array
	 */
	// protected $hidden = [];
	
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	// protected $dates = [];
	
	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/
	protected static function boot()
	{
		parent::boot();
		
		Category::observe(CategoryObserver::class);
		
		static::addGlobalScope(new ActiveScope());
	}
	
	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => ['slug', 'name'],
			],
		];
	}
	
	public function getNameHtml()
	{
		$currentUrl = preg_replace('#/(search)$#', '', url()->current());
		$url = $currentUrl . '/' . $this->id . '/edit';
		
		$out = '<a href="' . $url . '">' . $this->name . '</a>';
		
		return $out;
	}
	
	public function subCategoriesBtn($xPanel = false)
	{
		$out = '';
		
		$url = admin_url('categories/' . $this->id . '/subcategories');
		
		$msg = trans('admin.Subcategories of category', ['category' => $this->name]);
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		$countSubCats = $this->children->count();
		
		$out .= '<a class="btn btn-xs btn-light" href="' . $url . '"' . $tooltip . '>';
		$out .= $countSubCats . ' ';
		$out .= ($countSubCats > 1) ? trans('admin.subcategories') : trans('admin.subcategory');
		$out .= '</a>';
		
		return $out;
	}
	
	/**
	 * @param bool $xPanel
	 * @return string
	 */
	public function rebuildNestedSetNodesBtn($xPanel = false)
	{
		$url = admin_url('categories/rebuild-nested-set-nodes');
		
		$msg = trans('admin.rebuild_nested_set_nodes_info');
		$tooltip = ' data-bs-toggle="tooltip" title="' . $msg . '"';
		
		// Button
		$out = '';
		$out .= '<a class="btn btn-light shadow" href="' . $url . '"' . $tooltip . '>';
		$out .= '<i class="fas fa-code-branch"></i> ';
		$out .= trans('admin.rebuild_nested_set_nodes');
		$out .= '</a>';
		
		return $out;
	}
	
	/**
	 * Get categories recursively
	 *
	 * @param null $skippedId
	 * @param array $entries
	 * @param array $tab
	 * @param int $level
	 * @param string $spacerChars
	 * @return array
	 */
	public static function selectBoxTree($skippedId = null, $entries = [], &$tab = [], $level = 0, $spacerChars = '-----')
	{
		if (empty($entries)) {
			if (!empty($skippedId)) {
				$tab[0] = 'Root';
			}
			$entries = self::where(function ($query) {
				$query->where('parent_id', 0)->orWhereNull('parent_id');
			})->where('id', '!=', $skippedId)->orderBy('lft')->get();
			if ($entries->count() <= 0) {
				return [];
			}
		}
		
		foreach ($entries as $entry) {
			if (!empty($spacerChars)) {
				$spacer = str_repeat($spacerChars, $level) . '| ';
			} else {
				$spacer = '';
			}
			
			// Print out the item ID and the item name
			if ($skippedId != $entry->id) {
				$tab[$entry->id] = $spacer . $entry->name;
				
				// If entry has children, we have a nested data structure, so call recurse on it.
				if (isset($entry->children) && $entry->children->count() > 0) {
					self::selectBoxTree($skippedId, $entry->children, $tab, $level + 1, $spacerChars);
				}
			}
		}
		
		return $tab;
	}
	
	/**
	 * Count Posts in the category recursively
	 *
	 * NOTE: This is far from optimal due to obvious N+1 problem
	 *
	 * @return int
	 * @todo: Find another way.
	 *
	 */
	public function postsCount()
	{
		$sum = 0;
		
		foreach ($this->children as $child) {
			$sum += $child->postsCount();
		}
		
		return $this->posts->count() + $sum;
	}
	
	/**
	 * Count Posts by Category
	 *
	 * @param null $cityId
	 * @return \Illuminate\Support\Collection
	 */
	public static function countPostsByCategory($cityId = null)
	{
		$whereCity = '';
		if (!empty($cityId)) {
			$whereCity = ' AND tPost.city_id = ' . $cityId;
		}
		
		$categoriesTable = (new Category())->getTable();
		$postsTable = (new Post())->getTable();
		
		$sql = 'SELECT parent.id, COUNT(*) AS total
				FROM ' . DBTool::table($categoriesTable) . ' AS node,
						' . DBTool::table($categoriesTable) . ' AS parent,
						' . DBTool::table($postsTable) . ' AS tPost
				WHERE node.lft BETWEEN parent.lft AND parent.rgt
						AND node.id = tPost.category_id
						AND tPost.country_code = :countryCode' . $whereCity . '
						AND (tPost.verified_email = 1 AND tPost.verified_phone = 1) AND tPost.archived != 1 AND tPost.deleted_at IS NULL
				GROUP BY parent.id';
		$bindings = [
			'countryCode' => config('country.code'),
		];
		$cats = DB::select(DB::raw($sql), $bindings);
		$cats = collect($cats)->keyBy('id');
		
		return $cats;
	}
	
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	public function posts()
	{
		if (isAdminPanel()) {
			return $this->hasMany(Post::class, 'category_id');
		} else {
			return $this->hasMany(Post::class, 'category_id', 'id')
				->where('country_code', config('country.code'));
		}
	}
	
	public function children()
	{
		return $this->hasMany(Category::class, 'parent_id')
			->with('children')
			->orderBy('lft');
	}
	
	public function childrenClosure()
	{
		return $this->hasMany(Category::class, 'parent_id')
			->orderBy('lft');
	}
	
	public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id')
			->with('parent');
	}
	
	public function parentClosure()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}
	
	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/
	
	/*
	|--------------------------------------------------------------------------
	| ACCESSORS
	|--------------------------------------------------------------------------
	*/
	// The slug is created automatically from the "title" field if no slug exists.
	public function getSlugOrNameAttribute()
	{
		if ($this->slug != '') {
			return $this->slug;
		}
		
		return $this->name;
	}
	
	public function getNameAttribute($value)
	{
		if (isset($this->attributes['name']) && !isValidJson($this->attributes['name'])) {
			return $this->attributes['name'];
		}
		
		return $value;
	}
	
	public function getIconClassAttribute($value)
	{
		if (empty($value)) {
			$value = 'fas fa-folder';
		} else {
			// This part will be removed at: 2022-10-14
			$filePath = public_path('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-fontawesome5-all.js');
			$buffer = file_get_contents($filePath);
			
			$ifVersion = '5.15.4';
			$ifVersion = str_replace('.', '\.', $ifVersion);
			
			$tmp = '';
			preg_match('#version:[^\']+\'' . $ifVersion . '\',[^i]+icons:[^\[]*\[([^\]]+)\]#s', $buffer, $tmp);
			$iClasses = (isset($tmp[1])) ? $tmp[1] : '';
			$iClasses = str_replace("'", '', $iClasses);
			$iClasses = preg_replace('#[\n\t]*#', '', $iClasses);
			
			$iClassesArray = array_map('trim', explode(',', $iClasses));
			
			if (!empty($iClassesArray)) {
				if (!in_array($value, $iClassesArray)) {
					$value = 'fas fa-folder';
				}
			}
		}
		
		return $value;
	}
	
	public function getDescriptionAttribute($value)
	{
		if (isset($this->attributes['description']) && !isValidJson($this->attributes['description'])) {
			return $this->attributes['description'];
		}
		
		return $value;
	}
	
	/**
	 * Category icons pictures from original version
	 * Only the file name is set in Category 'picture' field
	 * Example: fa-car.png
	 *
	 * @return null|string
	 */
	public function getPictureFromOriginPath(): ?string
	{
		$skin = config('settings.style.skin', 'default');
		
		if (!isset($this->attributes) || !isset($this->attributes['picture'])) {
			return null;
		}
		
		$value = $this->attributes['picture'];
		if (empty($value)) {
			return null;
		}
		
		// Fix path
		$value = 'app/categories/' . $skin . '/' . $value;
		
		$disk = StorageDisk::getDisk();
		
		if (!$disk->exists($value)) {
			$value = null;
		}
		
		return $value;
	}
	
	public function getPictureAttribute()
	{
		$disk = StorageDisk::getDisk();
		$skin = getFrontSkin(request()->input('skin'));
		$defaultIcon = 'app/default/categories/fa-folder-default.png';
		
		// OLD PATH
		$value = $this->getPictureFromOriginPath();
		if (!empty($value)) {
			return $value;
		}
		
		// NEW PATH
		if (!isset($this->attributes) || !isset($this->attributes['picture'])) {
			$value = 'app/default/categories/fa-folder-' . $skin . '.png';
			if (!$disk->exists($value)) {
				$value = $defaultIcon;
			}
			
			return $value;
		}
		
		$value = $this->attributes['picture'];
		
		if (!$disk->exists($value)) {
			$value = 'app/default/categories/fa-folder-' . $skin . '.png';
		} else {
			// If the Category contains a skinnable icon,
			// Change it by the selected skin icon.
			if (Str::contains($value, 'app/categories/') && !Str::contains($value, '/custom/')) {
				$pattern = '/app\/categories\/[^\/]+\//iu';
				$replacement = 'app/categories/' . $skin . '/';
				$value = preg_replace($pattern, $replacement, $value);
			}
			
			// (Optional)
			// If the Category contains a skinnable default icon,
			// Change it by the selected skin default icon.
			if (Str::contains($value, 'app/default/categories/fa-folder-')) {
				$pattern = '/app\/default\/categories\/fa-folder-[^\.]+\./iu';
				$replacement = 'app/default/categories/fa-folder-' . $skin . '.';
				$value = preg_replace($pattern, $replacement, $value);
			}
		}
		
		if (!$disk->exists($value)) {
			$value = $defaultIcon;
		}
		
		return $value;
	}
	
	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
	public function setPictureAttribute($value)
	{
		$disk = StorageDisk::getDisk();
		$skin = config('settings.style.skin', 'default');
		$attribute_name = 'picture';
		$destination_path = 'app/categories/custom';
		
		// If the image was erased
		if (empty($value)) {
			// Don't delete the default pictures
			$defaultPicture = 'app/default/categories/fa-folder-' . $skin . '.png';
			$defaultSkinPicture = 'app/categories/' . $skin . '/';
			if (!Str::contains($this->picture, $defaultPicture) && !Str::contains($this->picture, $defaultSkinPicture)) {
				// delete the image from disk
				$disk->delete($this->picture);
			}
			
			// set null in the database column
			$this->attributes[$attribute_name] = null;
			
			return false;
		}
		
		// Check the image file
		if ($value == url('/')) {
			$this->attributes[$attribute_name] = null;
			
			return false;
		}
		
		// If laravel request->file('filename') resource OR base64 was sent, store it in the db
		try {
			if (fileIsUploaded($value)) {
				// Get file extension
				$extension = getUploadedFileExtension($value);
				if (empty($extension)) {
					$extension = 'jpg';
				}
				
				// Image quality
				$imageQuality = config('settings.upload.image_quality', 90);
				
				// Image default dimensions
				$width = (int)config('settings.upload.img_resize_cat_width', 400);
				$height = (int)config('settings.upload.img_resize_cat_height', 400);
				
				// Other parameters
				$ratio = config('settings.upload.img_resize_cat_ratio', '1');
				$upSize = config('settings.upload.img_resize_cat_upsize', '0');
				
				// Init. Intervention
				$image = Image::make($value);
				
				// If the original dimensions are higher than the resize dimensions
				// OR the 'upsize' option is enable, then resize the image
				if ($image->width() > $width || $image->height() > $height || $upSize == '1') {
					// Resize
					$image = $image->resize($width, $height, function ($constraint) use ($ratio, $upSize) {
						if ($ratio == '1') {
							$constraint->aspectRatio();
						}
						if ($upSize == '1') {
							$constraint->upsize();
						}
					});
				}
				
				// Encode the Image!
				$image = $image->encode($extension, $imageQuality);
				
				// Generate a filename.
				$filename = md5($value . time()) . '.' . $extension;
				
				// Store the image on disk.
				$disk->put($destination_path . '/' . $filename, $image->stream()->__toString());
				
				// Save the path to the database
				$this->attributes[$attribute_name] = $destination_path . '/' . $filename;
			} else {
				// Retrieve current value without upload a new file.
				if (Str::contains($value, 'app/default/') || empty($value)) {
					$value = null;
				} else {
					// Common path includes 'app/categories/custom/' and 'app/categories/(blue|default|green|red|yellow)/' paths
					$commonPath = 'app/categories/';
					if (!Str::startsWith($value, $commonPath)) {
						$value = $commonPath . last(explode($commonPath, $value));
					}
				}
				$this->attributes[$attribute_name] = $value;
			}
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$this->attributes[$attribute_name] = null;
			
			return false;
		}
	}
	
	/**
	 * Activate/Deactivate categories with their children if exist
	 * Activate/Deactivate translated entries with their translations if exist
	 *
	 * @param $value
	 */
	public function setActiveAttribute($value)
	{
		$entityId = (isset($this->attributes['id'])) ? $this->attributes['id'] : null;
		
		if (!empty($entityId)) {
			// Activate the entry
			$this->attributes['active'] = $value;
			
			// If the entry is a parent entry, activate its children
			$parentId = (isset($this->attributes['parent_id'])) ? $this->attributes['parent_id'] : null;
			if ($parentId == 0) {
				// ... AND don't select the current parent entry to prevent infinite recursion
				$entries = $this->where('parent_id', $entityId)->get();
				if (!empty($entries)) {
					foreach ($entries as $entry) {
						$entry->active = $value;
						$entry->save();
					}
				}
			}
		} else {
			// Activate the new entries
			$this->attributes['active'] = $value;
		}
	}
}
