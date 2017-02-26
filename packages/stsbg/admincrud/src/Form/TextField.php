<?php

namespace Stsbg\AdminCrud\Form;

use Stsbg\AdminCrud\Traits\StringFormatter;
//use Illuminate\Support\Facades\View;

class TextField extends BaseField {

    use StringFormatter;

    public function __construct($a, $b, $c) {

        parent::__construct($a, $b, array_merge([
            'text_trunc_length' => 50,
            'view'              => 'text',
            //'text_trunc_value'  => '...'
        ], $c));

    }

    public function print($value) {
        $len = $this->config['text_trunc_length'];

        return $len === -1 ? parent::print($value) :
            $this->truncate($value, $len);
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