<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\MyPackage\CrudController;
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
                    'component'=> 'string',
                ]),

                new TableField('description', [
                    'label'     => 'Description',
                    'sortable'  => true,
                    'component' => 'text',                   
                ]),

                new TableField('image', [
                    'label'     => 'Image',
                    'component' => 'upload',
                    'upload'    => true,
                    
                ]),

                new TableField('url', [
                    'label'    => 'URL',
                    'sortable' => true,
                    'component'=> 'string',
                    
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
    
    /*
    parent::__construct(Model::class, [
        new Form\Dummy('id, '#', [
            'sortable' => true,
        ]),
        new Form\String('title', 'Title', [
            'sortable' => true,
        ]),
    
    ]);

    */

}
