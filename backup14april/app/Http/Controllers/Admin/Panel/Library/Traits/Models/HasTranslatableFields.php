<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Models;

/*
|--------------------------------------------------------------------------
| Methods for working with translatable models.
|--------------------------------------------------------------------------
*/
trait HasTranslatableFields
{
	/**
	 * Get the attributes that were casted in the model.
	 * Used for translations because Spatie/Laravel-Translatable
	 * overwrites the getCasts() method.
	 *
	 * @return self
	 */
	public function getCastedAttributes()
	{
		return parent::getCasts();
	}
	
	/**
	 * Check if a model is translatable.
	 * All translation adaptors must have the translationEnabledForModel() method.
	 *
	 * @return bool
	 */
	public function translationEnabled()
	{
		if (method_exists($this, 'translationEnabledForModel')) {
			return $this->translationEnabledForModel();
		}
		
		return false;
	}
}