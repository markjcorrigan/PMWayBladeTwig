<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Tournament;
use Illuminate\Support\Collection;
use Livewire\Component;

class TournamentForm extends Component
{
    public int $maxPositions = 3;

    public string $tournamentName = '';
    public array $positions = [];
    public Collection $countries;

    public function mount()
    {
        $this->countries = Country::orderBy('name')->get();
    }

    public function render()
    {
        $tournaments = Tournament::with(['countries' => function($query) {
            $query->orderBy('position');
        }])->latest()->get();

        return view('livewire.tournament-form', compact('tournaments'));
    }

    public function saveTournament()
    {
        $this->validate([
            'tournamentName' => 'required',
            'positions' => ['required', 'array', 'min:' . $this->maxPositions]
        ]);

        $tournament = Tournament::create([
            'name' => $this->tournamentName,
        ]);
        foreach ($this->positions as $position => $country) {
            $tournament->countries()->attach($country, ['position' => $position]);
        }

        $this->reset(['tournamentName', 'positions']);
    }
}
