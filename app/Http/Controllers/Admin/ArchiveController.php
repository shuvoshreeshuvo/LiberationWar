<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Archive;
use Carbon\Carbon;


class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives=Archive::all();
        return view('admin.archive.index',compact('archives'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.archive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           // 'title' => 'required',
           // 'year' => 'required',
           // 'type' => 'required',
            
           // 'description' => 'required',

           //'media' =>'nullable|mimes:audio/mpeg,mpga,mp3,wav,aac',


        ]);


         $media= $request->file('media');
        $slug= str_slug($request->title);
        if(isset($media))
        {
            $currentdate =Carbon::now()->toDateString();
            $medianame =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $media->getClientOriginalExtension();
            if(!file_exists('uploads/archive'))
             {
                 mkdir('uploads/archive', 0777,true);
             }
             $media->move('uploads/archive',$medianame);
            }else {

                $medianame ='default.png';
            }
            $archive = new Archive();
            $archive->title = $request->title;
            $archive->year = $request->year;
            $archive->type = $request->type;
            $archive->media =  $medianame;
             $archive->specialmedia = $request->specialmedia;
            $archive->path = $request->path;
            $archive->description = $request->description;

         $archive->save();
         return redirect()->route('archive.index')->with('successMsg','Archive Succesfully Saved');

        }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $archive=Archive::find($id);
        return view('admin.archive.edit',compact('archive'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'year' => 'required',
            'type' => 'required',
           
            'description' => 'required',
            

        ]);


          $archive=Archive::find($id);
          $media= $request->file('media');
          $slug= str_slug($request->title);
               if(isset($media))
        {
            $currentdate =Carbon::now()->toDateString();
            $medianame =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $media->getClientOriginalExtension();
            if(!file_exists('uploads/archive'))
             {
                 mkdir('uploads/archive', 0777,true);
             }
             $media->move('uploads/archive',$medianame);
            }else {

                $medianame =$archive->media;
            }
           
           
            $archive->title = $request->title;
            $archive->year = $request->year;
            $archive->type = $request->type;
            $archive->media = $medianame;
           $archive->specialmedia = $request->specialmedia;
            $archive->path = $request->path;
             $archive->description = $request->description;
         
         $archive->save();
         return redirect()->route('archive.index')->with('successMsg','Archive Succesfully Updated');
 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $archive=Archive::find($id);
        if($archive->media != 'default.png'){
            if(file_exists('uploads/archive/'.$archive->media)){
            
                unlink('uploads/archive/'.$archive->media);
            }
        }
        $archive->delete();  
         return redirect()->back()->with('successMsg','Archive  Succesfully Deleted');
 
    }
}
