<?php


namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class BlogPostVotes extends Component
{
    public BlogPost $blogpost;

    public function mount(BlogPost $blogpost): void
    {
        $this->blogpost = $blogpost;
    }

    public function render(): View
    {
        return view('livewire.blogpost-votes');
    }

    public function vote($vote): void
    {
        $userId = auth()->id(); // Use the authenticated user's ID

        // User already voted, or wrong parameters
        if (!in_array($vote, [-1, 1]) || $this->blogpost->votes()->where('user_id', $userId)->exists()) {
            return;
        }

        $this->blogpost->votes()->create([
            'user_id' => $userId,
            'vote' => $vote,
        ]);
    }
}



