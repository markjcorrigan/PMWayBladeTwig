<div>
    <div class="flex justify-end mb-4 text-green-500" wire:poll.10s="draft">
        @if($saved)
            Saved at {{ $savedPost->revisions()->latest()->first()->updated_at->format('H:i:s') }}
        @endif
    </div>

    <form wire:submit="publish">
        <div>
            <label for="title">Title</label>
            <input wire:model="title" type="text" name="title" id="title" class="p-1 w-full rounded-md border border-indigo-500 focus:outline-none" value="{{ old('title') }}">
            @error('title')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mt-3">
            <label for="post_text">Post text</label>
            <textarea wire:model="post_text" type="text" name="post_text" id="post_text" class="p-1 w-full rounded-md border border-indigo-500 focus:outline-none">{{ old('post_text') }}</textarea>
            @error('post_text')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mt-3">
            <input wire:model="published" type="checkbox" name="published" id="published">
            <label for="published">Published</label>
            @error('published')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="px-3 py-1 text-white bg-indigo-500 rounded-md border border-indigo-600 cursor-pointer hover:bg-indigo-600 focus:outline-none">Save</button>
        </div>
    </form>
</div>
