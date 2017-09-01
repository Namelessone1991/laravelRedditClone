<?php

namespace App\Http\Controllers;
use App\Post; 
use Illuminate\Http\Request;



class postController extends Controller
{
    
   public function index()
   {

     $posts =   Post::all();

     return view('posts.index')->with('posts',$posts);
      
   }

   public function show($postid)
   {
      
    $post = Post::find($postid);


    if (is_null($post))
    {
      abort(404); 

    }

     return view('posts.show')->with('post',$post);

   }



}
