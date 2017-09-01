<?php

namespace App\Http\Controllers;
use App\Post; 
use Illuminate\Http\Request;
use App\Http\Requests\createPostRequest;



class postController extends Controller
{
    
   public function index()
   {

     $posts =   Post::orderBy('id','desc')->get();

     return view('posts.index')->with('posts',$posts);
      
   }

   public function show(Post $post)
   {
      
   //This is the manual code
   //if used a class type in the parameter as above
   //laravel will automatically try to process it accordingly 

    //$post = Post::find($postid);
  /*

    if (is_null($post))
    {
      abort(404); 

    }

  */ 

     return view('posts.show')->with('post',$post);

   }


   public function create()
   {

      return view('posts.create'); 
   }

   public function store(createPostRequest $request)
   {

       $post = Post::create($request->only('title','description','url'));

       return redirect()->route('posts_path');
    
     //dd($request->all());


   }

}
