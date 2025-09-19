<div>
    <div class="mb-3 row">
        <label for="name" class="col-md-3 col-form-label text-md-right">
            Name
        </label>
        <div class="col-md-7">
            <input wire:model="name" type="text" id="name"
                   class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row col-md-9 d-block mx-auto" x-data="{ show: false }">
        <div class="d-flex flex-column mb-4">
            <button x-on:click.prevent="show = !show" type="button"
               class="border rounded px-4 py-2 bg-white d-flex justify-content-between align-items-center @error('selected') border-danger @enderror">
                <span class="d-inline-block">Select subscription topics</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="d-inline-block" style="width: 1rem;height: 1rem;"
                     x-bind:class="{ 'rotate-180': show }">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show.transition="show"
                 class="p-3 border @error('name') is-invalid @enderror"r">
                @foreach($topics as $topic)
                    <div class="d-flex" wire:key="topic-{{ $topic->id }}">
                        <input wire:model.live="selectGroup" type="checkbox" id="topic-{{ $topic->id }}" value="{{ $topic->id }}" class="me-2" />
                        <label for="topic-{{ $topic->id }}">{{ $topic->name }}</label>
                    </div>

                    @foreach($topic->children as $children)
                        <div class="d-flex ms-3" wire:key="children-{{ $children->id }}">
                            <input wire:model.live="selected" type="checkbox" id="children-{{ $children->id }}" value="{{ $children->id }}" class="me-2" />
                            <label for="children-{{ $children->id }}">{{ $children->name }}</label>
                        </div>
                    @endforeach
                @endforeach
            </div>
            @error('selected')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button wire:click="save" type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>

    <h3 class="mt-5">5 Latest Subscriptions</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Topics</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscriptions as $subscription)
                <tr>
                    <td>{{ $subscription->name }}</td>
                    <td>
                        @foreach ($subscription->topics as $topic)
                            {{ $topic->name }}@if( !$loop->last), @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
