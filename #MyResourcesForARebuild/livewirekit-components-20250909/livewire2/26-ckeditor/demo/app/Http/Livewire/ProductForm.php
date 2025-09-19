<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public Product $product;

    protected array $rules = [
        'product.name' => 'required|min:5',
        'product.description' => 'required|min:30',
    ];

    public string $designTemplate = 'tailwind';

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.product-form');
    }

    public function submitForm()
    {
        $this->validate();

        $this->product->save();

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('products.index', ['design' => 'bootstrap']);
        }
    }
}
