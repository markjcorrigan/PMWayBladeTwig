<div>
    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="name">
            Product name
        </label>
        <input wire:model="name" type="text" id="name"
               class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
               required/>
        @error('name')
        <div class="text-sm text-red-500 ml-1">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="description">
            Product description
        </label>
        <div wire:ignore>
            <textarea data-description="@this"
                      id="description"
                      wire:model="description"></textarea>
        </div>
        @error('description')
        <div class="text-sm text-red-500 ml-1">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="flex items-center mt-4">
        <button wire:click="submitForm" type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            Save Product
        </button>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('livewire:init', () => {
            ClassicEditor
                .create(document.querySelector('#description'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('description', editor.getData());
                    })
                    Livewire.on('reinit', () => {
                        editor.setData('', '')
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        })
    </script>
@endpush
