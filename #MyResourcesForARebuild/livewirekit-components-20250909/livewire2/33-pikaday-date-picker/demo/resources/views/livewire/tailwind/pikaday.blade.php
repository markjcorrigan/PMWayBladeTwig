<div>
    @if ($saved)
        <div class="w-full text-white bg-green-400 mb-4">
            <div class="px-4 py-2">
                Project saved.
            </div>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="name">
            Project name
        </label>
        <input wire:model="name" type="text"
               class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
               required/>
        @error('name')
        <div class="text-sm text-red-500 ml-1">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700" for="name">
            Project due date
        </label>
        <input wire:model.lazy="date" type="text"
               id="date"
               class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
               required
               placeholder="MM/DD/YYYY"/>
        @error('date')
        <div class="text-sm text-red-500 ml-1">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="flex items-center mt-4">
        <button wire:click="submitForm" type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            Save project
        </button>
    </div>
</div>

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
    new Pikaday({
        field: document.getElementById('date'),
        format: 'MM/DD/YYYY'
    })
</script>
@endsection