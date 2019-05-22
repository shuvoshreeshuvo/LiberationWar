<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class HomeController extends Controller
{
    //

	public function index()
	{
		$periods = Period::all();

		return view('home', compact('periods'));
	}

	
}
