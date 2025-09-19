<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Task;
use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class GlobalSearch extends Component
{
    #[Rule('required|min:3')]
    public string $search = '';

    public array $results = [];

    public array $searchable = [];

    public function mount(): void
    {
        $this->searchable = [
            User::class => ['name'],
            Project::class => ['title'],
            Task::class => ['title'],
        ];
    }

    public function updatedSearch(): void
    {
        $this->reset('results');
        $this->validateOnly('search');
        $this->getSearchResults();
    }

    public function resetForm(): void
    {
        $this->reset(['search', 'results']);
    }

    public function render(): View
    {
        return view('livewire.global-search');
    }

    public function getSearchResults(): void
    {
        foreach ($this->searchable as $model => $columns) {
            $model_key = Str::camel(class_basename($model));

            $query = (new $model())->query();

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $this->search . '%');
            }

            foreach ($columns as $field) {

                $queryResults = $query->take(5)->get();

                if ($queryResults->count() > 0) {
                    $this->results[$model_key] = $queryResults->map(function ($resource) use ($field) {
                        $fields = [];
                        $route_params = [];

                        $field_key = Str::ucfirst($field);

                        $route_key = Str::plural(Str::kebab(class_basename($resource)));

                        $route_params[] = $resource->id;
                        if ($this->designTemplate === 'bootstrap') {
                            $route_params['design'] = 'bootstrap';
                        }

                        $fields[$field_key] = $resource->{$field};

                        return [
                            'linkTo' => route($route_key . '.show', $route_params),
                            'fields' => $fields,
                        ];
                    });
                }

            }
        }
    }
}
