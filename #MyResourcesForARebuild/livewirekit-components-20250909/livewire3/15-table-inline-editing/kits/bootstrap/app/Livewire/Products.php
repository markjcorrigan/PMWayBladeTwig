<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    public int|null $editedProductIndex = null;
    public string|null $editedProductField = null;
    public array $products = [];

    protected $rules = [
        'products.*.name' => ['required'],
        'products.*.price' => ['required', 'numeric'],
    ];

    protected $validationAttributes = [
        'products.*.name' => 'name',
        'products.*.price' => 'price',
    ];

    public function mount(): void
    {
        $this->products = Product::all()->toArray();
    }

    public function render(): View
    {
        return view('livewire.products', [
            'products' => $this->products
        ]);
    }

    public function editProduct($productIndex): void
    {
        $this->editedProductIndex = $productIndex;
    }

    public function editProductField($productIndex, $fieldName): void
    {
        $this->editedProductField = $productIndex . '.' . $fieldName;
    }

    public function saveProduct($productIndex): void
    {
        $this->validate();

        $product = $this->products[$productIndex] ?? NULL;
        if (! is_null($product)) {
            optional(Product::find($product['id']))->update($product);
        }

        $this->reset('editedProductIndex', 'editedProductField');
    }
}
