<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/bkk', function(){
  //return 'Ok';
//});

Route::get('/bcc', 'Controller@bcc');

Route::get('/detail/{id?}', 'Controller@detail');

Route::get('/category/{id?}', 'Controller@showCategory');

Route::get('/create', 'Controller@create');

Route::post('/store', 'Controller@store');

Route::post('/comment_store', 'CommentsController@store');
