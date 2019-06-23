<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Period;
use App\Ff_title;
use App\Bongobondu;
use App\Bookcategory;

class BongobonduController extends Controller
{
    public function Bongobondu(){
    	$periods = Period::all();
    	$ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();
    	$bongobondu = Bongobondu::all();
        return view('bongobondu.bongobondu', compact('periods','ff_titles', 'bongobondu','bookcategories'));
    }
}
