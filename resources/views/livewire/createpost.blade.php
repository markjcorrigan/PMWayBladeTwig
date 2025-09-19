<div>
    <h3>Create New Post Form</h3>
    <form wire:submit.prevent="create">
        @csrf
        <div class="form-group">
            <label for="post-title" class="text-muted mb-1 d-block"><small>Title</small></label>
            <input wire:model="post_title" id="post-title" class="form-control form-control-lg form-control-title"
                type="text" placeholder="" autocomplete="off" />
            @error('post_title')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="post-body" class="text-muted mb-1"><small>Body Content</small></label>
            <textarea wire:model="post_description" required name="Post Description" id="post_description"
                class="body-content tall-textarea form-control" type="text"></textarea>
            @error('post_description')
            <p class="mt-0 alert alert-danger shadow-sm"> {{ $message }} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="post_tags" class="text-muted mb-1 d-block"><small>Post Tags CSV: (Comma Separated
                    Values)</small></label>
            <input wire:model="post_tags" type="text" class="form-control @error('post_tags') is-invalid @enderror"
                placeholder="Tag1, Tag2 etc.">
            @error('post_tags')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="post_photo" class="text-muted mb-1 d-block"><small>Post Photo</small></label>
            <input wire:model="post_photo" @error('post_photo') is-invalid @enderror" type="file" id="Image"
                style="display: none;">
            <label for="Image" class="btn btn-outline-primary">Choose File</label>
            @error('post_photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            @if ($post_photo)
            <img src="{{ $post_photo->temporaryUrl() }}" alt="" style="width: 90px; height: 90px">
            @else
            <img src="{{ asset('uploads/no_image.jpg') }}" alt="" style="width: 90px; height: 90px">
            @endif
        </div>


        <button class="btn btn-primary" type="submit">Save Post</button>

    </form>
</div>