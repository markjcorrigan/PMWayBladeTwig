<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public function render(): View
    {
        return view('livewire.products', [
            'products' => Product::all()
        ]);
    }

    #[On('increaseQuantity')]
    public function addToCart($productId): void
    {
        $cart = Cart::where('product_id', $productId)->first();

        if (! $cart) {
            Cart::create(['product_id' => $productId, 'qty' => 1]);
        } else {
            $cart->update(['qty' => $cart->qty + 1]);
        }

        $this->dispatch('updateCart');
    }
}
