<?php

namespace App\Livewire;

use App\Models\Subscription;
use App\Models\Topic;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class Checkbox extends Component
{
    public string $designTemplate = 'tailwind';

    public array $selectGroup = [];
    #[Rule('required|array')]
    public array $selected = [];
    #[Rule('required|min:3')]
    public string $name = '';

    public function render(): View
    {
        return view('livewire.' . $this->designTemplate . '.checkbox', [
            'topics' => Topic::where('topic_id', null)->with('children')->get(),
            'subscriptions' => Subscription::latest()->take(5)->get()
        ]);
    }

    public function updated($property, $value): void
    {
        $explode = Str::of($property)->explode('.');

        if ($explode[0] === 'selectGroup' && is_numeric($value) && $value !== '__rm__') {
            $topicIds = Topic::where('topic_id', $value)->pluck('id')->map(fn($id) => (string)$id)->toArray();
            $this->selected = array_values(array_unique(array_merge_recursive($this->selected, $topicIds)));
        } elseif ($explode[0] === 'selectGroup' && $value === '__rm__') {
            $this->selected = Topic::whereIn('topic_id', $this->selectGroup)->pluck('id')->map(fn($id) => (string)$id)->toArray();
        }
    }

    public function save(): void
    {
        $this->validate();

        $subscription = Subscription::create([
            'name' => $this->name
        ]);

        $subscription->topics()->attach($this->selected);

        $this->reset(['name', 'selected', 'selectGroup']);
    }
}
