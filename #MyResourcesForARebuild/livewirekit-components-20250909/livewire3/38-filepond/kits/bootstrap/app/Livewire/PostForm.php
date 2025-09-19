<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostForm extends Component
{
    use WithFileUploads;

    public ?Post $post = null;

    #[Rule('required|max:100')]
    public string $title = '';

    public $image;

    public function mount(Post $post): void
    {
        if ($post->exists) {
            $this->post = $post;
            $this->title = $post->title;
            $this->image = $this->post->getFirstMediaUrl('post_image');
        }
    }

    public function render(): View
    {
        return view('livewire.post-form');
    }

    public function storePost(): RedirectResponse|Redirector
    {
        $this->validate();

        if (empty($this->post)) {
            $post = Post::create($this->only('title'));
            $post->addMedia($this->image->getRealPath())->toMediaCollection('post_image');
        } else {
            $this->post->update($this->only('title'));
            $this->post->clearMediaCollection('post_image');
            $this->post->addMedia($this->image->getRealPath())->toMediaCollection('post_image');
        }

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.index', ['design' => 'bootstrap']);
        }
    }
}
