<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="dark text-bodydark bg-boxdark-2">
        {{-- <!-- ===== Preloader Start ===== -->
        <include src="./partials/preloader.html"></include>
        <!-- ===== Preloader End ===== --> --}}
        <div class="flex h-screen overflow-hidden">
            <div class="relative flex flex-col justify-center flex-1 overflow-x-hidden overflow-y-auto" >
                <main>
                    <div class="p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
