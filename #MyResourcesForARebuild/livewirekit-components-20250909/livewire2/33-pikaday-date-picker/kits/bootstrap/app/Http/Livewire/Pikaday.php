<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class Pikaday extends Component
{
    public $name;
    public $date;
    public $saved = false;

    public $rules = [
        'name'  => 'required|min:3',
        'date'  => 'required|date'
    ];

    public function render()
    {
        return view('livewire.pikaday');
    }

    public function submitForm()
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
