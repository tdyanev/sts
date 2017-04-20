<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSend;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function contacts_send(Request $request) {
        \Mail::to('tdyanev@gmail.com')->send(new ContactSend([
            'name' => $request->name,
        ]));

        return back();
    }
}
