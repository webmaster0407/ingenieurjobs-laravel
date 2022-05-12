<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Str;

class EntityCollection extends ResourceCollection
{
	public $entityResource;
	
	/**
	 * EntityCollection constructor.
	 *
	 * @param $controllerName
	 * @param $resource
	 */
	public function __construct($controllerName, $resource)
	{
		parent::__construct($resource);
		
		$this->entityResource = Str::replaceLast('Controller', 'Resource', $controllerName);
		$this->entityResource = '\\'. __NAMESPACE__ . '\\' . $this->entityResource;
	}
	
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request): array
	{
		return [
			'data' => $this->collection->transform(function ($entity) {
				return new $this->entityResource($entity);
			}),
		];
	}
}
