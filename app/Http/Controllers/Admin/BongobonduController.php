<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bongobondu;
use Carbon\Carbon;


class BongobonduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bongobondu=Bongobondu::all();
        return view('admin.bongobondu.index',compact('bongobondu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bongobondu.create');
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
            'title' => 'required',
           'image' => 'mimes:jpeg,jpg,png,bmp',
            'content' => 'required',

        ]);

        $image= $request->file('image');
        $slug= str_slug($request->title);
        if(isset($image))
        {
            $currentdate =Carbon::now()->toDateString();
            $imagename =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $image->getClientOriginalExtension();
            if(!file_exists('uploads/bongobondu'))
             {
                 mkdir('uploads/bongobondu', 0777,true);
             }
             $image->move('uploads/bongobondu',$imagename);
            }else {

                $imagename ='dafault.png';
            }
            $bongobondu = new Bongobondu();
            $bongobondu->title = $request->title;
            $bongobondu->image = $imagename;
            $bongobondu->content = $request->content;
            $bongobondu->save();
            return redirect()->route('bongobondu.index')->with('successMsg','Content Added Succesfully');
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
        $bongobondu=Bongobondu::find($id);
        return view('admin.bongobondu.edit',compact('bongobondu'));
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
           'image' => 'mimes:jpeg,jpg,png,bmp',
            'content' => 'required',
        ]);

        $image= $request->file('image');
        $slug= str_slug($request->title);
        $bongobondu=Bongobondu::find($id);
        if(isset($image))
        {
            $currentdate =Carbon::now()->toDateString();
            $imagename =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $image->getClientOriginalExtension();
            if(!file_exists('uploads/bongobondu'))
             {
                 mkdir('uploads/bongobondu', 0777,true);
             }
             $image->move('uploads/bongobondu',$imagename);
            }else {

                $imagename =$bongobondu->image;
            }
           
            $bongobondu->title = $request->title;
            $bongobondu->image = $imagename;
            $bongobondu->content = $request->content;
            $bongobondu->save();
            return redirect()->route('bongobondu.index')->with('successMsg','Content Updated Succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bongobondu=Bongobondu::find($id);
        if(file_exists('uploads/bongobondu/'.$bongobondu->image)){
            
                unlink('uploads/bongobondu/'.$bongobondu->image);
            }
        $bongobondu->delete();  
         return redirect()->back()->with('successMsg','Content Succesfully Deleted');
 
    }
}
