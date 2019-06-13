<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Period;
use Carbon\Carbon;
class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $periods=Period::all();
        return view('admin.period.index',compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.period.create');
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

            'name' => 'required',
            'starting_year' => 'required',
            'ending_year' => 'required',
            // 'image'=>'mimes:jpeg,jpg,bmp,png',
        ]);
        $image= $request->file('image');
        $slug= str_slug($request->name);
        if(isset($image))
        {
            $currentdate =Carbon::now()->toDateString();
            $imagename =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $image->getClientOriginalExtension();
            if(!file_exists('uploads/period'))
             {
                 mkdir('uploads/period', 0777,true);
             }
             $image->move('uploads/period',$imagename);
            }else {

                $imagename ='dafault.png';
            }

         $period = new Period();
         $period->name = $request->name;
         $period->starting_year = $request->starting_year;
         $period->ending_year = $request->ending_year;
         $period->image = $imagename;
         $period->content = $request->content;
         $period->save();
         return redirect()->route('period.index')->with('successMsg','Period Succesfully Saved');
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
        $period=Period::find($id);
        return view('admin.period.edit',compact('period'));
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

            'name' => 'required',
            'starting_year' => 'required',
            'ending_year' => 'required',
           // 'image'=>'mimes:jpeg,jpg,bmp,png',
        ]);
        $image= $request->file('image');
        $slug= str_slug($request->name);
        $period=Period::find($id);
        if(isset($image))
        {
            $currentdate =Carbon::now()->toDateString();
            $imagename =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $image->getClientOriginalExtension();
            if(!file_exists('uploads/period'))
             {
                 mkdir('uploads/period', 0777,true);
             }
             $image->move('uploads/period',$imagename);
            }else {

                $imagename = $period->image;
            }

         
         $period->name = $request->name;
         $period->starting_year = $request->starting_year;
         $period->ending_year = $request->ending_year;
         $period->image = $imagename;
         $period->content = $request->content;
         $period->save();
         return redirect()->route('period.index')->with('successMsg','Period Succesfully Updated');
   


            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $period=Period::find($id);
         if(file_exists('uploads/period/'.$period->image)){
            
                unlink('uploads/period/'.$period->image);
            }
        $period->delete();  
          return redirect()->back()->with('successMsg','Period Succesfully Deleted');
    }
}
