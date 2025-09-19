<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class BookmarkCount extends Component
{
    public User $user;

    public string $designTemplate = 'tailwind';

    protected $listeners = ['updateBookmarkCount' => 'render'];

    public function mount()
    {
        $this->user = User::first();
    }

    public function render()
    {
        return view('livewire.' . $this->designTemplate . '.bookmark-count', [
            'bookmarkCount' => $this->user->postBookmarksCount()
        ]);
    }
}
