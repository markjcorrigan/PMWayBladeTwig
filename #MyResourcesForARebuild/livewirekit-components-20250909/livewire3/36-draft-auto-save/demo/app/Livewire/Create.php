<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class Create extends Component
{
    public Post $savedPost;

    #[Rule('required|string')]
    public string $title = '';

    #[Rule('required|string')]
    public string $post_text = '';

    #[Locked]
    public int $postId = 0;

    #[Rule('bool')]
    public bool $published = false;

    public bool $saved = false;

    public string $designTemplate = 'tailwind';

    public function render(): View
    {
        return view('livewire.'. $this->designTemplate .'.create');
    }

    public function draft(): void
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

    public function publish(): RedirectResponse|Redirector
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

    protected function savePostChanges(): void
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

    protected function createRevision(): void
    {
        $this->savedPost->revisions()->create([
            'title' => $this->title,
            'post_text' => $this->post_text,
        ]);
    }
}
