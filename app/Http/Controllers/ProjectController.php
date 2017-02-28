<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(config('app.custom.projects_per_page'));


        return view('projects.index', compact('projects'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parts = explode('-', $id);


        return $this->_show(Project::find($parts[0]));
    }

    private function _show(Project $project) {
        return view('projects.single', compact('project'));
    }

}