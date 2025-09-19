<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tom Select in Livewire</title>

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col items-center pt-5 pb-5 sm:justify-center">
            <h2 class="text-2xl font-bold">Tom Select in Livewire: Tailwind Version</h2>

            <div class="mt-6 mb-6 w-full bg-white px-6 py-8 shadow-md sm:max-w-2xl sm:rounded-lg">
                @if (session()->has('message'))
                    <div class="mb-4 rounded-lg bg-blue-100 px-4 py-3 leading-normal text-blue-700" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireScripts
</body>
</html>
