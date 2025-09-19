<!DOCTYPE html>
{{-- New Blog Layout --}}
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @isset($doctitle)
        {{ $doctitle }} | PMWay Blog
        @else
        PMWay Blog
        @endisset
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    {{--
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
        integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0"
        crossorigin="anonymous"></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />



    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- <link href="{{ asset('summernote/summernote-lite.min.css') }}" rel="stylesheet">
    <script src="{{ asset('summernote/summernote-lite.min.js') }}"></script> -->


    <link rel="stylesheet" href="{{ asset('fontawesome6/fontawesome6/pro/css/all.css') }}">



    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <header class="header-bar mb-3">
        <div class="container d-flex flex-row align-items-center p-3 justify-content-between">
            <h4 class="my-0 font-weight-normal"><a wire:navigate href="/" class="text-white">PMWay</a></h4>
            @auth
            <div class="d-flex flex-row align-items-center mr-2">
                <a wire:navigate class="btn btn-sm btn-success mr-2" a href="/writestuff"
                    class="btn btn-sm btn-secondary">Following</a>
            </div>

            <div class="d-flex align-items-center">
                <div class="d-flex flex-row align-items-center mr-2">
                    <!-- <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-secondary">Sign Out</button>
                    </form> -->
                </div>
                @persist('headerdynamic')
                <div class="d-flex flex-row align-items-center mr-2">
                    <livewire:search />
                    <livewire:chat />
                </div>
                @endpersist
                <a wire:navigate href="/profile/{{ auth()->user()->name }}" class="mr-2"><img title="My Profile"
                        data-toggle="tooltip" data-placement="bottom"
                        style="width: 32px; height: 32px; border-radius: 16px" src="{{ auth()->user()->avatar }}" /></a>
                <a wire:navigate class="btn btn-sm btn-success mr-2" href="/create-post">Create Post</a>
                <!-- <form action="/logout" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-sm btn-secondary">Sign Out</button>
                </form> -->
            </div>
            @else
            <div class="d-flex flex-row align-items-center mr-2">
                <a wire:navigate class="btn btn-sm btn-success mr-2" a href="/writestuff"
                    class="btn btn-sm btn-secondary">Following</a>
            </div>
            <!-- <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0 d-flex align-items-center">
                @csrf

                <div class="mr-2">
                    <input name="loginpassword" class="form-control form-control-sm input-dark" type="password"
                        placeholder="Password" />
                </div>
                <div>
                    <button class="btn btn-primary btn-sm">Sign In</button>
                </div>
            </form> -->
            @endauth
        </div>
    </header>


    @if (session()->has('success'))
    <div class="container container--narrow">
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    </div>
    @endif

    @if (session()->has('failure'))
    <div class="container container--narrow">
        <div class="alert alert-danger text-center">
            {{ session('failure') }}
        </div>
    </div>
    @endif

    {{ $slot }}

    <!-- footer begins -->

    <x-footerbs />

    <!-- footer ends -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>


    <script>
        $('[data-toggle="tooltip"]').tooltip()
    </script>



</body>

</html>
