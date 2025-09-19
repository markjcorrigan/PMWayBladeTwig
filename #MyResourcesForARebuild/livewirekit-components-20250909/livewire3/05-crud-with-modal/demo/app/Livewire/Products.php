<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    use WithPagination;

    #[Rule('required')]
    public string $name = '';
    #[Rule('required|numeric')]
    public string $price = '';

    public bool $showModal = false;
    #[Locked]
    public int $productId;
    public ?Product $product;

    protected string $paginationTheme = 'bootstrap';

    public string $designTemplate = 'tailwind';

    public function edit(int $productId): void
    {
        $this->product = Product::where('id', $productId)->first();
        $this->showModal = true;
        $this->productId = $productId;

        $this->name = $this->product->name;
        $this->price = $this->product->price;
    }

    public function save(): void
    {
        $this->validate();

        if (empty($this->product)) {
            Product::create([
                'name' => $this->name,
                'price' => $this->price,
            ]);
        } else {
            $this->product->update([
                'name' => $this->name,
                'price' => $this->price,
            ]);
        }

        if ($this->designTemplate === 'bootstrap') {
            $this->dispatch('closeModal', modalId: '#productForm');
        }

        $this->reset('product', 'name', 'price', 'showModal');
    }

    public function delete(int $productId): void
    {
        Product::where('id', $productId)->delete();
    }

    #[On('resetModal')]
    public function resetModal(): void
    {
        $this->reset('product', 'name', 'price', 'showModal');
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.products', [
            'products' => Product::latest()->paginate(5)
        ]);
    }
}
