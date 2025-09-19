<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class BookmarkCount extends Component
{
    public User $user;

    public string $designTemplate = 'tailwind';

    protected $listeners = ['updateBookmarkCount' => 'render'];

    public function mount(): void
    {
        $this->user = User::first();
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.bookmark-count', [
            'bookmarkCount' => $this->user->postBookmarksCount()
        ]);
    }
}
