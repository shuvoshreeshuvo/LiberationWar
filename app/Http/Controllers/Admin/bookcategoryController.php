<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bookcategory;
use Carbon\Carbon;
class bookcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookcategories=Bookcategory::all();
        return view('admin.b_category.index',compact('bookcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.b_category.create');
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

            'book_type' => 'required'
            
        ]);

         $bookcategory = new Bookcategory();
         $bookcategory->book_type= $request->book_type;
         
         $bookcategory->save();
         return redirect()->route('b_category.index')->with('successMsg','Book Category Succesfully Saved');
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
        $bookcategory=Bookcategory::find($id);
        return view('admin.b_category.edit',compact('bookcategory'));
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

            'book_type' => 'required',
            
    
        ]);
        
        $bookcategory=Bookcategory::find($id); 
        $bookcategory->book_type = $request->book_type;
        $bookcategory->save();
         return redirect()->route('b_category.index')->with('successMsg','Book Category Succesfully Updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Bookcategory::find($id)->delete();
          return redirect()->back()->with('successMsg','Book Category Succesfully Deleted');
    }
}
