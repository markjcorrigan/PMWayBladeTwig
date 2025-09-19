<div>
    <div class="bg-secondary text-center">
        <input
            type="text"
            id="date"
            wire:model="date"
            class="bg-light rounded my-2"
            autocomplete="off"
        />
    </div>

    <div class="mt-4" style="display: grid; gap: 1rem; grid-template-columns: repeat(6, minmax(0, 1fr));">
        @foreach($availableTimes as $key => $time)
            <div class="g-col-3 ">
                <input
                    type="radio"
                    id="interval-{{ $key }}"
                    name="time"
                    value="{{ $date . ' ' . $key }}"
                    class="btn-check"
                    @disabled(!$time)
                >
                <label
                    @class(['w-100 text-center py-1 btn', 'btn-outline-primary' => $time, 'btn-secondary' => ! $time])
                    wire:key="interval-{{ $key }}"
                    for="interval-{{ $key }}">
                    {{ $key }}
                </label>
            </div>
        @endforeach
    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script>
        new Pikaday({
            field: document.getElementById('date'),
            onSelect: function() {
                @this.set('date', this.getMoment().format('YYYY-MM-DD'));
            }
        })
    </script>
@endpush
