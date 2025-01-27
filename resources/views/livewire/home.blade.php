<div>
    <x-front>
        @slot('header')
            <div class="flex flex-col h-full md:mt-20 mt-10 justify-center items-center px-5">
                <h2 class="font-Kite text-[36px] text-white">Bienvenido a tu Oasis de Tranquilidad</h2>


                <h4 class="font-Kite text-[24px] text-white"> <span class="" id="description"></span> </h4>
                <div>
                    <button type="button" wire:click='saludar'
                        class="mt-5 py-4 px-10 me-2 mb-2 text-sm font-medium text-spa-500 bg-none border border-spa-500 hover:bg-white transition-all duration-300 text-[24px]">CONOCER
                        MAS</button>
                </div>
            </div>
        @endslot

        <div>

            <h2 class="uppercase text-center font-Junge text-[36px] mt-36">Servicio Destacados</h2>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-5 mx-3 justify-items-center">
                @php
                    $i = 0;
                @endphp
                @foreach ($sections as $item)
                    @php
                        $bg = Storage::url($item['path']);
                        $i++;
                    @endphp
                    @if ($i <= 3)
                        <div>
                            <div class="max-w-full ">
                                <div
                                    class="lg:w-[467px] w-[367px]  lg:h-[584px] h-[484px] relative rounded-sm shadow-xl">
                                    <a href="{{route('section', ['id' => $item['id'] ])}}">
                                        <img class="grayscale hover:grayscale-0 transition-all duration-300 max-w-full lg:h-[584px] h-[484px] left-0 top-0 absolute rounded-[7px]  shadow-inner"
                                        src="{{ $bg }}" />
                                    </a>
                                    <div
                                        class="lg:left-[81px] left-[30px] top-[414px] lg:top-[514px] absolute text-center text-white text-2xl font-normal font-Karla uppercase">
                                        {{ $item['name'] }} </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
            <div class="flex justify-center mt-9">
                <div>
                    <a href="{{ route('section_services') }}">
                        <button type="button"
                            class="mt-5 py-4 px-10 me-2 mb-2 text-sm font-medium text-spa-700 bg-none border border-spa-700 hover:bg-spa-700 hover:text-white hover:text-base transition-all duration-300 text-[24px]">CONOCER
                            MAS</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-spa2-100 grid gap-10 px-5 pb-7 mt-[193px] w-full">
            <h2 class="text-[40px] font-normal font-Oswald text-spa2-500">TESTIMONIO</h2>
            <h4 class="text-black text-[32px] font-Karla">¡Una experiencia revitalizante!</h4>
            <p class="text-black text-[32px] font-light font-Karla text-center">Visitar Beauty Spa fue increíble. Desde
                el momento en que entré, me sentí relajado. El personal es profesional y amable, y los tratamientos son
                de primera categoría. Definitivamente volveré para otra sesión de masajes y tratamientos faciales. ¡Muy
                recomendado!</p>
            <p class="text-black text-[32px] font-light font-Karla text-end italic">~Alejandro</p>
        </div>
        <div class="mt-[188px]">
            <h2 class=" text-center text-black text-4xl font-normal font-Junge">PRODUCTOS DESTACADOS</h2>
            <div class="mt-16 grid lg:grid-cols-3 md:grid-cols-2 justify-items-center gap-8 lg:gap-0 px-3 lg:px-0">
                <div class="shadow-2xl pb-10 rounded-b-lg">
                    <img src="images\product.jpeg" alt="" class="rounded-t-lg">
                    <div class="">
                        <p class="text-center text-black text-2xl font-normal font-Karla">Lorem ipsum dolor sit amet</p>
                        <div class="flex justify-center mt-9">
                            <div>
                                <button type="button"
                                    class="mx-5 py-2 px-10 me-2 mb-2 text-lg font-medium text-spa-400 bg-none border border-spa-400 hover:bg-spa-400 hover:text-white hover:text-xl transition-all duration-300 text-[24px] rounded-md">VER
                                    PRODUCTO</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-2xl pb-10 rounded-b-lg">
                    <img src="images\product.jpeg" alt="" class="rounded-t-lg">
                    <div class="">
                        <p class="text-center text-black text-2xl font-normal font-Karla">Lorem ipsum dolor sit amet</p>
                        <div class="flex justify-center mt-9">
                            <div>
                                <button type="button"
                                    class="mx-5 py-2 px-10 me-2 mb-2 text-lg font-medium text-spa-400 bg-none border border-spa-400 hover:bg-spa-400 hover:text-white hover:text-xl transition-all duration-300 text-[24px] rounded-md">VER
                                    PRODUCTO</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-2xl pb-10 rounded-b-lg">
                    <img src="images\product.jpeg" alt="" class="rounded-t-lg">
                    <div class="">
                        <p class="text-center text-black text-2xl font-normal font-Karla">Lorem ipsum dolor sit amet</p>
                        <div class="flex justify-center mt-9">
                            <div>
                                <button type="button"
                                    class="mx-5 py-2 px-10 me-2 mb-2 text-lg font-medium text-spa-400 bg-none border border-spa-400 hover:bg-spa-400 hover:text-white hover:text-xl transition-all duration-300 text-[24px] rounded-md">VER
                                    PRODUCTO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-9">
                <div>
                    <button type="button"
                        class="mt-5 py-4 px-10 me-2 mb-2 text-sm font-medium text-spa-700 bg-none border border-spa-700 hover:bg-spa-700 hover:text-white hover:text-base transition-all duration-300 text-[24px]">VER
                        TODOS LOS PRODUCTOS</button>
                </div>
            </div>
        </div>
    </x-front>
</div>
