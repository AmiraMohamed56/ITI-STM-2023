@extends('layouts.app')
@section('title')
Show
@endsection
@section('content')
    <br> <br> <br>
    <ul>
        <li>{{ $post->id }}</li>
        <li>{{ $post->title }}</li>
        <li>{{ $post->descr }}</li>
    </ul>
@endsection