<?php

namespace App\Livewire;

use App\Models\State;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class States extends Component
{
    public int $amount = 5;

    public int $offset = 0;

    public Collection $states;

    public bool $showLoadMoreButton;

    public string $designTemplate = 'tailwind';

    public function mount(): void
    {
        $this->loadStates();
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.states');
    }

    public function loadStates(): void
    {
        $states = State::query()->offset($this->offset)->limit($this->amount)->get();
        $this->states = isset($this->states) ? $this->states->merge($states) : $states;

        $this->offset += $this->amount;

        $this->showLoadMoreButton = State::count() > $this->offset;
    }
}
