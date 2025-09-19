<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductForm extends Component
{
    public array $categories = [];

    public ?Product $product = null;

    public string $name = '';

    public array $productCategories = [];

    public string $designTemplate = 'tailwind';

    protected array $rules = [
        'name' => 'required|min:3',
        'productCategories' => 'required|array',
        'productCategories.*' => 'required|integer',
    ];

    public function mount(Product $product): void
    {
        if ($product->exists) {
            $this->product = $product;
            $this->name = $product->name;
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

        if (empty($this->product)) {
            $product = Product::create($this->only('name'));
            $product->categories()->sync($this->productCategories);
        } else {
            $this->product->save();
            $this->product->categories()->sync($this->productCategories);
        }

        session()->flash('message', 'Product successfully saved!');

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('products.index', ['design' => 'bootstrap']);
        }
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.product-form');
    }
}
