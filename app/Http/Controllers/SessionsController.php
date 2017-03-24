<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct()
	{

    $this->middleware('guest',['except' => 'destroy']);

	}
    public function create()
    {

      return view('sessions.create');

    }
     
     public function store()
     {

     // Attempt to  Authenticate the user
     if(! auth()->attempt(request(['email','password'])))
     {

     //If not redirect back
     return back()->withErrors([

       'message'=>'Please check your credentials and try again'


     	]);

     }
     
      


     //If User matches sign them in
     return redirect()->home();


     // redirect homepage
     


     }


     public function destroy()
    {

      auth()->logout();

      return redirect()->home();

    }

 }
