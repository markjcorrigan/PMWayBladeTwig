<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    @if(!empty($title))
    {{-- {{ $title }} | {{ config('app.name') }}--}}
    {{ $title }}
    @else
    {{ config('app.name') }}
    @endif
</title>

<!-- <title>
        @isset($doctitle)
        {{ $doctitle }} | OurApp
        @else
        OurApp
        @endisset
    </title> -->

<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('fontawesome6/fontawesome6/pro/css/all.min.css') }}">
{{--<link rel="stylesheet" href="{{ asset('build/assets/app.css') }}"> not needed as I have @vite directive below.--}}

<!-- Schiff
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" /> -->



@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
