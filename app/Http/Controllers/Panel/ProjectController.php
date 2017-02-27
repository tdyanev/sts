<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use Stsbg\AdminCrud\CrudController;
use Stsbg\AdminCrud\Form;

class ProjectController extends CrudController
{
   
    public function __construct() {
        parent::__construct(\App\Project::class, [
            new Form\KeyField('id', '#', [
                'sortable' => true,
            ]),

            new Form\StringField('title', 'Title', [
                'sortable' => true,
            ]),

            new Form\StringField('url', 'URL', [
                'sortable' => true,
            ]),

            new Form\TextField('description', 'Description', [
                'sortable'          => true,
                'text_trunc_length' => 30,
            ]),

            new Form\UploadField('image', 'Image', [
                'sortable'          => false,
                //'text_trunc_length' => 30,
            ]),

            new Form\DateField('created_at', 'Created at', [
                'sortable' => true,
            ]),

            new Form\DateField('updated_at', 'Updated at', [
                'sortable' => true,
            ]),
        ], [
            'perPage'   => 10,
            'hasUpload' => true,
            /*
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
                

            ],*/
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
