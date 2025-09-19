<div>
    <form wire:submit="storePost">
        <div class="mb-3 row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
            <div class="col-md-6">
                <input wire:model.live.debounce="title" type="text" id="title" class="form-control @error('title') is-invalid @enderror" autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="slug" class="col-md-4 col-form-label text-md-right">Slug</label>

            <div class="col-md-6">
                <input wire:model.live="slug" type="text" class="form-control @error('slug') is-invalid @enderror">
                @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Add Post
                </button>
            </div>
        </div>
    </form>

    <hr />

    <h3>Latest 5 Posts</h3>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Slug</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
