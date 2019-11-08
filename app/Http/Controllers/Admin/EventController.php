<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Period;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::all();
        return view('admin.event.index',compact('event'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periods=Period::all();
        return view('admin.event.create',compact('periods'));
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

            'period' => 'required',
            'title' => 'required',
            'image' => 'required',
            'year' => 'required',
            'content' => 'required',               
        ]);

         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/event'))
            {
                mkdir('uploads/event',0777,true);
            }
            $image->move('uploads/event',$imagetitle);
            
         }else{
              $imagetitle ="default.png";
         }

         $event = new Event();
         $event->period_id = $request->period;
         $event->title = $request->title;
         $event->image= $imagetitle;
         $event->year= $request->year;
         $event->content = $request->content;
        
         $event->save();
         return redirect()->route('event.index')->with('successMsg','Event Succesfully Saved');


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
         $event=Event::find($id);
         $periods =Period::all();
        return view('admin.event.edit',compact('event','periods'));
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

            'period' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

         $event=Event::find($id);
         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/event'))
            {
                mkdir('uploads/event',0777,true);
            }
            unlink('uploads/event/'.$event->image);
            $image->move('uploads/event',$imagetitle);

            
         }else{
              $imagetitle = $event->image;
         }
        
         $event->period_id = $request->period;
         $event->title = $request->title;
         $event->image= $imagetitle;
         $event->content = $request->content;
         
         $event->save();
          return redirect()->route('event.index')->with('successMsg','Event Succesfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $event=Event::find($id);
         if(file_exists('uploads/event/'.$event->image)){

         unlink('uploads/event/'.$event->image);
}
        $event->delete();  
         return redirect()->back()->with('successMsg','Event Succesfully Deleted');
    }
}
