<div>
    <form wire:submit.prevent="saveInvoice">
        @csrf
        <div>
            <label>Customer name</label>
            <input wire:model="invoice.customer_name" type="text" name="customer_name" class="focus:outline-none w-full border border-indigo-500 rounded-md p-1" value="{{ old('invoice.customer_name') }}" required>
            @error('invoice.customer_name')
                <span class="text-red-500">
                    {{ $errors->first('invoice.customer_name') }}
                </span>
            @enderror
        </div>
        <div>
            <label>Customer email</label>
            <input wire:model="invoice.customer_email" type="email" name="customer_email" class="focus:outline-none w-full border border-indigo-500 rounded-md p-1" value="{{ old('invoice.customer_email') }}">
            @error('invoice.customer_email')
                <span class="text-red-500">
                    {{ $errors->first('invoice.customer_email') }}
                </span>
            @enderror
        </div>

        <div class="mt-4 border border-gray-300 rounded-md">
            <div class="border-b border-gray-300  p-5">
                Products
            </div>

            <div class="p-5">
                <table class="table table-auto w-full" id="products_table">
                    <thead>
                    <tr>
                        <th class="text-left">Product</th>
                        <th class="text-left" width="150">Quantity</th>
                        <th class="text-left" width="150"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($invoiceProducts as $index => $invoiceProduct)
                        <tr>
                            <td class="p-1">
                                @if($invoiceProduct['is_saved'])
                                    <input type="hidden" name="invoiceProducts[{{$index}}][product_id]" wire:model="invoiceProducts.{{$index}}.product_id"/>
                                    @if($invoiceProduct['product_name'] && $invoiceProduct['product_price'])
                                        {{ $invoiceProduct['product_name'] }}
                                        (${{ number_format($invoiceProduct['product_price'], 2) }})
                                    @endif
                                @else
                                    <select name="invoiceProducts[{{$index}}][product_id]" class="focus:outline-none w-full border {{ $errors->has('invoiceProducts.' . $index) ? 'border-red-500' : 'border-indigo-500' }} rounded-md p-1" wire:model="invoiceProducts.{{$index}}.product_id">
                                        <option value="">-- choose product --</option>
                                        @foreach ($allProducts as $product)
                                            <option value="{{ $product->id }}">
                                                {{ $product->name }} (${{ number_format($product->price, 2) }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('invoiceProducts.' . $index))
                                        <em class="text-sm text-red-500">
                                            {{ $errors->first('invoiceProducts.' . $index) }}
                                        </em>
                                    @endif
                                @endif
                            </td>
                            <td class="p-1">
                                @if($invoiceProduct['is_saved'])
                                    <input type="hidden" name="invoiceProducts[{{$index}}][quantity]" wire:model="invoiceProducts.{{$index}}.quantity"/>
                                    {{ $invoiceProduct['quantity'] }}
                                @else
                                    <input type="number" name="invoiceProducts[{{$index}}][quantity]" class="focus:outline-none w-full border border-indigo-500 rounded-md p-1" wire:model="invoiceProducts.{{$index}}.quantity"/>
                                @endif
                            </td>
                            <td class="p-1">
                                @if($invoiceProduct['is_saved'])
                                    <button class="hover:bg-blue-600 p-1 bg-blue-500 border border-blue-600 rounded-md text-white focus:outline-none" wire:click.prevent="editProduct({{$index}})">Edit</button>
                                @elseif($invoiceProduct['product_id'])
                                    <button class="hover:bg-green-600 p-1 bg-green-500 border border-green-600 rounded-md text-white focus:outline-none" wire:click.prevent="saveProduct({{$index}})">Save</button>
                                @endif
                                <button class="hover:bg-red-600 ml-1 p-1 bg-red-500 border border-red-600 rounded-md text-white focus:outline-none" wire:click.prevent="removeProduct({{$index}})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-3">
                    <button class="hover:bg-indigo-600 p-1 bg-indigo-500 border border-indigo-600 rounded-md text-white focus:outline-none" wire:click.prevent="addProduct">+ Add Product</button>
                </div>

                <div class="flex justify-end">
                    <table>
                        <tr class="">
                            <th class="p-2">Subtotal</th>
                            <td class="p-2">${{ number_format($subtotal, 2) }}</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <th class="p-2">Taxes</th>
                            <td class="p-2" width="125">
                                <input type="number" name="invoice.taxes" class="border border-indigo-500 rounded-md p-1 w-75 d-inline" min="0" max="100" wire:model="invoice.taxes">
                                %
                                @error('invoice.taxes')
                                    <span class="text-red-500">
                                        {{ $errors->first('invoice.taxes') }}
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <th>Total</th>
                            <td>${{ number_format($total, 2) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br/>
        <div>
            <input class="hover:bg-indigo-600 cursor-pointer p-1 bg-indigo-500 border border-indigo-600 rounded-md text-white focus:outline-none" type="submit" value="Save Invoice">
        </div>
    </form>
</div>
