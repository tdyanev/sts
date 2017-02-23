<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;


class ProjectController extends CrudController
{
   
    public function __construct() {
        parent::__construct([
            'model'   => \App\Project::class,
            'viewPrefix'  => 'panel',
            'perPage' => 10,
            'labels'  => [
                '#',
                'Title',
                'Description',
                'Image',
                'URL',
                'Created at',
                'Updated at',
            ]
        ]);


        //$this->_setup();
    }
    


}
