<div>
    <div class="mb-3 row">
        <label for="{{ $parentLabel }}" class="col-md-4 col-form-label text-md-right">{{ $parentLabel }}</label>

        <div class="col-md-6">
            <select wire:model.live="parentValue" id="{{ $parentLabel }}" name="{{ $parentInputName }}" class="form-control" required>
                <option value="">-- please choose --</option>
                @foreach ($parents as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="{{ $childLabel }}" class="col-md-4 col-form-label text-md-right">{{ $childLabel }}</label>

        <div class="col-md-6">
            <select wire:model="childValue" id="{{ $childLabel }}" name="{{ $childInputName }}" class="form-control" required>
                @if ($children->count() == 0)
                    <option value="">-- choose {{ strtolower($parentLabel) }} first --</option>
                @endif
                @foreach ($children as $child)
                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
