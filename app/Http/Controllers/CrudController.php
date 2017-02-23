<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class CrudController extends Controller {

    protected $model,
    		  $perPage = 20,
    		  $table   = null,
    		  $prefix  = '',
              $labels  = [],
              $layout  = '',
    		  $order   = 'created_at',
    		  $type    = 'desc'
    ;

    private $defaults = [
        'perPage'    => 20,
        'orderBy'    => 'created_at',
        'orderType'  => 'desc',
        'viewPrefix' => '',
        
    ];

    private $viewDir = 'crud',
            $fieds     = [];

    private function _setup() {
        $this->fields = (new $this->model)->getFillable();
    }

    private function _view($name) {
        $view = $this->params['viewPrefix'] . '.'
              . $this->table . '.' . $name;

        return View::exists($view) ? $view :
               $this->params['viewPrefix'] . '.'
             . $this->viewDir . '.' . $name;
    }

    public function __construct($params) {
        $this->params  = array_merge($this->defaults, $params);
        $this->model   = $this->params['model'];
        $this->table   = with(new $this->model)->getTable();
        $this->columns = Schema::getColumnListing($this->table);
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
            'columns' => $this->columns,
            'labels'  => $this->params['labels'],
        ]);
        
    }

    public function store(Request $request)
    {
        return $this->update(0, $request);
    }

    protected function getData() {
        return $this->model::get();
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
    	$instance = $id === 0 ? new $this->model :
            $this->model::find($id);

    	$fillable = $instance->getFillable();

    	foreach ($fillable as $field) {
    		$instance[$field] = $request[$field];
    	}

        $instance->save();

        return redirect(route($this->table . '.index'));
    }
}