<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{

    protected $model  = null,
    		  $offset = 20,
    		  $table  = null,
    		  $prefix = '',
    		  $order  = 'created_at',
    		  $type   = 'desc'
    ;

    public function index(Request $request)
    {
        $order = $request->input('order') ?? $this->order;
        $type  = $request->input('type') ?? $this->type;

        $data = $this->model::orderBy($order, $type)->paginate($this->offset);

       	return view($this->_view('index'), [
        	'order'      => $order,
        	'type'       => $type,
        	$this->table => $data,
        ]);
    }

    public function store(Request $request)
    {
        return $this->update(0, $request);
    }

    private function _view($name) {
    	return $this->prefix . '.' . $this->table . '.' . $name;
    }

    public function create()
    {
        return view($this->_view('create'));
    }

    public function edit($id)
    {
        return view($this->_view('edit'), [
        	$this->table => $this->model::find($id),
        ]);
    }

    public function destroy($id)
    {
        $this->model::find($id)->delete();
    }


    public function update($id, Request $request)
    {
    	$instance = $id === 0 ? new $this->model : $this->model::find($id);

    	$fillable = $instance->getFillable();

    	foreach ($fillable as $field) {
    		$instance[$field] = $request[$field];
    	}

        $instance->save();

        return redirect(route($this->table . '.index'));
    }
}