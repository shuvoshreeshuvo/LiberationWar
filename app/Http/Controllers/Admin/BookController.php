<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Bookcategory;
use Carbon\Carbon;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
        return view('admin.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $bookcategories=Bookcategory::all();
        return view('admin.book.create',compact('bookcategories'));
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
           
           
            'image' => 'required|mimes:jpeg,jpg,png,bmp',
            'path'  =>'required',
            'caption' => 'required',
        ]);

        $image= $request->file('image');
        $slug= str_slug($request->title);
        if(isset($image))
        {
            $currentdate =Carbon::now()->toDateString();
            $imagename =$slug .'-'. $currentdate .'-'. uniqid() .'.'.
            $image->getClientOriginalExtension();
            if(!file_exists('uploads/book'))
             {
                 mkdir('uploads/book', 0777,true);
             }
             $image->move('uploads/book',$imagename);
            }else {

                $imagename ='dafault.png';
            }
            $book = new Book();
            $book->bookcategory_id = $request->bookcategory;
            $book->title = $request->title;
            $book->image = $imagename;
            $book->path = $request->path;
            $book->caption = $request->caption;
            $book->save();
            return redirect()->route('book.index')->with('successMsg','Book Added Succesfully');
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
         $book=Book::find($id);
         $bookcategories =Bookcategory::all();
        return view('admin.book.edit',compact('book','bookcategories'));
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
            'image' => 'required|mimes:jpeg,jpg,png,bmp',
            'path'  =>'required',
            'caption' => 'required',
            
             //'image' => 'mimes:jpeg,jpg,bmp,png',
            
        ]);

         $book=Book::find($id);
         $image = $request->file('image');
         $slug = str_slug($request->title);
         if(isset($image))
         {

            $currentData = Carbon::now()->toDatestring();
            $imagetitle =$slug.'-'.$currentData.'-'.uniqid() .'.'.
            $image->getclientOriginalExtension();

            if(!file_exists('uploads/book'))
            {
                mkdir('uploads/book',0777,true);
            }
            //unlink('uploads/freedom_fighter/'.$freedom_fighter->image);
            $image->move('uploads/book',$imagetitle);

            
         }else{
              $imagetitle = $book->image;
         }
        
         $book->bookcategory_id = $request->bookcategory;
         $book->title = $request->title;
         $book->image= $imagetitle;
         $book->path = $request->path;
         $book->caption = $request->caption;
         
         $book->save();
          return redirect()->route('book.index')->with('successMsg','Book Succesfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id);
        if(file_exists('uploads/book/'.$book->image)){
            
                unlink('uploads/book/'.$book->image);
            }
        $book->delete();  
         return redirect()->back()->with('successMsg','Book  Succesfully Deleted');
 
    }
}
