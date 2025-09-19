<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\State;
use Livewire\Component;
use App\Models\Country;
use App\Models\Company;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Companies extends Component
{
    public Collection $countries;
    public Collection $states;
    public Collection $cities;

    public string $name;
    public ?int $selectedCountry = null;
    public ?int $selectedState = null;
    public ?int $selectedCity = null;

    public function mount(): void
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
    }

    public function updatedSelectedCountry(): void
    {
        $this->states = State::where('country_id', $this->selectedCountry)->get();
        $this->selectedState = null;
    }

    public function updatedSelectedState(): void
    {
        if (! is_null($this->selectedState)) {
            $this->cities = City::where('state_id', $this->selectedState)->get();
        }
    }

    public function storeCompany(): void
    {
        $this->validate([
            'name' => 'required',
            'selectedCity' => 'required',
        ]);

        Company::create([
            'name' => $this->name,
            'city_id' => $this->selectedCity,
        ]);

        $this->resetExcept('countries', 'designTemplate');
        $this->states = collect();
        $this->cities = collect();
    }

    public function render(): View
    {
        return view('livewire.companies', [
            'companies' => Company::with('city.state.country')->latest()->take(5)->get()
        ]);
    }
}
