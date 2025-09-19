<section class="w-full py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form wire:submit="save" action="/manage-avatar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="avatar" class="btn btn-secondary">
                            Choose an avatar
                            <input wire:loading.attr="disabled" wire:target="avatar" wire:model.live="avatar"
                                type="file" id="avatar" name="avatar" class="d-none" onchange="previewAvatar(event)">
                        </label>
                        @error('avatar')
                        <p class="alert small alert-danger shadow-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img src="{{ $this->avatarPreview }}" alt="Avatar Preview"
                            style="width: 120px; height: 120px; border-radius: 50%;" id="avatar-preview">
                    </div>
                    <button wire:loading.attr="disabled" wire:target="avatar" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <div style="height: 400px;"></div>
    </div>
</section>
