<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Document;
use App\Videofootage;
use App\Image;

class ArchiveController extends Controller
{
    public function Documents(){
        $periods=Period::all();
        $document=Document::all();
        return view('Archive.Documents',compact('document'));
    }

    public function Image(){
        $periods=Period::all();
        $image=Image::all();
        return view('Archive.Image',compact('periods','image'));
    }
    
    public function VideoFootage(){
        $periods=Period::all();
		$Videofootage=Videofootage::all();
        return view('Archive.Video_Footage',compact('Videofootage'));
    }

}
