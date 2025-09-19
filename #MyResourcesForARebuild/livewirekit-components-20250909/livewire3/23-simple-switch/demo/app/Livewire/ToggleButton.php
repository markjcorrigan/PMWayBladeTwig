<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleButton extends Component
{
    public Model $model;
    public string $field;

    public bool $isActive;

    public string $designTemplate = 'bootstrap';

    public function mount(): void
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.toggle-button');
    }

    public function updating($field, $value): void
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
