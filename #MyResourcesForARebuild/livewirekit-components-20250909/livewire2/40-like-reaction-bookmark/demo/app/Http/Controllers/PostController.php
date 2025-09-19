<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.' . $this->designTemplate . '.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load( 'reactions')
            ->loadCount('likes');

        return view('posts.' . $this->designTemplate . '.show', compact('post'));
    }
}
