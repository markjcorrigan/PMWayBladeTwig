<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostForm extends Component
{
    public ?Post $post = null;
    #[Rule('required|min:3')]
    public string $title = '';
    #[Rule('required|min:10')]
    public string $body = '';

    public string $designTemplate = 'tailwind';

    public function mount(Post $post): void
    {
        if ($post->exists) {
            $this->post = $post;
            $this->title = $post->title;
            $this->body = $post->body;
        }
    }

    public function submitForm(): Redirector|RedirectResponse
    {
        $this->validate();

        if (empty($this->post)) {
            Post::create($this->only('title', 'body'));
        } else {
            $this->post->update($this->only('title', 'body'));
        }

        session()->flash('message', 'Post successfully saved!');

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.index', ['design' => 'bootstrap']);
        }
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.post-form');
    }
}
