<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection, WithHeadings, WithMapping
{
    private $productIDs;

    public function __construct($productIDs) {
        $this->productIDs = $productIDs;
    }

    public function headings(): array
    {
        return [
            'Name',
            'Category',
            'Price'
        ];
    }

    public function map($product): array
    {
        return [
            $product->name,
            $product->category->name,
            $product->price,
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::with('category')->find($this->productIDs);
    }
}
