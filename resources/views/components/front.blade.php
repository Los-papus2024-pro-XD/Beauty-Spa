<header>
    <div class="   bg-no-repeat bg-cover bg-[url('/public/images/bg.jpeg')]  ">
        <div class=" w-full max-w-screen h-screen max-h-full flex flex-col gap-5">
            <div class="grid md:grid-cols-3 place-items-center lg:px-16 pt-7 gap-5 ">
                <div class="md:hidden">
                    <h2 class="text-white font-Oswald font-light md:text-[80px] text-[40px] text-center">BEAUTY SPA</h2>
                </div>
                <div>
                    <p class="text-white font-Julius font-[24px] text-center">LLAMANOS</p>
                    <p class="text-white font-Julius font-[24px]">+52 775 162 1020</p>
                </div>
                <div>
                    <h2 class="hidden md:block text-white font-Oswald font-light text-[80px] text-center">BEAUTY SPA</h2>
                </div>
                <div class="flex justify-end">
                    <a href="https://wa.link/r0ht45" target="_blank">
                        <svg class="w-[51px] h-[51px] text-[#EAEC85]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                clip-rule="evenodd" />
                            <path fill="currentColor"
                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                        </svg>
                    </a>

                </div>
            </div>
            <div class="lg:px-16">
                <nav class="">
                    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                        <button data-collapse-toggle="navbar-user" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-white hover:text-black transition-all duration-200"
                            aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>


                        <div class="hidden w-full md:block md:w-auto" id="navbar-user">
                            <ul
                                class="flex flex-col font-medium p-4 mt-4 border rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                                <li>
                                    <a href="{{route('home')}}"
                                        class="block py-2 px-3 font-Junge text-black md:text-white rounded hover:text-black md:bg-transparent md:p-0 md:hover:text-spa-400 md:hover:text-lg transition-all duration-200"
                                        aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 font-Junge text-black md:text-white rounded hover:bg-gray-100 hover:text-black md:hover:bg-transparent md:p-0 md:hover:text-spa-400 md:hover:text-lg transition-all duration-200">Videos</a>
                                </li>
                                <li>
                                    <a href="{{route('gallery')}}"
                                        class="block py-2 px-3 font-Junge text-black md:text-white rounded hover:bg-gray-100 hover:text-black md:hover:bg-transparent md:p-0 md:hover:text-spa-400 md:hover:text-lg transition-all duration-200">Galeria</a>
                                </li>
                                <li>
                                    <a href="{{route('section_services')}}"
                                        class="block py-2 px-3 font-Junge text-black md:text-white rounded hover:bg-gray-100 hover:text-black md:hover:bg-transparent md:p-0 md:hover:text-spa-400 md:hover:text-lg transition-all duration-200">Servicios</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 font-Junge text-black md:text-white rounded hover:bg-gray-100 hover:text-black md:hover:bg-transparent md:p-0 md:hover:text-spa-400 md:hover:text-lg transition-all duration-200">Productos</a>
                                </li>
                                <li>
                                    <a href="{{route('about_us')}}"
                                        class="block py-2 px-3 font-Junge text-black md:text-white rounded hover:bg-gray-100 hover:text-black md:hover:bg-transparent md:p-0 md:hover:text-spa-400 md:hover:text-lg transition-all duration-200">Nosotros</a>
                                </li>
                            </ul>
                        </div>

                        @if (!Auth::user())
                            <a href="{{ route('login') }}"
                                class="block py-2 px-3 text-white rounde hover:bg-transparent md:border-0 hover:font-bold md:p-0 hover:text-spa-400 hover:text-lg transition-all duration-200">Login</a>
                        @endif
                        @auth
                            <ul class="">
                                @if (Auth::user()->roles_id == 2)
                                    <li>
                                        <button type="button" class="flex text-sm md:me-0" id="user-menu-button"
                                            aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                            data-dropdown-placement="bottom">
                                            <span class="sr-only">Open user menu</span>
                                            <svg class="w-10 h-10 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </li>
                                @else
                                    <li>
                                        <button type="button" class="flex text-sm md:me-0" id="user-menu-button"
                                            aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                            data-dropdown-placement="bottom">
                                            <span class="sr-only">Open user menu</span>
                                            <svg class="w-10 h-10 text-spa-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </li>
                                @endif
                            </ul>

                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                                id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span class="block text-sm text-black"> {{ Auth::user()->name }} </span>
                                    <span class="block text-sm text-black"> {{ Auth::user()->email }} </span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="{{route('my_profile')}}"
                                            class="block px-4 py-2 text-sm text-black hover:bg-black hover:text-white">Ir a
                                            mi Perfil</a>
                                    </li>
                                    @if (Auth::user()->roles_id == 2)
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-black hover:bg-black hover:text-white">Reservaciones</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('dashboard') }}"
                                                class="block px-4 py-2 text-sm text-black hover:bg-black hover:text-white">DashBoard</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logoutUser') }}"
                                            class="block px-4 py-2 text-sm text-black hover:bg-black hover:text-white">Sign
                                            out</a>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                    </div>
                </nav>

            </div>
            <div class="">
                {{ $header ?? '' }}
            </div>

            {{-- <div class="flex flex-col h-full justify-center">

            </div> --}}
        </div>
    </div>
    <nav>
</header>
<div class="mb-8">
    {{ $slot }}
</div>


<footer class=" bg-[url('/public/images/bg-footer.jpeg')] shadow-2xl  mt-auto bg-no-repeat bg-cover">
    <div class="max-w-screen p-4 py-6 lg:py-8 ">
        <div class="md:flex md:justify-between lg:px-[100px] md:px-[20px] w-full">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center justify-center lg:justify-normal">
                    <img src="images\logo.png" class="lg:max-w-[400px] md:max-w-[200px] max-w-[100px"
                        alt="" />
                </a>
            </div>
            <div class="flex justify-center lg:justify-normal">
                <div class="gap-6 flex flex-col lg:flex-row h-full items-center">
                    <div class="flex gap-6">
                        <div>
                            <svg class="w-[51px] h-[52px] cursor-pointer text-black" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                            </svg>

                        </div>
                        <div>
                            <svg class="w-[51px] h-[52px] cursor-pointer text-black" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="">
                            <svg class="w-[51px] h-[52px] cursor-pointer text-black" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                        <div class="">
                            <svg class="w-[51px] h-[52px] text-black" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">

                            </svg>

                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-8 sm:gap-6 mt-7 pb-20">
                <div class="flex md:flex-row-reverse flex-col lg:gap-14 gap-6 items-center">
                    <div class="flex flex-col items-center gap-6">
                        <a href="{{route('home')}}"
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">INICIO</a>
                        <a href="{{route('section_services')}}"
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">SERVICIOS</a>
                        <a href=""
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">PRODUCTOS</a>
                        <a href=""
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">NOSOTRS</a>
                    </div>
                    <div class="flex flex-col items-center gap-6">
                        <a href=""
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">GALERIA</a>
                        <a href=""
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">PROMOCIONES</a>
                        <a href=""
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">MIEMBROS</a>
                        <a href=""
                            class=" md:text-black text-white hover:text-white hover:underline transition-all duration-200 lg:text-xl md:text-base font-normal font-Junge">PAQUETES</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</footer>
