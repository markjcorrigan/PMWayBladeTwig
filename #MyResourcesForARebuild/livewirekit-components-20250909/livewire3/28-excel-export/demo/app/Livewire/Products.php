<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Exports\ProductsExport;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Products extends Component
{
    public array $selectedProducts = [];

    public Collection $products;

    public string $designTemplate = 'tailwind';

    public function mount(): void
    {
        $this->products = Product::with('category')->get();
    }

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.products');
    }

    public function export($ext): BinaryFileResponse
    {
        abort_if(!in_array($ext, ['csv', 'xlsx', 'pdf']), Response::HTTP_NOT_FOUND);

        return Excel::download(new ProductsExport($this->selectedProducts), 'products.' . $ext);
    }
}
