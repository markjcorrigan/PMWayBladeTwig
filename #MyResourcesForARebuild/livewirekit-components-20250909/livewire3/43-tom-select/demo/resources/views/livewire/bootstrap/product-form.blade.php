<div>
    <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Product name
        </label>
        <input wire:model="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror"/>
        @error('name')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3 row mt-4">
        <label for="categories" class="">
            Categories
        </label>
    </div>
    <x-tom-select id="categories" class="form-select" wire:model="productCategories" options="categories" multiple />
    @error('productCategories')
        <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror

    <div class="mb-3 row mb-0 mt-4">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Save Product
            </button>
        </div>
    </div>
</div>
