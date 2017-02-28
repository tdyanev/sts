<?php

namespace Stsbg\AdminCrud\Form;


abstract class BaseField {
    private $defaults = [
        'sortable' => false,
        'editable' => true,
        'view'     => '',
    ];

    public $name, $label;

    protected $config;

    public function __construct($name, $label, $config = []) {    

        $this->name   = $name;
        $this->label  = $label;
        

        $this->config = array_merge($this->defaults, $config, [
            'name'  => $name,
            'label' => $label,
        ]);
    }

    public function print($value) {
        return $this->raw($value);
    }

    public function raw($value) {
        return $value;
    }

    public function editable() {
        return $this->config['editable'];
    }

    public function view() {
        return $this->config['view'];
        //return $this->config['view'];
    }

    public function params() {
        return $this->config;
    }

    public function sortable() {
        return $this->config['sortable'];
    }

    public function store($value) {
        return $value;
    }
}