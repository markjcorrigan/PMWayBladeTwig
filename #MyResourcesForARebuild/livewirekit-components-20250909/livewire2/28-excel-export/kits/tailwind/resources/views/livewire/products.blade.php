<div>
    <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
        Choose at least one product, and click desired extension to export.
    </div>
    
    <div class="flex justify-end">
        <button
            class="font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 bg-green-100 disabled:opacity-50 disabled:cursor-not-allowed"
            type="button"
            wire:click="export('csv')"
            wire:loading.attr="disabled"
        >
            CSV
        </button>
        <button
            class="font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 bg-green-100 disabled:opacity-50 disabled:cursor-not-allowed"
            type="button"
            wire:click="export('xlsx')"
            wire:loading.attr="disabled"
        >
            XLS
        </button>
        <button
            class="font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 bg-green-100 disabled:opacity-50 disabled:cursor-not-allowed"
            type="button"
            wire:click="export('pdf')"
            wire:loading.attr="disabled"
        >
            PDF
        </button>
    </div>

    <table class="table min-w-full">
        <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Category</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Price</th>
        </tr>
        </thead>
        <tbody class="bg-white">
        @foreach($products as $product)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                    <input type="checkbox" wire:model="selectedProducts.{{ $product->id }}">
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->category->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">${{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
