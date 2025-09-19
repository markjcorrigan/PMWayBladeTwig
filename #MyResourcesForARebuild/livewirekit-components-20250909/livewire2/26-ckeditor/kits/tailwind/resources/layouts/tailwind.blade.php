<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ckeditor in Livewire</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .ck-content > blockquote,
        .ck-content > dl,
        .ck-content > dd,
        .ck-content > h1,
        .ck-content > h2,
        .ck-content > h3,
        .ck-content > h4,
        .ck-content > h5,
        .ck-content > h6,
        .ck-content > hr,
        .ck-content > figure,
        .ck-content > p,
        .ck-content > pre {
          margin: revert;
        }

        .ck-content > ol,
        .ck-content > ul {
          list-style: revert;
          margin: revert;
          padding: revert;
        }

        .ck-content > table {
          border-collapse: revert;
        }

        .ck-content > h1,
        .ck-content > h2,
        .ck-content > h3,
        .ck-content > h4,
        .ck-content > h5,
        .ck-content > h6 {
          font-size: revert;
          font-weight: revert;
        }
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>

    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
            <h2 class="font-bold text-2xl">Ckeditor in Livewire: Tailwind Version</h2>

            <div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                @if (session()->has('message'))
                    <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    @livewireScripts
    @stack('scripts')
</body>
</html>