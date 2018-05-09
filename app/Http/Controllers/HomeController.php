<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Driver;
use App\User;

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

public  function evento_classic_1() 
    {
        return view('evento_classic_1');
}

public  function classifica_piloti() 
    {
         { 
        $driver = Driver::all();

        return view('classifica_piloti', ['drivers' => $driver]);
}   
}
public  function classifica_costruttori() 
    { 
         { 
        $driver = Driver::all();

        return view('classifica_costruttori', ['drivers' => $driver]);
}   


} 

public  function regolamento() 
    {
        return view('regolamento');

           
}
}
