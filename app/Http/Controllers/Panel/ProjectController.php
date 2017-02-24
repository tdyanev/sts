<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\MyPackage\CrudController;
use App\Http\MyPackage\Field;


class ProjectController extends CrudController
{
   
    public function __construct() {
        parent::__construct([
            'model'   => \App\Project::class,
            'viewPrefix'  => 'panel',
            'perPage' => 10,
            'fields'  => [
                new Field('#', false),
                new Field('Title', 'string'),
                new Field('Description', 'text'),
                new Field('Image', 'file', false),
                new Field('URL', 'string'),
                new Field('Created at', false),
                new Field('Updated at', false),
            ],
        ]);


        //$this->_setup();
    }
    


}
