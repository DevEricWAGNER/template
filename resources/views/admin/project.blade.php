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
                    <h2>Paramètres généraux du site</h2>
                    <form action="">
                        <div>
                            <label for="siteName">Nom du site*</label>
                            <input type="text" id="siteName" name="siteName">
                        </div>
                        <div>
                            <label for="siteAuthor">Auteur du site*</label>
                            <input type="text" id="siteAuthor" name="siteAuthor">
                        </div>
                        <div>
                            <label for="siteAdress">Adresse de contact (pied de page)</label>
                            <textarea id="siteAdress" name="siteAdress"></textarea>
                        </div>
                        <div>
                            <label for="siteCopyright">Copyright du site internet</label>
                            <input type="text" id="siteCopyright" name="siteCopyright">
                        </div>
                        <div>
                            <label for="sitePhoneNumber">Numéro de Téléphone de contact*</label>
                            <input type="text" id="sitePhoneNumber" name="sitePhoneNumber">
                        </div>
                        <div>
                            <label for="siteKeywords">Mot clé par défaut</label>
                            <input type="text" id="siteKeywords" name="siteKeywords">
                        </div>
                        <div>
                            <label for="siteDescription">Description</label>
                            <input type="text" id="siteDescription" name="siteDescription">
                        </div>
                        <div>
                            <label for="siteAdditional_metatags">Balise META</label>
                            <input type="text" id="siteAdditional_metatags" name="siteAdditional_metatags">
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
</x-app-layout>
