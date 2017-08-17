<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

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
        $locale_id = config('app.custom.locales')[\App::getLocale()];
        // \App::getLocale());

        $data = Page::where([
            'uri' => $request->segment(2),
            'locale_id' => $locale_id,
        ])->first() ?? new Page;

        return view('pages.single', compact('data'));

    }
}
