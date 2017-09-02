<?php

use Faker\Generator as Faker;

use App\User; 


$factory->define(App\Post::class, function (Faker $faker){
    
        
        return [
    
           'title'=> $faker->sentence,
    
           'description'=>$faker->paragraph,
           
           'url'=>$faker->url,
           'user_id'=> function() {

            //function is created so a user_id is generated if none is found
            //as the time of creating this factory, there is still no association between
            //posts and the user but this variable in the database

           return factory(App\User::class)->create()->id;

           }
    
        ];
    
    
    });