<div>
    <div class="alert alert-info mb-4">
        Fill in the form. Choose the country, and cities list will be updated.
    </div>
    <form class="mb-5">
        <div class="mb-3 row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Country*</label>

            <div class="col-md-6">
                <select wire:model.live="country" id="country" class="form-select" required>
                    <option value="">-- choose country --</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City*</label>

            <div class="col-md-6">
                <select wire:model="city" id="city" class="form-select" required>
                    @if ($cities->count() == 0)
                        <option value="">-- choose country first --</option>
                    @endif
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</div>
