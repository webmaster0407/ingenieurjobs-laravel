<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel\Filters;

class Filter
{
	public $name; // the name of the filtered variable (db column name)
	public $type = 'select'; // the name of the filter view that will be loaded
	public $label;
	public $placeholder;
	public $values;
	public $options;
	public $currentValue;
	public $view;
	
	public function __construct($options, $values, $filterLogic)
	{
		$this->checkOptionsIntegrity($options);
		
		$this->name = $options['name'];
		$this->type = $options['type'];
		$this->label = $options['label'];
		
		if (! isset($options['placeholder'])) {
			$this->placeholder = '';
		} else {
			$this->placeholder = $options['placeholder'];
		}
		
		$this->values = $values;
		$this->options = $options;
		$this->view = 'admin.panel.filters.'.$this->type;
		
		if (request()->has($this->name)) {
			$this->currentValue = request()->input($this->name);
		}
	}
	
	public function checkOptionsIntegrity($options)
	{
		if (! isset($options['name'])) {
			abort(500, 'Please make sure all your filters have names.');
		}
		if (! isset($options['type'])) {
			abort(500, 'Please make sure all your filters have types.');
		}
		if (! view()->exists('admin.panel.filters.' . $options['type'])) {
			abort(500, 'No filter view named "' . $options['type'].'.blade.php" was found.');
		}
		if (! isset($options['label'])) {
			abort(500, 'Please make sure all your filters have labels.');
		}
	}
	
	public function isActive()
	{
		if (request()->has($this->name)) {
			return true;
		}
		
		return false;
	}
}
