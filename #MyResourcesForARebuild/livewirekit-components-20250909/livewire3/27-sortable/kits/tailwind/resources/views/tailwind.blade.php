<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sortable</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
            <h2 class="font-bold text-2xl">Sortable: Tailwind Version</h2>

            <div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <livewire:products />
            </div>

            <a href="{{ route('bootstrap') }}">See Bootstrap version</a>
        </div>
    </div>
    @livewireScripts
    <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.3.0/dist/livewire-sortable.js"></script>
</body>
</html>
