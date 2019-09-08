<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Default Route
Route::get('/', 'HomeController@index1');

// Custom Route
Route::get('/lang', 'HomeController@index');


// shuvoy korsil ami off korsi

Route::group(['prefix' => '{lang?}', 'middleware' => 'setlocale', 'where' => ['lang' => '[a-zA-Z]{2}']], function($lang = Null){

    App::setlocale($lang);

    Route::get('/', 'HomeController@index');
    Route::get('/bongobondu', 'BongobonduController@Bongobondu');
    Route::get('/etihash/period/{id}', 'EtihashController@period_history');
    Route::get('/etihash/period/brief/{id}', 'EtihashController@event_brief');
    Route::get('/archive/documents', 'ArchiveController@Documents');
    Route::get('/archive/image', 'ArchiveController@Image');
    Route::get('/archive/video', 'ArchiveController@VideoFootage');
    Route::get('/archive/audio', 'ArchiveController@Audio');
    Route::get('/books', 'BooksController@Books');
    Route::get('/books/bookcategory/{id}', 'BooksController@Bookcategory');


    Route::get('/about', 'AboutController@About');


});


//search

Route::get('/search', 'searchController@search');

//etihash
Route::get('/etihash/period/{id}', 'EtihashController@period_history');
Route::get('/etihash/period/brief/{id}', 'EtihashController@event_brief');

Route::get('/etihash/languagemovement/bongovongo', 'LanguageMovementController@Bongovongo');
Route::get('/etihash/languagemovement/languagemovement', 'LanguageMovementController@LanguageMovement');
Route::get('/etihash/languagemovement/juktofront', 'LanguageMovementController@Juktofront');
Route::get('/etihash/languagemovement/sixdofa', 'LanguageMovementController@Sixdofa');


//bongobondhu
Route::get('/bongobondu', 'BongobonduController@Bongobondu');

//archive
Route::get('/archive/documents', 'ArchiveController@Documents');
Route::get('/archive/image', 'ArchiveController@Image');
Route::get('/archive/video', 'ArchiveController@VideoFootage');
Route::get('/archive/audio', 'ArchiveController@Audio');

//freedom fighter
Route::get('/freedom_fighter', 'Freedom_fighterController@index');
Route::get('/freedom_fighter/freedomfighter_title/{id}', 'Freedom_fighterController@freedom_fighter');
Route::get('/freedom_fighter/details/{id}', 'Freedom_fighterController@freedom_fighter_details');

//books
Route::get('/books', 'BooksController@Books');
Route::get('/books/bookcategory/{id}', 'BooksController@Bookcategory');

//about
Route::get('/about', 'AboutController@About');
Route::post('/about', 'ContactController@sendMessage')->name('contact.send');


Auth::routes();


//lang
Route::get('/locale/{lang?}', function ($lang=null) {
    App::setlocale($lang);
    return view('welcome');
});


//Admin
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function (){

    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('Slider','SliderController');
    Route::resource('Category','CategoryController');
    Route::resource('period','PeriodController');
    Route::resource('event','EventController');
    Route::resource('bongobondu','BongobonduController');
    Route::resource('archive','ArchiveController');
    Route::get('/archive/special/{id}', 'ArchiveController@special')->name('archive.special');
    Route::get('/archive/normal/{id}', 'ArchiveController@normal')->name('archive.normal');
    Route::resource('book','BookController');
    Route::resource('b_category','BookcategoryController');
    Route::resource('freedomfighter_title','Ff_titleController');
    Route::resource('freedom_fighter','Freedom_fighterController');
    Route::resource('Item','ItemController');
    Route::get('Contact','ContactController@index')->name('contact.index');
    Route::get('Contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('Contact/{id}','ContactController@destroy')->name('contact.destroy');

});



