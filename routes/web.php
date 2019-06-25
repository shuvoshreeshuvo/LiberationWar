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

/*Route::get('/', function () {
    return view('home');
});*/

// Home Page

Route::get('/', 'HomeController@index');




//Route::get('/LanguageMovement', 'EtihashController@LanguageMovement')
Route::get('/etihash/period/{id}', 'EtihashController@period_history');
Route::get('/etihash/languagemovement/bongovongo', 'LanguageMovementController@Bongovongo');
Route::get('/etihash/languagemovement/languagemovement', 'LanguageMovementController@LanguageMovement');
Route::get('/etihash/languagemovement/juktofront', 'LanguageMovementController@Juktofront');
Route::get('/etihash/languagemovement/sixdofa', 'LanguageMovementController@Sixdofa');


Route::get('/etihash/massuprisingg', 'EtihashController@MassUprisingg');

//LiberationWar
Route::get('/etihash/period/brief/{id}', 'EtihashController@event_brief');
Route::get('/etihash/liberationwar/potovumi', 'LiberationwarController@potovumi');
Route::get('/etihash/liberationwar/shadhinotajuddho', 'LiberationwarController@Shadhinotajuddho');

Route::get('/etihash/liberationwar/indiapakistanjuddho', 'LiberationwarController@Indiapakistanjuddho');

Route::get('/etihash/liberationwar/gonohottaa', 'LiberationwarController@Gonohottaa');
Route::get('/etihash/liberationwar/protikria', 'LiberationwarController@Protikria');
Route::get('/etihash/liberationwar/juddherkalpunji', 'LiberationwarController@Juddherkalpunji');



Route::get('/1969', function () {
    return view('1969');
})->name('1969');

Route::get('/1971', function () {
    return view('1971');
})->name('1971');


Route::get('/bongobondu', 'BongobonduController@Bongobondu');


Route::get('/archive/documents', 'ArchiveController@Documents');
Route::get('/archive/image', 'ArchiveController@Image');
Route::get('/archive/video', 'ArchiveController@VideoFootage');
Route::get('/archive/audio', 'ArchiveController@Audio');


Route::get('/freedom_fighter', 'Freedom_fighterController@index');
Route::get('/freedom_fighter/freedomfighter_title/{id}', 'Freedom_fighterController@freedom_fighter');
Route::get('/freedom_fighter/details/{id}', 'Freedom_fighterController@freedom_fighter_details');



Route::get('/books', 'BooksController@Books');
Route::get('book/bookcategory/{id}', 'BooksController@Bookcategory');

Route::get('/about', 'AboutController@About');
Route::post('/about', 'ContactController@sendMessage')->name('contact.send');




Auth::routes();




//Admin



Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function (){
     
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('Slider','SliderController');
    Route::resource('Category','CategoryController');
    Route::resource('period','PeriodController');
    Route::resource('event','EventController');
    Route::resource('bongobondu','BongobonduController');
    Route::resource('archive','ArchiveController');
    Route::resource('book','BookController');
    Route::resource('b_category','BookcategoryController');
    Route::resource('freedomfighter_title','Ff_titleController');
    Route::resource('freedom_fighter','Freedom_fighterController');
    Route::resource('Item','ItemController');
    Route::get('Contact','ContactController@index')->name('contact.index');
     Route::get('Contact/{id}','ContactController@show')->name('contact.show');
     Route::delete('Contact/{id}','ContactController@destroy')->name('contact.destroy');


});



