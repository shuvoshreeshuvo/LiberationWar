<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Bongobondu;

class BongobonduController extends Controller
{
    public function Bongobondu(){
    	$periods = Period::all();
    	$bongobondu = Bongobondu::all();
        return view('bongobondu.bongobondu', compact('periods', 'bongobondu'));
    }
}
