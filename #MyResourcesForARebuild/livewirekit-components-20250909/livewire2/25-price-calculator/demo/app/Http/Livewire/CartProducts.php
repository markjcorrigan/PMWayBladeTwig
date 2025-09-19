<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Country;
use Livewire\Component;
use Mpociot\VatCalculator\Facades\VatCalculator;

class CartProducts extends Component
{
    public $taxTotal;
    public $taxRate = 0;
    public $shipping;
    public $totalCartWithoutTax;
    public $totalWithTax;
    public $taxValue = 0;
    public $selectedCountry = '';
    public $countries;
    public $designTemplate = 'tailwind';
    protected $listeners = ['updateCart' => 'render'];

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function render()
    {
        $cartItems = Cart::with('products')->get()
            ->map(function (Cart $items) {
                return (object)[
                    'id' => $items->product_id,
                    'name' => $items->products->name,
                    'price' => $items->products->price,
                    'qty' => $items->qty,
                    'total' => ($items->qty * $items->products->price),
                ];
            });

        $this->totalCartWithoutTax = $cartItems->sum('total') + $this->shipping;
        $this->totalWithTax = round((VatCalculator::calculate($this->totalCartWithoutTax, $this->selectedCountry)), 2);
        $this->taxRate = VatCalculator::getTaxRate();
        $this->taxValue = round((VatCalculator::getTaxValue()), 2);
        return view('livewire.' . $this->designTemplate . '.cart-products', compact('cartItems'));
    }

    public function increaseQuantity($id)
    {
        $this->emit('increaseQuantity', $id);
    }

    public function decreaseQuantity($id, $qty)
    {
        if ($qty != 1) {
            Cart::where('product_id', $id)->update(['qty' => $qty - 1]);
        } else {
            Cart::where('product_id', $id)->delete();
        }
        $this->emit('updateCart');
    }
}
