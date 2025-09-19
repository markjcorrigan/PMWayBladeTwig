<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public Post $savedPost;

    public string $title = '';

    public string $post_text = '';

    public int $postId = 0;

    public bool $published = false;

    public bool $saved = false;

    public function render()
    {
        return view('livewire.create');
    }

    public function draft()
    {
        if ($this->postId === 0) {
            $this->validate();

            $this->savedPost = Post::create([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);

            $this->postId = $this->savedPost->id;

            $this->savedPost->revisions()->create([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);
        }

        if ($this->savedPost->title != $this->title || $this->savedPost->post_text != $this->post_text) {
            $this->validate();

            $this->savedPost->update([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);

            $this->savedPost->revisions()->create([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);
        } else {
            $this->savedPost->revisions()->latest()->first()->touch();
        }

        $this->saved = true;
    }

    public function publish()
    {
        $this->validate();

        if ($this->savedPost->title != $this->title || $this->savedPost->post_text != $this->post_text) {
            $this->savedPost->update([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);

            $this->savedPost->revisions()->create([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);
        } else {
            $this->savedPost->revisions()->latest()->first()->touch();
        }

        if ($this->published) {
            $this->savedPost->update([
                'published_at' => now()
            ]);
        }

        return redirect()->route('posts.index');
    }

    protected function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'post_text' => ['required', 'string'],
            'published' => ['bool']
        ];
    }
}
