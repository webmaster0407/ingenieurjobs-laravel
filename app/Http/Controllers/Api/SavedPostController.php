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

use App\Http\Resources\EntityCollection;
use App\Http\Resources\SavedPostsResource;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @group Saved Posts
 */
class SavedPostController extends BaseController
{
	/**
	 * List saved posts
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @queryParam country_code string required The code of the user's country. Example: US
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at. Example: created_at
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$user = auth('sanctum')->user();
		
		$countryCode = request()->get('country_code', config('country.code'));
		
		$favouritePosts = SavedPost::query()
			->whereHas('post', function ($query) use ($countryCode) {
				$query->countryOf($countryCode);
			})
			->where('user_id', $user->id)
			->with(['post.pictures', 'post.city']);
		
		// Sorting
		$favouritePosts = $this->applySorting($favouritePosts, ['created_at']);
		
		$favouritePosts = $favouritePosts->paginate($this->perPage);
		
		$collection = new EntityCollection(class_basename($this), $favouritePosts);
		
		return $this->respondWithCollection($collection);
	}
	
	/**
	 * Store/Delete saved post
	 *
	 * Save a post in favorite, or remove it from favorite.
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @bodyParam post_id int required The post's ID. Example: 2
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(Request $request)
	{
		$guard = 'sanctum';
		if (!auth($guard)->check()) {
			return $this->respondUnAuthorized();
		}
		
		$data = [
			'success' => false,
			'result'  => null,
		];
		
		// Get the 'post_id' field
		$postId = $request->input('post_id');
		if (empty($postId)) {
			$data['message'] = 'The "post_id" field need to be filled.';
			
			return $this->apiResponse($data, 400);
		}
		
		$data['success'] = true;
		
		$user = auth($guard)->user();
		
		$savedPost = SavedPost::where('user_id', $user->id)->where('post_id', $postId);
		if ($savedPost->count() > 0) {
			// Delete SavedPost
			$savedPost->delete();
			
			$data['message'] = t('Post deleted from favorites successfully');
		} else {
			// Store SavedPost
			$savedPostArray = [
				'user_id' => $user->id,
				'post_id' => $postId,
			];
			$savedPost = new SavedPost($savedPostArray);
			$savedPost->save();
			
			$resource = new SavedPostsResource($savedPost);
			
			$data['message'] = t('Post saved in favorites successfully');
			$data['result'] = $resource;
		}
		
		return $this->apiResponse($data);
	}
	
	/**
	 * Delete saved post(s)
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @urlParam ids string required The ID or comma-separated IDs list of saved post(s).
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
		foreach ($ids as $postId) {
			$savedPost = SavedPost::query()
				->where('user_id', $user->id)
				->where('post_id', $postId)
				->first();
			
			if (!empty($savedPost)) {
				$res = $savedPost->delete();
			}
		}
		
		// Confirmation
		if ($res) {
			$data['success'] = true;
			
			$count = count($ids);
			if ($count > 1) {
				$data['message'] = t('x entities has been deleted successfully', ['entities' => t('ads'), 'count' => $count]);
			} else {
				$data['message'] = t('1 entity has been deleted successfully', ['entity' => t('ad')]);
			}
		}
		
		return $this->apiResponse($data);
	}
}
