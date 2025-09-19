<div>
    <button wire:click="$toggle('showModal')" data-bs-toggle="modal" data-bs-target="#productForm" class="btn btn-primary">Add new product</button>
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
                <td>{{ $product->price }}</td>
                <td>
                    <button wire:click="edit({{ $product->id }})" data-bs-toggle="modal" data-bs-target="#productForm" class="btn btn-sm btn-primary">
                        Edit
                    </button>
                    <button wire:click="delete({{ $product->id }})"
                            onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">
                        Delete
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

    {{ $products->links() }}

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="productForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form wire:submit="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $productId ? 'Edit Product' : 'Add New Product' }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input wire:model="name" id="name" class="form-control @error('name') is-invalid @enderror" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input wire:model="price" id="price" class="form-control @error('price') is-invalid @enderror" />
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
