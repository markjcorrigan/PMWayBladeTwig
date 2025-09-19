<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Comment Discussions for Blog Post</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Posts: Generate Slug from Title: Bootstrap Version</h3></div>

                        <div class="card-body">
                            <h2>Post Title</h2>

                            <p>Post full text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum rhoncus turpis a maximus. Aenean id purus vitae eros laoreet imperdiet ac eget nisl. Donec iaculis, dolor vitae tempus convallis, libero ligula rhoncus leo, eget sollicitudin velit tortor quis tortor. Nulla facilisi. Morbi euismod sodales nisi vitae imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin cursus ligula non quam dapibus, at sollicitudin massa commodo. Proin interdum vestibulum neque, sed efficitur enim congue eu. Vivamus semper sollicitudin leo, eget varius velit dignissim accumsan. Nulla facilisi. Etiam sodales ultrices lectus, at sollicitudin turpis tincidunt at.</p>

                            <livewire:comments post-id="1" designTemplate="bootstrap" />
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
</body>
</html>
