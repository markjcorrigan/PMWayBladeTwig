<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public string $designTemplate = 'tailwind';

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.' . $this->designTemplate . '.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.' . $this->designTemplate . '.create');
    }

    public function edit(Post $post)
    {
        return view('posts.' . $this->designTemplate . '.edit', compact('post'));
    }
}
