<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Country;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class CountriesCity extends Component
{
    public Collection $countries;
    public Collection $cities;

    public string $name = '';
    public ?int $country;
    public ?int $city;

    public function mount(): void
    {
        $this->countries = Country::all();
        $this->cities = collect();
    }

    public function updatedCountry(): void
    {
        $this->cities = City::where('country_id', $this->country)->get();
        $this->city = $this->cities->first()->id ?? null;
    }

    public function render(): View
    {
        return view('livewire.countries-city');
    }
}
