<div>
    <div class="row">
        <div class="form-group col-12">
            <label for="password">Password</label>
            <div class="input-group mb-2">
                <input type="password" id="password" class="form-control" wire:model="password">
            </div>
                <span class="font-weight-bold">Password strength:</span> {{ $strengthLevels[$strengthScore] ?? 'Weak' }}

                <progress value="{{ $strengthScore }}" max="4" class="w-100"></progress>
        </div>
    </div>

</div>
