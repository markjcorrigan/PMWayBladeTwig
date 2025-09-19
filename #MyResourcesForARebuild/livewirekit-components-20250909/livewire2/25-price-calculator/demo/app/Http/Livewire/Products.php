<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $designTemplate = 'tailwind';
    protected $listeners = ['increaseQuantity' => 'addToCart'];

    public function render()
    {
        return view('livewire.' . $this->designTemplate . '.products', [
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
