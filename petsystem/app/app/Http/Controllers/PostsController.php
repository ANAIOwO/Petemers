<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.forum',compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $post = new Post;
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'name' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'name' => request('name'),
        ]);

        return redirect('/forum');
    }
}
