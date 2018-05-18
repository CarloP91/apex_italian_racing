<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Driver;
use App\User;

class PilotiController extends Controller
{
     public  function Dominy() 
    {
        $driver = Driver::all();

        return view('piloti/Dominy', ['drivers' => $driver]);
    }
}
