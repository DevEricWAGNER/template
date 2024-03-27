<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                @include('partials.sidebar')

                <!-- ===== Content Area Start ===== -->
                <div
                  class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
                >
                @include('partials.header')

                  <!-- ===== Main Content Start ===== -->
                  <main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                      <div class="mx-auto max-w-270">
                        @if (isset($header))
                            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                {{ $header }}
                            </div>
                        @endif
                        {{ $slot }}
                    </div>
                </div>
              </main>
            </div>
        </div>
    </body>
</html>
