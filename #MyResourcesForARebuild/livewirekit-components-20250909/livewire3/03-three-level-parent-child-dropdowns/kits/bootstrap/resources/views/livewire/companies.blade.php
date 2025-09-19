<div>
    <div class="alert alert-info mb-4">
        Fill in the form. Choose the country United States, then state, and cities list will be updated.
    </div>
    <form wire:submit="storeCompany" class="mb-5">
        <div class="mb-3 row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Company Name*</label>

            <div class="col-md-6">
                <input wire:model="name" id="name" type="text" class="form-control" required />
            </div>
        </div>

        <div class="mb-3 row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Country*</label>

            <div class="col-md-6">
                <select wire:model.live="selectedCountry" id="country" class="form-select" required>
                    <option value="">-- choose country --</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="state" class="col-md-4 col-form-label text-md-right">State*</label>

            <div class="col-md-6">
                <select wire:model.live="selectedState" id="state" class="form-select" required>
                    @if ($states->count() == 0)
                        <option value="">-- choose country first --</option>
                    @endif
                    <option value="">-- choose state --</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City*</label>

            <div class="col-md-6">
                <select wire:model="selectedCity" id="city" class="form-select" required>
                    @if ($cities->count() == 0)
                        <option value="">-- choose state first --</option>
                    @endif
                    <option value="">-- choose city --</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Add Company
                </button>
            </div>
        </div>
    </form>

    <hr />

    <h3>Latest Companies</h3>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->city->name }}, {{ $company->city->state->name }}, {{ $company->city->state->country->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
