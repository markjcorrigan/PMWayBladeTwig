<div>
    <div class="mb-3 row">
        <label for="title" class="col-md-4 col-form-label text-md-right">
            Post title
        </label>
        <input wire:model="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror"/>
        @error('title')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3 row mt-4">
        <label for="categories" class="">
            Categories
        </label>
    </div>
    <div wire:ignore>
        <div x-data
             x-ref="editor"
             x-init="
                const quill = new Quill($refs.editor, {
                    theme: 'snow'
                });
                quill.on('text-change', () => {
                    $wire.set('body', quill.root.innerHTML)
                })
        ">
            {!! $body !!}
        </div>
    </div>
    @error('body')
        <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror

    <div class="mb-3 row mb-0 mt-4">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Save Post
            </button>
        </div>
    </div>
</div>
