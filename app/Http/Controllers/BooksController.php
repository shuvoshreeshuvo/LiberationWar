<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Period;
use App\Ff_title;
use App\Book;

class BooksController extends Controller
{
    public function Books(){
      $periods=Period::all();
      $ff_titles=Ff_title::all();
      $book = Book::all();
        return view('Books.Books', compact('periods','ff_titles','book'));
    }
}
