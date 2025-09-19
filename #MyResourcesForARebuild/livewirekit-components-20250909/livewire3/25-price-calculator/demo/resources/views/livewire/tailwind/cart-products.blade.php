<div class="fixed right-80 -mx-80 w-1/4 bg-white border-l-2 h-full block px-2  ">
    <div class="bg-white pl-3 pr-5 py-10">
        <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold">Shopping Cart</h1>
            <h2 class="font-semibold text-2xl">{{ $cartItems->sum('qty') }} Items</h2>
        </div>
        <div class="flex mt-10 mb-5">
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>
        @foreach($cartItems as $item)
            <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5"> <!-- product -->
                    <div class="flex flex-col justify-between ml-4 flex-grow">
                        <span class="font-bold text-sm">{{ $item->name }}</span>
                    </div>
                </div>
                <div class="flex justify-center w-1/5">
                    <svg wire:click.live="decreaseQuantity('{{ $item->id }}','{{ $item->qty }}')"
                         class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                    </svg>
                    <input class="mx-2 border text-center w-8" type="text" value="{{ $item->qty }}">
                    <svg wire:click.live="increaseQuantity('{{ $item->id }}')" class="fill-current text-gray-600 w-3"
                         viewBox="0 0 448 512">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                    </svg>
                </div>
                <span class="text-center w-1/5 font-semibold text-sm">${{ number_format($item->price, 2) }}</span>
                <span class="text-center w-1/5 font-semibold text-sm">${{ number_format($item->total, 2) }}</span>
            </div>
        @endforeach
        {{--summary--}}
        <h1 class="font-semibold text-2xl border-b pb-8"></h1>
        <div>
            <label class="font-medium inline-block mb-3 text-sm uppercase">Enter Your Country</label>
            <select wire:model.live="selectedCountry" class="block p-2 text-gray-600 w-full text-sm">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($countries as $country)
                    <option value="{{ $country->short_code }}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="font-medium inline-block mb-3 text-sm uppercase">Choose shipping method</label>
            <select wire:model.live="shipping" class="block p-2 text-gray-600 w-full text-sm">
                <option value="" selected="selected" hidden>Choose shipping</option>
                <option value="5">Regular shipping (+$5.00)</option>
                <option value="10">Fast shipping (+$10.00)</option>
                <option value="20">Extra fast shipping (+$20.00)</option>
            </select>
        </div>
        <div class="border-t mt-8 ">
            @if($shipping)
                <div class="flex justify-end font-semibold pt-6 text-sm uppercase">
                    <span>Shipping: </span>
                    <span>${{ number_format($shipping, 2) }}</span>
                </div>
            @endif
            <div class="flex justify-end font-semibold pt-6 text-sm uppercase">
                <span>Tax({{ $taxRate }}%): </span>
                <span>${{ number_format($taxValue, 2) }}</span>
            </div>
            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                <span>Total cost</span>
                <span>${{ number_format($totalWithTax, 2) }}</span>
            </div>
            <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
                Checkout
            </button>
        </div>
    </div>
</div>
