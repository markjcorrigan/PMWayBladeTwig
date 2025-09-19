<div>
    <h3>Comments</h3>
    @forelse ($comments as $comment)
        <div style="margin-bottom: 10px">
            <div><strong>{{ $comment->username }} ({{ $comment->created_at->diffForHumans() }})</strong></div>
            {{ $comment->comment_text }}
            <br/>
            <a wire:click="reply({{ $comment->id }})" href="#" style="text-decoration: underline; font-size: 12px">Reply
                to this comment</a>
        </div>
        @foreach ($comment->replies as $reply)
            <div style="padding-left: 30px; margin-bottom: 10px">
                <b>{{ $reply->username }} ({{ $reply->created_at->diffForHumans() }})</b>
                <br/>
                {{ $reply->comment_text }}
            </div>
        @endforeach
    @empty
        No comments yet.
    @endforelse
    <hr/>
    <h3>{{ is_null($replyCommentId) ? 'Add a comment' : 'Reply to a comment' }}</h3>

    <form wire:submit="save_comment">
        <div class="mb-3">
            <label for="username" class="form-label">Username*:</label>
            <input wire:model="username" id="username" type="text" class="form-control @error('username') is-invalid @enderror"/>
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="comment_text" class="form-label">Comment text*:</label>
            <textarea wire:model="comment_text" id="comment_text" rows="3" class="form-control @error('username') is-invalid @enderror" maxlength="500"></textarea>
            @error('comment_text')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>
</div>
