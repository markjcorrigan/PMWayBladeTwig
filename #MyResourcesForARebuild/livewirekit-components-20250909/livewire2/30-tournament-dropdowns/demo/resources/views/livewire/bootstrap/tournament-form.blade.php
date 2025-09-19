<div>
    <div class="alert alert-info mb-4">
        Choose the countries for ALL places in the tournament.
    </div>
    <form wire:submit.prevent="saveTournament" class="mb-5">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Tournament Name*</label>

            <div class="col-md-6">
                <input wire:model="tournamentName" type="text" class="form-control" required/>
            </div>
        </div>

        @for ($position=1; $position <= $maxPositions; $position++)
            <div class="form-group row">
                <label for="country" class="col-md-4 col-form-label text-md-right">
                    Place no.{{ $position }}
                </label>
                <div class="col-md-6">
                    <select wire:model="positions.{{ $position }}" class="form-control" required>
                        <option value="">-- choose country --</option>
                        @foreach ($countries as $country)
                            @if (!in_array($country->id, $positions)
                                || (isset($positions[$position]) && $positions[$position] == $country->id))
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        @endfor

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Save tournament
                </button>
            </div>
        </div>
    </form>

    <hr/>

    <h3>Latest Tournaments</h3>

    <table class="table">
        <thead>
        <tr>
            <th>Tournament</th>
            <th>Places</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->name }}</td>
                <td>
                    @foreach ($tournament->countries as $country)
                        {{ $country->pivot->position }}. {{ $country->name }}
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
