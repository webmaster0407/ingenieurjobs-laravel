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

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class DateIsValidRule implements Rule
{
	public $type = '';
	public $referenceDate = null;
	public $strict = false;
	public $attrLabel = '';
	private $attr;
	
	public function __construct($type, $referenceDate = null, $strict = false, $attrLabel = '')
	{
		$this->type = $type;
		$this->referenceDate = (!empty($referenceDate) && isValidDate($referenceDate)) ? $referenceDate : date('Y-m-d H:i');
		$this->strict = $strict;
		$this->attrLabel = $attrLabel;
		
		if (!in_array($this->type, ['valid', 'future', 'past'])) {
			$this->type = 'valid';
		}
	}
	
	/**
	 * Determine if the validation rule passes.
	 *
	 * @param string $attribute
	 * @param mixed $value
	 * @return bool
	 */
	public function passes($attribute, $value)
	{
		if (empty($this->attrLabel)) {
			$this->attr = $attribute;
		}
		
		$value = trim(strtolower($value));
		
		if ($this->type == 'future') {
			return $this->isFutureDate($value);
		} else if ($this->type == 'past') {
			return $this->isPastDate($value);
		} else {
			return isValidDate($value);
		}
	}
	
	/**
	 * Get the validation error message.
	 *
	 * @return string
	 */
	public function message()
	{
		if (!empty($this->attrLabel)) {
			if ($this->type == 'future') {
				return trans('validation.date_future_is_valid_rule', ['attribute' => mb_strtolower($this->attrLabel)]);
			} else if ($this->type == 'past') {
				return trans('validation.date_past_is_valid_rule', ['attribute' => mb_strtolower($this->attrLabel)]);
			} else {
				return trans('validation.date_is_valid_rule', ['attribute' => mb_strtolower($this->attrLabel)]);
			}
		} else {
			if (!empty($this->attr) && !empty(trans('validation.attributes.' . $this->attr))) {
				if ($this->type == 'future') {
					return trans('validation.date_future_is_valid_rule', ['attribute' => trans('validation.attributes.' . $this->attr)]);
				} else if ($this->type == 'past') {
					return trans('validation.date_past_is_valid_rule', ['attribute' => trans('validation.attributes.' . $this->attr)]);
				} else {
					return trans('validation.date_is_valid_rule', ['attribute' => trans('validation.attributes.' . $this->attr)]);
				}
			} else {
				if ($this->type == 'future') {
					return trans('validation.date_future_is_valid_rule');
				} else if ($this->type == 'past') {
					return trans('validation.date_past_is_valid_rule');
				} else {
					return trans('validation.date_is_valid_rule');
				}
			}
		}
	}
	
	/* PRIVATES */
	
	/**
	 * Check if the date is in the future
	 *
	 * @param $value
	 * @return bool
	 */
	private function isFutureDate($value)
	{
		$isFutureDate = false;
		
		if ($this->compareDate($value, $this->referenceDate, '>=')) {
			$isFutureDate = true;
		}
		
		return $isFutureDate;
	}
	
	/**
	 * Check if the date is in the past
	 *
	 * @param $value
	 * @return bool
	 */
	private function isPastDate($value)
	{
		$isFutureDate = false;
		
		if ($this->compareDate($value, $this->referenceDate, '<')) {
			$isFutureDate = true;
		}
		
		return $isFutureDate;
	}
	
	/**
	 * @param $firstDate
	 * @param $secondDate
	 * @param string $operator
	 * @return bool
	 */
	private function compareDate($firstDate, $secondDate, $operator = '')
	{
		$isValid = false;
		
		if (!isValidDate($firstDate) || !isValidDate($secondDate)) {
			if ($this->strict) {
				return $isValid;
			} else {
				return true; // Validated field can be string, etc.
			}
		}
		
		// Reformat the Date
		if (Str::containsAll($firstDate, [' ', ':']) || Str::containsAll($secondDate, [' ', ':'])) {
			if (!Str::containsAll($firstDate, [' ', ':'])) {
				$firstDate = date('Y-m-d', strtotime($firstDate)) . ' 23:59';
			}
			if (!Str::containsAll($secondDate, [' ', ':'])) {
				$secondDate = date('Y-m-d', strtotime($secondDate)) . ' 00:01';
			}
		} else {
			$firstDate = date('Y-m-d H:i', strtotime($firstDate));
			$secondDate = date('Y-m-d H:i', strtotime($secondDate));
		}
		
		// Convert to integer
		$firstDate = strtotime($firstDate);
		$secondDate = strtotime($secondDate);
		
		if ($operator == '>') {
			if ($firstDate > $secondDate) {
				$isValid = true;
			}
		} else if ($operator == '>=') {
			if ($firstDate >= $secondDate) {
				$isValid = true;
			}
		} else if ($operator == '<') {
			if ($firstDate < $secondDate) {
				$isValid = true;
			}
		} else if ($operator == '<=') {
			if ($firstDate <= $secondDate) {
				$isValid = true;
			}
		} else {
			if ($firstDate == $secondDate) {
				$isValid = true;
			}
		}
		
		return $isValid;
	}
}
