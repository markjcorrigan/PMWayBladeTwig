<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Greeter extends Component
{
    public $name = '';
    public $greeting = '';

    public function changeName() {

    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
