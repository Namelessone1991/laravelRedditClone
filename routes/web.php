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




Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/{variable}','dataController@variableOutput');

Route::name('posts_path')->get('/posts','postController@index');

Route::name('create_post_path')->get('/posts/create','postController@create');
Route::name('store_post_path')->post('/posts','postController@store');
//this one must be created first so it does not get overrriden by the route
//that is gonna be created below


Route::name('post_path')->get('/posts/{post}','postController@show');

