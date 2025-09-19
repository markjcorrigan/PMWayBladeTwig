<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class ProductForm extends Component
{
    #[Rule('required|min:3|unique:products')]
    public string $name = '';
    #[Rule('required|min:50')]
    public string $description = '';
    public string $messageText = '';

    public string $designTemplate = 'tailwind';

    public function updated($key, $value): void
    {
        $this->validateOnly($key);
    }

    public function save(): void
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->messageText = 'Product ' . $this->name . ' is saved';
        $this->name = '';
        $this->description = '';
    }

    public function render(): View
    {
        return view('livewire.'. $this->designTemplate . '.product-form');
    }
}
