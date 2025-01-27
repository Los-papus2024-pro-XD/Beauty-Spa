<div>
    <x-dashboard>
        <div>
            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Reservaciones</h1>
            </div>
            <div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID#
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre del cliente
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre del Servicio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Precio y Duracion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Eliminar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $item)
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item['id'] }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item['name_user'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item['name_service'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $item['price'] }} - {{ $item['duration'] }} Minutos
                                    </td>
                                    <td class="px-6 py-4">
                                        @php
                                            $timestamp = strtotime($item['time']);
                                        @endphp
                                        {{ $item['date'] }} - {{ date('h:i A', $timestamp) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        El dia {{ $item['day'] }}, faltan {{ $item['days_remaining'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="h-2.5 w-2.5 rounded-full {{ $item['status'] ? 'bg-green-500' : 'bg-red-500' }} me-2">
                                            </div> {{ $item['status_messaage'] }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if (!$item['status'])
                                            <p wire:click='accept_reservation( {{ $item['id'] }} )'
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">
                                                Aceptar</p>
                                        @else
                                            <p wire:click='cancel_reservation( {{ $item['id'] }} )'
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">
                                                Cancelar</p>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <p wire:click='delete_reservation( {{ $item['id'] }} )'
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">
                                            Eliminar</p>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </x-dashboard>
</div>
