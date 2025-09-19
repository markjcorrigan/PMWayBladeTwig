<div class="flex relative flex-wrap flex-1 items-stretch">
    <span class="absolute z-10 justify-center items-center py-3 pl-3 w-8 h-full text-base font-normal leading-snug text-center bg-transparent rounded text-blueGray-300">
        <svg class="w-5 h-5 text-black text-opacity-70" viewBox="0 0 24 24" fill="none">
            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </span>

    @if(count($results) || $search)
        <span class="absolute right-0 z-10 justify-center items-center py-3 pr-3 w-8 h-full text-base font-normal leading-snug text-center text-rose-300 bg-transparent rounded cursor-pointer" wire:click="resetForm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </span>
    @endif

    <input type="text" placeholder="Search here..." wire:model.debounce.300ms="search" class="relative px-3 py-3 pl-10 w-full text-sm bg-white rounded border-0 shadow outline-none placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring" />

    <div class="overflow-y-auto overflow-x-hidden absolute right-0 z-20 mt-10 w-full max-h-96 bg-white rounded shadow-lg">
        @foreach($results as $group => $entries)
            <div class="px-3 py-2 text-xs font-bold tracking-wider text-indigo-600 uppercase bg-indigo-200">
                {{ $group }}
            </div>

            <ul>
                @foreach($entries as $entry)
                    <li class="flex items-center px-3 py-2 font-normal no-underline cursor-pointer hover:bg-indigo-100">
                        <a href="{{ $entry['linkTo'] }}">
                            @foreach($entry['fields'] as $name => $value)
                                <div class="text-sm text-blue-700">{{ $value }}</div>
                            @endforeach
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach

        @if (strlen($search) >= 3 && !count($results))
            <div class="flex items-center px-3 py-2 font-normal">No results found.</div>
        @endif
    </div>
</div>
