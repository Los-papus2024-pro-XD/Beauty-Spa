<div>
    <x-dashboard>
        <div>
            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Secciones para Servicio</h1>
            </div>
            <div>
                <button type="button" wire:click='openModal'
                    class="text-white mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Añadir Seccion
                    <svg class="rtl:rotate-180 w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>


                <div class="mb-5">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre de la Seccion
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descripcion
                                    </th>

                                    <th scope="col" class="px-6 py-3 ">
                                        Editar
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Eliminar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $item)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item['name'] }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item['description'] }}
                                        </td>

                                        <td class="px-6 py-4">
                                            <button type="button" wire:click='editSection({{ $item['id'] }})'
                                                class="text-white bg-spa-700 hover:bg-spa-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Editar</button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button type="button" wire:click='messageDelete({{ $item['id'] }})'
                                                class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                @if ($addSectionOpen)
                    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center mt-10">
                        <div
                            class="bg-white p-6 rounded shadow-lg w-full max-w-[90%] lg:max-w-[50%] md:max-w-[70%] max-h-screen overflow-hidden">
                            <div class="overflow-y-auto max-h-[80vh]" wire:click.away="closeModal">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-xl font-bold">Agregar Secciones</h2>
                                    <button type="button" wire:click="closeModal">
                                        <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </div>


                                @if ($messageConfirmDelete)
                                    <div id="alert-additional-content-2"
                                        class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <div class="flex items-center">
                                            <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                            </svg>
                                            <span class="sr-only">Info</span>
                                            <h3 class="text-lg font-medium">Estas seguro de Eliminar</h3>
                                        </div>
                                        <div class="mt-2 mb-4 text-sm">
                                            Si lo eliminas se perdera y no se podra recuperar, tendras que crear la
                                            seccion de nuevo
                                        </div>
                                        <div class="flex">
                                            <button type="button" wire:click='deleteConfirm'
                                                class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">

                                                <svg class="me-2 h-5 w-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                </svg>
                                                Confirmar
                                            </button>
                                            <button type="button" wire:click='deleteCancel'
                                                class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white font-medium rounded-lg text-xs px-3 py-1.5 text-center"
                                                data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                                                Cancelar
                                            </button>
                                        </div>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Nombre
                                        de la Seccion</label>
                                    <input type="text" id="small-input" wire:model.live='name'
                                        class="block w-full px-2 py-3 text-gray-900 border border-gray-300 rounded-lg text-xs">
                                    @error('name')
                                        <div class="p-2 mb-4 mt-1 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                            <span class="font-medium">Error!</span> {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                                    <textarea id="message" rows="4" wire:model.live='description'
                                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300"
                                        placeholder="Cuentamos un poco mas sobre esta seccion..."></textarea>
                                    @error('description')
                                        <div class="p-2 mb-4 mt-1 text-sm text-red-800 rounded-lg bg-red-50"
                                            role="alert">
                                            <span class="font-medium">Error!</span> {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div>

                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="file_input">Subir la Imagen</label>
                                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                        x-on:livewire-upload-finish="uploading = false"
                                        x-on:livewire-upload-cancel="uploading = false"
                                        x-on:livewire-upload-error="uploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">

                                        <input wire:model.live='path'
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 "
                                            aria-describedby="file_input_help" id="file_input" type="file">
                                        <!-- Progress Bar -->
                                        <div x-show="uploading" class="mt-2">
                                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                <div class="bg-blue-600 h-2.5 rounded-full"
                                                    x-bind:style="{ width: progress + '%' }"></div>
                                            </div>
                                            <div class="text-sm mt-1 text-gray-500" x-text="progress + '%'"></div>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                        Imagen JPG, PNG, formato 16:9 (MAX. 12MB).</p>
                                    @error('path')
                                        <div class="p-2 mb-4 mt-1 text-sm text-red-800 rounded-lg bg-red-50"
                                            role="alert">
                                            <span class="font-medium">Error!</span> {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="flex justify-between items-center">
                                    <button type="button" wire:click='saveSection'
                                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700">Guardar
                                        Seccion</button>
                                    @if ($editMode)
                                        <button type="button" wire:click='cancelEdit'
                                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-500">Cancelar</button>
                                    @endif
                                </div>

                                <hr class="my-5">

                                <div>
                                    <button wire:click="closeModal"
                                        class="border-red-500 border-[1.5px] bg-red-500 text-white px-7 py-2 rounded hover:text-red-500 hover:bg-white transition-all duration-300">
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($messageConfirmDelete)
                    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center mt-10">
                        <div
                            class="bg-white p-6 rounded shadow-lg w-full max-w-[90%] lg:max-w-[50%] md:max-w-[70%] max-h-screen overflow-hidden">
                            <div class="overflow-y-auto max-h-[80vh]" wire:click.away="closeModal">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-xl font-bold">Eliminar</h2>
                                    <button type="button" wire:click="closeModal">
                                        <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </div>



                                <div id="alert-additional-content-2"
                                    class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <div class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <h3 class="text-lg font-medium">Estas seguro de Eliminar</h3>
                                    </div>
                                    <div class="mt-2 mb-4 text-sm">
                                        Si lo eliminas se perdera y no se podra recuperar, tendras que crear la
                                        seccion de nuevo
                                    </div>
                                    <div class="flex">
                                        <button type="button" wire:click='deleteConfirm'
                                            class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">

                                            <svg class="me-2 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                            </svg>
                                            Confirmar
                                        </button>
                                        <button type="button" wire:click='deleteCancel'
                                            class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white font-medium rounded-lg text-xs px-3 py-1.5 text-center"
                                            data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                                            Cancelar
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </x-dashboard>
</div>
