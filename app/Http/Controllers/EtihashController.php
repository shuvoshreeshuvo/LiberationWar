<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Period;
use App\Event;
use App\Ff_title;
use App\Bookcategory;


class EtihashController extends Controller
{
   

    public function period_history($id)
    {
        $periods=Period::all();
        //$period = DB::table('periods')->where('id', $id)->first();
        $period = Period::find($id);
        //dd($period);
        $ff_titles = Ff_title::all();
        $bookcategories = Bookcategory::all();
        $events = DB::table('events')
                ->where('period_id', $id)
                ->get();
               // dd($periods);
           
        //dd(app()->getLocale());
       return view('etihash.languagemovement.index',compact('periods', 'period','ff_titles','events','bookcategories'));
    }
    public function event_brief($id)
    {
        $periods = Period::all();
        $ff_titles=Ff_title::all();
        $bookcategories=Bookcategory::all();
        $event = Event::find($id);
       return view('etihash.languagemovement.bongovongo', compact('periods', 'ff_titles','event','bookcategories'));
    }
}
