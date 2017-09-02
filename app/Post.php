<?php


 namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User; 

 Class Post extends Model {


    protected $table = 'posts';
    protected $fillable = ['title','description','url'];


    //function created to associate posts with users

    public function user()
    {

       return $this->belongsTo(User::class);

    }



 }