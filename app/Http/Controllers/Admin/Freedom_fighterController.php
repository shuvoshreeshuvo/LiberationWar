<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Freedom_fighter;
use App\Ff_title;
use Carbon\Carbon;

class Freedom_fighterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $freedom_fighter=Freedom_fighter::all();
        return view('admin.freedom_fighter.index',compact('freedom_fighter'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $ff_titles=Ff_title::all();
        return view('admin.freedom_fighter.create',compact('ff_titles'));
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

            'ff_title' => 'required',
           // 'name' => 'required',
          
           // 'image' => 'mimes:jpeg,jpg,bmp,png',
            

               
        ]);

         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/freedom_fighter'))
            {
                mkdir('uploads/freedom_fighter',0777,true);
            }
            $image->move('uploads/freedom_fighter',$imagetitle);
            
         }else{
              $imagetitle ="default.png";
         }
         $freedom_fighter = new Freedom_fighter();
         $freedom_fighter->ff_title_id = $request->ff_title;
         $freedom_fighter->number = $request->number;
         $freedom_fighter->name = $request->name;
         $freedom_fighter->sector = $request->sector;
         $freedom_fighter->title = $request->title;
         $freedom_fighter->gadget_number = $request->gadget_number;
         $freedom_fighter->image= $imagetitle;
         $freedom_fighter->content = $request->content;
        
         $freedom_fighter->save();
         return redirect()->route('freedom_fighter.index')->with('successMsg','freedom_fighter Succesfully Saved');


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
         $freedom_fighter=Freedom_fighter::find($id);
         $ff_titles =Ff_title::all();
        return view('admin.freedom_fighter.edit',compact('freedom_fighter','ff_titles'));
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

            'ff_title' => 'required',
            
             //'image' => 'mimes:jpeg,jpg,bmp,png',
            
        ]);

         $freedom_fighter=Freedom_fighter::find($id);
         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/freedom_fighter'))
            {
                mkdir('uploads/freedom_fighter',0777,true);
            }
            unlink('uploads/freedom_fighter/'.$freedom_fighter->image);
            $image->move('uploads/freedom_fighter',$imagetitle);

            
         }else{
              $imagetitle = $freedom_fighter->image;
         }
        
         $freedom_fighter->ff_title_id = $request->ff_title;
         $freedom_fighter->number = $request->number;
         $freedom_fighter->name = $request->name;
         $freedom_fighter->sector = $request->sector;
         $freedom_fighter->title = $request->title;
         $freedom_fighter->gadget_number = $request->gadget_number;
         $freedom_fighter->image= $imagetitle;
         $freedom_fighter->content = $request->content;
         
         $freedom_fighter->save();
          return redirect()->route('freedom_fighter.index')->with('successMsg','Freedom Fighter Succesfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $freedom_fighter=freedom_fighter::find($id);
         if(file_exists('uploads/freedom_fighter/'.$freedom_fighter->image)){

         unlink('uploads/freedom_fighter/'.$freedom_fighter->image);
}
        $freedom_fighter->delete();  
         return redirect()->back()->with('successMsg','Freedom_fighter Succesfully Deleted');
    }
}
