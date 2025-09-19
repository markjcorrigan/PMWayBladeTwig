<div class="d-flex position-relative flex-wrap flex-grow-1 align-content-stretch">
    <span style="z-index: 10;" class="position-absolute justify-content-center align-items-center py-2 px-3 w-8 h-100">
        <svg style="height: 1.25rem;width: 1.25rem;" viewBox="0 0 24 24" fill="none">
            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </span>

    @if(count($results) || $search)
        <span style="z-index: 10;right:0;cursor:pointer;" class="position-absolute justify-content-center align-items-center py-2 pr-3 h-100 text-center" wire:click="resetForm">
            <svg style="height: 1.25rem;width: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </span>
    @endif

    <input type="text" placeholder="Search here..." wire:model.live.debounce="search" class="flex-grow-1 position-relative px-3 py-2 ps-5 border" />

    <div style="overflow-y:auto;overflow-x:hidden;z-index:20;margin-top:2.5rem;right:0;max-height:24rem;" class="position-absolute w-100 small bg-white shadow-lg">
        @foreach($results as $group => $entries)
            <div style="text-transform:uppercase;" class="px-3 py-2 text-xs font-weight-bold text-white uppercase bg-primary">
                {{ $group }}
            </div>

            <ul style="padding:0!important;">
                @foreach($entries as $entry)
                    <li class="d-flex align-items-center px-3 py-2 font-normal no-underline">
                        <a href="{{ $entry['linkTo'] }}">
                            @foreach($entry['fields'] as $name => $value)
                                <div>{{ $value }}</div>
                            @endforeach
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach

        @if (strlen($search) >= 3 && !count($results))
            <div class="d-flex align-items-center px-3 py-2 font-normal">No results found.</div>
        @endif
    </div>
</div>
