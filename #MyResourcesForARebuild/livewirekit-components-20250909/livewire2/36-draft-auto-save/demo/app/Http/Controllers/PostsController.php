<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostsController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index(): View
    {
        $posts = Post::paginate();

        return view('posts.' . $this->designTemplate . '.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.' . $this->designTemplate . '.create');
    }
}
