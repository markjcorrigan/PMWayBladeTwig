<div>
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Product name
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
        <label for="categories" class="col-md-4 col-form-label text-md-right">
            Categories
        </label>
        <div class="col-md-6">
            <div wire:ignore>
                <select id="categories"
                        class="form-select select2"
                        wire:model="productCategories"
                        multiple>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" @selected(in_array($id, $productCategories))>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            @error('productCategories')
                <span class="text-danger" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Save Product
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            let el = $('#categories')
            initSelect()

            Livewire.hook('message.processed', (message, component) => {
                initSelect()
            })

            // Only needed if doing save without redirect
            /*Livewire.on('setCategoriesSelect', values => {
                el.val(values).trigger('change.select2')
            })*/

            el.on('change', function (e) {
                @this.set('productCategories', el.select2('val'))
            })

            function initSelect () {
                el.select2({
                    placeholder: '{{__('Select your option')}}',
                    allowClear: !el.attr('required'),
                })
            }
        })
    </script>
@endpush
