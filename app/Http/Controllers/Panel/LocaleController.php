<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use Stsbg\AdminCrud\CrudController;
use Stsbg\AdminCrud\Form;
use Illuminate\Foundation\Validation\ValidatesRequests;


class LocaleController extends CrudController
{
   use ValidatesRequests;

    public function __construct() {
        parent::__construct(\App\Locale::class, [
            new Form\StringField('id', '#', [
                'sortable' => true,
                'editable' => false,
            ]),

            new Form\StringField('name', 'Name', [
                'sortable' => true,
                //'validation' => 'required|max:255',
            ]),

        ], [
            'perPage'   => 10,
            'hasUpload' => false,
            'orderBy'   => 'id',
            'orderType' => 'asc',
        ]);
    }

    public function verify_data(Request $request) {

        $this->validate($request, [

        ]);
    }

    /*

    public function prepare(& $instance) {
        $instance->slug = str_slug($instance->title, '-');
    }

     */
}
