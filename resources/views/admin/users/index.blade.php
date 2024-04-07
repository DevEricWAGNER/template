<x-app-layout>
    <main>
       <div class="relative w-full h-full p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
          <!-- Start block -->
          <section class="p-3 antialiased bg-gray-50 sm:p-5">
             <div class="px-4 mx-auto bg-white shadow-md max-w-screen-2xl lg:px-12 dark:bg-boxdark sm:rounded-lg">
                <div class="relative overflow-hidden">
                   <div class="flex flex-col items-stretch justify-between py-4 mx-4 space-y-3 md:flex-row md:items-center md:space-x-3 md:space-y-0 dark:border-boxdark">
                      <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                         <button type="button" id="createProductButton" data-modal-target="createProductModal" data-modal-toggle="createProductModal" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:ring-personnalise-300 dark:bg-personnalise-600 dark:hover:bg-personnalise-700 focus:outline-none dark:focus:ring-personnalise-800">
                            <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                               <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add User
                         </button>
                      </div>
                   </div>
                   <div class="overflow-x-auto">
                      <table class="w-full text-sm text-left text-gray-500 dark:text-white">
                         <thead class="text-xs uppercase text-boxdark bg-gray-50 dark:bg-boxdark dark:text-white">
                            <tr>
                               <th scope="col" class="p-4">Nom</th>
                               <th scope="col" class="p-4">Email</th>
                               <th scope="col" class="p-4">Login</th>
                               <th scope="col" class="p-4">Rôle</th>
                               <th scope="col" class="p-4">Status</th>
                               <th scope="col" class="p-4">Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($users as $user)
                            {{-- if latest useer do not border-b class --}}
                            @if ($loop->last)
                                <tr class="dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-boxdark">
                            @else
                                <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-boxdark">
                            @endif
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center mr-3">
                                            <img src="{{ asset('img/admin/' . $user->civilite . 'png') }}" alt="iMac Front Image" class="w-auto h-8 mr-3 rounded-full">
                                        {{ $user->name }}
                                    </div>
                                    </th>
                                    <td class="px-4 py-3">
                                    <span class="bg-personnalise-100 text-personnalise-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-personnalise-900 dark:text-personnalise-300">{{ $user->email }}</span>
                                    </td>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->login }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">@if ($user->superadmin) {{ __('Superadmin') }} @else {{ $user->role->label }} @endif</td>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                        @if ($user->activ)
                                            <div class="inline-block w-4 h-4 mr-2 bg-green-400 rounded-full"></div>
                                        @else
                                            <div class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full"></div>
                                        @endif
                                    </div>
                                    </td>

                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center space-x-4">
                                        <button type="button" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" aria-controls="drawer-update-product" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:outline-none focus:ring-personnalise-300 dark:bg-personnalise-600 dark:hover:bg-personnalise-700 dark:focus:ring-personnalise-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button" data-drawer-target="drawer-read-product-advanced" data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced" class="flex items-center px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-personnalise-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-boxdark dark:bg-boxdark dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-boxdark">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 -ml-0.5">
                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                            </svg>
                                            Preview
                                        </button>
                                        <button type="button" data-modal-target="delete-modal-{{ $user->id }}" data-modal-toggle="delete-modal-{{ $user->id }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border border-red-700 rounded-lg hover:text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </section>
          <!-- End block -->
          <div id="createProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 z-999999 justify-center items-center w-full h-[calc(100%-5rem)] md:h-[calc(100%-5rem)]">
             <div class="relative max-w-3xl p-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white border rounded-lg shadow dark:bg-boxdark dark:border-boxdark-2 sm:p-5">
                   <!-- Modal header -->
                   <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">
                      <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Créer un utilisateur</h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createProductModal">
                         <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                         </svg>
                         <span class="sr-only">Close modal</span>
                      </button>
                   </div>
                   <!-- Modal body -->
                   <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    @method('POST')
                      <div class="grid gap-4 mb-4 sm:grid-cols-2">
                         <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom d'utilisateur</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Nom d'utilisateur" readonly value="{{ old('name') }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                         </div>
                         <div>
                            <label for="civilite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civilite</label>
                            <select id="civilite" name="civilite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-500 focus:border-personnalise-500 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500">
                               <option value="Mr.">Monsieur</option>
                               <option value="Mme.">Madame</option>
                            </select>
                            <x-input-error :messages="$errors->get('civilite')" class="mt-2" />
                         </div>
                         <div>
                            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                            <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Prénom" required  value="{{ old('firstname') }}">
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                         </div>
                         <div>
                            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de famille</label>
                            <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Nom de famille" required  value="{{ old('lastname') }}">
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                         </div>
                         <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse mail</label>
                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Adresse mail" required  value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                         </div>
                         <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Mot de passe" required  value="{{ old('password') }}">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                         </div>
                         <div class="sm:col-span-2">
                            <label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Login</label>
                            <input type="text" name="login" id="login" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-personnalise-500 focus:border-personnalise-500 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Login" readonly  value="{{ old('login') }}">
                            <x-input-error :messages="$errors->get('login')" class="mt-2" />
                        </div>
                        <div>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="superadmin" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-boxdark-2 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-boxdark-2 peer-checked:bg-blue-600"></div>
                                <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Compte superadmin</span>
                            </label>
                            <x-input-error :messages="$errors->get('superadmin')" class="mt-2" />
                        </div>
                        <div>
                            <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Roles <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg></button>
                            <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
                        </div>
                        <div>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="activ" class="sr-only peer" checked>
                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Actif</span>
                            </label>

                        </div>
                      </div>



                        <!-- Dropdown menu -->
                        <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-boxdark">
                            <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                                @foreach ($roles as $role)
                                    <li>
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="radio-item-{{ $role->id }}" type="radio" name="role_id" value="{{ $role->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="radio-item-{{ $role->id }}" class="w-full text-sm font-medium text-gray-900 rounded ms-2 dark:text-gray-300">{{ $role->label }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                      <div class="items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                         <button type="submit" class="w-full sm:w-auto justify-center text-white inline-flex bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:outline-none focus:ring-personnalise-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-personnalise-600 dark:hover:bg-personnalise-700 dark:focus:ring-personnalise-800">Créer</button>
                         <button data-modal-toggle="createProductModal" type="button" class="w-full justify-center sm:w-auto text-gray-500 inline-flex items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-personnalise-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-boxdark-2 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-boxdark-2 dark:focus:ring-gray-600">
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            Annuler
                         </button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
          <!-- drawer component -->
          <form action="#" id="drawer-update-product" class="fixed top-0 left-0 z-40 w-full h-screen max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-boxdark" tabindex="-1" aria-labelledby="drawer-update-product-label" aria-hidden="true">
             <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
             <button type="button" data-drawer-dismiss="drawer-update-product" aria-controls="drawer-update-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Close menu</span>
             </button>
             <div class="grid gap-4 sm:grid-cols-3 sm:gap-6 ">
                <div class="space-y-4 sm:col-span-2 sm:space-y-6">
                   <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                      <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" value="Apple iMac 27&ldquo;" placeholder="Type product name" required="">
                   </div>
                   <div>
                      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                      <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-boxdark dark:border-gray-600">
                         <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                               <div class="flex items-center space-x-1 sm:pr-4">
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Attach file</span>
                                  </button>
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Embed map</span>
                                  </button>
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Upload image</span>
                                  </button>
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Format code</span>
                                  </button>
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Add emoji</span>
                                  </button>
                               </div>
                               <div class="flex-wrap items-center hidden space-x-1 sm:flex sm:pl-4">
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Add list</span>
                                  </button>
                                  <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                     <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                     </svg>
                                     <span class="sr-only">Settings</span>
                                  </button>
                               </div>
                            </div>
                            <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd" />
                               </svg>
                               <span class="sr-only">Full screen</span>
                            </button>
                            <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-boxdark" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 335px, 0px);">
                               Show full screen
                               <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                         </div>
                         <div class="px-4 py-3 bg-white rounded-b-lg dark:bg-boxdark"><textarea id="description" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-boxdark focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write product description here" required="">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US</textarea></div>
                      </div>
                   </div>
                   <div class="mb-4">
                      <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Images</span>
                      <div class="grid grid-cols-3 gap-4 mb-4">
                         <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-boxdark">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="imac image">
                            <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                               </svg>
                               <span class="sr-only">Remove image</span>
                            </button>
                         </div>
                         <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-boxdark">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="imac image">
                            <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                               </svg>
                               <span class="sr-only">Remove image</span>
                            </button>
                         </div>
                         <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-boxdark">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="imac image">
                            <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                               </svg>
                               <span class="sr-only">Remove image</span>
                            </button>
                         </div>
                         <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-boxdark">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="imac image">
                            <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                               </svg>
                               <span class="sr-only">Remove image</span>
                            </button>
                         </div>
                      </div>
                      <div class="flex items-center justify-center w-full">
                         <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-boxdark hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                               <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                               </svg>
                               <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                  <span class="font-semibold">Click to upload</span>
                                  or drag and drop
                               </p>
                               <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden">
                         </label>
                      </div>
                   </div>
                   <div class="flex items-center mb-4">
                      <input id="product-options" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-personnalise-600 focus:ring-personnalise-500 dark:focus:ring-personnalise-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-boxdark dark:border-gray-600">
                      <label for="product-options" class="ml-2 text-sm text-gray-500 dark:text-gray-300">Product has multiple options, like different colors or sizes</label>
                   </div>
                   <div class="relative">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                         <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                         </svg>
                      </div>
                      <input datepicker="" id="datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-500 focus:border-personnalise-500 block w-full pl-10 p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500 datepicker-input" value="15/08/2022" placeholder="Select date">
                   </div>
                </div>
                <div class="space-y-4 sm:space-y-6">
                   <div>
                      <label for="product-brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                      <input type="text" id="product-brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-500 focus:border-personnalise-500 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" value="Apple" placeholder="Product Brand" required="">
                   </div>
                   <div>
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                      <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-500 focus:border-personnalise-500 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500">
                         <option selected="">Electronics</option>
                         <option value="TV">TV/Monitors</option>
                         <option value="PC">PC</option>
                         <option value="GA">Gaming/Console</option>
                         <option value="PH">Phones</option>
                      </select>
                   </div>
                   <div>
                      <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Weight (kg)</label>
                      <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" value="12" placeholder="Ex. 12" required="">
                   </div>
                   <div>
                      <label for="length" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Length (cm)</label>
                      <input type="number" name="length" id="lenght" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" value="105" placeholder="Ex. 105" required="">
                   </div>
                   <div>
                      <label for="breadth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breadth (cm)</label>
                      <input type="number" name="breadth" id="breadth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" value="15" placeholder="Ex. 15" required="">
                   </div>
                   <div>
                      <label for="width" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Width (cm)</label>
                      <input type="number" name="width" id="width" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" value="23" placeholder="Ex. 23" required="">
                   </div>
                </div>
             </div>
             <div class="grid grid-cols-2 gap-4 mt-6 sm:w-1/2">
                <button type="submit" class="text-white bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:outline-none focus:ring-personnalise-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-personnalise-600 dark:hover:bg-personnalise-700 dark:focus:ring-personnalise-800">Update product</button>
                <button type="button" class="text-red-600 inline-flex justify-center items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                   <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                   </svg>
                   Delete
                </button>
             </div>
          </form>
          <!-- Preview Drawer -->
          <div id="drawer-read-product-advanced" class="fixed top-0 left-0 z-40 w-full h-screen max-w-lg p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-boxdark" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
             <div>
                <h4 id="read-drawer-label" class="mb-1.5 leading-none text-xl font-semibold text-gray-900 dark:text-white">Apple iMac 25"</h4>
                <h5 class="mb-5 text-xl font-bold text-gray-900 dark:text-white">$2999</h5>
             </div>
             <button type="button" data-drawer-dismiss="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Close menu</span>
             </button>
             <div class="grid grid-cols-3 gap-4 mb-4 sm:mb-5">
                <div class="w-auto p-2 bg-gray-100 rounded-lg dark:bg-boxdark">
                   <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Side Image">
                </div>
                <div class="w-auto p-2 bg-gray-100 rounded-lg dark:bg-boxdark">
                   <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="iMac Front Image">
                </div>
                <div class="w-auto p-2 bg-gray-100 rounded-lg dark:bg-boxdark">
                   <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="iMac Back Image">
                </div>
                <div class="w-auto p-2 bg-gray-100 rounded-lg dark:bg-boxdark">
                   <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Back Image">
                </div>
                <div class="w-auto p-2 bg-gray-100 rounded-lg dark:bg-boxdark">
                   <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="iMac Front Image">
                </div>
                <div class="w-auto p-2 bg-gray-100 rounded-lg dark:bg-boxdark">
                   <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Side Image">
                </div>
             </div>
             <dl class="sm:mb-5">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US.</dd>
             </dl>
             <dl class="grid grid-cols-2 gap-4 mb-4">
                <div class="col-span-2 p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark sm:col-span-1 dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Shipping</dt>
                   <dd class="flex items-center text-gray-500 dark:text-gray-400">
                      <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                      </svg>
                      United States, Europe
                   </dd>
                </div>
                <div class="col-span-2 p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark sm:col-span-1 dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Colors</dt>
                   <dd class="flex items-center space-x-2 font-light text-gray-500 dark:text-gray-400">
                      <div class="flex-shrink-0 w-6 h-6 bg-purple-600 rounded-full"></div>
                      <div class="flex-shrink-0 w-6 h-6 bg-indigo-400 rounded-full"></div>
                      <div class="flex-shrink-0 w-6 h-6 rounded-full bg-personnalise-600"></div>
                      <div class="flex-shrink-0 w-6 h-6 bg-pink-400 rounded-full"></div>
                      <div class="flex-shrink-0 w-6 h-6 bg-teal-300 rounded-full"></div>
                      <div class="flex-shrink-0 w-6 h-6 bg-green-300 rounded-full"></div>
                   </dd>
                </div>
                <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Product State</dt>
                   <dd class="text-gray-500 dark:text-gray-400">
                      <span class="bg-personnalise-100 text-personnalise-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-personnalise-200 dark:text-personnalise-800">
                         <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                         </svg>
                         New
                      </span>
                   </dd>
                </div>
                <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Sold by</dt>
                   <dd class="text-gray-500 dark:text-gray-400">Flowbite</dd>
                </div>
                <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Ships from</dt>
                   <dd class="text-gray-500 dark:text-gray-400">Flowbite</dd>
                </div>
                <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Brand</dt>
                   <dd class="text-gray-500 dark:text-gray-400">Apple</dd>
                </div>
                <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Dimensions (cm)</dt>
                   <dd class="text-gray-500 dark:text-gray-400">105 x 15 x 23</dd>
                </div>
                <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-boxdark dark:border-gray-600">
                   <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Item weight</dt>
                   <dd class="text-gray-500 dark:text-gray-400">12kg</dd>
                </div>
             </dl>
             <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4">
                <button type="button" class="text-white w-full inline-flex items-center justify-center bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:outline-none focus:ring-personnalise-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-personnalise-600 dark:hover:bg-personnalise-700 dark:focus:ring-personnalise-800">
                   <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                   </svg>
                   Edit
                </button>
                <button type="button" class="inline-flex w-full items-center text-white justify-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                   <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" />
                   </svg>
                   Delete
                </button>
             </div>
          </div>
          <!-- Delete Modal -->

          @foreach ($users as $user)
          <div id="delete-modal-{{ $user->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
             <div class="relative w-full h-auto max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-boxdark">
                   <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-modal-{{ $user->id }}">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                   </button>
                   <div class="p-6 text-center">
                      <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Êtes-vous sûr de vouloir supprimer cet utilisateur ?</h3>
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button data-modal-toggle="delete-modal-{{ $user->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Oui, je suis sûr</button>
                        </form>
                      <button data-modal-toggle="delete-modal-{{ $user->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-boxdark dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Non, annuler</button>
                   </div>
                </div>
             </div>
          </div>
          @endforeach
       </div>
    </main>
    <script>
        function generateLogin(firstname, lastname) {
            const firstLetter = firstname.charAt(0).toLowerCase();
            const lastName = lastname.toLowerCase();
            const Login = `${firstLetter}.${lastName}`;
            return Login;
        }

        function generateUsername(firstname, lastname) {
            const firstLetter = firstname;
            const lastName = lastname;
            const Username = `${firstLetter} ${lastName}`;
            return Username;
        }
        document.getElementById("firstname").addEventListener("blur", capitalizeFirstLetter);
        document.getElementById("lastname").addEventListener("blur", capitalizeLastName);
        document.getElementById("firstname").addEventListener("blur", updateLoginAndUsername);
        document.getElementById("lastname").addEventListener("blur", updateLoginAndUsername);

        function updateLoginAndUsername() {
          const firstname = document.getElementById("firstname").value;
          const lastname = document.getElementById("lastname").value;
          const generatedLoginField = document.getElementById("login");
          const generatedUsernameField = document.getElementById("name");
          const Login = generateLogin(firstname, lastname);
          const Username = generateUsername(firstname, lastname);
          generatedLoginField.value = Login;
          generatedUsernameField.value = Username;
        }

        function capitalizeFirstLetter() {
          const firstnameField = document.getElementById("firstname");
          const firstLetter = firstnameField.value.charAt(0).toUpperCase();
          firstnameField.value = firstLetter + firstnameField.value.slice(1);
        }

        function capitalizeLastName() {
          const lastnameField = document.getElementById("lastname");
          lastnameField.value = lastnameField.value.toUpperCase();
        }
    </script>
 </x-app-layout>
