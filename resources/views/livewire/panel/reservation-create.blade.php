<div>
    <x-dashboard>
        <div>
            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl required">
                    Registrar cita</h1>
            </div>
            <div>
                @if ($reserv_create == 'exito')
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 " role="alert">
                        <span class="font-medium">Creado!</span> La reservacion se a creado con exito.
                    </div>
                @endif
                <div class="grid md:grid-cols-2 gap-5">
                    <div class="mb-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre(s)</label>
                        <input type="text" id="name" wire:model.live='name'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                            placeholder="" />
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Apellidos</label>
                        <input type="text" id="last_name" wire:model.live='last_name'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                            placeholder="" />
                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo</label>
                        <input type="email" id="email" wire:model.live='email'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                            placeholder="" />
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="number_phone" class="block mb-2 text-sm font-medium text-gray-900 ">Numero de
                            Telefono</label>
                        <input type="number" id="number_phone" wire:model.live='number_phone'
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 "
                            placeholder="" />
                        @error('number_phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <label for="fate" class="block mb-2 text-sm font-medium text-gray-900 ">Fecha</label>

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
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="time" class="block mb-2 text-sm font-medium text-gray-900 ">Seleccionar Hora</label>
                        <select name="" id="time" class="rounded-md" wire:model.live='time'>
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
                        @error('time')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="number_phone" class="block mb-2 text-sm font-medium text-gray-900 ">Seleccionar un servicio</label>
                        <select name="" id="" class="rounded-md" wire:model.live='id_service'>
                            <option disabled selected value="null">Seleccionar un servicio</option>
                            @foreach ($servicios as $item)
                                <option value="{{$item->service_sections_id}}"> {{$item->nameC}} de la seccion {{$item->nameS}}</option>
                            @endforeach
                        </select>
                        @error('id_service')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex px-2 mb-7">
                    <div class="">
                        <button type="button" wire:click='reservate'
                            class="mt-5 py-2 rounded-lg px-10 me-2 mb-2 text-sm font-medium text-spa-500 bg-none border border-spa-500 hover:bg-spa-500 hover:text-white transition-all duration-300 text-[15 px]">REGISTRAR</button>
                    </div>

                </div>
            </div>

        </div>
    </x-dashboard>
</div>
