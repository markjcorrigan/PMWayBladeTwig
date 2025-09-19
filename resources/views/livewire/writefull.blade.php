<section class="w-full">
    {{-- New Blog Following List --}}
    {{-- <x-page-heading>
        <x-slot:title>

        </x-slot:title>
        <x-slot:subtitle>

        </x-slot:subtitle>
        <x-slot:buttons>

        </x-slot:buttons>
    </x-page-heading>--}}

    <div class="container mx-auto p-4 md:p-6 lg:p-8 max-w-3xl">
        @unless($posts->isEmpty())
        <h2 class="text-2xl font-bold text-center mb-4">The latest from those you follow</h2>
        {{-- <div class="flex flex-col space-y-4">
            @foreach($posts as $post)
            <x-post :post="$post" />
            @endforeach
        </div> --}}
        <div class="mt-4 flex justify-center">
            {{ $posts->links('pagination::tailwind') }}
        </div>
        <div class="mt-8">
            <livewire:post-following-list />

        </div>

        @else
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-2">Hello <strong class="text-blue-500">{{ auth()->user()->name }}</strong>,
                your feed is empty.</h2>
            <p class="text-lg text-gray-500">Your feed displays the latest posts from the people you follow. If you
                don&rsquo;t have any friends to follow that&rsquo;s okay; you can use the &ldquo;Search&rdquo; feature
                in
                the top menu bar to find content written by people with similar interests and then follow them.</p>


        @endunless

        </div>

    </div>

</section>
