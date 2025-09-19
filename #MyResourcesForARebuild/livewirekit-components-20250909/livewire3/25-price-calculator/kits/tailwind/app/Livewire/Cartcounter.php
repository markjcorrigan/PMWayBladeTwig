<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Cartcounter extends Component
{
    protected $listeners = ['updateCart' => '$refresh'];

    public function render(): View
    {
        return view('livewire.cartcounter', [
            'cartAmount' => Cart::sum('qty'),
        ]);
    }
}
