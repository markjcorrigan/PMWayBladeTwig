<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.products', [
            'products' => Product::orderBy('position')->get()
        ]);
    }

    public function updateOrder($list)
    {
        foreach($list as $item) {
            Product::find($item['value'])->update(['position' => $item['order']]);
        }
    }
}
