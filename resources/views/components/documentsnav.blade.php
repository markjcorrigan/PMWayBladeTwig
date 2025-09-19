
<nav class="bg-gray-900 shadow-md">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-start">
            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="bg-white text-gray-900 hover:bg-gray-200 px-4 py-2 rounded">Home</a>
                <a href="/document-uploads" aria-current="page" class="bg-white text-gray-900 hover:bg-gray-200 px-4 py-2 rounded">All Documents</a>
                <a href="/portfoliodash" aria-current="page" class="bg-white text-gray-900 hover:bg-gray-200 px-4 py-2 rounded">Portfolio Dashboard</a>
                <div class="ml-auto">
                    @livewire('search-docs')
                </div>
            </div>
        </div>
    </div>
</nav>




