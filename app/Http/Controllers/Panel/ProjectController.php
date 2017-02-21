<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class ProjectController extends CrudController
{
    public function __construct() {
        $this->model  = \App\Project::class;
        $this->table  = 'projects';
        $this->prefix = 'panel';
    }

}
