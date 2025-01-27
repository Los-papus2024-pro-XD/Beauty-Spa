<div>
    <div>


        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">

                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Beauty Spa</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-spa-500 md:p-0 "
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-spa-500 md:p-0 ">Cerrar
                                Sesion</a>

                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="md:max-w-[80%] max-w-[95%] mx-auto my-14 ">
        <h1
            class="mb-4 text-3xl text-center font-semibold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Informacion del Perfil</h1>

        <div class="flex gap-5 items-center">
            <svg class="w-[50px] h-[50px] text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.6"
                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <div>
                <div class="flex items-center gap-4 flex-col md:flex-row">
                    <h3 class="font-Kulim md:text-[30px] text-[20px] ">{{ Auth::user()->name }}
                        {{ Auth::user()->lastname }} </h3>
                    <div
                        class="flex border text-white bg-spa-500 px-5 rounded-md items-center justify-center hover:bg-white hover:text-spa-500 transition-all duration-200 gap-2 cursor-pointer">
                        <p class="">Editar Perfil</p>
                        <svg class="w-[27px] h-[27px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="0.9"
                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                        </svg>
                    </div>

                </div>
                <p class="text-gray-500"> {{ Auth::user()->email }} </p>
            </div>
        </div>
        <div>
            <h1
                class="mt-28 mb-16 text-3xl text-center font-semibold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Reservaciones Pendientes</h1>


            @if ($reservations)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 justify-items-center">
                    @foreach ($reservations as $item)
                        @if ($item['days_remaining'] > 0)
                            @php
                                $photo = Storage::url($item['image']);
                            @endphp
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                <img class="rounded-t-lg" src=" {{ $photo }} " alt="" />

                                <div class="p-5">

                                    <p>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $item['name_service'] }} </h5>
                                    </p>
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Fecha: {{ $item['day'] }} {{ $item['date'] }}
                                    </p>
                                    @php
                                        $timestamp = strtotime($item['time']);
                                    @endphp
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Hora: {{ date('h:i A', $timestamp) }}
                                    </p>
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Costo: ${{ $item['price'] }}
                                    </p>
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Status: {{ $item['status_messaage'] }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-center">
                                    <button wire:click='openMessage( {{ $item['id'] }} )' type="button"
                                        class="py-2 px-8 me-2 mb-2 text-sm font-medium text-spa-500 focus:outline-none bg-white rounded-lg border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-200">Cancelar</button>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach
                </div>
            @else
                <h1
                    class="mt-28 text-3xl text-center font-light leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    No haz echo reservaciones aun :(</h1>

                <div class="flex justify-center">
                    <a href="{{ route('section_services') }}"
                        class="mt-5 text-xl text-center font-light leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white hover:underline">
                        Haz click aqui para ver nuestros servicios
                    </a>
                </div>

            @endif
            <h1
            class="mt-28 mb-16 text-3xl text-center font-semibold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Reservaciones Pasadas</h1>
            @if ($reservations)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 justify-items-center">
                    @foreach ($reservations as $item)
                        @if ($item['days_remaining'] <= 0)
                            @php
                                $photo = Storage::url($item['image']);
                            @endphp
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                <img class="rounded-t-lg" src=" {{ $photo }} " alt="" />

                                <div class="p-5">

                                    <p>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $item['name_service'] }} </h5>
                                    </p>
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Fecha: {{ $item['day'] }} {{ $item['date'] }}
                                    </p>
                                    @php
                                        $timestamp = strtotime($item['time']);
                                    @endphp
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Hora: {{ date('h:i A', $timestamp) }}
                                    </p>
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Costo: ${{ $item['price'] }}
                                    </p>
                                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                                        Status: {{ $item['status_messaage'] }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-center">
                                    <button wire:click='openMessage( {{ $item['id'] }} )' type="button"
                                        class="py-2 px-8 me-2 mb-2 text-sm font-medium text-spa-500 focus:outline-none bg-white rounded-lg border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-200">DEJAR UNA RESEÑA</button>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        @if ($messageConfirmDelete)
            <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center ">
                <div
                    class="bg-white p-6 rounded shadow-lg w-full max-w-[90%] lg:max-w-[50%] md:max-w-[70%] max-h-screen overflow-hidden">
                    <div class="overflow-y-auto max-h-[80vh]" wire:click.away="closeModal">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold">Cancelar el servicio</h2>
                            <button type="button" wire:click="closeModal">
                                <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                </svg>
                            </button>
                        </div>


                        <div>
                            <h3 class="text-center">Estas seguro que deseas cancelar el servicio?</h3>
                            <div class="flex justify-center mt-5">
                                <button type="button" wire:click='cancelService'
                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium hover:text-white focus:outline-none bg-white rounded-lg border border-red-500 hover:bg-red-500 transition-all duration-200">Cancelar
                                    Servicio</button>
                                <button type="button" wire:click='closeModal'
                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 ">Salir</button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        @endif




    </div>
</div>
</div>
