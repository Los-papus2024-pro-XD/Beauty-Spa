<div>
    <x-dashboard>
        <div>
            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl required">
                    Servicios</h1>
            </div>
            <div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 " required">Nombre
                            del Servicio</label>
                        <input type="text" id="name" wire:model.live='name'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                            required />
                        @error('name')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror


                    </div>
                    <div>
                        <label for="description_service" class="block mb-2 text-sm font-medium text-gray-900 "
                            required">Descripcion</label>
                        <input type="text" id="description_service" wire:model.live='description'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                            required />
                        @error('description')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 " required">Precio
                            (MXN)</label>
                        <input type="number" id="price" wire:model.live='price'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                            required />
                        @error('price')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="discount" class="block mb-2 text-sm font-medium text-gray-900 "
                            required">Descuento</label>
                        <input type="number" id="discount" wire:model.live='discount'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                            required />
                        @error('discount')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 " required">Duracion
                            (Minutos)</label>
                        <input type="number" id="duration" wire:model.live='duration'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                            required />
                        @error('duration')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="benefit" class="block mb-2 text-sm font-medium text-gray-900 "
                            required">Beneficio</label>
                        <input type="text" id="benefit" wire:model.live='benefit'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                            required />
                        @error('benefit')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="section" class="block mb-2 text-sm font-medium text-gray-900 "
                            required">Secciones</label>
                        <select wire:model.live='section_service' name="section" id="section">
                            <option value="null" selected disabled>Seleccionar un Seccion</option>
                            @foreach ($sections as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }} </option>
                            @endforeach
                        </select>
                        @error('section_service')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="multiple_files">Subir fotos/video</label>

                        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-cancel="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">

                            <input wire:model.live='files'
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                                id="multiple_files" type="file" multiple>
                            <!-- Progress Bar -->
                            <div x-show="uploading" class="mt-2">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full"
                                        x-bind:style="{ width: progress + '%' }"></div>
                                </div>
                                <div class="text-sm mt-1 text-gray-500" x-text="progress + '%'"></div>
                            </div>
                        </div>
                        @error('files')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="multiple_files">Subir Video</label>

                        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-cancel="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">

                            <input wire:model.live='video'
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                                id="multiple_files" type="file">
                            <!-- Progress Bar -->
                            <div x-show="uploading" class="mt-2">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full"
                                        x-bind:style="{ width: progress + '%' }"></div>
                                </div>
                                <div class="text-sm mt-1 text-gray-500" x-text="progress + '%'"></div>
                            </div>
                        </div>
                        @error('video')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>


            </div>
            <div class="flex justify-center md:justify-normal">

                @if ($edit_mode)
                    <button wire:click='update' type="button"
                        class="py-2 px-7 mt-5 me-2 mb-2 text-base font-medium text-spa-500 focus:outline-none bg-white rounded-lg border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-200">Actualizar</button>
                    <button wire:click='cancel_edit' type="button"
                        class="py-2 px-7 mt-5 me-2 mb-2 text-base font-medium text-red-400 focus:outline-none bg-white rounded-lg border border-red-400 hover:bg-red-400 hover:text-white transition-all duration-200">Cancelar</button>
                @else
                    <button wire:click='save' type="button"
                        class="py-2 px-7 mt-5 me-2 mb-2 text-base font-medium text-spa-500 focus:outline-none bg-white rounded-lg border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-200">Agregar
                        Servicio</button>
                @endif
            </div>

        </div>
        <div class="mt-10">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descripcion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descuento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Duracion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Beneficio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                EDITAR
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Imagenes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ELIMINAR
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $item)
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
                                    ${{ $item['price'] }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($item['discount'])
                                        {{ $item['discount'] }}%
                                    @else
                                        SIN DESCUENTO
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item['duration'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item['benefit'] }}
                                </td>
                                <td class="px-6 py-4">
                                    <button type="button" wire:click='edit({{ $item['services_id'] }})'
                                        class="font-medium text-white bg-spa-500 hover:bg-spa-600 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">EDITAR</button>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="button" wire:click='show_images({{ $item['services_id'] }})'
                                        class="font-medium text-white bg-spa-500 hover:bg-spa-600 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Ver
                                        Imagenes</button>
                                </td>
                                <td class="px-6 py-4">

                                    <button type="button"
                                        wire:click='showConfirmDelete( {{ $item['services_id'] }} )'
                                        class="focus:outline-none text-white bg-red-500 hover:bg-red-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">ELIMINAR</button>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            @if ($messageConfirmDelete)
                <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center mt-10">
                    <div
                        class="bg-red-100 p-6 rounded shadow-lg w-full max-w-[90%] lg:max-w-[50%] md:max-w-[70%] max-h-screen overflow-hidden ">
                        <div class="overflow-y-auto max-h-[80vh] " wire:click.away="closeModal">
                            <div class="flex justify-between items-center mb-4 ">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <h3 class="text-lg font-medium">Estas seguro de Eliminar</h3>
                                </div>
                                <button type="button" wire:click="closeModal">
                                    <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                </button>
                            </div>



                            <div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 " role="alert">

                                <div class="mt-2 mb-4 text-sm uppercase">
                                    Si lo eliminas se perdera y no se podra recuperar, tendras que crear la
                                    seccion de nuevo
                                </div>
                                <div class="flex">
                                    <button type="button" wire:click='delete'
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
                                    <button type="button" wire:click='close'
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
            @if ($imagesView)
                <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center mt-10">
                    <div
                        class="bg-white p-6 rounded shadow-lg w-full max-w-[90%] lg:max-w-[50%] md:max-w-[70%] max-h-screen overflow-hidden ">
                        <div class="overflow-y-auto max-h-[80vh] " wire:click.away="close">
                            <div class="flex justify-between items-center mb-4 ">
                                <div class="flex items-center">

                                    <h3 class="text-lg font-medium">Imagenes</h3>
                                </div>
                                <button type="button" wire:click="close">
                                    <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                </button>
                            </div>



                            <div>
                                <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-4">
                                    @foreach ($images as $img)
                                        @php
                                            $img_path = Storage::url($img['path']);
                                        @endphp
                                        <div class="relative inline-block">
                                            <img class="h-auto max-w-full rounded-lg"
                                                src="{{ $img_path }}"
                                                alt="Imagen">
                                            <button wire:click='delete_image( {{$img['id_image']}} )'
                                                class="absolute top-2 right-2 bg-white p-1 rounded-full shadow-md hover:bg-gray-200">
                                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18 17.94 6M18 18 6.06 6" />
                                                </svg>
                                            </button>
                                        </div>


                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        </div>
    </x-dashboard>
</div>
