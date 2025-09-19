<table class="table mt-4">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>
                    <button wire:click="addToCart({{ $product->id }})" class="btn btn-sm btn-primary">
                        Add to Cart
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No products found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

