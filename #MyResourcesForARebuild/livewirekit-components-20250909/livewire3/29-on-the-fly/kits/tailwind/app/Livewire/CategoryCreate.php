<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class CategoryCreate extends Component
{
    public bool $showModal = false;
    #[Rule('required|min:3|unique:categories,name')]
    public string $name = '';

    public function render(): View
    {
        return view('livewire.category-create');
    }

    public function save(): void
    {
        $this->validate();

        Category::create([
            'name' => $this->name
        ]);

        $this->reset('name');

        $this->dispatch('updateCategories');

        $this->toggleModal();
    }

    #[On('toggleModal')]
    public function toggleModal(): void
    {
        $this->showModal = ! $this->showModal;
    }
}
