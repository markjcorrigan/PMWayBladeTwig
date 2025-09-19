<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductForm extends Component
{
    public ?Product $product = null;
    #[Rule('required|min:5')]
    public string $name = '';
    #[Rule('required|min:30')]
    public string $description = '';

    public string $designTemplate = 'tailwind';

    public function mount(Product $product): void
    {
        if ($product->exists) {
            $this->product = $product;
            $this->name = $product->name;
            $this->description = $product->description;
        }
    }

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.product-form');
    }

    public function submitForm(): RedirectResponse|Redirector
    {
        $this->validate();

        if (is_null($this->product)) {
            Product::create($this->only('name', 'description'));
        } else {
            $this->product->update($this->only('name', 'description'));
        }

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('products.index', ['design' => 'bootstrap']);
        }
    }
}
