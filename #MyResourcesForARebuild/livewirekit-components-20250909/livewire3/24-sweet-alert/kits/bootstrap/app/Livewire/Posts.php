<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class Posts extends Component
{
    #[Rule('required|max:100')]
    public string $title;

    public function render(): View
    {
        $posts = Post::latest('id')->take(5)->get();

        return view('livewire.posts', compact('posts'));
    }

    public function storePost(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
        ]);

        $this->dispatch('swal:modal',
            type: 'success',
            title: 'Record added successfully',
            text: '',
        );

        $this->reset('title');
    }

    public function deleteConfirm(int $postId): void
    {
        $this->dispatch('swal:confirm',
            type: 'warning',
            title: 'Are you sure?',
            text: '',
            id: $postId,
        );
    }

    #[On('delete')]
    public function delete(int $postId): void
    {
        Post::where('id', $postId)->delete();
    }
}
