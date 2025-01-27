<div>
    <x-dashboard>

        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Panel de
                Control</span> Beauty SPA</h1>


        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">
            <div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center">
                    <a href="{{ route('dashboard_section_services') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            AÑADIR SECCION
                            PARA SERVICIOS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Cree y gestione diferentes secciones
                        para clasificar y organizar los servicios que ofrece su spa. Las secciones le permiten agrupar
                        servicios similares, facilitando a sus clientes encontrar exactamente lo que buscan. Agregue una
                        nueva sección, asigne un nombre descriptivo y defina una breve descripción para orientar a sus
                        clientes.</p>
                    <a href="{{ route('dashboard_section_services') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        AÑADIR SECCION
                        PARA SERVICIOS
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

            </div>
            <div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center">
                    <a href="{{ route('dashboard_section') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            AÑADIR SERVICIO
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Añada nuevos servicios a su oferta y
                        así expanda las opciones disponibles para sus clientes. Complete la información necesaria,
                        incluyendo el nombre del servicio, una descripción detallada, duración, precio y la sección a la
                        que pertenece. Asegúrese de resaltar los beneficios y características de cada servicio para
                        atraer a más clientes y satisfacer sus necesidades.</p>
                    <a href="{{ route('dashboard_section') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        CONOCER MAS
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

            </div>
            <div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            USUARIOS
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Acceda a una lista completa de todos
                        los usuarios registrados en su página. Aquí podrá ver detalles clave de cada usuario, como su
                        nombre, correo electrónico, fecha de registro y actividad reciente. Utilice las opciones de
                        filtrado y búsqueda para encontrar usuarios específicos fácilmente. Esta sección le permite
                        gestionar y supervisar su base de clientes de manera eficiente.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        CONOCER MAS
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>


            </div>
            <div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center">
                    <a href="{{ route('dashboard_reservaciones') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">VER
                            RESERVACIONES</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">En esta sección, tendrás acceso directo
                        a
                        una lista detallada de todas las reservaciones activas, con la posibilidad de filtrar por fecha,
                        tipo de servicio, o nombre del cliente, lo que facilita encontrar la información que necesitas
                        en
                        cualquier momento.</p>
                    <a href="{{ route('dashboard_reservaciones') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        VER RESERVACIONES
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center">
                    <a href="{{ route('dashboard_reservaciones_create') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            CREAR
                            RESERVACION</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">En esta sección, podrás crear nuevas
                        reservaciones de forma rápida y sencilla. Solo debes ingresar la información del cliente,
                        seleccionar el tipo de servicio y elegir la fecha y hora deseadas. Además, el sistema te
                        proporcionará un resumen antes de confirmar, asegurando que todos los detalles sean correctos
                        antes
                        de finalizar la reservación.</p>
                    <a href="{{ route('dashboard_reservaciones_create') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        CREAR RESERVACION
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </x-dashboard>
</div>
