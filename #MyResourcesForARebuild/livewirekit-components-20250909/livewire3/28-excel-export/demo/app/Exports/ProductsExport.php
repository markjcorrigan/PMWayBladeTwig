<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection, WithHeadings, WithMapping
{

    public function __construct(private readonly array $productIDs) {}

    public function headings(): array
    {
        return [
            'Name',
            'Category',
            'Price'
        ];
    }

    public function map(mixed $row): array
    {
        return [
            $row->name,
            $row->category->name,
            $row->price,
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(): Collection
    {
        return Product::with('category')->find($this->productIDs);
    }
}
