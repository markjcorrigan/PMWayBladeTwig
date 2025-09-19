<div @class(['modal', 'd-block' => $showModal])>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form wire:submit="save">
                <div class="modal-header">
                    <h5 class="modal-title">Create category</h5>
                    <button wire:click="toggleModal" type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name" class="col-md-3 col-form-label text-md-right">
                        Name
                    </label>
                    <input wire:model="name" id="name" class="form-control @error('name') is-invalid @enderror""/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button wire:click="toggleModal" type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
