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




Route::get('/', 'postController@index');

Route::group(['middleware'=>'auth'], function(){
    
        Route::get('/home', 'HomeController@index')->name('home');
        
        Route::name('create_post_path')->get('/posts/create','postController@create');
        //this one must be created first so it does not get overrriden by the route
        //that is gonna be created below
        Route::name('store_post_path')->post('/posts','postController@store');
        
        Route::name('edit_post_path')->get('/posts/{post}/edit','postController@edit');
        
        Route::name('update_post_path')->put('/posts/{post}','postController@update');
        
        Route::name('delete_post_path')->delete('/posts/{post}','postController@delete');
    
    
    });




Route::get('/test/{variable}','dataController@variableOutput');

Route::name('posts_path')->get('/posts','postController@index');

Route::name('post_path')->get('/posts/{post}','postController@show');





//the following routes were generated automatically by Laravel 
//The Home Controller prevents unauthorized access
//To generate this the command 'php artisan make:auth ' was used


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


