<div>
    <div class="mb-3">
        <label for="name" class="col-form-label text-md-right">
            Product name
        </label>
        <div>
            <input wire:model="name" type="text" id="name"
                   class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="col-form-label text-md-right">
            Product description
        </label>
        <div wire:ignore>
            <textarea data-description="@this"
                      wire:model="description"
                      class="form-control @error('description') is-invalid @enderror"
                      id="description"
                      name="description"></textarea>
        </div>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
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
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script>
       document.addEventListener('livewire:init', () => {
            ClassicEditor
                .create(document.querySelector('#description'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('description', editor.getData());
                    })
                    Livewire.on('reinit', () => {
                        editor.setData('', '')
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        })
    </script>
@endpush
