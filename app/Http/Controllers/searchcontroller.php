<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Freedom_fighter;
use App\Book;

class SearchController extends Controller
{
    public function search(){
    
    $q = Input::get('search');
    if($q == 'হোম'){
        return redirect(url('/'));
    }

    if($q == 'history'){
        $period = DB::table('periods')->inRandomOrder()->first();
        $id = $period->id;
        return redirect(url('/etihash/period/'.$period->id));
    }

 
    $q = Input::get('search');
    if($q == 'বঙ্গবন্ধু'){
        return redirect(url('/bongobondu'));
     }

     $q = Input::get('search');
    if($q == 'ছবি'){
        return redirect(url('/archive/image'));
     }

      $q = Input::get('search');
     if($q == 'ডকুমেন্টস'){
        return redirect(url('/archive/documents'));
     }

      $q = Input::get('search');
     if($q == 'ভিডিও'){
        return redirect(url('/archive/video'));
     }
     
     $q = Input::get('search');
     if($q == 'বীর শ্রেষ্ঠ'){
        return redirect(url('freedom_fighter/freedomfighter_title/2'));
     }

     $q = Input::get('search');
     if($q == ' বীর উত্তম'){
        return redirect(url('freedom_fighter/freedomfighter_title/3'));
     }

     $q = Input::get('search');
     if($q == 'বীর বিক্রম'){
        return redirect(url('freedom_fighter/freedomfighter_title/4'));
     }

     $q = Input::get('search');
     if($q == 'বীর প্রতীক'){
        return redirect(url('freedom_fighter/freedomfighter_title/5'));
     }
     
      $q = Input::get('search');
     if($q == 'বই'){
        return redirect(url('/books'));
     }
      $q = Input::get('search');
     if($q == '১৯৪৭'){
        return redirect(url('/etihash/period/brief/1'));
     }
     
      $q = Input::get('search');
     if($q == '১৯৫২'){
        return redirect(url('/etihash/period/brief/2'));
     }
     
      $q = Input::get('search');
     if($q == ' ১৯৫৪ '){
        return redirect(url('/etihash/period/brief/3'));
     }
      $q = Input::get('search');
     if($q == '১৯৫৮'){
        return redirect(url('/etihash/period/brief/6'));
     }
      $q = Input::get('search');
     if($q == '১৯৬৬'){
        return redirect(url('/etihash/period/brief/7'));
     }
      $q = Input::get('search');
     if($q == '১৯৬৯'){
        return redirect(url('/etihash/period/brief/16'));
     }
      $q = Input::get('search');
     if($q == '১৯৭০'){
        return redirect(url('/etihash/period/brief/8'));
     }
      $q = Input::get('search');
     if($q == '১৯৭১'){
        return redirect(url('/etihash/period/brief/9'));
     }
      $q = Input::get('search');
     if($q == 'গণহত্যা'){
        return redirect(url('/etihash/period/brief/11'));
     }

      $q = Input::get('search');
     if($q == 'বুদ্ধিজীবী'){
        return redirect(url('/etihash/period/brief/12'));
     }




    if($q != ""){
        $freedom_fighter=Freedom_fighter::where('name','LIKE','%'.$q.'%')
                    ->orWhere('sector','LIKE','%'.$q.'%')
                    ->get();
        $book=Book::where('title','LIKE','%'.$q.'%')
                    ->get();
        if(count($freedom_fighter)>0)
            $book= 0;
            return view('welcome')->with('freedom_fighter','book')->withQuery($q);

        if(count($book)>0)
            $freedom_fighter = '0';
            return view('welcome')->with('book','freedom_fighter')->withQuery($q);
    }
    return view('welcome')->withMessage("No User Found!");


}
}
