<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Mpociot\VatCalculator\Facades\VatCalculator;

class CartProducts extends Component
{
    public int $taxTotal;
    public int $taxRate;
    public int|null $shipping = null;
    public int $totalCartWithoutTax;
    public int $totalWithTax;
    public int $taxValue;
    public string|null $selectedCountry = null;
    public Collection $countries;

    protected $listeners = ['updateCart' => '$refresh'];

    public function mount(): void
    {
        $this->countries = Country::all();
    }

    public function render(): View
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

        return view('livewire.cart-products', compact('cartItems'));
    }

    public function increaseQuantity(int $id): void
    {
        $this->dispatch('increaseQuantity', $id);
    }

    public function decreaseQuantity(int $id, int $qty): void
    {
        if ($qty != 1) {
            Cart::where('product_id', $id)->update(['qty' => $qty - 1]);
        } else {
            Cart::where('product_id', $id)->delete();
        }

        $this->dispatch('updateCart');
    }
}
