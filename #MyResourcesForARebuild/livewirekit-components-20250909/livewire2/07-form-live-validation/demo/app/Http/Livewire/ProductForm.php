<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductForm extends Component
{
    public $name;
    public $description;
    public $messageText = '';

    public $designTemplate = 'tailwind';

    public $rules = [
        'name' => 'required|min:3|unique:products',
        'description' => 'required|min:50',
    ];

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.product-form');
    }

    public function updated($key, $value)
    {
        $this->validateOnly($key);
    }

    public function save()
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
}
