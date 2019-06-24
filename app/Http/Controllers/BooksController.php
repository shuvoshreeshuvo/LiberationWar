<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Period;
use App\Ff_title;
use App\Book;
use App\Bookcategory;
use DB;

class BooksController extends Controller
{
    public function Books(){
      $periods=Period::all();
      $ff_titles=Ff_title::all();
      $bookcategories=Bookcategory::all();
      $book = Book::all();
        return view('Books.Books', compact('periods','ff_titles','book','bookcategories'));
    }
    public function Bookcategory($id){
        $periods=Period::all();
        $ff_titles=Ff_title::all();
        $book = Book::all();
        $bookcategories= DB::table('bookcategories')
            ->where('bookcategory_id', $id)
            ->get();
        return view('Bookcategory.Bookcategory', compact('periods','ff_titles','book','bookcategories'));
    }


}
