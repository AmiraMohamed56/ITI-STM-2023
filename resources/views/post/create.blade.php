@extends('layouts.app')
@section('title')
Create
@endsection
@section('content')
  <br> <br> <br>
  <div class="container">
    <form  action="/posts" method="post" align="center">
        @csrf 
        <label for="exampleFormControlInput1" class="form__input">Title</label>
        <input type="text" class="form-control" name="title" placeholder="title"><br><br>
        <label for="exampleFormControlInput1" class="form__input"> Description</label>
        <input type="text" class="form-control" name="descr" placeholder="description"><br><br>
        <label for="exampleFormControlInput1" class="form__input">User ID</label>  
        <input type="text" class="form-control" name="user_id" placeholder="user id"><br><br>
        <input type="submit" class="btn btn-primary me-md-2">
    </form>
</div>     
@if($errors->any())
     @foreach($errors->all() as $error)
       {{ $error }}
     @endforeach  
@endif
@endsection    

