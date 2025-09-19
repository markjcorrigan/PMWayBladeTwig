<div x-data="{ 'selectedCategory': @entangle('selectedCategory') }">
    <div class="alert alert-info" role="alert">
        Choose at least two products, and click "Bulk edit" to modify their category.
    </div>
    <button data-bs-toggle="modal" data-bs-target="#categories-modal" class="btn btn-success" @disabled($bulkDisabled)>Bulk edit</button>
    <table class="table table-stripped mt-3">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        <input type="checkbox" wire:model.live="selectedProducts.{{ $product->id }}">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>${{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div id="categories-modal" class="modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Categories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select x-model="selectedCategory" class="form-select">
                        <option value="null">Please select</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-primary"
                            wire:click="changeCategory"
                            data-bs-dismiss="modal"
                            x-bind:disabled="!selectedCategory || selectedCategory == 'null'">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
