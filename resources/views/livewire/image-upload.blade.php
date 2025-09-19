<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16 p-4 bg-gray-100 rounded-lg shadow-md">
        @if ($image)
            <h2 class="text-lg font-bold mb-2">Preview:</h2>
            <div class="flex flex-wrap justify-center gap-6 mb-4">
                @foreach($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="w-[110px] h-[90px] object-cover rounded-lg border border-gray-200">
                @endforeach
            </div>
        @endif
        <input type="file" wire:model="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 mb-4" multiple>
        @error('image')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded-lg text-white text-lg">Save Photo</button>
    </form>
    <h2 class="text-lg font-bold mb-2 mt-6">Uploaded Images:</h2>
    <div class="flex flex-wrap gap-7">
        @if($images->isEmpty())
            <p>No images uploaded.</p>
        @else
            @foreach($images as $image)
                <img src="{{ $image }}" class="w-[128px] h-[120px] object-cover">
            @endforeach
        @endif
    </div>
</div>


