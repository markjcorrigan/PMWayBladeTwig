<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts: Sweet Alert Example</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
            <h2 class="font-bold text-2xl">Posts: Sweet Alert Example: Tailwind Version</h2>

            <div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <livewire:posts />
            </div>

            <a href="{{ route('bootstrap') }}">See Bootstrap version</a>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        window.addEventListener('swal:modal', event => {
            swal({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.type,
            });
        });

        window.addEventListener('swal:confirm', event => {
            swal({
                    title: event.detail.title,
                    text: event.detail.text,
                    icon: event.detail.type,
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        Livewire.dispatch('delete', { postId: event.detail.id });
                    }
                });
        });
    </script>
</body>

</html>
