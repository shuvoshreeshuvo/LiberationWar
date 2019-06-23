<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Ff_title;
use App\Bookcategory;


class AboutController extends Controller
{
    public function About(){
    	$periods=Period::all();
    	$ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();
        return view('About',compact('periods','ff_titles','bookcategories'));
    }

}
