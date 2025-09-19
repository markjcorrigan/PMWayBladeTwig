<?php

namespace App\Http\Livewire;

use App\Models\Form;
use App\Models\Template;
use Livewire\Component;

class FormCreate extends Component
{
    public $templates = [];
    public $all_templates;
    public $questions = [''];

    public $saved = FALSE;

    public function mount()
    {
        $this->all_templates = Template::all();
    }

    public function render()
    {
        return view('livewire.form-create');
    }

    public function addQuestion()
    {
        $this->questions[] = '';
    }

    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }

    public function updated($key, $value)
    {
        $this->saved = FALSE;

        $parts = explode(".", $key);
        if (count($parts) == 2 && $parts[0] == "templates") {
            $question = $this->all_templates->where('id', $value)->first()->text;
            if ($question) {
                $this->questions[$parts[1]] = $question;
            }
        }
    }

    public function saveForm()
    {
        $form = Form::create();

        foreach ($this->questions as $question) {
            $form->questions()->create(['question_text' => $question]);
        }

        $this->reset('questions', 'templates');
        $this->saved = TRUE;
    }

}
