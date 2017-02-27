<?php

namespace Stsbg\AdminCrud\Form;

//use Stsbg\AdminCrud\Traits\StringFormatter;
//use Illuminate\Support\Facades\View;

class UploadField extends BaseField {

    public function __construct($a, $b, $c) {

        parent::__construct($a, $b, array_merge([
            'extensions' => '',
            'sortable'   => false,
            'view'       => 'upload',
            'directory'  => 'upload',
        ], $c));

    }

    public function print($value) {
        return '<img src=' . asset('storage/' . $value) . ' />';

        //return parent::print($this->config['carbon_method']($date));
    }

    public function store($file) {
        return $file->store($this->config['directory']);
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