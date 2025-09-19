<div wire:poll>
    @forelse ($messages as $message)
        [{{ $message->created_at->format('H:i') }}] {{ $message->user->name }}: {{ $message->message_text }}
        <br/>
    @empty
        No messages yet. Type one below!
    @endforelse
    <hr/>
    <form wire:submit.prevent="sendMessage">
        <div class="mt-6 row">
            <div class="col-9">
                <input wire:model.defer="messageText" type="text"
                       placeholder="New message"
                       class="form-control"/>
            </div>

            <div class="col-3">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </form>
</div>
