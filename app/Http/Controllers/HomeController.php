<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Ff_title;

class HomeController extends Controller
{
    //

	public function index()
	{
		$periods = Period::all();
		$ff_titles=Ff_title::all();

		return view('home', compact('periods','ff_titles'));
	}

	
}
