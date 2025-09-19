<div>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Name</th>
            <th></th>
        </tr>
        </thead>
        <tbody wire:sortable="updateOrder">
        @forelse ($products as $product)
            <tr wire:sortable.item="{{ $product->id }}" wire:key="product-{{ $product->id }}">
                <td>{{ $product->name }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No products found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

