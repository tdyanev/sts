<?php

namespace Stsbg\AdminCrud\Form;

//use Illuminate\Support\Facades\View;

class StringField extends BaseField {

    public function __construct($a, $b, $c) {

        parent::__construct($a, $b, array_merge([
            //'text_trunc_length' => 50,
            'view'              => 'string',
            //'text_trunc_value'  => '...'
        ], $c));

    }
    /*
	protected $defaults = [
		'sortable' => false,
		'params'   => [],
		'upload'   => false,

	], $config;

	public $name;
    
    public function __construct($name, $config = []) {

    	$this->name   = $name;
    	$this->config = array_merge($this->defaults, $config);

    }

    public function sortable() {
    	return $this->config['sortable'];
    }

    public function label() {
    	return $this->config['label'];
    }

    public function editable() {
    	return isset($this->config['component']);
    }

    public function component() {
    	return 'form.' . $this->config['component'];
    }

    public function params($value) {
    	return array_merge([
    		'name'  => $this->name,
    		'label' => $this->config['label'],
    		'value' => $value ?? '',
    	], $this->config['params']);
  
    }
    */
}