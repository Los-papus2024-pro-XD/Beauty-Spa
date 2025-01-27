<div>
    <x-fontWhite>
        @if (!$reservation_confirm)
            <div>
                <div>
                    <h1 class="text-4xl font-Junge text-center">HACER MI RESERVACION</h1>
                    <div class="max-w-[80%] mx-auto flex flex-col gap-5 mt-4 text-center">
                        <p class="font-Kulim text-2xl font-semibold">Nombre del servicio <br> <span class="font-light">
                                {{ $service_info['name'] }} </span> </p>
                        <p class="font-Kulim text-2xl font-semibold">Precio <br> <span class="font-light">
                                ${{ $service_info['price'] }} </span> </p>
                        <p class="font-Kulim text-2xl font-semibold">Duracion <br> <span class="font-light">
                                {{ $service_info['duration'] }} Minutos</span> </p>
                    </div>
                    <div class="max-w-[80%] mx-auto flex flex-col gap-5 mt-4 items-center">
                        <div class="flex gap-5">
                            <p class="font-Kulim text-2xl font-semibold">Fecha </p>

                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input wire:model.lazy='date' wire:change='hours' id="default-datepicker" type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5">
                            </div>

                        </div>
                        @error('date')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">ERROR</span> {{ $message }}
                            </div>
                        @enderror

                        <div>

                            <select name="" id="" class="rounded-md" wire:model.live='time'>
                                <option value="null" selected disabled>Seleccionar una Hora</option>
                                @if ($date)
                                    @foreach ($times as $item)
                                        @php
                                            $timestamp = strtotime($item['hour']);
                                        @endphp
                                        <option value="{{ $item['hour'] }}" {{ $item['state'] }}>
                                            {{ date('h:i A', $timestamp) }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <button wire:click='reservate' type="button"
                            class="py-2 px-11 me-2 mb-2 text-sm font-medium text-spa-500 bg-white rounded-lg border border-spa-500 hover:bg-spa-500 hover:text-white f hover:text-base transition-all duration-300">Reservar</button>

                    </div>
                </div>
            </div>
        @else
            <div>
                <div>
                    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center">Reservacion Hecha</h1>
                    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 text-center">Puedes revisar los detalles y ver si verificamos tu reservacion en tu <a href="{{route('my_profile')}}" class="text-blue-500 hover:underline">Perfil</a> </p>
                    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 text-center"></p>

                </div>
            </div>
        @endif
    </x-fontWhite>
</div>
