<?php

namespace App\Http\Controllers\Admin\Panel\Library\Helpers;

class LanguageFiles
{
	private $lang;
	
	private $file = 'crud';
	
	public function __construct()
	{
		$this->lang = config('app.locale');
	}
	
	/**
	 * @param $lang
	 * @return $this
	 */
	public function setLanguage($lang): LanguageFiles
	{
		$this->lang = $lang;
		
		return $this;
	}
	
	/**
	 * @param $file
	 * @return $this
	 */
	public function setFile($file): LanguageFiles
	{
		$this->file = $file;
		
		return $this;
	}
	
	/**
	 * Get the content of a language file as an array sorted ascending.
	 *
	 * @return bool|mixed
	 */
	public function getFileContent()
	{
		$filepath = $this->getFilePath();
		
		if (is_file($filepath)) {
			$wordsArray = include $filepath;
			
			return $wordsArray;
		}
		
		return false;
	}
	
	/**
	 * Rewrite the file with the modified texts.
	 *
	 * @param array|null $postArray
	 * @return int
	 */
	public function setFileContent(?array $postArray): int
	{
		$postArray = $this->prepareContent($postArray);
		
		$content = "<?php \n\n" . "return " . $this->varExport54($postArray) . ';' . "\n";
		$content = print_r($content, true);
		
		return (int)file_put_contents($this->getFilePath(), $content);
	}
	
	/**
	 * Get the language files that can be edited, to ignore a file add it in the config/admin file to language_ignore key.
	 *
	 * @return array
	 */
	public function getLangFiles(): array
	{
		$fileList = [];
		
		$langPath = $this->getLangPath();
		if (file_exists($langPath) && is_dir($langPath)) {
			foreach (scandir($langPath, SCANDIR_SORT_DESCENDING) as $file) {
				$fileName = str_replace('.php', '', $file);
				
				if (!in_array($fileName, array_merge(['.', '..'], (array)config('larapen.admin.language_ignore')))) {
					$fileList[] = [
						'name'   => ucfirst(str_replace('_', ' ', $fileName)),
						'url'    => admin_url("languages/texts/{$this->lang}/{$fileName}"),
						'active' => $fileName == $this->file,
					];
				}
			}
			
			// Sort files by name for better readability
			usort($fileList, function ($a, $b) {
				return strnatcmp($a['name'], $b['name']);
			});
		}
		
		return $fileList;
	}
	
	/**
	 * Check if all the fields were completed.
	 *
	 * @param array|null $postArray
	 * @return array
	 */
	public function testFields(?array $postArray): array
	{
		// Remove unused data from the array
		if (isset($postArray['savedKeys'])) {
			unset($postArray['savedKeys']);
		}
		
		$returnArray = [];
		
		foreach ($postArray as $key => $value) {
			if (is_array($value)) {
				foreach ($value as $k => $item) {
					if (is_array($item)) {
						foreach ($item as $j => $it) {
							if (trim($it) == '') {
								$returnArray[] = ['parent' => $key, 'child' => $j];
							}
						}
					}
				}
			} else {
				if (trim($value) == '') {
					$returnArray[] = $key;
				}
			}
		}
		
		return $returnArray;
	}
	
	/**
	 * Display the form that permits the editing.
	 *
	 * @param array|null $fileArray the array with all the texts
	 * @param array|null $parents all the ancestor keys of the current key
	 * @param string|null $parent the parent key of the current key
	 * @param int $level the current level
	 * @return void
	 *
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function displayInputs(?array $fileArray, ?array $parents = [], ?string $parent = '', int $level = 0)
	{
		$level++;
		if ($parent) {
			$parents[] = $parent;
		}
		foreach ($fileArray as $key => $item) {
			if (is_array($item)) {
				echo view()->make('admin.panel.inc.translations_headers', [
					'header'       => $key,
					'parents'      => $parents,
					'level'        => $level,
					'item'         => $item,
					'langFile'     => $this,
					'langFileName' => $this->file,
				])->render();
			} else {
				echo view()->make('admin.panel.inc.translations_inputs', [
					'key'          => $key,
					'item'         => $item,
					'parents'      => $parents,
					'langFileName' => $this->file,
				])->render();
			}
		}
	}
	
	/**
	 * Create the array that will be saved in the file.
	 *
	 * @param array|null $postArray the array to be transformed
	 * @return array
	 */
	private function prepareContent(?array $postArray): array
	{
		$returnArray = [];
		
		unset($postArray['_token']);
		
		// Save the 'savedKeys' field data and remove it from the array
		$savedKeys = [];
		if (isset($postArray['savedKeys'])) {
			$savedKeys = $postArray['savedKeys'];
			unset($postArray['savedKeys']);
		}
		
		foreach ($postArray as $key => $item) {
			// Retrieve the valid key
			if (isset($savedKeys[$key])) {
				$key = $savedKeys[$key];
			}
			
			if (is_array($key)) {
				// dd($key); // DEBUG!
			}
			$keys = explode('__', $key);
			
			if (is_array($item)) {
				if (isset($item['before'])) {
					$itemsArr = array_map(
						function ($item1, $item2) {
							return trim($item1 . ' ' . $item2);
						},
						str_replace('|', '&#124;', $item['before']),
						str_replace('|', '&#124;', $item['after'])
					);
					$value = $this->sanitize(implode('|', $itemsArr));
				} else {
					$value = $this->sanitize(implode('|', str_replace('|', '&#124;', $item['after'])));
				}
			} else {
				$value = $this->sanitize(str_replace('|', '&#124;', $item));
			}
			
			$this->setArrayValue($returnArray, $keys, $value);
		}
		
		// dd($returnArray); // DEBUG!
		
		return $returnArray;
	}
	
	/**
	 * Add filters to the values inserted by the user.
	 *
	 * @param string|null $str the string to be sanitized
	 * @return string
	 */
	private function sanitize(?string $str): string
	{
		return trim($str);
	}
	
	/**
	 * set a value in a multidimensional array when knowing the keys.
	 *
	 * @param array $data the array that will be modified
	 * @param array $keys the keys (path)
	 * @param string|null $value the value to be added
	 * @return mixed
	 */
	private function setArrayValue(array &$data, array $keys, ?string $value)
	{
		foreach ($keys as $key) {
			try {
				$data = &$data[$key];
			} catch (\Throwable $e) {
				// dd($key); // DEBUG!
			}
		}
		
		return $data = $value;
	}
	
	/**
	 * @return string
	 */
	private function getFilePath(): string
	{
		return base_path("resources/lang/{$this->lang}/{$this->file}.php");
	}
	
	/**
	 * @return string
	 */
	private function getLangPath(): string
	{
		return base_path("resources/lang/{$this->lang}/");
	}
	
	/**
	 * @param $var
	 * @param string|null $indent
	 * @return string|null
	 */
	private function varExport54($var, ?string $indent = ''): ?string
	{
		switch (gettype($var)) {
			case 'string':
				$sqUsageEscChars = [
					"\\", // backslash
					"'", // simple-quote
				];
				
				return "'" . addcslashes($var, implode('', $sqUsageEscChars)) . "'";
			case 'array':
				$indexed = array_keys($var) === range(0, count($var) - 1);
				$r = [];
				foreach ($var as $key => $value) {
					$r[] = "$indent    "
						. ($indexed ? '' : $this->varExport54($key) . ' => ')
						. $this->varExport54($value, "$indent    ");
				}
				
				return "[\n" . implode(",\n", $r) . ',' . "\n" . $indent . ']';
			case 'boolean':
				return $var ? 'TRUE' : 'FALSE';
			default:
				return var_export($var, true);
		}
	}
}
