<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\potovumi;
use App\Shadhinotajuddho;
use App\Indiapakistanjuddho;
use App\Gonohottaa;
use App\Protikria;
use App\Juddherkalpunji;

class LiberationwarController extends Controller
{
    public function potovumi(){
    	$potovumi=potovumi::all();
        return view('Etihash.LiberationWar.potovumi',compact('potovumi'));
    }


     public function Shadhinotajuddho(){
    	$shadhinotajuddho=Shadhinotajuddho::all();
        return view('Etihash.LiberationWar.Shadhinotajuddho',compact('shadhinotajuddho'));
    }



 public function Juddherkalpunji(){
        $juddherkalpunji=Juddherkalpunji::all();
        return view('Etihash.LiberationWar.Juddherkalpunji',compact('juddherkalpunji'));
    }




 public function Indiapakistanjuddho(){
    	$indiapakistanjuddho=Indiapakistanjuddho::all();
        return view('Etihash.LiberationWar.Indiapakistanjuddho',compact('indiapakistanjuddho'));
    }

public function Gonohottaa(){
    	$gonohottaa=Gonohottaa::all();
        return view('Etihash.LiberationWar.Gonohottaa',compact('gonohottaa'));
    }


public function Protikria(){
        $protikria=Protikria::all();
        return view('Etihash.LiberationWar.Protikria',compact('protikria'));
    }

  
}
 