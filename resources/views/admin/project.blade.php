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
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="site" role="tabpanel" aria-labelledby="site-tab">
                    <h2 class="mb-8 text-4xl">Paramètres généraux du site</h2>
                    <form action="" class="flex flex-col gap-6">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="flex flex-col gap-6">
                                <div>
                                    <div class="flex rounded-lg shadow-sm">
                                        <label for="siteName" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Nom du site*</label>
                                        <input type="text" id="siteName" name="siteName" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex rounded-lg shadow-sm">
                                        <label for="siteAuthor" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Auteur du site*</label>
                                        <input type="text" id="siteAuthor" name="siteAuthor" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex rounded-lg shadow-sm">
                                        <label for="sitePhoneNumber" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Numéro de Téléphone de contact*</label>
                                        <input type="text" id="sitePhoneNumber" name="sitePhoneNumber" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div class="items-center overflow-hidden bg-white rounded-lg shadow-md w-fit dark:bg-boxdark">
                                    <div class="px-4 py-6">
                                        <div id="image-preview" class="flex items-center justify-center h-full p-6 mx-auto text-center bg-gray-100 border-2 border-gray-400 border-dashed rounded-lg cursor-pointer ">
                                            <input id="siteLogo" type="file" class="hidden" name="siteLogo" accept="image/*" />
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
                                    <div class="flex rounded-lg shadow-sm">
                                        <label for="siteCopyright" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Copyright du site internet</label>
                                        <input type="text" id="siteCopyright" name="siteCopyright" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    </div>
                                </div>
                                <div>
                                    <label for="siteAdress" >Adresse de contact (pied de page)</label>
                                    <textarea id="siteAdress" name="siteAdress"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex rounded-lg shadow-sm">
                                <label for="siteKeywords" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Mot clé par défaut</label>
                                <input type="text" id="siteKeywords" name="siteKeywords" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                        </div>
                        <div>
                            <div class="flex rounded-lg shadow-sm">
                                <label for="siteDescription" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Description</label>
                                <textarea id="siteDescription" name="siteDescription" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                            </div>
                        </div>
                        <div>
                            <div class="flex rounded-lg shadow-sm">
                                <label for="siteAdditional_metatags" class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">Balise META</label>
                                <textarea id="siteAdditional_metatags" name="siteAdditional_metatags" class="block w-full px-4 py-3 text-sm border-gray-200 shadow-sm pe-11 rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="messagerie" role="tabpanel" aria-labelledby="messagerie-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Messagerie tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="favicon" role="tabpanel" aria-labelledby="favicon-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Favicon tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="api" role="tabpanel" aria-labelledby="api-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">API tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="cookies" role="tabpanel" aria-labelledby="cookies-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Cookies tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="accessibilite" role="tabpanel" aria-labelledby="accessibilite-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Accessibilite tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="social" role="tabpanel" aria-labelledby="social-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Liens sociaux tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </main>
    <script>
        const uploadInput = document.getElementById('siteLogo');
        const filenameLabel = document.getElementById('filename');
        const imagePreview = document.getElementById('image-preview');

        // Check if the event listener has been added before
        let isEventListenerAdded = false;

        uploadInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                filenameLabel.textContent = file.name;

                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.classList.remove('p-6');
                    imagePreview.innerHTML =
                        `<img src="${e.target.result}" class="mx-auto rounded-lg max-h-48" alt="Image preview" />`;
                    imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                    if (!isEventListenerAdded) {
                        imagePreview.addEventListener('click', () => {
                            uploadInput.click();
                        });
                        isEventListenerAdded = true;
                    }
                };
                reader.readAsDataURL(file);
            } else {
                filenameLabel.textContent = '';
                imagePreview.classList.add('p-6');
                imagePreview.innerHTML =
                    `<div class="flex items-center justify-center text-gray-500 bg-gray-200 rounded-lg">No image preview</div>`;
                imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                imagePreview.removeEventListener('click', () => {
                    uploadInput.click();
                });

                isEventListenerAdded = false;
            }
        });

        uploadInput.addEventListener('click', (event) => {
          event.stopPropagation();
        });
    </script>
</x-app-layout>
