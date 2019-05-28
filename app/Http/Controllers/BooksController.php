<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Book;

class BooksController extends Controller
{
    public function Books(){
      $periods=Period::all();
      $book = Book::all();
        return view('Books.Books', compact('periods','book'));
    }
}
