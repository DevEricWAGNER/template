<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <meta name="googlebot" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="width">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <meta content="Site web de la ville de Haguenau, située dans la région Grand Est de la France. Cette page offre aux visiteurs un aperçu de la ville et de ses services, ainsi que des informations pratiques pour les résidents et les touristes. Vous pourrez trouver des info" name="description">
        <meta content="Ville de Haguenau, Région Grand Est, Services municipaux, Événements locaux, Activités culturelles et sportives, Démarches administratives, Projets de la ville, Offres d'emploi, Informations pratiques, Tourisme, Actualités" name="keywords"> --}}

        <title>{{ config('app.name', "Wag' :: Content Web Site Updater") }}</title>
        <link rel="shortcut icon" href="{{ asset('favicon_backoffice.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body
        x-data="{ page: 'profile', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
        @include('partials.preloader')
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
