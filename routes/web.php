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

Route::get('/bcc', 'PostsController@bcc');

Route::get('/detail/{id?}', 'PostsController@detail');

Route::get('/category/{id?}', 'PostsController@showCategory');

Route::get('/create', 'PostsController@create');

Route::post('/store', 'PostsController@store');

Route::post('/comment_store', 'CommentsController@store');

Route::get('/bkk', 'Controller@getBkk');

Route::get('/bkk_detail', 'Controller@getDetail');

Route::get('/sub/{id?}', 'Controller@getSub');

Route::get('/aboutus', 'Controller@getAboutus');

Route::get('/contact', 'Controller@getContact');
