<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationControllers extends Controller
{
    //
    public function home()
    {
    	return view('home');
    }

    public function analisis()
    {
    	return view('analisis.index');
    }
}
