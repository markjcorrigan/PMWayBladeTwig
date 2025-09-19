<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public string $designTemplate = 'tailwind';

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.products', [
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
