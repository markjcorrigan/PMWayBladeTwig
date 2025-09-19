<div>
    <form wire:submit="storeBookmark">
        <div class="mb-3 row">
            <label class="col-md-4 col-form-label text-md-right" for="title">
                Link
            </label>
            <div class="col-md-6">
                <input wire:model.live.debounce.500ms="link" id="title" type="text" placeholder="https://" class="form-control @error('link') is-invalid @enderror"/>
                @error('link')
                    <span class=invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-md-4 col-form-label text-md-right" for="title">
                Title
            </label>
            <div class="col-md-6">
                <input wire:model="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror"/>
                @error('title')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        @if ($description)
            <p class="col-md-4 col-form-label">Description</p>
            <p class="mt-2">{{ $description }}</p>
        @endif

        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="img-fluid">
        @endif

        <span wire:loading="updatedLink" class="text-info">Fetching data...</span>

        @if($message)
            <span class="mt-2 text-danger">{{ $message }}</span>
        @endif

        <div class="mb-3 row mb-0 mt-2">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Save bookmark
                </button>
            </div>
        </div>
    </form>

    <hr />

    <h3>Latest 5 Bookmarks</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookmarks as $bookmark)
                <tr>
                    <td>{{ $bookmark->title }}</td>
                    <td>{{ $bookmark->link }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
