<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ff_title;
use Carbon\Carbon;

class Ff_titleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ff_titles=Ff_title::all();
        return view('admin.freedomfighter_title.index',compact('ff_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.freedomfighter_title.create');
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

            'nickname' => 'required',
            'number' => 'required',

            
        ]);


         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/ff_title'))
            {
                mkdir('uploads/ff_title',0777,true);
            }
            $image->move('uploads/ff_title',$imagetitle);
            
         }else{
              $imagetitle ="default.png";
         }

         $ff_title = new Ff_title();
         $ff_title->nickname = $request->nickname;
        $ff_title->nickname = $request->enickname;
         $ff_title->number = $request->number;
         $ff_title->image =  $imagetitle;
         $ff_title->content = $request->content;
         $ff_title->intro = $request->intro;
         $ff_title->save();
         return redirect()->route('freedomfighter_title.index')->with('successMsg','Nickname Succesfully Saved');
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
        $ff_title=Ff_title::find($id);
        return view('admin.freedomfighter_title.edit',compact('ff_title'));
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

             'nickname' => 'required',
            'number' => 'required',
            
        ]);

         $ff_title = Ff_title::find($id);
         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/ff_title'))
            {
                mkdir('uploads/ff_title',0777,true);
            }
            unlink('uploads/ff_title/'.$ff_title->image);
            $image->move('uploads/ff_title',$imagetitle);

            
         }else{
              $imagetitle = $ff_title->image;
         }

         
          $ff_title->nickname = $request->nickname;
          $ff_title->nickname = $request->enickname;
          $ff_title->number = $request->number;
          $ff_title->image = $imagetitle;
          $ff_title->content = $request->content;
          $ff_title->intro = $request->intro;
         $ff_title->save();
         return redirect()->route('freedomfighter_title.index')->with('successMsg','Nickname Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Ff_title::find($id)->delete();
          return redirect()->back()->with('successMsg','Nickname Succesfully Deleted');
    }
}
