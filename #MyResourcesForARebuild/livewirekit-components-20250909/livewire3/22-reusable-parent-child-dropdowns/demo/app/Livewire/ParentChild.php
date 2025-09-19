<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class ParentChild extends Component
{
    public Collection $parents;
    public Collection $children;

    public string $parentModelName;
    public string $parentLabel;
    public string $parentInputName;
    public int $parentValue;

    public string $childModelName;
    public string $childLabel;
    public string $childInputName;
    public int|null $childValue = null;
    public string $relationshipFieldName;

    public string $designTemplate = 'tailwind';

    public function mount(): void
    {
        $this->parents = (new $this->parentModelName)->all();
        $this->children = collect();
    }

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.parent-child');
    }

    public function updatedParentValue(): void
    {
        $this->children = (new $this->childModelName)
            ->where($this->relationshipFieldName, $this->parentValue)
            ->get();
        $this->childValue = $this->children->first()->id ?? null;
    }
}
