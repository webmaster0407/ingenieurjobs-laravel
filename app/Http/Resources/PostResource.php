<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Cache;

class PostResource extends JsonResource
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
			'id' => $this->id,
		];
		$columns = $this->getFillable();
		foreach ($columns as $column) {
			$entity[$column] = $this->{$column};
		}
		
		if (isset($this->slug)) {
			$entity['slug'] = $this->slug;
		}
		if (isset($this->created_at_formatted)) {
			$entity['created_at_formatted'] = $this->created_at_formatted;
		}
		if (isset($this->user_photo_url)) {
			$entity['user_photo_url'] = $this->user_photo_url;
		}
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('country', $embed)) {
			$entity['country'] = new CountryResource($this->country);
		}
		if (in_array('user', $embed)) {
			$entity['user'] = new UserResource($this->whenLoaded('user'));
		}
		if (in_array('category', $embed)) {
			$entity['category'] = new CategoryResource($this->whenLoaded('category'));
		}
		if (in_array('postType', $embed)) {
			$entity['postType'] = new PostTypeResource($this->whenLoaded('postType'));
		}
		if (in_array('city', $embed)) {
			$entity['city'] = new CityResource($this->whenLoaded('city'));
		}
		if (in_array('latestPayment', $embed)) {
			$entity['latestPayment'] = new PaymentResource($this->whenLoaded('latestPayment'));
		}
		if (in_array('savedByLoggedUser', $embed)) {
			$entity['savedByLoggedUser'] = UserResource::collection($this->whenLoaded('savedByLoggedUser'));
		}
		
		if (in_array('similarPosts', $embed)) {
			if (config('settings.single.similar_listings') == '1') {
				if (method_exists($this, 'getSimilarByCategory')) {
					$cacheId = 'posts.similar.category.' . $this->category->id . '.post.' . $this->id;
					$posts = Cache::remember($cacheId, $this->cacheExpiration, function () {
						return $this->getSimilarByCategory();
					});
					
					$entity['similarPosts'] = PostResource::collection($posts);
				}
			} else if (config('settings.single.similar_listings') == '2') {
				if (method_exists($this, 'getSimilarByLocation')) {
					$distance = 50; // km OR miles
					
					$cacheId = 'posts.similar.city.' . $this->city->id . '.post.' . $this->id;
					$posts = Cache::remember($cacheId, $this->cacheExpiration, function () use ($distance) {
						return $this->getSimilarByLocation($distance);
					});
					
					$entity['similarPosts'] = PostResource::collection($posts);
				}
			}
		}
		
		return $entity;
	}
}
