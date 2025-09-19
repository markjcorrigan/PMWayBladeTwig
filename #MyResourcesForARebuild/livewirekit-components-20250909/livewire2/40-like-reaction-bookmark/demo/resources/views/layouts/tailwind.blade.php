<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Like / Love / Bookmark</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.2/src/index.min.js"></script>
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
            <h2 class="font-bold text-2xl">Like / Love / Bookmark: Tailwind Version</h2>

            <div class="w-full sm:max-w-3xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                @yield('content')
            </div>

            <a href="{{ route('bootstrap') }}">See Bootstrap version</a>
        </div>
    </div>
    @livewireScripts

</body>
</html>
