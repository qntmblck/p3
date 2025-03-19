<x-app-layout>
    <div class="bg-gray-100">
        <main>
            <!-- Hero Section with Background Image -->
            <div class="relative mt-5">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-cover" src="{{asset('img/dashboard/truck.jpg')}}" alt="Camión en ruta">
                            

                            <div class="absolute inset-0 bg-black opacity-60"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl leading-tight">
                                <span class="block">Comprometidos con</span>
                                <span class="block text-indigo-300">la Excelencia en Transporte</span>
                            </h1>
                            <p class="mt-6 max-w-lg mx-auto text-center text-lg text-gray-300 leading-relaxed sm:max-w-1xl">
                                Con más de 25 años de experiencia en rutas desafiantes desde Arica hasta Punta Arenas, en Transportes LQM nos especializamos en ofrecer soluciones de transporte confiables y de alta calidad, asegurando la seguridad y tranquilidad de nuestros clientes en cada entrega.
                            </p>
                            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                    <a href="{{ route('login') }}" class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition transform hover:scale-105 sm:px-8">
                                        <span>Acceder</span>
                                    </a>
                                    <a href="{{ route('register') }}" class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-gray-800 bg-gray-100 hover:bg-gray-200 transition transform hover:scale-105 sm:px-8">
                                        <span>Registrarse</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informational Content -->
            <div class="bg-white py-16 lg:py-24">
                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <a href="https://www.ine.gob.cl/estadisticas/economia/indices-de-precio-e-inflacion/indice-de-costos-del-transporte" class="block bg-gray-100 p-6 rounded-lg shadow-md transition transform hover:scale-105">
                        <h2 class="text-lg font-bold text-gray-900">Economía y Logística de Chile</h2>
                        <p class="mt-4 text-gray-600">
                            Explore cómo los indicadores económicos afectan el transporte y la logística en Chile. Manténgase actualizado con los últimos datos del Banco Central de Chile.
                        </p>
                    </a>
                    <a href="https://www.subcontrataley.cl" class="p-6 rounded-lg shadow-lg hover:bg-gray-50">
                        <h2 class="text-lg font-bold text-gray-900">Normas y Cumplimiento</h2>
                        <p class="mt-4 text-gray-600">
                            Conozca las regulaciones clave en el transporte de carga y cómo Transportes LQM garantiza el cumplimiento de todas las normativas.
                        </p>
                    </a>
                    <a href="https://mma.gob.cl" class="p-6 rounded-lg shadow-lg hover:bg-gray-50">
                        <h2 class="text-lg font-bold text-gray-900">Sostenibilidad y Medio Ambiente</h2>
                        <p class="mt-4 text-gray-600">
                            Descubra nuestras iniciativas de sostenibilidad y cómo estamos contribuyendo a un futuro más verde y eficiente.
                        </p>
                    </a>
                </div>
            </div>

            <!-- Client Logos -->
            <div id="clients" class="bg-gray-100 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">Nuestros Clientes</p>
                    <div class="mt-10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/essity.svg')}}" alt="Essity">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/prisa.png')}}" alt="Prisa">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/fibox.png')}}" alt="Fibox">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/geo.png')}}" alt="Geoprospec">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/deco.png')}}" alt="Deco Muebles">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/fruna.webp')}}" alt="Fruna">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/falabella.png')}}" alt="Falabella">
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <img class="max-h-16" src="{{asset('img/dashboard/canontex.png')}}" alt="Canontex">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Sections -->
            <div class="bg-white py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center">Nuestra Trayectoria</h2>
                    <p class="mt-4 text-lg text-gray-600 text-center">
                        Desde nuestros inicios hace más de 25 años, en Transportes LQM hemos recorrido miles de kilómetros en las rutas más exigentes de Chile, transportando cargas que requieren máxima seguridad y eficiencia. 
                        Con un equipo comprometido y tecnología de punta, hemos establecido un estándar de calidad que nos posiciona como líderes en la industria.
                    </p>
                    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                        <a href="https://www.ccs.cl/innovacion-y-emprendimiento/" class="block bg-gray-100 p-6 rounded-lg shadow-md transition transform hover:scale-105">
                            <h3 class="text-xl font-semibold text-gray-900">Innovación Continua</h3>
                            <p class="mt-4 text-gray-600">
                                Apostamos por la innovación, incorporando continuamente nuevas tecnologías en nuestros procesos logísticos, 
                                asegurando la integridad de la carga y la eficiencia en cada entrega. Nuestro compromiso es mejorar constantemente para satisfacer las necesidades de nuestros clientes.
                            </p>
                        </a>
                        <a href="https://achsvirtual.achs.cl/achs/" class="block bg-gray-100 p-6 rounded-lg shadow-md transition transform hover:scale-105">
                            <h3 class="text-xl font-semibold text-gray-900">Educación y Capacitación</h3>
                            <p class="mt-4 text-gray-600">
                                Sabemos que el transporte seguro comienza con un equipo bien capacitado. Por eso, ofrecemos programas de formación continua a nuestros colaboradores, 
                                alineados con las últimas normativas de transporte y obligaciones laborales, asegurando que cada miembro de Transportes LQM esté preparado para enfrentar los desafíos de la carretera.
                            </p>
                        </a>
                        <a href="https://www.subcontrataley.cl" class="block bg-gray-100 p-6 rounded-lg shadow-md transition transform hover:scale-105">
                            <h3 class="text-xl font-semibold text-gray-900">Transparencia y Compromiso</h3>
                            <p class="mt-4 text-gray-600">
                                En Transportes LQM, creemos en la transparencia en todas nuestras operaciones. Mantenemos un enfoque claro y abierto en nuestras relaciones laborales y comerciales, 
                                cumpliendo rigurosamente con las obligaciones provisionales y laborales para ofrecer un ambiente de trabajo justo y seguro.
                            </p>
                        </a>
                        <a href="https://www.ine.gob.cl/estadisticas/economia/indices-de-precio-e-inflacion/indice-de-costos-del-transporte" class="block bg-gray-100 p-6 rounded-lg shadow-md transition transform hover:scale-105">
                            <h3 class="text-xl font-semibold text-gray-900">Economía y Logística en Chile</h3>
                            <p class="mt-4 text-gray-600">
                                Con un profundo conocimiento del entorno económico chileno, optimizamos nuestros servicios para adaptarnos a los cambios del mercado. 
                                Nuestro análisis continuo de los índices económicos y de logística nos permite ofrecer soluciones personalizadas que se ajustan a las necesidades de nuestros clientes y la realidad del país.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer Section -->
        <footer class="bg-gray-900 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-center text-base text-gray-400">&copy; 2024 Transportes LQM SpA. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</x-app-layout>
