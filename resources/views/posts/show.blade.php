@extends('layouts.app')

@section('content')


   <div class = "row">
      <div class = "col-md-12">
         
         <h2> {{$post->title}} </h2>

         <span> {{$post->description}} </span>
     <p> posted {{$post->created_at->diffForHumans()}}</p>

       <div class="pull-right">
       <a href= "{{ route('posts_path') }}" class = "btn btn-info">Return to main index</a>
       </div> 
      </div>        
   </div> 


  
     
      
   

    
 



@endsection
