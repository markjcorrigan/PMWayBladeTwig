<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class Pikaday extends Component
{
    #[Rule('required|min:3')]
    public string $name = '';
    #[Rule('required|date')]
    public string $date = '';
    public bool $saved = false;

    public function render(): View
    {
        return view('livewire.pikaday');
    }

    public function submitForm(): void
    {
        $this->validate();

        Project::create([
            'name'      => $this->name,
            'due_date'  => $this->date
        ]);

        $this->saved = true;

        $this->reset(['name', 'date']);
    }
}
