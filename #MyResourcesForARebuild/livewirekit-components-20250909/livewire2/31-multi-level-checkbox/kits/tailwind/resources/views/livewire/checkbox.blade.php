<div class="ml-8 mt-8">
    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="title">
            Name
        </label>
        <input type="text" wire:model="name"
               class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
        @error('name')
            <div class="text-sm text-red-500 ml-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="flex flex-col mb-4" x-data="{show: false}">
        <button href="#" x-on:click.prevent="show = !show"
           class="relative z-10 border border-gray-400 rounded px-4 py-2 bg-white flex justify-between items-center">
            <span class="inline-block">Select subscription topics</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="stroke-current inline-block w-4 h-4 transform transition duration-150"
                 x-bind:class="{ 'rotate-180': show }">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div x-show.transition="show"
             class="relative z-20 -mt-1 flex flex-col w-full px-4 py-4 whitespace-nowrap border border-gray-400 rounded bg-white">
            @foreach($topics as $topic)
                <div>
                    <input type="checkbox" wire:model="selectGroup.{{ $topic->id }}" value="{{ $topic->id }}" class="inline-block mr-2"/>{{ $topic->name }}
                </div>

                @foreach($topic->children as $children)
                    <div>
                        <input type="checkbox" wire:model="selected" value="{{ $children->id }}" class="inline-block mr-2 ml-4"/>{{ $children->name }}
                    </div>
                @endforeach
            @endforeach
        </div>
        @error('selected')
            <div class="text-sm text-red-500 ml-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button" wire:click="save">Save</button>

    <h3 class="font-bold text-xl mt-10 mb-5">5 Latest Subscriptions</h3>

    <table class="min-w-full">
        <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Topics</th>
        </tr>
        </thead>
        <tbody class="bg-white">
        @foreach ($subscriptions as $subscription)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                    {{ $subscription->name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                    @foreach ($subscription->topics as $topic)
                        {{ $topic->name }}@if( !$loop->last), @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
