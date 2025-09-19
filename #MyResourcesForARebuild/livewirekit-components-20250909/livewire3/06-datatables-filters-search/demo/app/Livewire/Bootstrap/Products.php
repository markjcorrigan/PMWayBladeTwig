<?php

namespace App\Livewire\Bootstrap;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public array $categories = [];
    public string $sortColumn = 'name';
    public string $sortDirection = 'asc';

    public array $searchColumns = [
        'name' => '',
        'price' => ['', ''],
        'description' => '',
        'product_category_id' => 0,
    ];

    public function mount(): Void
    {
        $this->categories = ProductCategory::pluck('name', 'id')->toArray();
    }

    public function sortByColumn($column): void
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->reset('sortDirection');
            $this->sortColumn = $column;
        }
    }

    public function updating($value, $name): void
    {
        $this->resetPage();
    }

    public function render(): View
    {
        $products = Product::select([
            'products.name',
            'price',
            'description',
            'product_categories.name as category_name',
            'product_category_id',
        ])
            ->leftJoin('product_categories',
                'products.product_category_id',
                '=',
                'product_categories.id');

        foreach ($this->searchColumns as $column => $value) {
            if (! empty($value)) {
                if ($column == 'price') {
                    if (is_numeric($value[0])) {
                        $products->where($column, '>', $value[0]);
                    }
                    if (is_numeric($value[1])) {
                        $products->where($column, '<', $value[1]);
                    }
                } else if ($column == 'product_category_id') {
                    $products->where($column, $value);
                } else {
                    $products->where('products.' . $column, 'LIKE', '%' . $value . '%');
                }
            }
        }

        $products->orderBy($this->sortColumn, $this->sortDirection);

        return view('livewire.bootstrap.products', [
            'products' => $products->paginate(5)
        ]);
    }
}
