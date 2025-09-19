<div>
    <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label text-md-right">
            Name
        </label>
        <div class="col-md-7">
            <input wire:model="name" type="text"
                   class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group row col-md-9 d-block mx-auto">
        <div class="d-flex flex-column mb-4" wire:ignore>
            <button href="#" id="toggle" style="border: 1px solid #ced4da;"
               class="position-relative z-10 rounded px-4 py-2 bg-white d-flex justify-content-between align-items-center @error('selected') border-danger @enderror">
                <span class="d-inline-block">Select subscription topics</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="d-inline-block" style="width: 1rem;height: 1rem;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="dropdown" style="border: 1px solid #ced4da;"
                 class="d-none position-relative mt-n2 flex-column mw-100 px-4 py-4 border rounded bg-white @error('selected') border-danger @enderror">
                @foreach($topics as $topic)
                    <div class="d-flex">
                        <input type="checkbox" wire:model="selectGroup.{{ $topic->id }}" value="{{ $topic->id }}" class="d-inline-block mr-2"/>{{ $topic->name }}
                    </div>

                    @foreach($topic->children as $children)
                        <div class="d-flex">
                            <input type="checkbox" wire:model="selected" value="{{ $children->id }}" class="d-inline-block mr-2 ml-3"/>{{ $children->name }}
                        </div>
                    @endforeach
                @endforeach
            </div>
            @error('selected')
                <div class="text-sm text-red-500 ml-1">
                    <span style="font-size: 11px; color: #e3342f">{{ $message }}</span>
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
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
