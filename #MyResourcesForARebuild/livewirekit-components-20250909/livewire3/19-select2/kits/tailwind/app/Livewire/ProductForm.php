<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductForm extends Component
{
    public array $categories = [];

    public ?Product $product = null;
    public string $name = '';

    public array $productCategories = [];

    protected array $rules = [
        'name' => 'required|min:3',
        'productCategories' => 'required|array',
        'productCategories.*' => 'required|integer',
    ];

    public function mount(Product $product):void
    {
        if ($product->exists) {
            $this->product = $product;
            $this->name = $product->name;
            $this->productCategories = array_values($this->product->categories()->pluck( 'id')->toArray());
        }

        $this->categories = Category::pluck('name', 'id')->toArray();
    }

    public function render(): View
    {
        return view('livewire.product-form');
    }

    public function submitForm()
    {
        $this->validate();

        if (is_null($this->product)) {
            $product = Product::create($this->only('name'));
            $product->categories()->sync($this->productCategories);
        } else {
            $this->product->update($this->only('name'));
            $this->product->categories()->sync($this->productCategories);
        }

        // Only needed if doing save without redirect
        /*$this->reset('name');
        $this->dispatch('setCategoriesSelect', []);*/

        session()->flash('message', 'Product successfully saved!');

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('products.index', ['design' => 'bootstrap']);
        }
    }
}
