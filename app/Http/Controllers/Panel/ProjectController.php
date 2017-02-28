<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use Stsbg\AdminCrud\CrudController;
use Stsbg\AdminCrud\Form;
use Illuminate\Foundation\Validation\ValidatesRequests;


class ProjectController extends CrudController
{
   use ValidatesRequests;

    public function __construct() {
        parent::__construct(\App\Project::class, [
            new Form\KeyField('id', '#', [
                'sortable' => true,
            ]),

            new Form\StringField('title', 'Title', [
                'sortable' => true,
                //'validation' => 'required|max:255',
            ]),

            new Form\StringField('url', 'URL', [
                'sortable' => true,
            ]),

            new Form\TextField('description', 'Description', [
                'sortable'          => true,
                'text_trunc_length' => 30,
            ]),

            new Form\ImageUploadField('image', 'Image', [
                'width' => 100,
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
        ]);
    }

    public function verify_data(Request $request) {
        
        $this->validate($request, [
            'title' => 'required|max:255',
            'url' => 'required',
        ]);
    }
}
