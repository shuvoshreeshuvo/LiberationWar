<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Ff_title;
use App\Bookcategory;
class HomeController extends Controller
{
    //

	public function index()
	{
		$periods = Period::all();
		$ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();

		return view('home', compact('periods','ff_titles','bookcategories'));
	}

	
}
