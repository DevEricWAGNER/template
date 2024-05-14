
<div class="py-4 border-b border-stroke px-7 dark:border-strokedark">
    <h3 class="font-medium text-black dark:text-white">
    Informations Personnelles
    </h3>
</div>
<div class="p-7">
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-5.5">
            <x-input-label-update for="name" :value="__('Nom d\'utilisateur')" />
            <x-text-input-update id="name" name="name" type="text" class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" :value="old('name', $user->name)" required autofocus autocomplete="name" placeholder="devidjhon24" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="mb-5.5">
            <x-input-label-update for="email" :value="__('Adresse mail')" />
            <div class="relative">
                <span class="absolute left-4.5 top-4">
                    <svg
                      class="fill-current"
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g opacity="0.8">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M3.33301 4.16667C2.87658 4.16667 2.49967 4.54357 2.49967 5V15C2.49967 15.4564 2.87658 15.8333 3.33301 15.8333H16.6663C17.1228 15.8333 17.4997 15.4564 17.4997 15V5C17.4997 4.54357 17.1228 4.16667 16.6663 4.16667H3.33301ZM0.833008 5C0.833008 3.6231 1.9561 2.5 3.33301 2.5H16.6663C18.0432 2.5 19.1663 3.6231 19.1663 5V15C19.1663 16.3769 18.0432 17.5 16.6663 17.5H3.33301C1.9561 17.5 0.833008 16.3769 0.833008 15V5Z"
                          fill=""
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.983719 4.52215C1.24765 4.1451 1.76726 4.05341 2.1443 4.31734L9.99975 9.81615L17.8552 4.31734C18.2322 4.05341 18.7518 4.1451 19.0158 4.52215C19.2797 4.89919 19.188 5.4188 18.811 5.68272L10.4776 11.5161C10.1907 11.7169 9.80879 11.7169 9.52186 11.5161L1.18853 5.68272C0.811486 5.4188 0.719791 4.89919 0.983719 4.52215Z"
                          fill=""
                        />
                      </g>
                    </svg>
                </span>
                <x-text-input-update id="email" name="email" type="email" class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" :value="old('email', $user->email)" required autocomplete="username" placeholder="devidjond45@gmail.com" />

            </div>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="mt-2 text-sm text-gray-800 dark:text-gray-200">
                        {{ __('Votre adresse mail n\'est pas vérifiée.') }}

                        <button form="send-verification" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Cliquez ici pour renvoyer le lien de vérification par mail.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">
                            {{ __('Un nouveau lien de verification vous a été envoyé dans votre adresse mail.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex flex-col items-center gap-4.5">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 dark:text-green-400"
                >{{ __('Sauvegardé.') }}</p>
            @endif
        </div>
    </form>
</div>
