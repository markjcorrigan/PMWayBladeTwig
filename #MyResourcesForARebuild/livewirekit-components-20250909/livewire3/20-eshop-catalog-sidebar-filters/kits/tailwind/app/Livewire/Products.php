<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    protected array $selected = [
        'prices' => [],
        'categories' => [],
        'manufacturers' => []
    ];

    public function render(): View
    {
        $products = Product::withFilters(
            $this->selected['prices'],
            $this->selected['categories'],
            $this->selected['manufacturers']
        )->get();

        return view('livewire.products', compact('products'));
    }

    #[On('updatedSidebar')]
    public function setSelected($selected): void
    {
        $this->selected = $selected;
    }
}
