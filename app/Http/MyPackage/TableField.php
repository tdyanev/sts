<?php

namespace App\Http\MyPackage;

use Illuminate\Support\Facades\View;

class TableField {

	protected $defaults = [
		'sortable' => false,

	], $params;

	public $name;
    
    public function __construct($name, $params = []) {

    	$this->name   = $name;
    	$this->params = array_merge($this->defaults, $params);

    }

    public function sortable() {
    	return $this->params['sortable'];
    }

    public function label() {
    	return $this->params['label'];
    }

    public function editable() {
    	return isset($this->params['form']);
    }

    public function path() {
    	return 'form.' . $this->params['form']['type'];
    }

    public function form($value) {
    	
    	return [
    		'attrs' => $this->params['form']['attrs'],
    		'name'  => $this->name,
    		'label' => $this->params['label'],
    		'value' => $value ?? '',
    	];
  
    }
}