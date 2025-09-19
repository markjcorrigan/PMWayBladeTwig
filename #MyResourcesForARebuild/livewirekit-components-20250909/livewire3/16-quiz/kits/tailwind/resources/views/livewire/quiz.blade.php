<div>
    @if (is_null($result))
        @foreach ($questions as $question)
            @if ($loop->iteration == $currentQuestionNumber)
                <h3 class="text-xl">Question {{ $currentQuestionNumber }}/{{ $questions->count() }}. {{ $question->question }}</h3>
                @foreach ($question->options->shuffle() as $option)
                    <div>
                        <input wire:model.live="answer" type="radio" id="{{ $option->id }}" value="{{ $option->id }}" />
                        <label for="{{ $option->id }}">{{ $option->option_text }}</label>
                    </div>
                @endforeach
            @endif
        @endforeach
    @else
        <h3 class="text-xl">Quiz finished!</h3>
        Your result: <span class="font-bold">{{ $this->result }}</span> / {{ $questions->count() }}.
    @endif
</div>
