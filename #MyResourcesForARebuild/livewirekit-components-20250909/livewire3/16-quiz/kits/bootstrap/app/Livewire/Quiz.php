<?php

namespace App\Livewire;

use App\Models\QuizOption;
use App\Models\QuizQuestion;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Quiz extends Component
{
    public Collection $questions;
    public int $currentQuestionNumber = 1;
    public array $answers = [];
    public int|null $answer = null;
    public int|null $result = null;

    public function mount(): void
    {
        $this->questions = QuizQuestion::with('options')
            ->inRandomOrder()
            ->get();
    }

    public function render(): View
    {
        return view('livewire.quiz');
    }

    public function updatedAnswer(): void
    {
        if (! is_null($this->answer)) {
            $this->answers[] = $this->answer;
            $this->currentQuestionNumber++;
        }

        if (count($this->answers) >= $this->questions->count()) {
            $correctAnswers = QuizOption::where('is_correct', true)
                ->whereIn('question_id', $this->questions->pluck('id'))
                ->pluck('id')
                ->toArray();

            $this->result = count(array_intersect($correctAnswers, $this->answers));
        }

        $this->reset('answer');
    }
}
