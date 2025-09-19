<div>
    <div class="alert alert-info" role="alert">
        Click "Edit", modify that line data and click "Save".
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th width="250"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr>
                    <td>
                        @if ($editedProductIndex === $index || $editedProductField === $index . '.name')
                            <input type="text"
                                   wire:model="products.{{ $index }}.name"
                                   class="form-control @error('products.' . $index . '.name') is-invalid @enderror" />
                            @error('products.' . $index . '.name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        @else
                            <div class="cursor-pointer" wire:click="editProductField({{ $index }}, 'name')">
                                {{ $product['name'] }}
                            </div>
                        @endif
                    </td>
                    <td>
                        @if ($editedProductIndex === $index || $editedProductField === $index . '.price')
                            <input type="text"
                                   wire:model="products.{{ $index }}.price"
                                   class="form-control @error('products.' . $index . '.price') is-invalid @enderror" />
                            @error('products.' . $index . '.price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        @else
                            <div class="cursor-pointer" wire:click="editProductField({{ $index }}, 'price')">
                                {{ $product['price'] }}
                            </div>
                        @endif
                    </td>
                    <td>
                        @if($editedProductIndex === $index || (isset($editedProductField) && (int)(explode('.',$editedProductField)[0])===$index))
                            <button class="btn btn-sm btn-success mr-1"
                                    wire:click="saveProduct({{$index}})">
                                Save
                            </button>
                        @else
                            <button class="btn btn-sm btn-primary"
                                    wire:click="editProduct({{$index}})">
                                Edit
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
