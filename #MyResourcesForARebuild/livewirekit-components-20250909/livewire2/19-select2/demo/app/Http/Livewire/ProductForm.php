<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public array $categories = [];

    public Product $product;

    public array $productCategories = [];

    protected array $rules = [
        'product.name' => 'required|min:3',
        'productCategories' => 'required|array',
        'productCategories.*' => 'required|integer',
    ];

    public string $designTemplate = 'tailwind';

    public function mount(Product $product)
    {
        $this->product = $product;

        if ($this->product->exists) {
            $this->productCategories = array_values($this->product->categories()->pluck( 'id')->toArray());
        }

        $this->categories = Category::pluck('name', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.product-form');
    }

    public function submitForm()
    {
        $this->validate();

        $this->product->save();
        $this->product->categories()->sync($this->productCategories);

        // Only needed if doing save without redirect
        //$this->emit('setCategoriesSelect', []);

        session()->flash('message', 'Product successfully saved!');

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('products.index', ['design' => 'bootstrap']);
        }
    }
}
