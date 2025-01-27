<div>
    <x-fontWhite>
        <div class="w-screen my-9">
            <div class="lg:max-w-[40%] md:max-w-[70%] max-w-[85%] mx-auto shadow-2xl border rounded-md">
                <div class="py-8">
                    <h2 class="text-center font-Karla text-3xl">LOGIN</h2>
                    <div class="flex flex-col md:px-10 px-3 mt-5">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                            <input type="email" id="email" wire:model.live='email'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                placeholder="example@example.com" />

                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña</label>
                            <div class="relative flex items-center">
                                <input type="{{ $showPassword }}" id="password" wire:model.live='password'
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pr-10 py-2.5"
                                    placeholder="" />
                                <div wire:click='showPass'
                                    class="absolute inset-y-0 right-0 flex items-center px-3 cursor-pointer">
                                    @if ($showPassword === 'password')
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    @else
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    @endif

                                </div>
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <div class="flex items-center">
                                <input wire:model='remember' id="checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                <label for="checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recordarme</label>
                            </div>

                        </div>
                        <div class="mx-auto">
                            <button type="button" wire:click='login'
                                class="mt-5 py-2 rounded-lg px-10 me-2 mb-2 text-sm font-medium text-spa-500 bg-none border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-300 text-[24px]">INICIAR
                                SESION</button>
                        </div>
                        <h4 class="text-center mt-2 font-Julius text-xl">SI NO TIENES UNA CUENTA</h4>
                        <div class="mx-auto">
                            <a href="{{ route('register') }}">
                                <button type="button"
                                    class="mt-5 py-2 rounded-lg px-10 me-2 mb-2 text-sm font-medium text-spa-800 bg-none border border-spa-800 hover:bg-spa-800 hover:text-white transition-all duration-300 text-[24px]">CREAR
                                    UNA CUENTA</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </x-fontWhite>
</div>
