<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public Collection $products;

    public function render(): View
    {
        $this->products = Product::orderBy('position')->get();

        return view('livewire.products');
    }

    public function updateOrder($list): void
    {
        foreach($list as $item) {
            $product = $this->products->firstWhere('id', $item['value']);

            if ($product['position'] != $item['order']) {
                Product::where('id', $item['value'])->update(['position' => $item['order']]);
            }
        }
    }
}
