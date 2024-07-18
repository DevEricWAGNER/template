<x-app-layout>
    <main>
		<div class="relative w-full h-full p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="site-tab" data-tabs-target="#site" type="button" role="tab" aria-controls="site" aria-selected="false">Paramètres du site</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="messagerie-tab" data-tabs-target="#messagerie" type="button" role="tab" aria-controls="messagerie" aria-selected="false">Paramètre de messagerie</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="favicon-tab" data-tabs-target="#favicon" type="button" role="tab" aria-controls="favicon" aria-selected="false">Favicon et Apple Touch Icon</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="api-tab" data-tabs-target="#api" type="button" role="tab" aria-controls="api" aria-selected="false">Autre API</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="cookies-tab" data-tabs-target="#cookies" type="button" role="tab" aria-controls="cookies" aria-selected="false">Cookies et mentions légales</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="accessibilite-tab" data-tabs-target="#accessibilite" type="button" role="tab" aria-controls="accessibilite" aria-selected="false">Acessibilité</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="social-tab" data-tabs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">Liens sociaux</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="collab-tab" data-tabs-target="#collab" type="button" role="tab" aria-controls="collab" aria-selected="false">Collaborateurs</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <form action="{{route('project.update' )}}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6" id="GeneralParameters">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="project_id" id="project_id_input">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="site" role="tabpanel" aria-labelledby="site-tab">
                        <h2 class="mb-8 text-4xl">Paramètres généraux du site</h2>
                            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                                <div class="flex flex-col gap-6">
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteName" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Nom du site <span class="text-xl text-danger">*<span></label>
                                            <input type="text" id="siteName" name="siteName" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteAuthor" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Auteur du site <span class="text-xl text-danger">*<span></label>
                                            <input type="text" id="siteAuthor" name="siteAuthor" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="sitePhoneNumber" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Numéro de Téléphone de contact <span class="text-xl text-danger">*<span></label>
                                            <input type="text" id="sitePhoneNumber" name="sitePhoneNumber" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                    <div class="items-center overflow-hidden bg-white rounded-lg shadow-md w-fit dark:bg-boxdark">
                                        <div class="px-4 py-6">
                                            <input id="siteLogo" type="file" class="hidden" name="siteLogo" accept="image/*"/>
                                            <div id="image-preview" class="flex items-center justify-center h-full p-6 mx-auto text-center bg-gray-100 border-2 border-gray-400 border-dashed rounded-lg cursor-pointer ">
                                                <label for="siteLogo" class="cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mx-auto mb-4 text-gray-700">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                                    </svg>
                                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">{{ __('Upload picture') }}</h5>
                                                    <p class="text-sm font-normal text-gray-400 md:px-6">{{ __('Choose photo size should be less than ') }}<b class="text-gray-600">{{ __('2mb') }}</b></p>
                                                    <p class="text-sm font-normal text-gray-400 md:px-6">{{ __('and should be in ') }}<b class="text-gray-600">{{ __('JPG, PNG, or GIF') }}</b>{{ __(' format.') }}</p>
                                                    <span id="filename" class="z-50 text-gray-500 bg-gray-200"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-6">
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteCopyright" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Copyright du site internet</label>
                                            <input type="text" id="siteCopyright" name="siteCopyright" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm">
                                            <label for="siteAdress" class="inline-flex items-center px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Adresse de contact (pied de page)</label>
                                            <textarea id="siteAdress" name="siteAdress" rows="20" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm pe-11 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteKeywords" class="inline-flex items-center px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Mot clé par défaut</label>
                                            <input type="text" id="siteKeywords" value="" name="siteKeywords" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteDescription" class="inline-flex items-center px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Description</label>
                                            <textarea id="siteDescription" name="siteDescription" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteAdditional_metatags" class="inline-flex items-center px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Balise META</label>
                                            <textarea id="siteAdditional_metatags" name="siteAdditional_metatags" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="messagerie" role="tabpanel" aria-labelledby="messagerie-tab">
                        <h2 class="mb-8 text-4xl">Paramètres de messagerie</h2>
                            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                                <div class="flex flex-col gap-6">
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteEmail" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Adresse email par défaut <span class="text-xl text-danger">*<span></label>
                                            <input type="text" id="siteEmail" name="siteEmail" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                            <label for="siteEmailName" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Nom à afficher dans les emails <span class="text-xl text-danger">*<span></label>
                                            <input type="text" id="siteEmailName" name="siteEmailName" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-6">
                                    <div class="flex justify-center">
                                        <div class="items-center overflow-hidden bg-white rounded-lg shadow-md w-fit dark:bg-boxdark">
                                            <div class="px-4 py-6">
                                                <input id="siteEmailPhoto" type="file" class="hidden" name="siteEmailPhoto" accept="image/*"/>
                                                <div id="image-previewEmail" class="flex items-center justify-center h-full p-6 mx-auto text-center bg-gray-100 border-2 border-gray-400 border-dashed rounded-lg cursor-pointer ">
                                                    <label for="siteEmailPhoto" class="cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mx-auto mb-4 text-gray-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                                        </svg>
                                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">{{ __('Upload picture') }}</h5>
                                                        <p class="text-sm font-normal text-gray-400 md:px-6">{{ __('Choose photo size should be less than ') }}<b class="text-gray-600">{{ __('2mb') }}</b></p>
                                                        <p class="text-sm font-normal text-gray-400 md:px-6">{{ __('and should be in ') }}<b class="text-gray-600">{{ __('JPG, PNG, or GIF') }}</b>{{ __(' format.') }}</p>
                                                        <span id="filenameEmail" class="z-50 text-gray-500 bg-gray-200"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="favicon" role="tabpanel" aria-labelledby="favicon-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Favicon tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="api" role="tabpanel" aria-labelledby="api-tab">
                        <div class="p-4 mx-auto bg-white shadow-md max-w-screen-2xl lg:px-12 dark:bg-boxdark sm:rounded-lg">
                            <h2 class="mb-8 text-4xl">Paramètres API</h2>
                                <div>
                                    <h3 class="mb-6 text-3xl">reCaptcha</h3>
                                    <div class="p-4 border-l-8 border-l-personnalise-700">
                                        <div>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" name="googleCapt_activ" id="googleCapt_activ" class="sr-only peer">
                                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-boxdark-2 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-boxdark-2 peer-checked:bg-blue-600"></div>
                                                <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Utilisation de google captcha ?</span>
                                            </label>
                                            <x-input-error :messages="$errors->get('googleCapt_activ')" class="mt-2" />
                                        </div>

                                        <div id="use_recaptcha">
                                            <div class="mt-4 space-y-4 sm:space-y-6">
                                                <div>
                                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                                        <label for="googleCapt_siteKey" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Clé du site reCaptcha</label>
                                                        <input type="text" id="googleCapt_siteKey" name="googleCapt_siteKey" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                                        <label for="googleCapt_secretKey" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Clé secrete de reCaptcha</label>
                                                        <input type="text" id="googleCapt_secretKey" name="googleCapt_secretKey" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="mb-6 text-3xl">Google analytics</h3>
                                    <div class="p-4 border-l-8 border-l-personnalise-700">
                                        <div>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" name="googleAnalytics_activ" id="googleAnalytics_activ" class="sr-only peer">
                                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-boxdark-2 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-boxdark-2 peer-checked:bg-blue-600"></div>
                                                <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Utilisation de google analytics ?</span>
                                            </label>
                                            <x-input-error :messages="$errors->get('googleAnalytics_activ')" class="mt-2" />
                                        </div>

                                        <div id="use_gganalytics">
                                            <div class="mt-4 space-y-4 sm:space-y-6">
                                                <div>
                                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                                        <label for="googleAnalytics_code" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Clé de suivi google Analytics</label>
                                                        <input type="text" id="googleAnalytics_code" name="googleAnalytics_code" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="mb-6 text-3xl">Stripe</h3>
                                    <div class="p-4 border-l-8 border-l-personnalise-700">
                                        <div>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" name="stripe_activ" id="stripe_activ" class="sr-only peer">
                                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-boxdark-2 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-boxdark-2 peer-checked:bg-blue-600"></div>
                                                <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Utilisation de Stripe ?</span>
                                            </label>
                                            <x-input-error :messages="$errors->get('stripe_activ')" class="mt-2" />
                                        </div>

                                        <div id="use_stripe">
                                            <div class="mt-4 space-y-4 sm:space-y-6">
                                                <div>
                                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                                        <label for="stripe_key" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Clé publique Stripe</label>
                                                        <input type="text" id="stripe_key" name="stripe_key" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                                        <label for="stripe_secret" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Clé secrète Stripe</label>
                                                        <input type="text" id="stripe_secret" name="stripe_secret" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="cookies" role="tabpanel" aria-labelledby="cookies-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Cookies tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="accessibilite" role="tabpanel" aria-labelledby="accessibilite-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Accessibilite tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <div class="p-4 mx-auto bg-white shadow-md max-w-screen-2xl lg:px-12 dark:bg-boxdark sm:rounded-lg">
                            <h2 class="mb-8 text-4xl">Les liens sociaux</h2>

                                <div class="space-y-2">
                                    <h3 class="text-3xl">Lien vers votre page Youtube</h3>
                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                        <label for="siteYoutube" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                                            <span class="hidden dark:block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="18" fill="#fff"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                                            </span>
                                            <span class="block dark:hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="18"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                                            </span>
                                        </label>
                                        <input type="text" id="siteYoutube" name="siteYoutube" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-3xl">Lien vers votre page Twitter</h3>
                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                        <label for="siteTwitter" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                                            <span class="hidden dark:block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18" fill="#fff"><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>
                                            </span>
                                            <span class="block dark:hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18"><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>
                                            </span>
                                        </label>
                                        <input type="text" id="siteTwitter" name="siteTwitter" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-3xl">Lien vers votre page Facebook</h3>
                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                        <label for="siteFacebook" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                                            <span class="hidden dark:block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18" fill="#fff"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                                            </span>
                                            <span class="block dark:hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                                            </span>
                                        </label>
                                        <input type="text" id="siteFacebook" name="siteFacebook" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-3xl">Lien vers votre page Instagram</h3>
                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                        <label for="siteInstagram" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                                            <span class="hidden dark:block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18" fill="#fff"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                            </span>
                                            <span class="block dark:hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                            </span>
                                        </label>
                                        <input type="text" id="siteInstagram" name="siteInstagram" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-3xl">Lien vers votre page LinkedIn</h3>
                                    <div class="flex flex-col rounded-lg shadow-sm lg:flex-row">
                                        <label for="siteLinekdin" class="inline-flex items-center gap-1 px-4 py-3 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-t-md lg:rounded-tr-none lg:rounded-l-md lg:border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                                            <span class="hidden dark:block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18" fill="#fff"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                            </span>
                                            <span class="block dark:hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="18"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                            </span>
                                        </label>
                                        <input type="text" id="siteLinekdin" name="siteLinekdin" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-b-lg shadow-sm lg:rounded-b-none pe-11 lg:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="collab" role="tabpanel" aria-labelledby="collab-tab">
                        <div class="p-4 mx-auto bg-white shadow-md max-w-screen-2xl lg:px-12 dark:bg-boxdark sm:rounded-lg">
                            <h2 class="mb-8 text-4xl">Choisissez qui sont vos collaborateurs</h2>
                            <div id="project_users"></div>
                        </div>
                    </div>

                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg shadow-sm dark:border-gray-700">
                        <span class="p-3 text-white bg-blue-500 dark:bg-blue-900">Validation des données</span>
                        <div class="p-3">
                            <button type="submit" class="px-3 py-2 text-black bg-blue-500 rounded-lg dark:text-white dark:bg-slate-900">Sauvegarder les données</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

</x-app-layout>


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const elementsMap = {
            'googleCapt_activ': 'use_recaptcha',
            'googleAnalytics_activ': 'use_gganalytics',
            'stripe_activ': 'use_stripe'
        };

        Object.keys(elementsMap).forEach(function(checkboxId) {
            const checkbox = document.getElementById(checkboxId);
            const divId = elementsMap[checkboxId];
            const div = document.getElementById(divId);

            checkbox.addEventListener('change', function() {
                div.style.display = this.checked ? 'block' : 'none';
            });

            // Set initial state
            div.style.display = checkbox.checked ? 'block' : 'none';
        });
    });
</script>

