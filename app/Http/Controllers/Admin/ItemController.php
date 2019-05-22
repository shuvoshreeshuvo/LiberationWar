<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Category;
use Carbon\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $item=Item::all();
        return view('admin.Item.index',compact('item'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.Item.create',compact('categories'));
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

            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
            
        ]);

         $image = $request->file('image');
         $slug = str_slug($request->name);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagename =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/item'))
            {
                mkdir('uploads/item',0777,true);
            }
            $image->move('uploads/item',$imagename);
            
         }else{
              $imagename ="default.png";
         }
         $item = new Item();
         $item->category_id = $request->category;
         $item->name = $request->name;
         $item->description = $request->description;
         $item->price = $request->price;
         $item->image= $imagename;
         $item->save();
          return redirect()->route('Item.index')->with('successMsg','Item Succesfully Saved');


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
         $item=Item::find($id);
         $categories =Category::all();
        return view('admin.Item.edit',compact('item','categories'));
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

            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
            
        ]);

         $item=Item::find($id);
         $image = $request->file('image');
         $slug = str_slug($request->name);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagename =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/item'))
            {
                mkdir('uploads/item',0777,true);
            }
            unlink('uploads/item/'.$item->image);
            $image->move('uploads/item',$imagename);

            
         }else{
              $imagename = $item->image;
         }
        
         $item->category_id = $request->category;
         $item->name = $request->name;
         $item->description = $request->description;
         $item->price = $request->price;
         $item->image= $imagename;
         $item->save();
          return redirect()->route('Item.index')->with('successMsg','Item Succesfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item=Item::find($id);
         if(file_exists('uploads/item/'.$item->image)){

         unlink('uploads/item/'.$item->image);
}
        $item->delete();  
         return redirect()->back()->with('successMsg','Item Succesfully Deleted');
    }
}
