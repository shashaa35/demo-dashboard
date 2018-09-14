<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\players;

class dashboard extends Controller
{
    public function index()
    {
    	$players = \App\players::all();
    	// echo $players;
    	return view('home',['players'=>$players]);
    }
}
