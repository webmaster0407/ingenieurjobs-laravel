<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThreadResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
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
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('user', $embed)) {
			$guard = 'sanctum';
			if (auth($guard)->check()) {
				$entity['user'] = new UserResource(auth($guard)->user());
			}
		}
		
		if (in_array('post', $embed)) {
			$entity['post'] = new PostResource($this->whenLoaded('post'));
		}
		
		if (in_array('messages', $embed)) {
			$entity['messages'] = ThreadMessageResource::collection($this->messages);
		}
		
		if (in_array('participants', $embed)) {
			$entity['participants'] = ThreadMessageResource::collection($this->users);
		}
		
		return $entity;
	}
}
