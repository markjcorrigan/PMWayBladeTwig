<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class PostVotes extends Component
{
    public int $sumVotes = 0;
    public Post $post;

    public function mount($post): void
    {
        $this->post = $post;
        $this->sumVotes = $post->votes->sum('vote');
    }

    public function render(): View
    {
        return view('livewire.post-votes');
    }

    public function vote($vote): void
    {
        $userId = 1; // This is for demo purposes
        // Change this probably to auth()->id()

        // User already voted, or wrong parameters
        if (!in_array($vote, [-1,1])
            || $this->post->votes->where('user_id', $userId)->count()) {
            return;
        }

        $this->post->votes()->create([
            'user_id' => $userId,
            'vote' => $vote
        ]);

        $this->sumVotes += $vote;
    }

}
