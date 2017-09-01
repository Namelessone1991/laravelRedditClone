@extends('layouts.app')

@section('content')

 <h2>Create a new post</h2>
@include('posts._form',['post'=>$post])




@endsection