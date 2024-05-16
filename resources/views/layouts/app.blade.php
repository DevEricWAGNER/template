<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeOe94pAAAAADf7Gjxa1bZYWPv2Ll2GmZ5NqDPP"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="googlebot" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="width">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <meta content="Site web de l'agence WebWAGNER, située dans la région Grand Est de la France. Cette page offre aux visiteurs un aperçu de l'agence' et de ses services. Vous pourrez trouver des infos" name="description">
        <meta content="WebWagner, Région Grand Est, Services numériques, Développement Web, Conception Web, Intégration Web, Projets, Offres d'emploi, Informations pratiques, Services, Site Internet" name="keywords">


        <title>{{ config('app.name', "Wag'CWSU") }}</title>
        <link rel="shortcut icon" href="{{ asset('favicon_backoffice.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <x-head.tinymce-config/>

        <script>
            function onClick(e) {
              e.preventDefault();
              grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6LeOe94pAAAAADf7Gjxa1bZYWPv2Ll2GmZ5NqDPP', {action: 'LOGIN'});
              });
            }
          </script>
    </head>
    <body
        x-data="{ page: 'profile', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
        @include('partials.preloader')
        <div class="flex h-screen overflow-hidden">
            @include('partials.sidebar')
            <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto" >
                @include('partials.header')
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
