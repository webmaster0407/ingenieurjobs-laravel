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

use App\Helpers\Date;
use App\Helpers\Files\Storage\StorageDisk;
use App\Models\Thread\MessageTrait;
use App\Observers\ThreadMessageObserver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;

class ThreadMessage extends BaseModel
{
	use SoftDeletes, Crud, Notifiable, MessageTrait, HasFactory;
	
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'threads_messages';
	
	/**
	 * The primary key for the model.
	 *
	 * @var string
	 */
	// protected $primaryKey = 'id';
	protected $appends = ['created_at_formatted'];
	
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
	 * The relationships that should be touched on save.
	 *
	 * @var array
	 */
	protected $touches = ['thread'];
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'thread_id',
		'user_id',
		'body',
		'filename',
	];
	
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
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];
	
	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/
	protected static function boot()
	{
		parent::boot();
		
		ThreadMessage::observe(ThreadMessageObserver::class);
	}
	
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	/**
	 * Thread relationship.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 *
	 * @codeCoverageIgnore
	 */
	public function thread()
	{
		return $this->belongsTo(Thread::class, 'thread_id', 'id');
	}
	
	/**
	 * User relationship.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 *
	 * @codeCoverageIgnore
	 */
	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
	
	/**
	 * Participants relationship.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 *
	 * @codeCoverageIgnore
	 */
	public function participants()
	{
		return $this->hasMany(ThreadParticipant::class, 'thread_id', 'thread_id');
	}
	
	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/
	public function scopeNotDeletedByUser(Builder $query, $userId)
	{
		return $query->where(function($q) use ($userId) {
			$q->where('deleted_by', '!=', $userId)->orWhereNull('deleted_by');
		});
	}
	
	/**
	 * Returns unread messages given the userId.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param int $userId
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeUnreadForUser(Builder $query, $userId)
	{
		return $query->has('thread')
			->where('user_id', '!=', $userId)
			->whereHas('participants', function (Builder $query) use ($userId) {
				$query->where('user_id', $userId)
					->where(function (Builder $q) {
						$q->where('last_read', '<', $this->getConnection()->raw($this->getConnection()->getTablePrefix() . $this->getTable() . '.created_at'))
							->orWhereNull('last_read');
					});
			});
	}
	
	/*
	|--------------------------------------------------------------------------
	| ACCESSORS
	|--------------------------------------------------------------------------
	*/
	public function getCreatedAtAttribute($value)
	{
		$value = new Carbon($value);
		$value->timezone(Date::getAppTimeZone());
		
		return $value;
	}
	
	public function getCreatedAtFormattedAttribute($value)
	{
		$value = new Carbon($this->attributes['created_at']);
		$value->timezone(Date::getAppTimeZone());
		
		$value = Date::format($value, 'datetime');
		
		return $value;
	}
	
	/*
	public function getFilenameAttribute()
	{
		if (!isset($this->attributes) || !isset($this->attributes['filename'])) {
			return null;
		}
		
		$value = $this->attributes['filename'];
		// $value = 'uploads/' . $value;
		
		return $value;
	}
	*/
	
	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
	public function setFilenameAttribute($value)
	{
		$diskName = StorageDisk::getDiskName();
		$attributeName = 'filename';
		
		if (Str::startsWith($value, 'resumes/')) {
			$this->attributes[$attributeName] = $value;
			
			return;
		}
		
		// Get the Ad details
		$post = null;
		if (!empty($this->thread)) {
			$post = Post::find($this->thread->post_id);
		}
		if (empty($post)) {
			$this->attributes[$attributeName] = null;
			
			return;
		}
		
		// Path
		$destination_path = 'files/' . strtolower($post->country_code) . '/' . $post->id . '/applications';
		
		// Upload
		$this->uploadFileToDisk($value, $attributeName, $diskName, $destination_path);
	}
}
