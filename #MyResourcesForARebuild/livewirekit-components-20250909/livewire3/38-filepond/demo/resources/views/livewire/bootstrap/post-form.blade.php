<div>
    <form wire:submit="storePost" class="pb-10">
        <div class="mb-3">
            <label for="title">
                Title
            </label>
            <input wire:model="title" type="text" id="title" class="form-control @error('title') is-invalid @enderror" />
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        @if ($image && method_exists($image, 'temporaryUrl'))
            <img src="{{ $image->temporaryUrl() }}" class="img-fluid mb-3 w-full h-56" />
        @elseif($image)
            <img src="{{ $image }}" class="img-fluid mb-3" />
        @endif

        <div wire:ignore
             x-data
             x-init="() => {
                FilePond.setOptions({
                    server: {
                        process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            @this.upload('image', file, load, error, progress)
                        },
                        revert: (filename, load) => {
                            @this.removeUpload('image', filename, load)
                        }
                    },
                    allowImagePreview: true,
                    imagePreviewMaxHeight: 256,
                    allowFileTypeValidation: true
                });
                FilePond.registerPlugin(FilePondPluginFileValidateType);
                FilePond.create($refs.input, {
                    acceptedFileTypes: ['image/jpeg', 'image/jpg', 'image/gif', 'image/png']
                });
            }">
            <input type="file" x-ref="input">
        </div>
        @error('image')
            <span style="width: 100%;margin-top: 0.25rem;font-size: 80%;color: #dc3545;" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div>
            <button type="submit" class="btn btn-primary mt-4">
                Save Post
            </button>
        </div>
    </form>
</div>
