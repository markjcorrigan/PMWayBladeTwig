<div class="modal" @if ($showModal) style="display:block" @endif>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="save">
                <div class="modal-header">
                    <h5 class="modal-title">Create category</h5>
                    <button wire:click="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Name:
                    <br/>
                    <input wire:model="name" class="form-control @error('name') is-invalid @enderror""/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button wire:click="closeModal" type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>