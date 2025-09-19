<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Maize\Markable\Models\Like;
use Maize\Markable\Models\Bookmark;
use Maize\Markable\Models\Reaction;

class Reactions extends Component
{
    public Post $post;

    public User $user;

    public int $likesCount = 0;

    public bool $hasLiked = false;

    public bool $hasBookmarked = false;

    public array $hasReacted = [];

    public string $designTemplate = 'tailwind';

    public function mount(Post $post)
    {
        $this->post = $post;

        $this->user = User::first();

        $this->hasLiked = Like::has($post, $this->user);

        $this->hasBookmarked = Bookmark::has($post, $this->user);

        $this->likesCount = $post->likes_count;

        foreach (config('markable.allowed_values.reaction') as $reaction) {
            $reacted = ! is_bool(array_search(
                $reaction,
                array_column($this->post->reactions->toArray(), 'value'),
            ));

            $this->hasReacted[$reaction] = $reacted;
        }
    }

    public function toggleReaction($reaction)
    {
        if (! in_array($reaction, config('markable.allowed_values.reaction'))) {
            return;
        }

        Reaction::toggle($this->post, $this->user, $reaction);

        $this->hasReacted[$reaction] = ! $this->hasReacted[$reaction];
    }

    public function toggleBookmark()
    {
        Bookmark::toggle($this->post, $this->user);

        $this->emit('updateBookmarkCount');

        $this->hasBookmarked = ! $this->hasBookmarked;
    }

    public function toggleLike()
    {
        Like::toggle($this->post, $this->user);

        if ($this->hasLiked) {
            $this->hasLiked = false;
            $this->likesCount--;
        } else {
            $this->hasLiked = true;
            $this->likesCount++;
        }
    }

    public function render()
    {
        return view('livewire.' . $this->designTemplate . '.reactions');
    }
}
