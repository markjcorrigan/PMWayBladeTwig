<div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Product name
        </label>
        <div class="col-md-6">
            <input wire:model="product.name" type="text" class="form-control @error('product.name') is-invalid @enderror"/>
            @error('product.name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group row mt-4">
        <label for="categories" class="col-md-4 col-form-label text-md-right">
            Categories
        </label>
        <div class="col-md-6">
            <x-virtual-select id="categories" wire:model="productCategories" options="categories" multiple="true" />
            @error('productCategories')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0 mt-4">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Save Product
            </button>
        </div>
    </div>
</div>
