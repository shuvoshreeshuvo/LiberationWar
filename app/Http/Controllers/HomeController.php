<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Period;
use App\Ff_title;
use App\Bookcategory;
use App\Archive;
class HomeController extends Controller
{
    //

	public function index()
	{
		$periods = Period::all();
		$ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();
        $image=DB::table('archives') 
                   ->where('type', 'image')
                   ->get();
        $Videofootage=DB::table('archives')
            ->where('type', 'video')
            ->get();

		return view('home', compact('periods','ff_titles','bookcategories','image','Videofootage'));
	}

	
}
