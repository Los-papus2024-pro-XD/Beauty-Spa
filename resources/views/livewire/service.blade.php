<div>
    <x-fontWhite>
        <div>
            <div class="bg-spa-600 py-10 flex flex-col md:flex-row items-center justify-between px-10 ">

                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center md:text-base text-sm uppercase italic  text-white font-Kulim font-light">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Home
                            </a>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#"
                                    class="ms-1 md:text-base text-sm uppercase italic text-white md:ms-2 font-Kulim font-light">
                                    Servicios </a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#"
                                    class="ms-1 md:text-base text-sm uppercase italic  text-white  md:ms-2 font-Kulim font-light">
                                    {{ $breadcrumb['section'] }} </a>
                            </div>
                        </li>

                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="ms-1 md:text-base text-sm uppercase italic  text-white md:ms-2 font-Kulim font-light">
                                    {{ $breadcrumb['service'] }}
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div>
                    <h3 class="text-[40px] text-white font-semibold font-Kulim uppercase"> {{ $breadcrumb['service'] }}
                    </h3>
                </div>
            </div>
            <div class="lg:max-w-[80%] max-w-[90%] my-16 mx-auto">
                <div class="flex gap-7 justify-end flex-col-reverse md:flex-row">
                    <div class=" flex md:items-end items-center flex-col justify-evenly">

                        <p class="text-black text-2xl font-light font-Kulim text-right"> {{ $service['description'] }}
                        </p>

                        <p class="text-[#59a600] text-[32px] font-semibold font-Kulim text-right">
                            ${{ $service['price'] }} </p>

                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#919191]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <p class="text-[#919191] text-2xl font-light font-Kulim text-right">DURACION:
                                {{ $service['duration'] }} MINUTOS</p>
                        </div>
                    </div>

                    <div class="md:w-[50%]">
                        <div id="controls-carousel" class="relative w-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                @foreach ($service['images'] as $item)
                                    @php
                                        $bg = Storage::url($item['path']);
                                    @endphp
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src=" {{ $bg }} "
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="bg-spa-200">
                <div class="max-w-[90%] mx-auto flex justify-between flex-col md:flex-row gap-6 md:gap-0">
                    <div>
                        <h2 class="text-white text-[40px] font-semibold font-Kulim">VIDEO REPRESENTATIVO DEL SERVICIO
                        </h2>
                        @php
                            $video = Storage::url($service['video']);
                        @endphp

                        <video class="w-full h-auto max-w-full" controls>
                            <source src=" {{ $video }} ">
                            Your browser does not support the video tag.
                        </video>

                    </div>
                    <div class="flex flex-col items-end">
                        <h2 class="text-black text-[32px] font-normal font-Julius ">CALIFICAION DE ESTE
                            SERVICIO</h2>
                        <p class="text-[#817b7b] text-2xl font-normal font-Julius">0 RESEÑAS</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-12 mx-4">
                <a href="{{ route('reservate', ['id' => $service['id_service']]) }}">
                    <button type="button"
                        class="text-black md:text-[40px] text-[30px] font-normal font-Julius border-[2.5px] border-spa-600 px-10 py-0.5 rounded-md hover:bg-spa-600 hover:text-white transition-all duration-200">
                        HACER MI RESERVACION
                    </button>
                </a>
            </div>
        </div>
    </x-fontWhite>
</div>
