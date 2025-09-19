<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use App\Models\Topic;
use Illuminate\Support\Str;
use Livewire\Component;

class Checkbox extends Component
{
    public string $designTemplate = 'tailwind';

    public $selectGroup;
    public $selected = [];
    public $name;

    public $rules = [
        'name' => 'required|min:3',
        'selected' => 'required|array'
    ];

    public function render()
    {
        return view('livewire.' . $this->designTemplate . '.checkbox', [
            'topics' => Topic::where('topic_id', null)->with('children')->get(),
            'subscriptions' => Subscription::latest()->take(5)->get()
        ]);
    }

    public function updated($key, $value)
    {
        $explode = Str::of($key)->explode('.');
        if ($explode[0] === 'selectGroup' && is_numeric($value)) {
            $topicIds = Topic::where('topic_id', $value)->pluck('id')->map(fn($id) => (string)$id)->toArray();
            $this->selected = array_values(array_unique(array_merge_recursive($this->selected, $topicIds)));
        } elseif ($explode[0] === 'selectGroup' && empty($value)) {
            $topicIds = Topic::where('topic_id', $explode[1])->pluck('id')->map(fn($id) => (string)$id)->toArray();
            $this->selected = array_merge(array_diff($this->selected, $topicIds));
        }
    }

    public function save()
    {
        $this->validate();

        $subscription = Subscription::create([
            'name' => $this->name
        ]);

        $subscription->topics()->attach($this->selected);

        $this->reset(['name', 'selected', 'selectGroup']);
    }
}
