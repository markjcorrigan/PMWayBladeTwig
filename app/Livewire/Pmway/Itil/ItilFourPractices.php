<?php

namespace App\Livewire\Pmway\Itil;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ItilFourPractices extends Component
{
    public $showCollapse = false;
    public $showCollapseElephant = false;



    public function mount(): void
    {
        //
    }

    public function toggleCollapse()
    {
        $this->showCollapse = !$this->showCollapse;
    }

    public function toggleCollapseElephant()
    {
        $this->showCollapseElephant = !$this->showCollapseElephant;
    }

    #[Layout('components.layouts.app.frontend', ['title' => 'ITIL 4 Practices'])]
    public function render(): View
    {
        return view('livewire.pmway.itil.itilfourpractices');
    }
}
