<form wire:submit="save">
    @if ($messageText)
        <div class="alert alert-info">
            {{ $messageText }}
        </div>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Product name
        </label>
        <div class="col-md-6">
            <input wire:model.live.debounce="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="description" class="col-md-4 col-form-label text-md-right">
            Product description
        </label>
        <div class="col-md-6">
            <textarea wire:model.live.debounce="description" id="description" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Add Product
            </button>
        </div>
    </div>
</form>
