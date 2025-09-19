<div>
    <form wire:submit="storePost" class="pb-10">
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700" for="title">
                Title
            </label>
            <input wire:model="title" type="text" id="title"
                   class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
            @error('title')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        @if ($image && method_exists($image, 'temporaryUrl'))
            <img src="{{ $image->temporaryUrl() }}" class="img-fluid mb-4 w-full h-56" />
        @elseif($image)
            <img src="{{ $image }}" class="object-scale-down object-center mb-4 w-full h-56" />
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
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

        <div class="flex items-center mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                Save Post
            </button>
        </div>
    </form>
</div>
