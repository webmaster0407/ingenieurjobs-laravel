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

use App\Helpers\Files\Storage\StorageDisk;
use App\Helpers\UrlGen;
use App\Models\Scopes\ActiveScope;
use App\Observers\PageObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\SpatieTranslatable\HasTranslations;
use Prologue\Alerts\Facades\Alert;

class Page extends BaseModel
{
    use Crud, Sluggable, SluggableScopeHelpers, HasTranslations;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';
    
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
    // public $timestamps = false;
    
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
        'type',
        'name',
        'slug',
        'picture',
        'title',
        'content',
		'external_link',
        'name_color',
        'title_color',
		'target_blank',
		'seo_title',
		'seo_description',
		'seo_keywords',
        'excluded_from_footer',
        'active',
        'lft',
        'rgt',
        'depth',
    ];
    public $translatable = ['name', 'title', 'content', 'seo_title', 'seo_description', 'seo_keywords'];
    
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
    protected $dates = ['created_at', 'updated_at'];
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
	
		Page::observe(PageObserver::class);
		
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
        return '<a href="' . UrlGen::page($this) . '" target="_blank">' . $this->name . '</a>';
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }
    
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeType($builder, $type)
    {
        return $builder->where('type', $type)->orderByDesc('id');
    }
    
    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    // The slug is created automatically from the "name" field if no slug exists.
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
	
	public function getTitleAttribute($value)
	{
		if (isset($this->attributes['title']) && !isValidJson($this->attributes['title'])) {
			return $this->attributes['title'];
		}
		
		return $value;
	}
	
	public function getContentAttribute($value)
	{
		if (isset($this->attributes['content']) && !isValidJson($this->attributes['content'])) {
			return $this->attributes['content'];
		}
		
		return $value;
	}

    public function getPictureAttribute()
    {
        if (!isset($this->attributes) || !isset($this->attributes['picture'])) {
            return null;
        }

        $value = $this->attributes['picture'];
	
		$disk = StorageDisk::getDisk();

        if (!$disk->exists($value)) {
            $value = null;
        }

        return $value;
    }
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
	public function setTitleAttribute($value)
	{
		if (empty($value)) {
			$this->attributes['title'] = $this->name;
		} else {
			$this->attributes['title'] = $value;
		}
	}
	
    public function setPictureAttribute($value)
    {
		$disk = StorageDisk::getDisk();
        $attribute_name = 'picture';
        $destination_path = 'app/page';

        // If the image was erased
        if (empty($value)) {
            // delete the image from disk
			$disk->delete($this->picture);

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
				$imageQuality = 100;
				
				// Image default dimensions
				$width = (int)config('larapen.core.picture.otherTypes.bgHeader.width', 2000);
				$height = (int)config('larapen.core.picture.otherTypes.bgHeader.height', 1000);
				
				// Init. Intervention
				$image = Image::make($value);
				
				// Get the image original dimensions
				$imgWidth = (int)$image->width();
				$imgHeight = (int)$image->height();
				
				// Fix the Image Orientation
				if (exifExtIsEnabled()) {
					$image = $image->orientate();
				}
				
				// If the original dimensions are higher than the resize dimensions
				// OR the 'upsize' option is enable, then resize the image
				if ($imgWidth > $width || $imgHeight > $height) {
					// Resize
					$image = $image->resize($width, $height, function ($constraint) {
						$constraint->aspectRatio();
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
				if (!Str::startsWith($value, $destination_path)) {
					$value = $destination_path . last(explode($destination_path, $value));
				}
				$this->attributes[$attribute_name] = $value;
			}
		} catch (\Throwable $e) {
			Alert::error($e->getMessage())->flash();
			$this->attributes[$attribute_name] = null;
			
			return false;
		}
    }
}
