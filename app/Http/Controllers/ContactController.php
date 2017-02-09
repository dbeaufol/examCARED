<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      return view('contact');
    }
    public function store(Request $request)
    {

      return \Redirect::route('contact')
        ->with('message', 'Thanks for contacting us!');

    }
}
