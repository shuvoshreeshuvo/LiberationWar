<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Period;
use App\Ff_title;
use App\Document;
use App\Videofootage;
use App\Archive;


class ArchiveController extends Controller
{
    public function Documents(){
        $periods=Period::all();
        $ff_titles=Ff_title::all();
        $document= DB::table('archives') 
                   ->where('type', 'document')
                   ->get();

        return view('archive.documents',compact('periods','ff_titles','document'));
    }

    public function Image(){
        $periods=Period::all();
        $ff_titles=Ff_title::all();
        $image=DB::table('archives') 
                   ->where('type', 'image')
                   ->get();
        return view('archive.image',compact('periods','ff_titles','image'));
    }
    
    public function VideoFootage(){
        $periods=Period::all();
        $ff_titles=Ff_title::all();
		$Videofootage=DB::table('archives')
            ->where('type', 'video')
            ->get();
        return view('archive.video_footage',compact('periods','ff_titles','Videofootage'));
    }


    public function Audio(){
        $periods=Period::all();
        $ff_titles=Ff_title::all();
        $audio=DB::table('archives') 
                   ->where('type', 'audio')
                   ->get();
        return view('archive.audio',compact('periods','ff_titles','audio'));
    }
}
