<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
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

    public  function homepage() 
    {
        return view('homepage');
}

    
 public  function hof() 
    {
        return view('hof');
}

public  function eventi() 
    {
        return view('eventi');
}

}
