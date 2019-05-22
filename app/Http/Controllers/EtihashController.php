<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Period;
use App\Languagemovement;
use App\Massuprisingg;
use App\Event;

class EtihashController extends Controller
{
    public function Languagemovement(){
    	
        $Languagemovement=Languagemovement::all();
        return view('etihash.languagemovement.index',compact('Languagemovement'));
    }

    public function MassUprisingg(){

        $Massuprisingg=Massuprisingg::all();
        return view('etihash.massuprisingg',compact('Massuprisingg'));
    }

    public function LiberationWar(){

        return view('etihash.liberationwar.liberationwar');
    }

    public function period_history($id)
    {
        $periods=Period::all();
        $events = DB::table('events')
                ->where('period_id', $id)
                ->get();
            //dd($events);
        return view('etihash.languagemovement.index',compact('periods','events'));
    }
    public function event_brief($id)
    {
        $periods = Period::all();
        $event = Event::find($id);
        return view('etihash.languagemovement.bongovongo', compact('periods', 'event'));
    }
}
