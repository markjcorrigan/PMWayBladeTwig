<div>
    @if (is_null($result))
        @foreach ($questions as $question)
            @if ($loop->iteration == $currentQuestionNumber)
                <h4>Question {{ $currentQuestionNumber }}/{{ $questions->count() }}. {{ $question->question }}</h4>
                @foreach ($question->options->shuffle() as $option)
                    <div>
                        <input wire:model.live="answer" type="radio" id="{{ $option->id }}" value="{{ $option->id }}" />
                        <label for="{{ $option->id }}">{{ $option->option_text }}</label>
                    </div>
                @endforeach
            @endif
        @endforeach
    @else
        <h4>Quiz finished!</h4>
        Your result: <strong>{{ $this->result }}</strong> / {{ $questions->count() }}.
    @endif
</div>
