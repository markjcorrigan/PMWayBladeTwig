<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class ProductCreate extends Component
{
    public Collection $categories;
    public array $product = [
        'name' => '',
        'category' => ''
    ];

    protected array $rules = [
        'product.name' => 'required|min:3',
        'product.category' => 'required|integer',
    ];

    protected $listeners = ['updateCategories' => 'mount'];

    public function mount(): void
    {
        $this->categories = Category::all();
    }

    public function render(): View
    {
        return view('livewire.product-create');
    }

    public function submitForm(): void
    {
        $this->validate();

        Product::create([
            'name' => $this->product['name'],
            'category_id' => $this->product['category']
        ]);

        $this->reset('product');

        session()->flash('message', 'Product successfully created!');
    }
}
