<div>
    <x-fontWhite>
        <div class="mb-5">
            <div class="max-w-[70%] mx-auto">
                <h3 class="text-4xl text-center font-semibold text-gray-900 dark:text-white">
                    REGISTRO
                </h3>
                <div class="">
                    <div class="px-1 md:px-8 py-5 grid md:grid-cols-2 gap-5">
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre(s)</label>
                            <input type="text" id="name" wire:model.live='name'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                                placeholder="" />
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900">Apellidos</label>
                            <input type="text" id="last_name" wire:model.live='last_name'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                                placeholder="" />
                            @error('last_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="number_phone"
                                class="block mb-2 text-sm font-medium text-gray-900">Telefono</label>
                            <input type="number" id="number_phone" wire:model.live='number_phone'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                                placeholder="" />
                            @error('number_phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="year" class="block mb-2 text-sm font-medium text-gray-900 ">Año de
                                Nacimiento</label>
                            {{-- <input type="text" id="year" wire:model.live='year'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                                placeholder="" /> --}}
                            <select name="year" id="year" wire:model.live='year' class="w-full">
                                <option value="null" selected disabled>Selecciona el Año</option>
                                @php
                                    $currentYear = date('Y');
                                    $maxYear = $currentYear - 5;
                                    $minYear = $currentYear - 95;
                                @endphp
                                @for ($year = $maxYear; $year >= $minYear; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                            </select>
                            @error('year')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo</label>
                            <input type="email" id="email" wire:model.live='email'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                                placeholder="" />
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-5">
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
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="password_confirm"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Confirmar Contraseña</label>
                            <div class="relative flex items-center">
                                <input type="{{ $showPasswordConfirm }}" id="password_confirm"
                                    wire:model.live='password_confirm'
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pr-10 py-2.5"
                                    placeholder="" />
                                <div wire:click='showPassConfirm'
                                    class="absolute inset-y-0 right-0 flex items-center px-3 cursor-pointer">
                                    @if ($showPasswordConfirm === 'password')
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
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    @endif

                                </div>
                            </div>
                            @error('password_confirm')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex px-2 mb-7">
                    <div class="mx-auto">
                        <button type="button" wire:click='Register'
                            class="mt-5 py-2 rounded-lg px-10 me-2 mb-2 text-sm font-medium text-spa-500 bg-none border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-300 text-[15 px]">CREAR
                            LA CUENTA</button>
                    </div>

                </div>
            </div>

        </div>
    </x-fontWhite>
</div>
