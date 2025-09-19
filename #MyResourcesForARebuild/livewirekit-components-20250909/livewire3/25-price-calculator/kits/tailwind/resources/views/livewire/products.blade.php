<table class="table min-w-full">
<thead>
    <tr>
        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Price</th>
        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
    </tr>
    </thead>
    <tbody>
    @forelse ($products as $product)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->name }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">${{ $product->price }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                    <button wire:click="addToCart({{ $product->id }})" type="button"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Add to Cart
                    </button>
            </td>
        </tr>
    @empty
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5" colspan="3">No products found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

