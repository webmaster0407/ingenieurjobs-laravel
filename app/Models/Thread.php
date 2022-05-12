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
use App\Models\Thread\ThreadTrait;
use App\Observers\ThreadObserver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Admin\Panel\Library\Traits\Models\Crud;

class Thread extends BaseModel
{
	use SoftDeletes, Crud, Notifiable, ThreadTrait, HasFactory;
	
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'threads';
	
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
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'post_id',
		'subject',
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
		
		Thread::observe(ThreadObserver::class);
	}
	
	public function routeNotificationForMail()
	{
		// return $this->to_email;
		
		if (auth()->user()->email != $this->from_email) {
			return $this->from_email;
		} else {
			return $this->to_email;
		}
	}
	
	public function routeNotificationForNexmo()
	{
		$phone = phoneFormatInt($this->to_phone, config('country.code'));
		$phone = setPhoneSign($phone, 'nexmo');
		
		return $phone;
	}
	
	public function routeNotificationForTwilio()
	{
		$phone = phoneFormatInt($this->to_phone, config('country.code'));
		$phone = setPhoneSign($phone, 'twilio');
		
		return $phone;
	}
	
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	public function post()
	{
		return $this->belongsTo(Post::class, 'post_id');
	}
	
	/**
	 * Messages relationship.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 *
	 * @codeCoverageIgnore
	 */
	public function messages()
	{
		return $this->hasMany(ThreadMessage::class, 'thread_id', 'id')->orderByDesc('id');
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
		return $this->hasMany(ThreadParticipant::class, 'thread_id', 'id');
	}
	
	/**
	 * User's relationship.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 *
	 * @codeCoverageIgnore
	 */
	public function users()
	{
		return $this->belongsToMany(User::class, (new ThreadParticipant)->getTable(), 'thread_id', 'user_id');
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
	 * Returns threads that the user is associated with.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param int $userId
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeForUser(Builder $query, $userId)
	{
		$participantsTable = (new ThreadParticipant)->getTable();
		$threadsTable = $this->getTable();
		
		return $query->notDeletedByUser($userId)
			->join($participantsTable, $this->getQualifiedKeyName(), '=', $participantsTable . '.thread_id')
			->where($participantsTable . '.user_id', $userId)
			->whereNull($participantsTable . '.deleted_at')
			->select($threadsTable . '.*', $participantsTable . '.last_read', $participantsTable . '.is_important');
	}
	
	/**
	 * Returns threads with new messages that the user is associated with.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param int $userId
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeForUserWithNewMessages(Builder $query, $userId)
	{
		$participantsTable = (new ThreadParticipant)->getTable();
		$threadsTable = $this->getTable();
		
		return $query->notDeletedByUser($userId)
			->join($participantsTable, $this->getQualifiedKeyName(), '=', $participantsTable . '.thread_id')
			->where($participantsTable . '.user_id', $userId)
			->whereNull($participantsTable . '.deleted_at')
			->where(function (Builder $query) use ($participantsTable, $threadsTable) {
				$query->where(
					$threadsTable . '.updated_at',
					'>',
					$this->getConnection()->raw($this->getConnection()->getTablePrefix() . $participantsTable . '.last_read')
				)->orWhereNull($participantsTable . '.last_read');
			})
			->select($threadsTable . '.*', $participantsTable . '.last_read', $participantsTable . '.is_important');
	}
	
	public function scopeWithoutTimestamps()
	{
		$this->timestamps = false;
		return $this;
	}
	
	/**
	 * Returns threads between given user ids.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param array $participants
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeBetween(Builder $query, array $participants)
	{
		return $query->whereHas('participants', function (Builder $q) use ($participants) {
			$q->whereIn('user_id', $participants)
				->select($this->getConnection()->raw('DISTINCT(thread_id)'))
				->groupBy('thread_id')
				->havingRaw('COUNT(thread_id)=' . count($participants));
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
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
