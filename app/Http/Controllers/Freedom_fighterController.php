<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Period;
use App\Ff_title;
use App\Freedom_fighter;
use App\Bookcategory;



class Freedom_fighterController extends Controller
{
    public function index(){

      $periods=Period::all();
      $ff_titles=Ff_title::all();
      $bookcategories=Bookcategory::all();
      $freedom_fighters=Freedom_fighter::all();
      return view('Freedom_Fighter.index',compact('periods','ff_titles','freedom_fighters','bookcategories'));
    } 

   
    public function freedom_fighter($id)
    {
        $periods=Period::all();
        $ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();
        //dd($bookcategories);
        $freedom_fighters = Freedom_fighter::get();
        //dd($freedom_fighters);
        $t = Freedom_fighter::select('ff_title_id')->get();

        $flag=0;
    
        /* ($freedom_fighters as $i) {
            dd($i);
            $flag+=1;
        }*/
        $freedom_fighters_filtered = DB::table('freedom_fighters')->where('ff_title_id',$freedom_fighters->id)->get();

        //dd($freedom_fighters[0]);
        //dd($id);
        return view('Freedom_Fighter.freedom_fighter_list',compact('periods','ff_titles','freedom_fighters_filtered','bookcategories'));
    }

    public function freedom_fighter_details($id)
    {
        $periods = Period::all();
        $ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();
        $freedom_fighter = Freedom_fighter::find($id);
        return view('Freedom_Fighter.freedom_fighter', compact('periods', 'ff_titles','freedom_fighter','bookcategories'));
    }

    
}

