<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

trait AutoFocus
{
	public $autoFocusOnFirstField = true;
	
	/**
	 * @return bool
	 */
	public function getAutoFocusOnFirstField(): bool
	{
		return $this->autoFocusOnFirstField;
	}
	
	/**
	 * @param $value
	 * @return bool
	 */
	public function setAutoFocusOnFirstField($value): bool
	{
		return $this->autoFocusOnFirstField = (bool)$value;
	}
	
	/**
	 * @return bool
	 */
	public function enableAutoFocus(): bool
	{
		return $this->setAutoFocusOnFirstField(true);
	}
	
	/**
	 * @return bool
	 */
	public function disableAutoFocus(): bool
	{
		return $this->setAutoFocusOnFirstField(false);
	}
}
