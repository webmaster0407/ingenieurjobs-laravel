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

namespace App\Models\Thread;

use App\Models\Thread\ThreadTrait\IsImportantTrait;
use App\Models\Thread\ThreadTrait\LastReadTrait;
use App\Models\ThreadParticipant;
use App\Models\User;

trait ThreadTrait
{
	use LastReadTrait, IsImportantTrait;
	
	/**
	 * Returns the latest message from a thread.
	 *
	 * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\HasMany|object|null
	 */
	public function getLatestMessageAttribute()
	{
		return $this->messages()->latest()->first();
	}
	
	/**
	 * Returns the user object that created the thread.
	 *
	 * @return \App\Models\User
	 */
	public function creator()
	{
		$firstMessage = $this->messages()->withTrashed()->oldest()->first();
		$user = $firstMessage ? $firstMessage->user : new User();
		
		return $user;
	}
	
	/**
	 * Returns all of the latest threads by updated_at date.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 */
	public static function getAllLatest()
	{
		return static::latest('updated_at');
	}
	
	/**
	 * Returns all threads by subject.
	 *
	 * @param string $subject
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public static function getBySubject($subject)
	{
		return static::where('subject', 'like', $subject)->get();
	}
	
	/**
	 * Returns an array of user ids that are associated with the thread.
	 *
	 * @param null|int $userId
	 *
	 * @return array
	 */
	public function participantsUserIds($userId = null)
	{
		$users = $this->participants()->withTrashed()->select('user_id')->get()->map(function ($participant) {
			return $participant->user_id;
		});
		
		if ($userId !== null) {
			$users->push($userId);
		}
		
		return $users->toArray();
	}
	
	/**
	 * Add users to thread as participants.
	 *
	 * @param array|mixed $userId
	 *
	 * @return void
	 */
	public function addParticipant($userId)
	{
		$userIds = is_array($userId) ? $userId : (array)func_get_args();
		
		collect($userIds)->each(function ($userId) {
			ThreadParticipant::firstOrCreate([
				'user_id'   => $userId,
				'thread_id' => $this->id,
			]);
		});
	}
	
	/**
	 * Remove participants from thread.
	 *
	 * @param array|mixed $userId
	 *
	 * @return void
	 */
	public function removeParticipant($userId)
	{
		$userIds = is_array($userId) ? $userId : (array)func_get_args();
		
		ThreadParticipant::where('thread_id', $this->id)->whereIn('user_id', $userIds)->delete();
	}
	
	/**
	 * Finds the participant record from a user id.
	 *
	 * @param $userId
	 *
	 * @return mixed
	 *
	 * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
	 */
	public function getParticipantFromUser($userId)
	{
		return $this->participants()->where('user_id', $userId)->firstOrFail();
	}
	
	/**
	 * Restores only trashed participants within a thread that has a new message.
	 * Others are already active participiants.
	 *
	 * @return void
	 */
	public function activateAllParticipants()
	{
		$participants = $this->participants()->onlyTrashed()->get();
		foreach ($participants as $participant) {
			$participant->restore();
		}
	}
	
	/**
	 * Generates a string of participant information.
	 *
	 * @param null|int $userId
	 * @param array $columns
	 *
	 * @return string
	 */
	public function participantsString($userId = null, $columns = ['name'])
	{
		$participantsTable = (new ThreadParticipant)->getTable();
		$usersTable = (new User())->getTable();
		$userPrimaryKey = (new User())->getKeyName();
		
		$selectString = $this->createSelectString($columns);
		
		$participantNames = $this->getConnection()->table($usersTable)
			->join($participantsTable, $usersTable . '.' . $userPrimaryKey, '=', $participantsTable . '.user_id')
			->where($participantsTable . '.thread_id', $this->id)
			->select($this->getConnection()->raw($selectString));
		
		if ($userId !== null) {
			$participantNames->where($usersTable . '.' . $userPrimaryKey, '!=', $userId);
		}
		
		return $participantNames->implode('name', ', ');
	}
	
	/**
	 * Checks to see if a user is a current participant of the thread.
	 *
	 * @param int $userId
	 *
	 * @return bool
	 */
	public function hasParticipant($userId)
	{
		$participants = $this->participants()->where('user_id', '=', $userId);
		
		return $participants->count() > 0;
	}
	
	/**
	 * Generates a select string used in participantsString().
	 *
	 * @param array $columns
	 *
	 * @return string
	 */
	protected function createSelectString($columns)
	{
		$tablePrefix = $this->getConnection()->getTablePrefix();
		$usersTable = (new User())->getTable();
		
		$columnString = implode(", ' ', " . $tablePrefix . $usersTable . '.', $columns);
		$selectString = 'concat(' . $tablePrefix . $usersTable . '.' . $columnString . ') as name';
		
		return $selectString;
	}
}
