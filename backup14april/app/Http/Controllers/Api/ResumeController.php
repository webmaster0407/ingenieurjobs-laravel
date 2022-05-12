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

namespace App\Http\Controllers\Api;

use App\Http\Requests\ResumeRequest;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\ResumeResource;
use App\Models\Resume;
use Illuminate\Support\Str;

/**
 * @group Resumes
 */
class ResumeController extends BaseController
{
	/**
	 * List resumes
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at, name. Example: created_at
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$resumes = Resume::query();
		
		if (auth('sanctum')->check()) {
			$resumes->where('user_id', auth('sanctum')->user()->id);
		}
		
		// Sorting
		$resumes = $this->applySorting($resumes, ['created_at', 'name']);
		
		$resumes = $resumes->paginate($this->perPage);
		
		$collection = new EntityCollection(class_basename($this), $resumes);
		
		return $this->respondWithCollection($collection);
	}
	
	/**
	 * Get resume
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam embed string The Comma-separated list of the company relationships for Eager Loading - Possible values: user. Example: user
	 *
	 * @urlParam id int required The resume's ID. Example: 269
	 *
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		$resume = Resume::query()->where('id', $id);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('user', $embed)) {
			$resume->with('user');
		}
		
		$resume = $resume->first();
		
		abort_if(empty($resume), 404, t('resume_not_found'));
		
		$resource = new ResumeResource($resume);
		
		return $this->respondWithResource($resource);
	}
	
	/**
	 * Store resume
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @bodyParam resume[].country_code string required The code of the user's country. Example: US
	 * @bodyParam resume[].name string The resume's name. Example: Software Engineer
	 * @bodyParam resume[].filename file required The resume's attached file.
	 *
	 * @param \App\Http\Requests\ResumeRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(ResumeRequest $request)
	{
		// Get Resume Input
		$resumeInput = [
			'country_code' => $request->input('resume.country_code', config('country.code')),
			'user_id'      => auth()->user()->id,
			'name'         => $request->input('resume.name'),
			'active'       => 1,
		];
		
		// Create
		$resume = new Resume();
		foreach ($resumeInput as $key => $value) {
			if (in_array($key, $resume->getFillable())) {
				$resume->{$key} = $value;
			}
		}
		$resume->save();
		
		// Save the Resume's File
		if ($request->hasFile('resume.filename')) {
			$resume->filename = $request->file('resume.filename');
			$resume->save();
		}
		
		$data = [
			'success' => true,
			'message' => t('Your resume has created successfully'),
			'result'  => (new ResumeResource($resume))->toArray($request),
		];
		
		return $this->apiResponse($data);
	}
	
	/**
	 * Update resume
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @bodyParam resume[].name string The resume's name. Example: Software Engineer
	 * @bodyParam resume[].filename file required The resume's attached file.
	 *
	 * @param $id
	 * @param \App\Http\Requests\ResumeRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update($id, ResumeRequest $request)
	{
		$resume = Resume::where('user_id', auth()->user()->id)->where('id', $id)->first();
		
		abort_if(empty($resume), 404, t('resume_not_found'));
		
		$resume->name = $request->input('resume.name');
		$resume->save();
		
		// Save the Resume's File
		if ($request->hasFile('resume.filename')) {
			$resume->filename = $request->file('resume.filename');
			$resume->save();
		}
		
		$data = [
			'success' => true,
			'message' => t('Your resume has updated successfully'),
			'result'  => (new ResumeResource($resume))->toArray($request),
		];
		
		return $this->apiResponse($data);
	}
	
	/**
	 * Delete resume(s)
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @urlParam ids string required The ID or comma-separated IDs list of resume(s).
	 *
	 * @param $ids
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function destroy($ids)
	{
		$user = auth('sanctum')->user();
		
		$data = [
			'success' => false,
			'message' => t('no_deletion_is_done'),
			'result'  => null,
		];
		
		// Get Entries ID (IDs separated by comma accepted)
		$ids = explode(',', $ids);
		
		// Delete
		$res = false;
		foreach ($ids as $resumeId) {
			$resume = Resume::query()
				->where('user_id', $user->id)
				->where('id', $resumeId)
				->first();
			
			if (!empty($resume)) {
				$res = $resume->delete();
			}
		}
		
		// Confirmation
		if ($res) {
			$data['success'] = true;
			
			$count = count($ids);
			if ($count > 1) {
				$data['message'] = t('x entities has been deleted successfully', ['entities' => t('resumes'), 'count' => $count]);
			} else {
				$data['message'] = t('1 entity has been deleted successfully', ['entity' => t('resume')]);
			}
		}
		
		return $this->apiResponse($data);
	}
}
