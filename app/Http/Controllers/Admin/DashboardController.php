<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Period;
use App\Event;
use App\Book;
use App\Bookcategory;
use App\Freedom_fighter;
use App\Ff_title;
use App\User;
use App\Archive;
use App\Contact;

class DashboardController extends Controller
{
   public function index(){
        $profileCount= User::count();
        $periodCount= Period::count();
   	    $eventCount= Event::count();
        $archiveCount= Archive::count();
   	    $bookCount= Book::count();
        $bookcategoryCount= Bookcategory::count();
        $ff_titleCount= Ff_title::count();
        $freedom_fighterCount= Freedom_fighter::count();
   	    $contactCount= Contact::count();
   	    return view('admin.dashboard',compact('profileCount','periodCount','eventCount','archiveCount','bookCount','bookcategoryCount','ff_titleCount','freedom_fighterCount','contactCount'));
   }
}
