<?php

namespace Stsbg\AdminCrud;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Config\EnvironmentVariables;

class CrudController extends BaseController {

    protected $config, $model;

    public $fields;

    public function __construct($model, $fields, $params) {
        $this->config    = array_merge(config('vendor.admincrud'), $params);
        $this->model     = $model;
        $this->fields    = $fields;
        
        $this->params    = [
            'namespace' => $this->config['namespace'],
            'table'     => with(new $this->model)->getTable(),
        ];
    }

    public function index(Request $request)
    {
        $order = $request->input('order') ?? $this->config['orderBy'];
        $type  = $request->input('type') ?? $this->config['orderType'];

        $data = $this->model::orderBy($order, $type)
                     ->paginate($this->config['perPage']);

        return $this->_view('index', [
            'order'   => $order,
            'type'    => $type,
            'fields'  => $this->fields,
            'data'    => $data,
        ]);
    }

    private function _view($view, $params) {
        return view($this->config['namespace'] . '::' . $view, array_merge(
            $this->params, $params));
    }


    public function store(Request $request) {
        return $this->update(0, $request);
    }

    public function create() {
        return $this->_singleView();
    }

    public function edit($id) {
        return $this->_singleView($this->model::find($id));
    }

    private function _singleView($model = false) {
        return $this->_view('single', [
            
            'data'   => $model ?? new $this->model,
            //''
            'fields' => $this->fields,
            'edit'   => (bool) $model,
        ]);
    }

    public function destroy($id) {
        $this->model::find($id)->delete();
    }


    // EDIT ALL BELOW


    public function update($id, Request $request)
    {
    	$instance = $id === 0 ? new $this->model :
            $this->model::find($id);

    	$fillable = $instance->getFillable();


        $fields = array_filter($this->fields, function($e) {
            return $e->editable();
        });

        foreach ($fields as $field) {
            $instance[$field->name] = $field->store($request);


        }

        dd($instance);

 /*
    	foreach ($fillable as $field) {
            if (isset($request[$field])) {
    		  $instance[$field] = $request[$field];
            }


    	}

       
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