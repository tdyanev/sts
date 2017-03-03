<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PageController extends Controller
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
    public function show(Request $request)
    {
        $title = $request->segment(1);
        $data = \App\Page::where('title', $title)->first();

        return view('page', compact('data'));
        
    }

    private function _show(Project $project) {
        return view('projects.single', compact('project'));
    }

}