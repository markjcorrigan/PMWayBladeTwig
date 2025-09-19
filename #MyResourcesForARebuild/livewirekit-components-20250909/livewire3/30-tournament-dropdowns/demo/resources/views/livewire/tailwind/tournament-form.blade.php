<div>
    <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
        Choose the countries for ALL places in the tournament.
    </div>
    <form wire:submit="saveTournament" class="border-b-2 pb-10">
        <div>
            <label class="block font-medium text-sm text-gray-700" for="name">
                Tournament name
            </label>
            <input wire:model="tournamentName" id="name" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
        </div>
        @for ($position=1; $position <= $maxPositions; $position++)
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="country">
                Place no.{{ $position }}
            </label>
            <select wire:model="positions.{{ $position }}"
                    class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                    required>
                <option value="">-- choose country --</option>
                @foreach ($countries as $country)
                    @if (! in_array($country->id, $positions)
                        || (isset($positions[$position]) && $positions[$position] == $country->id))
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        @endfor

        <div class="flex items-center mt-4">
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                Save Positions
            </button>
        </div>
    </form>

    <h3 class="font-bold text-xl mt-10 mb-5">Latest Tournaments</h3>

    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Tournament</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Places</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($tournaments as $tournament)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        {{ $tournament->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        @foreach ($tournament->countries as $country)
                            {{ $country->pivot->position }}. {{ $country->name }}
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
