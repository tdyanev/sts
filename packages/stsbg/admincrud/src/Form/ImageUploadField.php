<?php

namespace Stsbg\AdminCrud\Form;

//use Stsbg\AdminCrud\Traits\StringFormatter;
//use Illuminate\Support\Facades\View;

class ImageUploadField extends UploadField {

    public function __construct($a, $b, $c) {

        parent::__construct($a, $b, array_merge([
            'width' => 'auto',
            'height' => 'auto',
        ], $c));

    }

    public function print($value) {
        return '<img width="' . $this->config['width'] . '"
            height="' . $this->config['height'] . '"
            src=' . asset('storage/' . $value) . ' />';

        //return parent::print($this->config['carbon_method']($date));
    }

    public function store($image) {
        return $image ? $image->store($this->config['directory']) : false;
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