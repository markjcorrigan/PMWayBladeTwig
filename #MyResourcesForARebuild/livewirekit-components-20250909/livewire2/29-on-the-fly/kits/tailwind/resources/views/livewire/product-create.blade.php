<div>
    @if (session()->has('message'))
        <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="name">
            Product name
        </label>
        <input wire:model="product.name" type="text"
               class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
               required/>
        @error('product.name')
        <div class="text-sm text-red-500 ml-1">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="category">
            Categories
        </label>
        <div class="mt-2 flex justify-between">
            <div class="flex-1">
                <select name="category" wire:model="product.category"
                        class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                        <option value="">--SELECT CATEGORY--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('product.category')
                    <div class="text-sm text-red-500 ml-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex items-center ml-4">
                <a wire:click="$emit('openModal')" class="px-2 py-3 border border-gray-300 rounded text-xs cursor-pointer hover:shadow-md hover:border-blue-400">Add new category</a>
            </div>
        </div>
    </div>

    <div class="flex items-center mt-4">
        <button wire:click="submitForm" type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            Add Product
        </button>
    </div>

    @livewire('category-create')
</div>