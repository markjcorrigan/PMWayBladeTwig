<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use App\Models\Product;
use Livewire\Component;

class InvoiceForm extends Component
{
    public $invoice;
    public $invoiceProducts = [];
    public $allProducts = [];

    public $designTemplate = 'tailwind';

    public function mount(Invoice $invoice)
    {
        $this->invoice = $invoice;

        $this->allProducts = Product::all();

        if ($this->invoice) {
            foreach ($this->invoice->products as $product) {
                $this->invoiceProducts[] = [
                    'product_id' => $product->id,
                    'quantity' => $product->pivot->quantity,
                    'is_saved' => true,
                    'product_name' => $product->name,
                    'product_price' => $product->price,
                ];
            }
        }
    }

    public function render()
    {
        $total = 0;

        foreach ($this->invoiceProducts as $invoiceProduct) {
            if ($invoiceProduct['is_saved'] && $invoiceProduct['product_price'] && $invoiceProduct['quantity']) {
                $total += $invoiceProduct['product_price'] * $invoiceProduct['quantity'];
            }
        }

        return view('livewire.'.$this->designTemplate.'.invoice-form', [
            'subtotal' => $total,
            'total' => $total * (1 + (is_numeric($this->invoice->taxes) ? $this->invoice->taxes : 0) / 100)
        ]);
    }

    public function addProduct()
    {
        foreach ($this->invoiceProducts as $key => $invoiceProduct) {
            if (!$invoiceProduct['is_saved']) {
                $this->addError('invoiceProducts.' . $key, 'This line must be saved before creating a new one.');
                return;
            }
        }

        $this->invoiceProducts[] = [
            'product_id' => '',
            'quantity' => 1,
            'is_saved' => false,
            'product_name' => '',
            'product_price' => 0
        ];
    }

    public function editProduct($index)
    {
        foreach ($this->invoiceProducts as $key => $invoiceProduct) {
            if (!$invoiceProduct['is_saved']) {
                $this->addError('invoiceProducts.' . $key, 'This line must be saved before editing another.');
                return;
            }
        }

        $this->invoiceProducts[$index]['is_saved'] = false;
    }

    public function saveProduct($index)
    {
        $this->resetErrorBag();
        $product = $this->allProducts->find($this->invoiceProducts[$index]['product_id']);
        $this->invoiceProducts[$index]['product_name'] = $product->name;
        $this->invoiceProducts[$index]['product_price'] = $product->price;
        $this->invoiceProducts[$index]['is_saved'] = true;
    }

    public function removeProduct($index)
    {
        unset($this->invoiceProducts[$index]);
        $this->invoiceProducts = array_values($this->invoiceProducts);
    }

    public function saveInvoice()
    {
        $this->validate();

        $this->invoice->save();

        $products = [];

        foreach ($this->invoiceProducts as $product) {
            $products[$product['product_id']] = ['quantity' => $product['quantity']];
        }

        $this->invoice->products()->sync($products);

        if ($this->designTemplate === 'tailwind') {
            return redirect()->route('invoices.index');
        } else {
            return redirect()->route('invoices.index', ['design' => 'bootstrap']);
        }
    }

    protected function rules(): array
    {
        return [
            'invoice.customer_name'  => 'required|string',
            'invoice.customer_email' => 'required|email',
            'invoice.taxes'          => 'required'
        ];
    }

}
