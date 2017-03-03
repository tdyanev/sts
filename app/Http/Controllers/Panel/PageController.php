<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use Stsbg\AdminCrud\CrudController;
use Stsbg\AdminCrud\Form;
use Illuminate\Foundation\Validation\ValidatesRequests;


class PageController extends CrudController
{
   use ValidatesRequests;

    public function __construct() {
        parent::__construct(\App\Page::class, [
            new Form\StringField('id', '#', [
                'sortable' => true,
                'editable' => false,
            ]),

            new Form\StringField('title', 'Title', [
                'sortable' => true,
                //'validation' => 'required|max:255',
            ]),

            new Form\TextField('text', 'Description', [
                'sortable'          => true,
                'text_trunc_length' => 30,
            ]),

         
            new Form\DateField('created_at', 'Created at', [
                'sortable' => true,
            ]),

            new Form\DateField('updated_at', 'Updated at', [
                'sortable' => true,
            ]),
        ], [
            'perPage'   => 10,
            'hasUpload' => false,
        ]);
    }

    public function verify_data(Request $request) {
        
        $this->validate($request, [
            'title' => 'required|max:255',
            //'url' => 'required',
        ]);
    }


    public function prepare(& $instance) {
        //$instance->slug = str_slug($instance->title, '-');
    }
}
