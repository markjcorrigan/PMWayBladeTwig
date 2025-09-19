<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\Redirector;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductForm extends Component
{
    public array $categories = [];

    public Product $product;

    public $productCategories;

    protected array $rules = [
        'product.name' => 'required|min:3',
        'productCategories' => 'required|array',
        'productCategories.*' => 'required|integer',
    ];

    public function mount(Product $product): void
    {
        $this->product = $product;

        if ($this->product->exists) {
            $this->productCategories = array_values($this->product->categories()->pluck( 'id')->toArray());
        }

        $this->categories = Category::all()->map(function ($category) {
            return [
                'label' => $category->name,
                'value' => $category->id,
            ];
        })->toArray();
    }

    public function submitForm(): Redirector|RedirectResponse
    {
        $this->validate();

        $this->product->save();
        $this->product->categories()->sync($this->productCategories);

        session()->flash('message', 'Product successfully saved!');

        return redirect()->route('products.index');
    }

    public function render(): View
    {
        return view('livewire.product-form');
    }
}
