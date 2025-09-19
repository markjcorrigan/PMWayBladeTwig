<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public array $cartProducts = [];
    public string $designTemplate = 'tailwind';

    public function addToCart(int $productId): void
    {
        Cart::create(['product_id' => $productId]);

        $this->cartProducts[] = $productId;

        $this->dispatch('updateCart');
    }

    public function removeFromCart(int $productId): void
    {
        Cart::where('product_id', $productId)->delete();

        if (($key = array_search($productId, $this->cartProducts)) !== false) {
            unset($this->cartProducts[$key]);
        }

        $this->dispatch('updateCart');
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate .'.products', [
            'products' => Product::all()
        ]);
    }
}
