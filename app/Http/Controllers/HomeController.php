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
        $image1=DB::table('archives') 
                   ->where('type', 'image')
                   ->where('special', '1')
                   ->orderBy('id')
                   ->take(6)
                   ->get();
        $image2=DB::table('archives') 
                   ->where('type', 'image')
                   ->where('special', '1')
                   ->orderBy('id')
                   ->skip(6)
                   ->take(6)
                   ->get();
        $image3=DB::table('archives') 
                   ->where('type', 'image')
                   ->where('special', '1')
                   ->orderBy('id')
                   ->skip(12)
                   ->take(6)
                   ->get();
        $Videofootage=DB::table('archives')
            ->where('type', 'video')
            ->where('special', '1')
            ->orderBy('id')
            ->get();

           // dd($Videofootage);

          //echo json_encode($Videofootage);

		 return view('home', compact('periods','ff_titles','bookcategories','image1','image2','image3','Videofootage'));
	}

	
}
