<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Chat extends Component
{
    public int $userId;
    public string $messageText = '';

    public function render(): View
    {
        $messages = Message::with('user')
            ->latest()
            ->take(10)
            ->get()
            ->sortBy('id');

        return view('livewire.chat', compact('messages'));
    }

    public function sendMessage(): void
    {
        Message::create([
            'user_id' => $this->userId,
            'message_text' => $this->messageText,
        ]);

        $this->reset('messageText');
    }
}
