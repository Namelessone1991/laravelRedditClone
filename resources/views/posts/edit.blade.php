@extends('layouts.app')

@section('content')


<h2>Editing post</h2>
@include('posts._form',['post'=>$post])

@endsection