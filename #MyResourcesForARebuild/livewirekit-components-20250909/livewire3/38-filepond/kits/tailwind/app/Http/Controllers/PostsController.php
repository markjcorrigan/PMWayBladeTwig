<?php

namespace App\Http\Controllers;


use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('media')->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
}
