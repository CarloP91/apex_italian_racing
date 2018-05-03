<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\auto;

class AdminController extends Controller
{
   public function form_assegnazione_auto_piloti()
    {
        return view('admin/form_assegnazione_auto_piloti');
    }


	public function create(Request $request){
	    	$driver_name = $request->input('driver_name');

	    	$driver_img = $request->file('driver_img')->store('public/userfiles');
	    	$driver_img = Storage::url($driver_img);
	       

	        $url_auto = $request->file('url_auto')->store('public/userfiles');
	        $url_auto = Storage::url($url_auto);


	    	$auto = new Auto();
	    	
	    	$auto->driver_name = $driver_name;
			$auto->driver_img = $driver_img;
	        $auto->url_auto = $url_auto;

			$auto->save();
	    
	    	return redirect('/');

    }


}
