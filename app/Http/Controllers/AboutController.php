<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;


class AboutController extends Controller
{
    public function About(){
    	$periods=Period::all();
        return view('About',compact('periods'));
    }

}
