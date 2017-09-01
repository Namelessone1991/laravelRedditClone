@extends('layouts.app')

    
      

@section('content')

@foreach($posts as $post)
      <div class = "row">

    <div class = "col-md-12">
     <h2><a href =" {{ route('post_path',['post'=>$post->id])}} ">{{$post->title}} </a> </h2>
      <div class="pull-right">
      <a href= "{{ route('edit_post_path',['post'=>$post->id]) }}" class = "btn btn-info">Edit</a>

      {{-- NOTICE THE FORM BELOW IS NEEDED DUE TO THE WAY LARAVEL WORKS, A SINGLE BUTTON WOULD NOT WORK --}}

      <form  action= "{{ route('delete_post_path',['post'=>$post->id]) }}" method = "POST">
      
      {{csrf_field()}}

      {{method_field('DELETE')}}


      <button type = "submit" class = "btn btn-danger">Delete</button>

      
      
      </form>
      </div>
       
     <span> {{$post->description}} </span>


     <p> posted {{$post->created_at->diffForHumans()}}</p>
     </div>

   </div>
   
    @endforeach

    {{$posts->render()}}
@endsection







