<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\MyPackage\CrudController;
use App\Http\MyPackage\Field;
use App\Http\MyPackage\TableField;

class ProjectController extends CrudController
{
   
    public function __construct() {
        parent::__construct([
            'model'   => \App\Project::class,
            'viewPrefix'  => 'panel',
            'perPage' => 10,
            'fields'  => [
                new TableField('id', [
                    'label'    => '#',
                    'sortable' => true,
                ]),

                new TableField('title', [
                    'label'    => 'Title',
                    'sortable' => true,
                    'form'     => [
                        'type' => 'input',
                        'attrs' => 'type="text"',
                    ],
                ]),

                new TableField('description', [
                    'label'     => 'Description',
                    'sortable'  => true,
                    'formz'      => [
                        'type'  => 'textarea',
                        'attrs' => 'rows="5" cols="30"',
                    ],
                    
                ]),

                new TableField('image', [
                    'label'    => 'Image',
                    'formz'     => [

                    ],
                    
                ]),

                new TableField('url', [
                    'label'    => 'URL',
                    'sortable' => true,
                    'formz'     => [

                    ],
                    
                ]),
                new TableField('created_at', [
                    'label'    => 'Created at',
                    'sortable' => true,
                ]),

                new TableField('updated_at', [
                    'label'    => 'Updated at',
                    'sortable' => true,
                    
                ]),

            ],
        ]);


        //$this->_setup();
    }
    


}
