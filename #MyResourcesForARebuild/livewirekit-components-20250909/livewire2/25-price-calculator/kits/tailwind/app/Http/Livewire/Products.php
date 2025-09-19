<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    protected $listeners = ['increaseQuantity' => 'addToCart'];

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::all()
        ]);
    }

    public function addToCart($productId)
    {
        $cart = Cart::where('product_id', $productId)->first();
        if (!$cart) {
            Cart::create(['product_id' => $productId, 'qty' => 1]);
        } else {
            $cart->update(['qty' => $cart->qty + 1]);
        }
        $this->emit('updateCart');
    }
}
