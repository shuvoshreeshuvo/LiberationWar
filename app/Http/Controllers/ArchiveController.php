<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $document=Document::all();

        return view('Archive.Documents',compact('periods','ff_titles','document'));
    }

    public function Image(){
        $periods=Period::all();
        $ff_titles=Ff_title::all();
        $archive=Archive::all();
        return view('Archive.Image',compact('periods','ff_titles','archive'));
    }
    
    public function VideoFootage(){
        $periods=Period::all();
		$Videofootage=Videofootage::all();
        return view('Archive.Video_Footage',compact('Videofootage'));
    }

}
