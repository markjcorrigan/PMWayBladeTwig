<div>
    <div class="mb-4 rounded-lg bg-blue-100 px-4 py-3 leading-normal text-blue-700" role="alert">
        Fill in the form. Choose the country, and cities list will be updated.
    </div>
    <form class="border-b-2 pb-10">
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700" for="country">Country*</label>
            <select wire:model.live="country" id="country"
                    class="mt-2 w-full rounded-lg border border-gray-400 py-2 pr-4 pl-2 text-sm focus:border-blue-400 focus:outline-none sm:text-base" required>
                <option value="">-- choose country --</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700" for="city">City*</label>
            <select wire:model="city" id="city"
                    class="mt-2 w-full rounded-lg border border-gray-400 py-2 pr-4 pl-2 text-sm focus:border-blue-400 focus:outline-none sm:text-base" required>
                @if ($cities->count() == 0)
                    <option value="">-- choose country first --</option>
                @endif
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
