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

Route::get('/', 'IndexController@index');

Route::get('/hello', function () {
    return "Hello World";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get( '/topic', function (){
   return view('topic.topic');
});

Route::get( '/topic1', function (){
    return view('topic.topic1');
});

Route::get( '/topic2', function (){
    return view('topic.topic2');
});

Route::get('horizontal', function (){
   return view('topic.horizontal');
});
