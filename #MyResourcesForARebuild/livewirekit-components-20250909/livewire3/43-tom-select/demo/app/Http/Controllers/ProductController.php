<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public string $designTemplate = 'tailwind';

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        $products = Product::latest()->get();

        return view('products.' . $this->designTemplate . '.index', compact('products'));
    }

    public function create()
    {
        return view('products.' . $this->designTemplate . '.create');
    }

    public function edit(Product $product)
    {
        return view('products.' . $this->designTemplate . '.edit', compact('product'));
    }
}
