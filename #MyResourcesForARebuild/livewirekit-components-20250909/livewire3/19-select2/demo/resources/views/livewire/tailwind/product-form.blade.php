<div>
    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="name">
            Product name
        </label>
        <input wire:model="name" type="text" id="name"
               class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
               required/>
        @error('name')
            <span class="text-sm text-red-500 mt-1">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700 mb-2" for="categories">
            Categories
        </label>
        <div wire:ignore>
            <select id="categories"
                    wire:model="productCategories"
                    class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 select2"
                    multiple>
                @foreach($categories as $id => $category)
                    <option value="{{ $id }}" @selected(in_array($id, $productCategories))>{{ $category }}</option>
                @endforeach
            </select>
        </div>
        @error('productCategories')
            <span class="text-sm text-red-500 mt-1">
                {{ $message }}
            </span>
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
    <script>
        document.addEventListener('livewire:init', () => {
            let el = $('#categories')
            initSelect()

            Livewire.hook('message.processed', (message, component) => {
                initSelect()
            })

            // Only needed if doing save without redirect
            /* Livewire.on('setCategoriesSelect', values => {
                el.val(values).trigger('change.select2')
            })*/

            el.on('change', function (e) {
                @this.set('productCategories', el.select2('val'))
            })

            function initSelect () {
                el.select2({
                    placeholder: '{{__('Select your option')}}',
                    allowClear: !el.attr('required'),
                })
            }
        })
    </script>
@endpush
