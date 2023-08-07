<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    function index()
    {
        $users = User::all();
        // $postsArray = $users[0]->posts;
        $posts = Post::all();
        return view("post.posts",["posts"=>$posts]);
    }
    function show($id)
    {
        $post = Post::find($id);
        return view("post.show",["post"=>$post]);
    }
    function create()
    {
        return view("post.create");
    }
    function store(Request $request)
    {
        $post = $request->all();
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'descr' => 'required' 
        ]);
        Post::create($post);
        return redirect('/posts');
        // Post::create([
        //     "title"=>$post['title'],
        //     "descr"=>$post['descr'],
        //     "user_id"=>$post['user_id']
        // ]);
    }
    function edit($id)
    {
        $post = Post::find($id);
        return view("post.edit",["post"=>$post]);
    }
    function update(Request $request, $id=1)
    {
        $post= Post::find($id);
        $post->title= $request['title'];
        $post->descr= $request['descr'];
        $post->save();
        return redirect('/posts');
    }
    function destroy($id)
    {
        Post::destroy($id);
        return redirect('/posts');
    }

}
