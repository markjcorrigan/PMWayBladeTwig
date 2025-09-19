<div class="position-fixed float-right bg-white w-25 h-100 px-1" style="right: 0">
    <div class="px-3 py-4">
        <div class="d-flex justify-content-between pb-3 border-bottom pb-4">
            <h4 class="font-weight-bold">Shopping Cart</h4>
            <h3 class="font-weight-bold">{{$cartItems->sum('qty').' Items'}}</h3>
        </div>
        <table class="table table-hover border-bottom">
            <thead>
            <tr class="text-uppercase">
                <th scope="col">Product Details</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <th scope="row">{{$item->name}}</th>
                    <td>
                        <div class="row d-inline-flex pl-3">
                             <span class="pr-1"><svg width="10px"
                                                     wire:click="decreaseQuantity('{{$item->id}}','{{ $item->qty }}')"
                                                     viewBox="0 0 448 512">
                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                    </svg></span>
                            <input style="width: 25px" type="text" value="{{$item->qty}}">
                            <span class="pl-1"><svg width="10px" wire:click="increaseQuantity('{{$item->id}}')"
                                                    viewBox="0 0 448 512">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                    </svg></span>
                        </div>
                    </td>
                    <td>{{'$'.number_format($item->price, 2)}}</td>
                    <td>{{'$'.number_format($item->total, 2)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--summary--}}
        <div class="pt-4 ">
            <label class="d-inline-block text-uppercase">Enter Your Country</label>
            <select wire:model='selectedCountry' class="form-control form-control-sm">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($countries as $country)
                    <option value="{{ $country->short_code }}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="border-bottom pb-5">
            <label class="d-inline-block text-uppercase pt-4">Choose shipping method</label>
            <select wire:model="shipping" class="form-control form-control-sm">
                <option value="" selected="selected" hidden>Choose shipping</option>
                <option value="5">Regular shipping (+$5.00)</option>
                <option value="10">Fast shipping (+$10.00)</option>
                <option value="20">Extra fast shipping (+$20.00)</option>
            </select>
        </div>
        <div class="pt-5 text-right font-weight-bold text-uppercase">
            @if($shipping)
                <div>
                    <span>Shipping: $</span>
                    <span>{{number_format($shipping, 2)}}</span>
                </div>
            @endif
            <div>
                <span>Tax({{$taxRate*100}}%): $ </span>
                <span>{{number_format($taxValue, 2)}}</span>
            </div>
        </div>
        <div class="form-row text-uppercase">
            <div class="col">
                <h6>Total cost</h6>
            </div>
            <div class="col text-right ">
                {{'$'.number_format($totalWithTax, 2)}}
            </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <button class="btn btn-lg w-100 btn-primary">
                Checkout
            </button>
        </div>
    </div>
</div>