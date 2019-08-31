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

Route::domain('geniat.test')->group(function(){
    Route::get('/', function () {
        //return view('welcome');
        return redirect('/login');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/principal', 'HomeController@principal')->name('principal');

    Route::post('/new', 'HomeController@new')->name('add.new');

    /*Route::get('/password',function (){
        return password_hash('12345678',PASSWORD_DEFAULT);
    });*/
    
});



