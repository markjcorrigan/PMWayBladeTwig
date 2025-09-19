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

    public string $designTemplate = 'tailwind';

    public function render()
    {
        return view('livewire.'. $this->designTemplate .'.create');
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

            $this->createRevision();
        }

        $this->savePostChanges();

        $this->saved = true;
    }

    public function publish()
    {
        $this->validate();

        $this->savePostChanges();

        if ($this->published) {
            $this->savedPost->update([
                'published_at' => now()
            ]);
        }

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.index', ['design' => 'bootstrap']);
        }
    }

    protected function savePostChanges()
    {
        if ($this->savedPost->title != $this->title || $this->savedPost->post_text != $this->post_text) {
            $this->validate();

            $this->savedPost->update([
                'title' => $this->title,
                'post_text' => $this->post_text,
            ]);

            $this->createRevision();
        } else {
            $this->savedPost->revisions()->latest()->first()->touch();
        }
    }

    protected function createRevision()
    {
        $this->savedPost->revisions()->create([
            'title' => $this->title,
            'post_text' => $this->post_text,
        ]);
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
