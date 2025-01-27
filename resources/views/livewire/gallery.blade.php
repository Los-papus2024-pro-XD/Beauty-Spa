<div>
    <x-front>
        @slot('header')
            <div class="md:mt-10 mt-2 lg:px-10 md:px-5 flex flex-col items-center gap-9">
                <h2 class="text-center text-white lg:text-6xl md:text-5xl  text-4xl font-semibold font-Kulim uppercase">
                    Galeria de Fotografias</h2>
                <div class="lg:max-w-[80%] md:max-w-[90%] max-w-[95%] w-full">
                    <h4 class="text-center text-white md:text-2xl text-base font-Kulim uppercase font-[100]"> Un espacio
                        donde podrás explorar la esencia de nuestro spa. Sumérgete en un recorrido visual por nuestras
                        instalaciones, tratamientos y la relajante atmósfera que ofrecemos. Déjate inspirar por cada detalle
                        que hemos creado para brindarte una experiencia de bienestar única.

                    </h4>
                </div>
            </div>
        @endslot

        <div>
            <div>
                <div class="bg-spa-200 py-[59px] my-12">
                    <p class="text-black text-5xl font-light font-Kulim uppercase text-center">Imágenes de nuestros
                        Servicios</p>
                </div>

                <div>
                    @foreach ($organizedImages as $serviceName => $images)
                        <div class="relative max-w-sm mx-auto my-8">
                            <p class="text-3xl font-medium text-center mb-1">{{ $serviceName }}</p>
                            <!-- Margen reducido -->
                            <div id="gallery-{{ $serviceName }}" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    @foreach ($images as $index => $image)
                                        @php
                                            $photo = Storage::url($image['path_images']);
                                        @endphp

                                        <div class="carousel-item {{ $loop->first ? 'active' : 'hidden' }} duration-700 ease-in-out"
                                            data-carousel-item>
                                            <img src="{{ $photo }}"
                                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                alt="{{ $serviceName }}">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>





            </div>



            <div>
                <div class="bg-spa-400 py-[59px] my-12">
                    <p class="text-black text-5xl font-light font-Kulim uppercase text-center">Galeria de nuestro
                        negocio</p>
                </div>
                <div>
                    {{-- Imagenes generales --}}
                </div>
            </div>

        </div>

    </x-front>
</div>
