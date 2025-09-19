<?php

namespace App\Livewire;

use App\Models\Form;
use App\Models\Template;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class FormCreate extends Component
{
    public array $templates = [];
    public Collection $all_templates;
    public array $questions = [];

    public string $designTemplate = 'tailwind';
    public bool $saved = false;

    public function mount(): void
    {
        $this->all_templates = Template::all();
    }

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.form-create');
    }

    public function addQuestion(): void
    {
        $this->questions[] = '';
    }

    public function removeQuestion($index): void
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }

    public function updated($key, $value): void
    {
        $this->saved = false;

        $parts = explode('.', $key);
        if (count($parts) == 2 && $parts[0] == 'templates') {
            $question = $this->all_templates->where('id', $value)->first()->text;
            if ($question) {
                $this->questions[$parts[1]] = $question;
            }
        }
    }

    public function saveForm(): void
    {
        $form = Form::create();

        foreach ($this->questions as $question) {
            $form->questions()->create(['question_text' => $question]);
        }

        $this->reset('questions', 'templates');
        $this->saved = true;
    }
}
