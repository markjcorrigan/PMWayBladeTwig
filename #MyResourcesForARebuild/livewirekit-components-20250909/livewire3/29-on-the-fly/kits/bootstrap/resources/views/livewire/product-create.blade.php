<div>
    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    <div class="mb-3 row">
        <label for="name" class="col-md-3 col-form-label text-md-right">
            Product name
        </label>
        <div class="col-md-7">
            <input wire:model="product.name" type="text" id="name" class="form-control @error('product.name') is-invalid @enderror"/>
            @error('product.name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label for="categories" class="col-md-3 col-form-label text-md-right">
            Categories
        </label>
        <div class="col-md-7 d-flex">
            <div class="flex-fill">
                <select wire:model="product.category" id="categories" class="form-select @error('product.name') is-invalid @enderror">
                    <option value="">--SELECT CATEGORY--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('product.category')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="ms-2">
                <a wire:click="$dispatch('toggleModal')" class="btn btn-outline-secondary">Add new category</a>
            </div>
        </div>
    </div>
    <div class="mb-3 row mb-0">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Add Product
            </button>
        </div>
    </div>

    <livewire:category-create designTemplate="bootstrap" />
</div>
