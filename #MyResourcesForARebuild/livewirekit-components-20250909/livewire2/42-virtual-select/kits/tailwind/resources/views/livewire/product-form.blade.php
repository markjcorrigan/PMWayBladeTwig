<div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="name">
            Product name
        </label>
        <input wire:model="product.name" type="text" class="mt-2 w-full rounded-lg border border-gray-400 py-2 pr-4 pl-2 text-sm focus:border-blue-400 focus:outline-none sm:text-base" required />
        @error('product.name')
            <div class="mt-1 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="mb-2 block text-sm font-medium text-gray-700" for="name">
            Categories
        </label>
        <x-virtual-select id="categories" wire:model="productCategories" options="categories" multiple="true" />
        @error('productCategories')
            <div class="mt-1 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mt-4 flex items-center">
        <button wire:click="submitForm" type="submit"
                class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:shadow-outline-gray focus:border-gray-900 focus:outline-none active:bg-gray-900 disabled:opacity-25">
            Save Product
        </button>
    </div>
</div>
