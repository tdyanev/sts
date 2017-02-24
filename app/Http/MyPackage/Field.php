<?php

namespace App\Http\MyPackage;


class Field {

    
    public function __construct($label, $type, $sortable = true) {
        $this->label    = $label;
        $this->visible  = (bool) $type;
        $this->type     = $type;
        $this->sortable = $sortable;
    }
}