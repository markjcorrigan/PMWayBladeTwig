<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class MultiStepForm extends Component
{
    public array $countries;
    public array $cities = [];
    public int $currentStep = 1;
    public int $maxStep = 1;
    public int $price = 0;
    public int $adults = 0;
    public int $children = 0;
    public ?int $from_country = null;
    public ?int $from_city = null;
    public ?int $to_country = null;
    public ?int $to_city = null;

    public string $designTemplate = 'tailwind';

    protected array $stepRules = [
        1 => [
            'from_country' => 'required',
            'from_city' => 'required',
        ],
        2 => [
            'to_country' => 'required',
            'to_city' => 'required',
        ],
        3 => [
            'adults' => 'required|integer|gt:0',
            'children' => 'required|integer|gte:0',
        ]
    ];

    public function mount(): void
    {
        $this->countries = Country::all()->toArray();
        $this->cities = City::all()->groupBy('country_id')->toArray();
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.multi-step-form', [
            'fromCities' => $this->cities[$this->from_country] ?? [],
            'toCities' => $this->cities[$this->to_country] ?? [],
        ]);
    }

    public function changeStep(int $step): void
    {
        if ($this->maxStep < $step) {
            return;
        }

        $this->currentStep = $step;
    }

    public function updatingPrice(&$value): void
    {
        $value = (int) $value;
    }

    public function nextStep(): void
    {
        if (in_array($this->currentStep, array_keys($this->stepRules))) {
            $this->validate($this->stepRules[$this->currentStep]);
        }

        if ($this->currentStep >= 3) {
            $this->price = $this->adults * 100 + $this->children * 75;
            return;
        }

        $this->currentStep = $this->currentStep + 1;
        $this->maxStep = max($this->maxStep, $this->currentStep);
    }
}
