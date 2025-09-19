<?php

namespace App\Livewire;

use App\Models\PostComment;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Illuminate\Contracts\View\View;

class Comments extends Component
{
    #[Locked]
    public int $postId;
    #[Rule('required')]
    public string $username = '';
    #[Rule('required')]
    public string $comment_text = '';
    #[Locked]
    public ?int $replyCommentId = NULL;

    public function render(): View
    {
        $comments = PostComment::whereNull('parent_id')
            ->with('replies')
            ->latest()
            ->get();

        return view('livewire.comments', [
            'comments' => $comments
        ]);
    }

    public function save_comment()
    {
        $this->validate();

        PostComment::create([
            'post_id' => $this->postId,
            'username' => $this->username,
            'comment_text' => $this->comment_text,
            'parent_id' => $this->replyCommentId
        ]);

        $this->reset('username', 'comment_text', 'replyCommentId');

        $this->username = '';
        $this->comment_text = '';
        $this->replyCommentId = NULL;
    }

    public function reply($commentId)
    {
        $this->replyCommentId = $commentId;
    }
}
