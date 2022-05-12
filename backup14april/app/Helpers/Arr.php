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

namespace App\Helpers;

class Arr extends \Illuminate\Support\Arr
{
	/**
	 * Convert the array into a query string.
	 * Replace & remove: httpBuildQuery()
	 *
	 * @param $array
	 * @return array|string|string[]
	 */
	public static function query($array)
	{
		$query = parent::query($array);
		
		return str_replace(['%5B', '%5D'], ['[', ']'], $query);
	}
	
	/**
	 * @param $array
	 * @param $field
	 * @param bool $createSubArray
	 * @return array
	 */
	public static function groupBy($array, $field, bool $createSubArray = true): array
	{
		$firstEl = current($array);
		
		$arraySorted = [];
		
		if (is_object($firstEl)) {
			foreach ($array as $item) {
				if ($createSubArray) {
					if (!@is_array($arraySorted[$item->$field])) {
						$arraySorted[$item->$field] = [];
					}
					$arraySorted[$item->$field][] = $item;
				} else {
					$arraySorted[$item->$field] = $item;
				}
			}
		}
		
		if (is_array($firstEl)) {
			foreach ($array as $item) {
				if ($createSubArray) {
					if (!@is_array($arraySorted[$item[$field]])) {
						$arraySorted[$item[$field]] = [];
					}
					$arraySorted[$item[$field]][] = $item;
				} else {
					$arraySorted[$item[$field]] = $item;
				}
			}
		}
		
		return $arraySorted;
	}
	
	/**
	 * Sort multidimensional array by sub-array key
	 *
	 * @param $array
	 * @param $field
	 * @param string $order
	 * @param bool $keepIndex
	 * @return array|\Illuminate\Support\Collection|\stdClass
	 */
	public static function sortBy($array, $field, string $order = 'asc', bool $keepIndex = true)
	{
		// Check if Laravel Collection given
		$isLaravelCollection = false;
		if (class_exists('\Illuminate\Support\Collection')) {
			if ($array instanceof \Illuminate\Support\Collection) {
				$array = $array->toArray();
				$isLaravelCollection = true;
			}
		}
		
		// Check if Object given
		$isObject = false;
		if (is_object($array)) {
			$array = self::fromObject($array);
			$isObject = true;
		}
		
		if (empty($array)) {
			return ($isLaravelCollection) ? self::toCollection([]) : (($isObject) ? self::toObject([]) : []);
		}
		
		// Get sorting order
		$int = 1;
		if (strtolower($order) == 'desc') {
			$int = -1;
		}
		
		// Sorting
		if ($keepIndex) {
			uasort($array, function ($a, $b) use ($field, $int) {
				if ($a[$field] == $b[$field]) {
					return 0;
				}
				
				return ($a[$field] < $b[$field]) ? -$int : $int;
			});
		} else {
			usort($array, function ($a, $b) use ($field, $int) {
				if ($a[$field] == $b[$field]) {
					return 0;
				}
				
				return ($a[$field] < $b[$field]) ? -$int : $int;
			});
		}
		
		return ($isLaravelCollection) ? self::toCollection($array) : (($isObject) ? self::toObject($array) : $array);
	}
	
	/**
	 * Sort multidimensional array by sub-array key (Multi-bytes version)
	 * Need to be installed the PHP intl Extension
	 *
	 * @param $array
	 * @param string $field
	 * @param string $locale
	 * @param string $order
	 * @param bool $keepIndex
	 * @return array|\Illuminate\Support\Collection|\stdClass
	 */
	public static function mbSortBy($array, string $field, string $locale = 'en_US', string $order = 'asc', bool $keepIndex = true)
	{
		// Check if Laravel Collection given
		$isLaravelCollection = false;
		if (class_exists('\Illuminate\Support\Collection')) {
			if ($array instanceof \Illuminate\Support\Collection) {
				$array = $array->toArray();
				$isLaravelCollection = true;
			}
		}
		
		// Check if Object given
		$isObject = false;
		if (is_object($array)) {
			$array = self::fromObject($array);
			$isObject = true;
		}
		
		if (empty($array)) {
			return ($isLaravelCollection) ? self::toCollection([]) : (($isObject) ? self::toObject([]) : []);
		}
		
		// \Collator is available in the PHP intl Extension
		if (!class_exists('\Collator')) {
			$array = ($isLaravelCollection) ? self::toCollection($array) : (($isObject) ? self::toObject($array) : $array);
			
			return self::sortBy($array, $field, $order, $keepIndex);
		}
		
		try {
			$collator = \Collator::create($locale);
		} catch (\Throwable $e) {
			$array = ($isLaravelCollection) ? self::toCollection($array) : (($isObject) ? self::toObject($array) : $array);
			
			return self::sortBy($array, $field, $order, $keepIndex);
		}
		
		// Get sorting order
		$int = 1;
		if (strtolower($order) == 'desc') {
			$int = -1;
		}
		
		// Sorting
		if ($keepIndex) {
			uasort($array, function ($a, $b) use ($collator, $field, $int) {
				$arr = [$a[$field], $b[$field]];
				$collator->asort($arr, \Collator::SORT_STRING);
				
				$res = $collator->compare(array_pop($arr), $a[$field]);
				if ($res === false) {
					return -1;
				}
				
				return ($res <= 0) ? $int : -$int;
			});
		} else {
			usort($array, function ($a, $b) use ($collator, $field, $int) {
				$arr = [$a[$field], $b[$field]];
				$collator->asort($arr, \Collator::SORT_STRING);
				
				$res = $collator->compare(array_pop($arr), $a[$field]);
				if ($res === false) {
					return -1;
				}
				
				return ($res <= 0) ? $int : -$int;
			});
		}
		
		return ($isLaravelCollection) ? self::toCollection($array) : (($isObject) ? self::toObject($array) : $array);
	}
	
	/**
	 * Object to Array
	 *
	 * @param $object
	 * @param int $level
	 * @return array|mixed
	 */
	public static function fromObject($object, int $level = 0)
	{
		if (!is_array($object) && !is_object($object)) {
			return $object;
		}
		
		if ($level <= 0) {
			$array = [];
			foreach ($object as $key => $value) {
				if (is_array($value) || is_object($value)) {
					$array[$key] = self::fromObject($value);
				} else {
					$array[$key] = $value;
				}
			}
			
			return $array;
		} else {
			// First we convert the object into a json string
			$json = json_encode($object, 0, $level);
			
			// Then we convert the json string to an array
			return json_decode($json, true);
		}
	}
	
	/**
	 * Array to Object
	 *
	 * @param $array
	 * @param int $level
	 * @return array|mixed|\stdClass
	 */
	public static function toObject($array, int $level = 0)
	{
		if (!is_array($array)) {
			return $array;
		}
		
		if ($level <= 0) {
			$object = new \stdClass();
			if (!empty($array)) {
				foreach ($array as $key => $value) {
					$key = trim($key);
					if ($key != '') {
						$object->$key = self::toObject($value);
					}
				}
				
				return $object;
			} else {
				return [];
			}
		} else {
			// First we convert the array to a json string
			$json = json_encode($array, 0, $level);
			
			// Then we convert the json string to a stdClass()
			return json_decode($json);
		}
	}
	
	/**
	 * Array to Laravel Collection
	 *
	 * @param $array
	 * @return \Illuminate\Support\Collection
	 */
	public static function toCollection($array)
	{
		if (!is_array($array)) {
			return $array;
		}
		
		$newArray = [];
		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$newArray[$key] = self::toCollection($value);
			} else {
				$newArray[$key] = $value;
			}
		}
		
		return collect($newArray);
	}
	
	/**
	 * array_unique multi dimension
	 *
	 * @param $array
	 * @return array|\stdClass
	 */
	public static function unique($array)
	{
		if (is_object($array)) {
			$array = self::fromObject($array);
			$array = self::unique($array);
			$array = self::toObject($array);
		} else {
			$array = array_map('serialize', $array);
			$array = array_map('base64_encode', $array);
			$array = array_unique($array);
			$array = array_map('base64_decode', $array);
			$array = array_map('unserialize', $array);
		}
		
		return $array;
	}
	
	/**
	 * shuffle for associative arrays, preserves key => value pairs.
	 *
	 * Shuffle associative and non-associative array while preserving key, value pairs.
	 * Also returns the shuffled array instead of shuffling it in place.
	 *
	 * @param $array
	 * @return array
	 */
	public static function shuffleAssoc($array): array
	{
		if (!is_array($array)) return $array;
		if (empty($array)) return $array;
		
		$keys = array_keys($array);
		shuffle($keys);
		
		$random = [];
		foreach ($keys as $key) {
			$random[$key] = $array[$key];
		}
		
		return $random;
	}
	
	/**
	 * This function will remove all the specified keys from an array and return the final array.
	 * Arguments: The first argument is the array that should be edited
	 *            The arguments after the first argument is a list of keys that must be removed.
	 * Example: array_remove_key($arr, "one", "two", "three");
	 * Return: The function will return an array after deleting the said keys
	 */
	public static function removeKey()
	{
		$args = func_get_args();
		$arr = $args[0];
		$keys = array_slice($args, 1);
		foreach ($arr as $k => $v) {
			if (in_array($k, $keys)) {
				unset($arr[$k]);
			}
		}
		
		return $arr;
	}
	
	/**
	 * This function will remove all the specified values from an array and return the final array.
	 * Arguments: The first argument is the array that should be edited
	 *            The arguments after the first argument is a list of values that must be removed.
	 * Example: array_remove_value($arr,"one","two","three");
	 * Return: The function will return an array after deleting the said values
	 */
	public static function removeValue()
	{
		$args = func_get_args();
		$arr = $args[0];
		$values = array_slice($args, 1);
		foreach ($arr as $k => $v) {
			if (in_array($v, $values)) {
				unset($arr[$k]);
			}
		}
		
		return $arr;
	}
	
	/**
	 * array_diff_assoc() recursive
	 *
	 * @param $array1
	 * @param $array2
	 * @param bool $checkValues
	 * @return array
	 */
	public static function diffAssoc($array1, $array2, bool $checkValues = false): array
	{
		$difference = [];
		foreach ($array1 as $key => $value) {
			if (is_array($value)) {
				if (!isset($array2[$key]) || !is_array($array2[$key])) {
					$difference[$key] = $value;
				} else {
					$newDiff = self::diffAssoc($value, $array2[$key]);
					if (!empty($newDiff))
						$difference[$key] = $newDiff;
				}
			} else if (!array_key_exists($key, $array2)) {
				$difference[$key] = $value;
			}
			
			// Check if the values is different
			if ($checkValues) {
				if (array_key_exists($key, $array2) && $array2[$key] !== $value) {
					$difference[$key] = $value;
				}
			}
		}
		
		return $difference;
	}
	
	/**
	 * Arr::undot() for Language Key
	 * Convert a flatten "dot" notation array into an expanded array.
	 *
	 * @param iterable $array
	 * @return array
	 */
	public static function arrUndot($array): array
	{
		$results = [];
		
		foreach ($array as $key => $value) {
			static::arrSet($results, $key, $value);
		}
		
		return $results;
	}
	
	/**
	 * Arr::set() for Language Key
	 * Set an array item to a given value using "dot" notation with a limit.
	 *
	 * If no key is given to the method, the entire array will be replaced.
	 *
	 * @param $array
	 * @param $key
	 * @param $value
	 * @param int $limit
	 * @return array|mixed
	 */
	public static function arrSet(&$array, $key, $value, int $limit = -1)
	{
		if (is_null($key)) {
			return $array = $value;
		}
		
		if (str_contains($key, '.')) {
			$key = preg_replace("/[\.]{3}/ui", "{###}$1", $key);
			$key = preg_replace("/\.([\s]+)/ui", "{***}$1", $key);
			$key = preg_replace("/\.$/ui", "{***}", $key);
			
			// dump($key); // Debug!
		}
		
		$keys = preg_split('/\./ui', $key, $limit);
		
		/*
		// Debug!
		if (!str_starts_with($key, '*.')) {
			if (str_contains($key, '.')) {
				dump($keys);
			}
		}
		*/
		
		foreach ($keys as $i => $key) {
			if (count($keys) === 1) {
				break;
			}
			
			unset($keys[$i]);
			
			$key = str_replace(['{###}', '{***}'], ['...', '.'], $key);
			
			// If the key doesn't exist at this depth, we will just create an empty array
			// to hold the next value, allowing us to create the arrays to hold final
			// values at the correct depth. Then we'll keep digging into the array.
			if (!isset($array[$key]) || !is_array($array[$key])) {
				$array[$key] = [];
			}
			
			$array = &$array[$key];
		}
		
		$key = array_shift($keys);
		$key = str_replace(['{###}', '{***}'], ['...', '.'], $key);
		
		$array[$key] = $value;
		
		return $array;
	}
	
	/**
	 * Flatten POST request ($_POST) array to key value pair
	 *
	 * @param $postData
	 * @param string $prefix
	 * @return array|mixed
	 */
	public static function flattenPost($postData, string $prefix = '')
	{
		$result = [];
		
		foreach ($postData as $key => $value) {
			if (is_array($value)) {
				if ($prefix == '') {
					$result = $result + self::flattenPost($value, $prefix . $key);
				} else {
					$result = $result + self::flattenPost($value, $prefix . '[' . $key . ']');
				}
			} else {
				if ($prefix == '') {
					$result[$prefix . $key . ''] = $value;
				} else {
					$result[$prefix . '[' . $key . ']' . ''] = $value;
				}
			}
		}
		
		return $result;
	}
}
