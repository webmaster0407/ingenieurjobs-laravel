<?php

namespace App\Http\Resources;

use App\Models\Package;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request): array
	{
		$package = Package::find($this->package_id);
		
		return [
			'id'             => $this->id,
			'post'           => new PostResource($this->post),
			'package'        => new PackageResource($package),
			'paymentMethod'  => new PaymentMethodResource($this->paymentMethod),
			'transaction_id' => $this->transaction_id,
			'active'         => $this->active,
			'created_at'     => $this->created_at,
			'updated_at'     => $this->updated_at,
		];
	}
}
