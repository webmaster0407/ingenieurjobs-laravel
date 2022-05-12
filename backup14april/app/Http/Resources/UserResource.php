<?php

namespace App\Http\Resources;

use App\Models\Post;
use App\Models\SavedPost;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class UserResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request): array
	{
		$entity = [
			'id'       => $this->id,
			'name'     => $this->name,
			'username' => $this->username,
		];
		
		if (isset($this->created_at_formatted)) {
			$entity['created_at_formatted'] = $this->created_at_formatted;
		}
		if (isset($this->photo_url)) {
			$entity['photo_url'] = $this->photo_url;
		}
		
		if (auth('sanctum')->check()) {
			$user = auth('sanctum')->user();
			
			$columns = array_diff($this->getFillable(), $this->getHidden());
			foreach ($columns as $column) {
				$entity[$column] = $this->{$column};
			}
			
			$embed = explode(',', request()->get('embed'));
			
			if (in_array('country', $embed)) {
				$entity['country'] = new CountryResource($this->whenLoaded('country'));
			}
			if (in_array('userType', $embed)) {
				$entity['userType'] = new UserTypeResource($this->whenLoaded('userType'));
			}
			if (in_array('gender', $embed)) {
				$entity['gender'] = new GenderResource($this->whenLoaded('gender'));
			}
			
			// Mini Stats
			if (in_array('countPosts', $embed)) {
				$entity['countPosts'] = Post::currentCountry()
					->where('user_id', $user->id)
					->count();
			}
			if (in_array('countPostsVisits', $embed)) {
				$countPostsVisits = DB::table((new Post())->getTable())
					->select('user_id', DB::raw('SUM(visits) as total_visits'))
					->where('country_code', config('country.code'))
					->where('user_id', $user->id)
					->groupBy('user_id')
					->first();
				$entity['countPostsVisits'] = $countPostsVisits->total_visits ?? 0;
			}
			if (in_array('countFavoritePosts', $embed)) {
				$entity['countFavoritePosts'] = SavedPost::whereHas('post', function ($query) {
					$query->currentCountry();
				})->where('user_id', $user->id)
					->count();
			}
		}
		
		return $entity;
	}
}
