<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $categories;
    public $product = [
        'name' => '',
        'category' => ''
    ];

    protected $rules = [
        'product.name' => 'required|min:3',
        'product.category' => 'required|integer',
    ];

    protected $listeners = ['updateCategories' => 'mount'];

    public $designTemplate = 'tailwind';

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.product-create');
    }

    public function submitForm()
    {
        $this->validate();

        $product = Product::create([
            'name' => $this->product['name'],
            'category_id' => $this->product['category']
        ]);

        $this->reset('product');

        session()->flash('message', 'Product successfully created!');
    }
}
