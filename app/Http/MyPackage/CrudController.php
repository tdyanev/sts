<?php

namespace App\Http\MyPackage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;

class CrudController extends Controller {

    private $defaults = [
        'perPage'    => 20,
        'orderBy'    => 'created_at',
        'orderType'  => 'desc',
        'viewPrefix' => '',        
    ];

    private $viewDir = 'crud',
            $fields  = [];

    //private function _setup() {
    //    $this->fields = (new $this->model)->getFillable();
    //}

    private function _view($name) {
        $view = $this->params['viewPrefix'] . '.' .
                $this->table . '.' . $name;

        return View::exists($view) ? $view :
               $this->params['viewPrefix'] . '.' .
               $this->viewDir . '.' . $name;
    }

    public function __construct($model, $fields, $params) {
        $this->params  = array_merge($this->defaults, $params);
        $this->model   = $model;
        $this->table   = with(new $this->model)->getTable();
        $this->fields  = $fields;
    }

    public function index(Request $request)
    {
        $order = $request->input('order') ?? $this->params['orderBy'];
        $type  = $request->input('type') ?? $this->params['orderType'];

        $data = $this->model::orderBy($order, $type)
                     ->paginate($this->params['perPage']);

       	return view($this->_view('index'), [
        	'order'   => $order,
        	'type'    => $type,
        	'data'    => $data,
            'table'   => $this->table,
            'fields'  => $this->fields,
        ]);
        
    }

    public function store(Request $request)
    {
        return $this->update(0, $request);
    }


    public function create()
    {
        return $this->_singleView();
    }

    public function edit($id) {
        return $this->_singleView($this->model::find($id));
    }

    private function _singleView($model = false) {
        return view($this->_view('single'), [
            'table'  => $this->table,
            'data'   => $model ?? new $this->model,
            //''
            'fields' => $this->fields,
            'edit'   => (bool) $model,
        ]);
    }

    public function destroy($id)
    {
        $this->model::find($id)->delete();
    }


    public function update($id, Request $request)
    {
    	$instance = $id === 0 ? new $this->model :
            $this->model::find($id);

    	$fillable = $instance->getFillable();

    	foreach ($fillable as $field) {
            if (isset($request[$field])) {
    		  $instance[$field] = $request[$field];
            }


    	}

        /*
        foreach ($fields as $field) {
            $result = $field->store($request[$field->id]);

            if ($result) {
                $instance[$field->id] = $result;
            }

        }
        */

        //dd(isset($request->image));


        $instance->save();

        return redirect(route($this->table . '.index'));
    }
}