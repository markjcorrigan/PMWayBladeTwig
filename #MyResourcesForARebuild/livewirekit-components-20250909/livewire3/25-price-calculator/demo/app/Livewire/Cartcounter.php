<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Cartcounter extends Component
{
    public string $designTemplate = 'tailwind';

    protected $listeners = ['updateCart' => '$refresh'];

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.cartcounter', [
            'cartAmount' => Cart::sum('qty'),
        ]);
    }
}
