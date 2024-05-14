<x-app-layout>
    <main>
        <div class="p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
            <div class="mx-auto max-w-270">
                <div class="flex flex-col gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between" >
                    <h2 class="font-bold text-black text-title-md2 dark:text-white">
                    Page de Paramêtres
                    </h2>

                    <nav>
                        <ol class="flex items-center gap-2">
                            <li>
                                <a class="font-medium" href="index.html">Controlpanel /</a>
                            </li>
                            <li class="font-medium text-primary">Paramêtres</li>
                        </ol>
                    </nav>
                </div>

                <div class="grid grid-cols-5 gap-8">
                    <div class="col-span-5 xl:col-span-3">
                        <div class="bg-white border rounded-sm border-stroke shadow-default dark:border-strokedark dark:bg-boxdark">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                    <div class="col-span-5 xl:col-span-2">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
