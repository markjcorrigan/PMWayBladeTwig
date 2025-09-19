
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Link Preview</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <h2 class="font-bold text-4xl">Link Preview: Tailwind Version</h2>

        <div class="w-full sm:max-w-xl mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <livewire:bookmark />
        </div>

        <a href="{{ route('bootstrap') }}" class="mt-4">See Bootstrap version</a>
    </div>
</div>
</body>
</html>
