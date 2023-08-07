@extends('layouts.app')
@section('title')
Edit
@endsection
@section('content')
    <br> <br> <br>
    <form action="/posts/{{$post->id}}" method="post" align="center">
        @csrf
        @method('put')
        <label class="form__input">Title</label> 
        <input type="text" name="title" value="{{$post->title}}" placeholder="title" class="form-control"><br><br>
        <label class="form__input">Description</label> 
        <input type="text" name="descr" value="{{$post->descr}}" placeholder="description" class="form-control"><br><br>
        <input type="submit" class="btn btn-primary me-md-2">
    </form>
@endsection