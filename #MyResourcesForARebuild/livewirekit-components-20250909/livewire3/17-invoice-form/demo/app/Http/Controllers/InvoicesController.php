<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

class InvoicesController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        $invoices = Invoice::latest()->paginate();

        return view('invoices.' . $this->designTemplate . '.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.' . $this->designTemplate . '.create');
    }

    public function edit(Invoice $invoice)
    {
        $invoice->load('products');

        return view('invoices.' . $this->designTemplate . '.edit', compact('invoice'));
    }
}
