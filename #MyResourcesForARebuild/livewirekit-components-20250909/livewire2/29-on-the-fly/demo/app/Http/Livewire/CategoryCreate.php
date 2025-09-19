<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryCreate extends Component
{
    public $showModal = false;
    public $name = '';

    public $designTemplate = 'tailwind';

    protected $listeners = ['openModal'];

    protected $rules = [
        'name' => 'required|min:3|unique:categories,name',
    ];
    
    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.category-create');
    }

    public function save()
    {
        $this->validate();

        Category::create([
            'name' => $this->name
        ]);

        $this->reset('name');

        $this->emit('updateCategories');

        $this->closeModal();
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
}
