<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Component;

class Posts extends Component
{
    #[Rule('required|max:100')]
    public string $title;

    #[Rule('required|max:100')]
    public string $slug;

    public string $designTemplate = 'tailwind';

    public function render(): View
    {
        $posts = Post::latest('id')->take(5)->get();

        return view('livewire.'.$this->designTemplate.'.posts', compact('posts'));
    }

    public function updatedTitle(): void
    {
        $this->slug = SlugService::createSlug(Post::class, 'slug', $this->title);
    }

    public function storePost(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'slug' => $this->slug,
        ]);

        $this->reset();
    }
}
