<div>
    <form wire:submit.prevent="storeBookmark" class="pb-10 border-b-2">
        <div>
            <label class="block text-sm font-medium text-gray-700" for="title">
                Link
                <input wire:model.debounce.500ms="link" type="text" placeholder="https://"
                       class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400"/>
            </label>
            @error('link') <span class="mt-4 text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700" for="title">
                Title
                <input wire:model="title" type="text"
                       class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400"/>
            </label>
            @error('title') <span class="mt-4 text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        @if ($description)
            <p class="block mt-4 text-sm font-medium text-gray-700">Description</p>
            <p class="mt-2">{{ $description }}</p>
        @endif

        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="object-contain mt-4 w-full max-h-64">
        @endif

        <span wire:loading="updatedLink" class="mt-2 text-indigo-500">Fetching data...</span>

        @if($message)
            <span class="mt-4 text-red-500">{{ $message }}</span>
        @endif

        <div class="flex items-center mt-4">
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                Save bookmark
            </button>
        </div>
    </form>

    <h3 class="mt-10 mb-5 text-xl font-bold">Latest 5 Bookmarks</h3>

    <table class="min-w-full">
        <thead>
        <tr>
            <th class="px-6 py-3 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300">Name</th>
            <th class="px-6 py-3 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300">Link</th>
        </tr>
        </thead>
        <tbody class="bg-white">
        @foreach ($bookmarks as $bookmark)
            <tr>
                <td class="px-6 py-4 text-sm leading-5 border-b border-gray-500 whitespace-no-wrap">{{ $bookmark->title }}</td>
                <td class="px-6 py-4 text-sm leading-5 border-b border-gray-500 whitespace-no-wrap">{{ $bookmark->link }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
