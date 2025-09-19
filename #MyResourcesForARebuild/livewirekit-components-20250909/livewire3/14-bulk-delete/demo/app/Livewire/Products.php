<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public array $selectedProducts = [];

    public bool $bulkDisabled = true;

    public string $designTemplate = 'tailwind';

    public function render(): View
    {
        $this->bulkDisabled = count($this->selectedProducts) < 1 ? true : false;

        return view('livewire.' . $this->designTemplate . '.products', [
            'products' => Product::with('category')->get()
        ]);
    }

    public function deleteSelected(): void
    {
        Product::query()
            ->whereIn('id', $this->selectedProducts)
            ->delete();

        $this->reset('selectedProducts');
    }
}
