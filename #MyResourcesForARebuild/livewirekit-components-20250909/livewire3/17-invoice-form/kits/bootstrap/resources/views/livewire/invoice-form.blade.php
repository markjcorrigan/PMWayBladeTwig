<div>
    <form wire:submit="saveInvoice">
        <div class="mb-3">
            <label for="customer_name">Customer name</label>
            <input wire:model="customer_name" type="text" id="customer_name" class="form-control @error('customer_name') is-invalid @enderror" required>
            @error('customer_name')
                <em class="invalid-feedback">
                    {{ $message }}
                </em>
            @enderror
        </div>
        <div class="mb-3">
            <label for="customer_email">Customer email</label>
            <input wire:model="customer_email" type="email" id="customer_email" class="form-control @error('customer_email') is-invalid @enderror" required>
            @error('customer_email')
                <em class="invalid-feedback">
                    {{ $message }}
                </em>
            @enderror
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Products
            </div>

            <div class="card-body">
                <table class="table" id="products_table">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th width="150">Quantity</th>
                        <th width="150"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($invoiceProducts as $index => $invoiceProduct)
                        <tr>
                            <td>
                                @if($invoiceProduct['is_saved'])
                                    <input type="hidden" name="invoiceProducts[{{$index}}][product_id]"
                                           wire:model.live="invoiceProducts.{{$index}}.product_id" />
                                    @if($invoiceProduct['product_name'] && $invoiceProduct['product_price'])
                                        {{ $invoiceProduct['product_name'] }}
                                        (${{ number_format($invoiceProduct['product_price'], 2) }})
                                    @endif
                                @else
                                    <select wire:model.live="invoiceProducts.{{$index}}.product_id" id="invoiceProducts[{{$index}}][product_id]"
                                            class="form-control @error('invoiceProducts.' . $index . '.product_id') is-invalid @enderror">
                                        <option value="">-- choose product --</option>
                                        @foreach ($allProducts as $product)
                                            <option value="{{ $product->id }}">
                                                {{ $product->name }} (${{ number_format($product->price, 2) }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('invoiceProducts.' . $index)
                                        <em class="text-danger">
                                            {{ $message }}
                                        </em>
                                    @enderror
                                @endif
                            </td>
                            <td>
                                @if($invoiceProduct['is_saved'])
                                    {{ $invoiceProduct['quantity'] }}
                                @else
                                    <input wire:model="invoiceProducts.{{$index}}.quantity" type="number" id="invoiceProducts[{{$index}}][quantity]" class="form-control" />
                                @endif
                            </td>
                            <td>
                                @if($invoiceProduct['is_saved'])
                                    <button wire:click="editProduct({{$index}})" type="button" class="btn btn-sm btn-primary">
                                        Edit
                                    </button>
                                @elseif($invoiceProduct['product_id'])
                                    <button wire:click="saveProduct({{$index}})" type="button" class="btn btn-sm btn-success mr-1">
                                        Save
                                    </button>
                                @endif
                                <button wire:click="removeProduct({{$index}})" type="button" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">
                        <button wire:click="addProduct" type="button" class="btn btn-sm btn-secondary">
                            + Add Product
                        </button>
                    </div>
                </div>

                <div class="col-lg-5 ml-auto text-right mt-4">
                    <table class="table pull-right">
                        <tr>
                            <th>Subtotal</th>
                            <td>${{ number_format($subtotal, 2) }}</td>
                        </tr>
                        <tr>
                            <th>Taxes</th>
                            <td width="125">
                                <input wire:model.live="taxes" type="number" id="taxes" class="form-control w-75 d-inline" min="0" max="100">
                                %
                                @error('taxes')
                                    <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>${{ number_format($total, 2) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br />
        <div>
            <button class="btn btn-primary" type="submit">
                Save Invoice
            </button>
        </div>
    </form>
</div>
