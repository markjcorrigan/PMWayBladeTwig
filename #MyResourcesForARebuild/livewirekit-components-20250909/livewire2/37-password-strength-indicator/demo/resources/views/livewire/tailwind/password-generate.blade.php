<div class="flex flex-col p-4 space-y-4">
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="relative col-span-4 mt-2 text-sm">
                <input type="password" name="password" id="password" wire:model="password" class="py-2 pr-4 pl-2 mb-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400">
                <span class="font-semibold">Password strength:</span> {{ $strengthLevels[$strengthScore] ?? 'Weak' }}

                <div>
                    <progress value="{{ $strengthScore }}" max="4" class="w-full"></progress>
                </div>
            </div>
    </div>
</div>
