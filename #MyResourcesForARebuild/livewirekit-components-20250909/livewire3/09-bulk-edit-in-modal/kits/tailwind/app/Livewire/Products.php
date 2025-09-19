<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public Collection $selectedProducts;

    public bool $bulkDisabled = true;

    public Collection $products;

    public Collection $categories;

    public ?int $selectedCategory = null;

    public function mount(): void
    {
        $this->categories = ProductCategory::all();
        $this->reloadData();
    }

    public function changeCategory(): void
    {
        Product::query()
            ->whereIn('id', $this->selectedProducts->filter(fn($product) => $product)->keys()->toArray())
            ->update(['product_category_id' => $this->selectedCategory]);

        $this->reloadData();
    }

    public function render(): View
    {
        $this->selectedCategory = $this->products
            ->filter(fn($product) => $this->getSelectedProducts()->contains($product->id))
            ->map(fn($product) => $product->category->id)
            ->unique()
            ->pipe(fn($categories) => $categories->count() === 1 ? $categories->first() : null);

        $this->bulkDisabled = $this->selectedProducts->filter(fn($p) => $p)->count() < 2;

        return view('livewire.products');
    }

    private function reloadData(): void
    {
        $this->selectedCategory = null;
        $this->products = Product::with('category')->get();
        $this->selectedProducts = $this->products
            ->map(fn($product) => $product->id)
            ->flip()
            ->map(fn($product) => false);
    }

    private function getSelectedProducts(): Collection
    {
        return $this->selectedProducts->filter(fn($p) => $p)->keys();
    }
}
