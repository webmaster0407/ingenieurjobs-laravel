<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('post', $embed)) {
			$entity['post'] = new PostResource($this->whenLoaded('post'));
		}
		if (in_array('package', $embed)) {
			$entity['package'] = new PackageResource($this->whenLoaded('package'));
		}
		if (in_array('paymentMethod', $embed)) {
			$entity['paymentMethod'] = new PaymentMethodResource($this->whenLoaded('paymentMethod'));
		}
		
		return $entity;
	}
}
