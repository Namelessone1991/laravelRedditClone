<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePostRequest extends createPostRequest
{
    //do not delete, extends from createPostRequest and thus
    //inherits the rules from the previous class
    //can be edited to modify the return values from functions
    //or to add more validation rules

    //this class will be used to restrict users from deleting only
    //their own posts


    public function authorize()
    {

        //get the current user session id 
        return $this->user()->id == $this->post->user_id;

        //post variable is taken from the url, the route named
        // Route::name('update_post_path')->put('/posts/{post}','postController@update');
    }



}
