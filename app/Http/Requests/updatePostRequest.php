<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePostRequest extends createPostRequest
{
    //do not delete, extends from createPostRequest and thus
    //inherits the rules from the previous class
    //can be edited to modify the return values from functions
    //or to add more validation rules
}
