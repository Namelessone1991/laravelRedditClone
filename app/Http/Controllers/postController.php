<?php

namespace App\Http\Controllers;
use App\Post; 
use Illuminate\Http\Request;
use App\Http\Requests\createPostRequest;
use App\Http\Requests\updatePostRequest;


class postController extends Controller
{
    
   public function index()
   {

     $posts =   Post::orderBy('id','desc')->paginate(10);

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

      $post = new Post; 


      return view('posts.create')->with('post',$post); 
   }

   public function store(createPostRequest $request)
   {


      /*
        Code added to comply with the changes in the database
        thes changes are under the Post.php and User.php models
        These models have the hasMany and belongsTo functions
        these are meant to 
      */
        
      $post = new Post; 

      $post->fill($request->only('title','description','url'));


      //following code assignates the user_id to the post

      $post->user_id = $request->user()->id;

      $post->save(); 




       //flash session once read, it's eliminated
       //flash parameters are the name of the session, and the value of the message
       session()->flash('message','Post created'); 

       return redirect()->route('posts_path');
    
     //dd($request->all());


   }


  public function edit(Post $post)
  {

    if($post->user_id != \Auth::user()->id)
    {

        return redirect()->route('posts_path');

    }

     return view('posts.edit')->with('post',$post);

  }


  public function update(Post $post,updatePostRequest $request)
  {


    $post->update($request->only('title','description','url'));

    session()->flash('message','Post updated');
    return redirect()->route('post_path',['post'=>$post->id]);

  }


  public function delete(Post $post)
  {


     //verifies if a user is the owner of the publication
     //he is trying to delete
    if($post->user_id != \Auth::user()->id)
    {

        return redirect()->route('posts_path');

    }



    $post->delete();

    session()->flash('message','Post deleted successfully');

   return redirect()->route('posts_path');

  }


}
