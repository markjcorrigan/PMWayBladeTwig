<div>
    <div class="d-flex justify-content-end text-success mb-4" wire:poll.10s="draft">
        @if($saved)
            Saved at {{ $savedPost->revisions()->latest()->first()->updated_at->format('H:i:s') }}
        @endif
    </div>

    <form wire:submit.prevent="publish">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

            <div class="col-md-6">
                <input wire:model="title"
                       type="text"
                       class="form-control @error('title') is-invalid @enderror">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="post_text" class="col-md-4 col-form-label text-md-right">Post text</label>

            <div class="col-md-6">
                <textarea wire:model="post_text"
                          class="form-control @error('post_text') is-invalid @enderror"
                          name="post_text"
                          id="post_text">{{ old('post_text') }}</textarea>

                @error('post_text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
            <input wire:model="published" class="form-check-input" type="checkbox" name="published" id="published">
                <label for="published" class="form-check-label">Published</label>
                @error('published')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
