<div class="d-flex w-100">
    <div wire:click="toggleLike" style="width: 33.333333%;" @class(['d-flex justify-content-center align-items-center py-2 rounded-lg text-secondary', 'bg-primary text-body' => $hasLiked]) role="button">
        <svg xmlns="http://www.w3.org/2000/svg" style="width: 1.25rem;height: 1.25rem;" fill="#000000" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <path d="M32,104H80a0,0,0,0,1,0,0V208a0,0,0,0,1,0,0H32a8,8,0,0,1-8-8V112A8,8,0,0,1,32,104Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            <path d="M80,104l40-80a32,32,0,0,1,32,32V80h61.9a15.9,15.9,0,0,1,15.8,18l-12,96a16,16,0,0,1-15.8,14H80" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
        </svg>
        <span class="ml-1">
            {{ $hasLiked ? 'Unlike' : 'Like' }}
            {{ $likesCount }}
        </span>
    </div>

    <div wire:click="toggleBookmark" style="width: 33.333333%;" @class(['d-flex justify-content-center align-items-center py-2 ml-1 rounded-lg cursor-pointer text-secondary', 'bg-primary text-body' => $hasBookmarked]) role="button">
        <svg xmlns="http://www.w3.org/2000/svg" style="width: 1.25rem;height: 1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
        </svg>
            <span class="ml-1">
                {{ $hasBookmarked ? 'Bookmarked' : 'Bookmark' }}
            </span>
    </div>

    <div style="width: 33.333333%;" class="d-flex justify-content-center align-items-center ml-1 py-1">
        @foreach(config('markable.allowed_values.reaction') as $reaction)
            <button type="button" @class(['ml-1 p-1 btn', 'btn-outline-light' => ! $hasReacted[$reaction], 'btn-primary rounded-lg' => $hasReacted[$reaction]]) wire:click="toggleReaction('{{ $reaction }}')">
                {{ $reaction }}
            </button>
        @endforeach
    </div>
</div>
