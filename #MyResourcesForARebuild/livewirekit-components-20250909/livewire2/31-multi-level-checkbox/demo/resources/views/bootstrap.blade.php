<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Multi-Level Checkbox Component</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .rotate-180 {
            transform: rotate(180deg);
            transition-timing-function: cubic-bezier(0.4,0,0.2,1);
            transition-duration: 150ms;
        }
    </style>
    @livewireStyles
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Multi-Level Checkbox Component</h3></div>

                        <div class="card-body">
                            @livewire('checkbox', ['designTemplate' => 'bootstrap'])
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="{{ route('tailwind') }}">See Tailwind version</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@livewireScripts

<script>
    $("#toggle").click(function(){
      $("#dropdown").toggleClass("d-none d-flex");
      $("svg").toggleClass("rotate-180");
    });
</script>
</body>
</html>
