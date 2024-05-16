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
									Créer un Rôle
								</button>
							</div>
						</div>
						<div class="overflow-x-auto">
							<table class="w-full text-sm text-left text-gray-500 dark:text-white">
								<thead class="text-xs uppercase text-boxdark bg-gray-50 dark:bg-boxdark dark:text-white">
									<tr>
										<th scope="col" class="p-4">Label</th>
										<th scope="col" class="p-4">Commentaire</th>
										<th scope="col" class="p-4">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($roles as $role)
									{{-- if latest role do not border-b class --}}
									@if ($loop->last)
									<tr class="dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-boxdark">
										@else
									<tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-boxdark">
										@endif
										<td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $role->label }}</td>
										<td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $role->commentaire }}</td>
										<td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											<div class="flex items-center space-x-4">
												<button type="button" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" data-role="{{ $role->id }}" aria-controls="drawer-update-product" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg editbutton bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:outline-none focus:ring-personnalise-300 dark:bg-personnalise-600 dark:hover:bg-personnalise-700 dark:focus:ring-personnalise-800">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
														<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
													</svg>
													Modifier
												</button>
												<button type="button" data-modal-target="delete-modal" data-modal-toggle="delete-modal" data-role="{{ $role->id }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border border-red-700 rounded-lg deletebutton hover:text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
													</svg>
													Supprimer
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
							<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Créer un rôle</h3>
							<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createProductModal">
								<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
								<span class="sr-only">Close modal</span>
							</button>
						</div>
						<!-- Modal body -->
						<form action="{{ route('roles.store') }}" method="POST">
							@csrf
							@method('POST')
                            <div class="flex flex-col gap-4 mb-4">
                                <div>
                                    <label for="label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du rôle</label>
                                    <input type="text" name="label" id="label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Nom du rôle" value="{{ old('label') }}">
                                    <x-input-error :messages="$errors->get('label')" class="mt-2" />
                                </div>
                                <div>
                                    <label for="commentaire" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commentaire du rôle</label>
                                    <input type="text" name="commentaire" id="commentaire" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Commentaire du rôle" value="{{ old('commentaire') }}">
                                    <x-input-error :messages="$errors->get('commentaire')" class="mt-2" />
                                </div>
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
			<form action="{{ route('roles.update') }}" method="POST" id="drawer-update-product" class="fixed top-0 left-0 w-full h-screen max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white z-999999 dark:bg-boxdark" tabindex="-1" aria-labelledby="drawer-update-product-label" aria-hidden="true">
                @csrf
                @method("PATCH")
				<h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Modifier le rôle</h5>
				<button type="button" data-drawer-dismiss="drawer-update-product" aria-controls="drawer-update-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
					</svg>
					<span class="sr-only">Close menu</span>
				</button>
				<div class="grid gap-4 sm:grid-cols-3 sm:gap-6 ">
					<div class="space-y-4 sm:col-span-2 sm:space-y-6">
                        <input type="hidden" name="role_id" id="edit_role_id">
                        <div>
                            <label for="edit_label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du rôle</label>
                            <input type="text" name="label" id="edit_label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Nom du rôle" value="{{ old('label') }}">
                            <x-input-error :messages="$errors->get('label')" class="mt-2" />
                        </div>
                        <div>
                            <label for="edit_commentaire" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commentaire du rôle</label>
                            <input type="text" name="commentaire" id="edit_commentaire" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-personnalise-600 focus:border-personnalise-600 block w-full p-2.5 dark:bg-boxdark dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-personnalise-500 dark:focus:border-personnalise-500" placeholder="Commentaore du rôle" value="{{ old('commentaire') }}">
                            <x-input-error :messages="$errors->get('commentaire')" class="mt-2" />
                        </div>
					</div>
				</div>
				<div class="flex justify-center gap-4 mt-6">
					<button type="submit" class="text-white bg-personnalise-700 hover:bg-personnalise-800 focus:ring-4 focus:outline-none focus:ring-personnalise-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-personnalise-600 dark:hover:bg-personnalise-700 dark:focus:ring-personnalise-800">Enregistrer le rôle</button>
                        <button type="button" id="deleteRoleId" class="text-red-600 inline-flex justify-center items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            Supprimer
                        </button>
				</div>
			</form>
			<!-- Delete Modal -->
			<div id="delete-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-999999 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
				<div class="relative w-full h-auto max-w-md max-h-full">
					<div class="relative bg-white rounded-lg shadow dark:bg-boxdark">
						<button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-modal">
							<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
							</svg>
							<span class="sr-only">Close modal</span>
						</button>
						<div class="p-6 text-center">
							<svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Êtes-vous sûr de vouloir supprimer ce rôle ?</h3>
                            <div class="flex items-center justify-center gap-2">
                                <button data-modal-toggle="delete-modal" id="deleteRoleId" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Oui, je suis sûr</button>
                                <button data-modal-toggle="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-boxdark dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Non, annuler</button>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script>

        var role_id = null;

        $(document).on('click', '.deletebutton', function() {
            role_id = $(this).data('role');
            $('#role_id').val(role_id);
        });


        $(document).on('click', '.editbutton', function() {
            role_id = $(this).data('role');
            // faire une requete ajax pour recuperer les infos de l'utilisateur
            $.ajax({
                url: '/controlpanel/roles/' + role_id + '/edit',
                type: 'GET',
                success: function(response) {
                    $('#edit_role_id').val(response.id);
                    $('#edit_label').val(response.label);
                    $('#edit_commentaire').val(response.commentaire);
                }
            });
        });

        $(document).on('click', '#deleteRoleId', function() {
            $.ajax({
                url: '/controlpanel/roles/delete/' + role_id,
                type: 'GET',
                success: function(response) {
                    location.reload();
                }
            })
        })




        // var currentDate = new Date();
        // var months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        // var day = currentDate.getDate();
        // var monthIndex = currentDate.getMonth();
        // var month = months[monthIndex];
        // var year = currentDate.getFullYear();
        // var formattedDate = day + " " + month + ", " + year;
        // console.log(formattedDate);






	</script>
</x-app-layout>
