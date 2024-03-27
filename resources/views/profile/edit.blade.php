<x-app-layout>
    <x-slot name="header">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            {{ __('Settings Page') }}
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Settings</li>
            </ol>
        </nav>
    </x-slot>

    <div class="grid grid-cols-5 gap-8">
        <div class="col-span-5 xl:col-span-3">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
        <div class="col-span-5 xl:col-span-2">
            @include('profile.partials.update-password-form')
        </div>
    </div>
</x-app-layout>
