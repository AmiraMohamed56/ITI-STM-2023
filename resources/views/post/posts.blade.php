@extends('layouts.app')
@section('title')
List All Posts
@endsection
@section('content')
     <br> <br> <br> 
    <table class="table table-striped">
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th> User id</th>
        <th colspan="4"> Actions</th>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['title'] }}</td>
            <td>{{ $post['descr'] }}</td>
            <td>{{ $post['created_at'] }}</td>
            <td>{{ $post['updated_at'] }}</td>
            <td>{{ $post['user_id'] }}</td>
            <td class="btn btn-primary me-md-2"><a href="/posts/{{ $post['id']}}"> View </a></td>
            <td class="btn btn-primary me-md-2"><a href="/posts/{{ $post['id']}}/edit"> Edit </a></td>
            <td>
                <form action="/posts/{{ $post['id'] }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-primary me-md-2">
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
        <td colspan="6" class="btn btn-primary me-md-2"><a href="/posts/create"> Create </a></td>
        </tr>
    </table>
@endsection

