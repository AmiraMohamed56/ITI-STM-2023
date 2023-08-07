<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
       return Post::all();
        
    }
    function show($id)
    {
        return Post::find($id);
    }
    function store(Request $request)
    {
        $post = $request->all();
        Post::create([
            'title'=>$request->title,
            'descr'=>$request->descr,
            'user_id'=>$request->user_id
        ]);
        return "done";
       
    }
    function update(Request $request, $id=1)
    {
        $post= Post::find($id);
        $post->title= $request['title'];
        $post->descr= $request['descr'];
        $post->save();
        return "updated";
    }
    function destroy($id)
    {
        Post::destroy($id);
        return "deleted";
    }
}
