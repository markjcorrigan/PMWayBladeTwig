<?php

namespace App\Http\Livewire;

use App\Models\State;
use Illuminate\Support\Collection;
use Livewire\Component;

class States extends Component
{
    public int $amount = 5;

    public int $offset = 0;

    public Collection $states;

    public bool $showLoadMoreButton;

    public function mount()
    {
        $this->loadStates();
    }

    public function render()
    {
        return view('livewire.states');
    }

    public function loadStates()
    {
        $states = State::query()->offset($this->offset)->limit($this->amount)->get();
        $this->states = isset($this->states) ? $this->states->merge($states) : $states;

        $this->offset += $this->amount;

        $this->showLoadMoreButton = State::count() > $this->offset;
    }
}
