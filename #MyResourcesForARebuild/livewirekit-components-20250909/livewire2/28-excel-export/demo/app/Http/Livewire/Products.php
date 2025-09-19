<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Exports\ProductsExport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;

class Products extends Component
{
    public array $selectedProducts = [];

    public Collection $products;

    public $designTemplate = 'tailwind';

    public function mount()
    {
        $this->products = Product::with('category')->get();
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.products');
    }

    public function export($ext)
    {
        abort_if(!in_array($ext, ['csv', 'xlsx', 'pdf']), Response::HTTP_NOT_FOUND);

        return Excel::download(new ProductsExport($this->selectedProducts), 'products.' . $ext);
    }
}
