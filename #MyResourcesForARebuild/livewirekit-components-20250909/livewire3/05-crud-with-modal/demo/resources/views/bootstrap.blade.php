<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRUD with Modal Form</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>CRUD with Modal Form: Bootstrap Version</h3></div>

                        <div class="card-body">
                            <livewire:products designTemplate="bootstrap" />
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="{{ route('tailwind') }}">See Tailwind version</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="importmap">
        {
          "imports": {
            "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/esm/popper.min.js",
            "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.esm.min.js"
          }
        }
    </script>
    <script type="module">
        import { Modal } from 'bootstrap';

        document.addEventListener('livewire:init', () => {
            Livewire.on('closeModal', ({ modalId }) => {
                const modalsElement = document.querySelector(modalId)
                let modal = Modal.getInstance(modalsElement);

                modal.hide()
            })

            let modalsElement = document.querySelector('#productForm');

            modalsElement.addEventListener('hidden.bs.modal', () => {
                Livewire.dispatch('resetModal');
            });
        })
    </script>
</body>
</html>
