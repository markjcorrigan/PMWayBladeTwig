<div>
    @if ($saved)
        <div class="alert alert-success">
            Project saved.
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Project name
        </label>
        <div class="col-md-6">
            <input wire:model="name" type="text" id="name"
                   class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label for="date" class="col-md-4 col-form-label text-md-right">
            Project due date
        </label>
        <div class="col-md-6">
            <input wire:model.lazy="date" type="text" id="date" placeholder="DD/MM/YYYY"
                   class="form-control @error('date') is-invalid @enderror"/>
            @error('date')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row mb-0">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Add Product
            </button>
        </div>
    </div>
</div>

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script>
        let picker = new Pikaday({
            field: document.getElementById('date'),
            format: 'MM/DD/YYYY',
            onSelect: function() {
                @this.set('date', picker.toString())
            }
        })
    </script>
@endsection
