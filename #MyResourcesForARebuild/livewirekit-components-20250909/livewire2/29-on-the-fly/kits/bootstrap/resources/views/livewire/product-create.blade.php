<div>
    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label text-md-right">
            Product name
        </label>
        <div class="col-md-7">
            <input wire:model="product.name" type="text"
                   class="form-control @error('product.name') is-invalid @enderror"/>
            @error('product.name')
                <span style="font-size: 80%; color: #e3342f">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="categories" class="col-md-3 col-form-label text-md-right">
            Categories
        </label>
        <div class="col-md-7 d-flex">
            <div class="flex-fill">
                <select wire:model="product.category" id="categories" class="form-control @error('product.name') is-invalid @enderror"">
                    <option value="">--SELECT CATEGORY--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('product.category')
                    <span style="font-size: 80%; color: #e3342f">{{ $message }}</span>
                @enderror
            </div>
            <div class="ml-2">
                <a wire:click="$emit('openModal')" class="btn btn-outline-secondary">Add new category</a>
            </div>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Add Product
            </button>
        </div>
    </div>

    @livewire('category-create', ['designTemplate' => 'bootstrap'])
</div>
