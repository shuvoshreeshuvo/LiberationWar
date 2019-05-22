<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function Books(){
      $book = Book::all();
        return view('Books.Books', compact('book'));
    }
}
