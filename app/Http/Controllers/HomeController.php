<?php

namespace App\Http\Controllers;

use Mail;
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
        $receiver = env('MAIL_RECEIVER', 'tdyanev@gmail.com');

        Mail::to($receiver)
            ->send(new ContactSend([

                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));

        $request->session()
            ->flash('mail_status', count(Mail::failures()) == 0);


        return back();
    }
}
