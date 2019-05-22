<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bongovongo;
use App\Languagemovementsecond;
use App\Juktofront;
use App\Sixdofa;
class LanguageMovementController extends Controller
{
    public function Bongovongo(){
    	
         $bongovongo=Bongovongo::all();
        return view('etihash.languagemovement.bongovongo',compact('bongovongo'));
    }

    public function LanguageMovement(){

         $Languagemovement=Languagemovementsecond::all();
        return view('etihash.languagemovement.languagemovement',compact('Languagemovement'));
    }

    public function Juktofront(){
        $juktofront=Juktofront::all();
      return view('etihash.languagemovement.juktofront',compact('juktofront'));
      
    }
    public function Sixdofa(){
      $sixdofa=Sixdofa::all();
        return view('etihash.languagemovement.sixdofa',compact('sixdofa'));
    }

}
