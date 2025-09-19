<div>

  <form wire:submit="save" action="/manage-avatar" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="avatar" class="btn btn-secondary">
        Choose an avatar
        <input wire:loading.attr="disabled" wire:target="avatar" wire:model.live="avatar" type="file" id="avatar"
          name="avatar" class="d-none" onchange="previewAvatar(event)">
      </label>
      @error('avatar')
      <p class="alert small alert-danger shadow-sm">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      @if ($avatar)
      <img src="{{ $avatar->temporaryUrl() }}" alt="Avatar Preview"
        style="width: 120px; height: 120px; border-radius: 50%;" id="avatar-preview">
      @else
      <img src="{{ asset('uploads/no_image.jpg') }}" alt="Avatar Preview"
        style="width: 120px; height: 120px; border-radius: 50%;" id="avatar-preview">
      @endif
    </div>
    <button wire:loading.attr="disabled" wire:target="avatar" class="btn btn-primary">Save</button>
  </form>

</div>











<!-- <form wire:submit="save" action="/manage-avatar" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input wire:loading.attr="disabled" wire:target="avatar" wire:model="avatar" type="file" name="avatar">
        @error('avatar')
        <p class="alert small alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>
      <button wire:loading.attr="disabled" wire:target="avatar" class="btn btn-primary">Save</button>
    </form> -->