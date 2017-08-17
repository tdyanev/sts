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

            new Form\StringField('uri', 'URI', [
                'sortable' => true,
            ]),

            new Form\StringField('title', 'Title', [
                'sortable' => true,
                //'validation' => 'required|max:255',
            ]),

            new Form\ForeignKeyField('locale_id', 'Locale', [
                'display_in_table' => false,
                'source' => \App\Locale::comboBoxData(),
            ]),

            new Form\ForeignKeyField('locale', 'Locale', [
                'sortable' => true,
                'editable' => false,
                'prop' => 'name',
                //'source' => \App\Locale::comboBoxData(),
            ]),

            new Form\TextField('text', 'Text', [
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
            'uri' => 'required|max:25',
            'text' => 'required',
        ]);
    }

    /*

    public function prepare(& $instance) {
        $instance->slug = str_slug($instance->title, '-');
    }

     */
}
