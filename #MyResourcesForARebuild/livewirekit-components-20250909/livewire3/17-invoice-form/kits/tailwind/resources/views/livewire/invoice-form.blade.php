<div>
    <form wire:submit="saveInvoice">
        <div>
            <label for="customer_name">Customer name</label>
            <input wire:model="customer_name" type="text" id="customer_name" class="w-full rounded-md border border-indigo-500 p-1 focus:outline-none" required />
            @error('customer_name')
                <span class="mt-1 text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mt-4">
            <label for="customer_email">Customer email</label>
            <input wire:model="customer_email" type="email" id="customer_email" class="w-full rounded-md border border-indigo-500 p-1 focus:outline-none" required />
            @error('customer_email')
                <span class="mt-1 text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mt-4 rounded-md border border-gray-300">
            <div class="border-b border-gray-300 p-5">
                Products
            </div>

            <div class="p-5">
                <table class="table w-full table-auto" id="products_table">
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
                                    <select wire:model.live="invoiceProducts.{{$index}}.product_id" id="invoiceProducts[{{$index}}][product_id]"
                                            @class([
                                                'focus:outline-none w-full border rounded-md p-1',
                                                'border-red-500' => $errors->has('invoiceProducts.' . $index),
                                                'border-indigo-500' => ! $errors->has('invoiceProducts.' . $index),
                                            ])>
                                        <option value="">-- choose product --</option>
                                        @foreach ($allProducts as $product)
                                            <option value="{{ $product->id }}">
                                                {{ $product->name }} (${{ number_format($product->price, 2) }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('invoiceProducts.' . $index))
                                        <em class="mt-1 text-sm text-red-500">
                                            {{ $message }}
                                        </em>
                                    @enderror
                                @endif
                            </td>
                            <td class="p-1">
                                @if($invoiceProduct['is_saved'])
                                    {{ $invoiceProduct['quantity'] }}
                                @else
                                    <input type="number" name="invoiceProducts[{{$index}}][quantity]" class="w-full rounded-md border border-indigo-500 p-1 focus:outline-none" wire:model="invoiceProducts.{{$index}}.quantity"/>
                                @endif
                            </td>
                            <td class="p-1">
                                @if($invoiceProduct['is_saved'])
                                    <button wire:click="editProduct({{$index}})" type="button" class="rounded-md border border-blue-600 bg-blue-500 py-1 px-2 text-white hover:bg-blue-600 focus:outline-none">Edit</button>
                                @elseif($invoiceProduct['product_id'])
                                    <button wire:click="saveProduct({{$index}})" type="button" class="rounded-md border border-green-600 bg-green-500 py-1 px-2 text-white hover:bg-green-600 focus:outline-none">Save</button>
                                @endif
                                <button wire:click="removeProduct({{$index}})" type="button" class="ml-1 rounded-md border border-red-600 bg-red-500 py-1 px-2 text-white hover:bg-red-600 focus:outline-none">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-3">
                    <button wire:click="addProduct" type="button" class="rounded-md border border-indigo-600 bg-indigo-500 py-1 px-2 text-white hover:bg-indigo-600 focus:outline-none">+ Add Product</button>
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
                                <input type="number" name="taxes" class="rounded-md border border-indigo-500 p-1 w-75 d-inline" min="0" max="100" wire:model.live="taxes">
                                %
                                @error('taxes')
                                    <span class="text-red-500 mt-1">
                                        {{ $message }}
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
            <button class="cursor-pointer rounded-md border border-indigo-600 bg-indigo-500 py-1 px-2 text-white hover:bg-indigo-600 focus:outline-none" type="submit">
                Save Invoice
            </button>
        </div>
    </form>
</div>
