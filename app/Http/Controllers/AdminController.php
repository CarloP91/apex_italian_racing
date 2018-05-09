<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Driver;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function form_assegnazione_auto_piloti()
    {
        return view('admin/form_assegnazione_auto_piloti');
    }

	 public function index()
   
    { 
    	$driver = Driver::all();

        return view('home', ['drivers' => $driver]);
}


   		public function create(Request $request){

			$name_driver = $request->input('name_driver');
			$name_team   = $request->input('name_team');
	    	
	    	$img_url_auto = $request->file('auto_img')->store('public/userfiles');
            $img_url_auto = Storage::url($img_url_auto);

            $img_driver_url = $request->file('img_driver')->store('public/userfiles');
            $img_driver_url  = Storage::url($img_driver_url);


	    	$driver = new Driver();
	    	$driver->name_driver		 = $name_driver;
			$driver->img_url_auto		 = $img_url_auto;
			$driver->name_team 			 = $name_team; 
			$driver->img_driver_url 	 = $img_driver_url;
			

	    	$driver->save();
	    
	    	return redirect('/');

	    }

	}
