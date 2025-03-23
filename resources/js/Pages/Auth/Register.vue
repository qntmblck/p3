<template>
    <Head>
      <title>Transportes SCAR - Tu carga, nuestra misión</title>
      <meta
        name="description"
        content="Transportes SCAR, con más de 25 años de experiencia, ofrece soluciones de transporte de carga seguras, eficientes y sostenibles en Chile."
      />
    </Head>
  
    <div class="bg-white">
      <!-- HEADER (ya no es absolute) -->
      <header class="bg-gray-900 z-50 shadow-lg">
        <nav
          class="mx-4 my-4 flex items-center justify-between rounded-2xl p-6 lg:px-8"
          aria-label="Global"
        >
          <div class="flex lg:flex-1">
            <a href="#inicio" class="-m-1.5 p-1.5">
              <span class="sr-only">Transportes SCAR</span>
              <!-- LOGO -->
              <img class="h-8 w-auto" src="/img/logo.svg" alt="Transportes SCAR" />
            </a>
          </div>
          <!-- Botón menú móvil -->
          <div class="flex lg:hidden">
            <button
              type="button"
              class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
              @click="mobileMenuOpen = true"
            >
              <span class="sr-only">Abrir menú</span>
              <Bars3Icon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
          <!-- Navegación Desktop -->
          <div class="hidden lg:flex lg:gap-x-10">
            <a
              v-for="item in navigation"
              :key="item.name"
              :href="item.href"
              class="text-sm font-semibold text-white hover:text-indigo-300"
            >
              {{ item.name }}
            </a>
          </div>
          <!-- Enlaces de Login/Register (Jetstream) -->
          <div class="hidden lg:flex lg:flex-1 lg:justify-end space-x-4" v-if="canLogin">
            <Link
              :href="route('login')"
              class="text-sm font-semibold text-white hover:text-indigo-300"
            >
              Ingresar <span aria-hidden="true">&rarr;</span>
            </Link>
            <Link
              v-if="canRegister"
              :href="route('register')"
              class="text-sm font-semibold text-white hover:text-indigo-300"
            >
              Registrar <span aria-hidden="true">&rarr;</span>
            </Link>
          </div>
        </nav>
  
        <!-- Menú móvil -->
        <Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
          <div class="fixed inset-0 z-50" />
          <DialogPanel
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10 rounded-l-2xl"
          >
            <div class="flex items-center justify-between">
              <a href="#inicio" class="-m-1.5 p-1.5">
                <span class="sr-only">Transportes SCAR</span>
                <img class="h-8 w-auto" src="/img/logo.svg" alt="Transportes SCAR" />
              </a>
              <button
                type="button"
                class="-m-2.5 rounded-md p-2.5 text-white"
                @click="mobileMenuOpen = false"
              >
                <span class="sr-only">Cerrar menú</span>
                <XMarkIcon class="h-6 w-6" aria-hidden="true" />
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-white/10">
                <div class="space-y-2 py-6">
                  <a
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-white hover:bg-gray-800"
                  >
                    {{ item.name }}
                  </a>
                </div>
                <div class="py-6 space-y-4" v-if="canLogin">
                  <Link
                    :href="route('login')"
                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800"
                  >
                    Ingresar
                  </Link>
                  <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800"
                  >
                    Registrar
                  </Link>
                </div>
              </div>
            </div>
          </DialogPanel>
        </Dialog>
      </header>
  
      <!-- HERO SECTION (reduce pb para acercar Panorama Logístico) -->
      <section
        id="inicio"
        class="pt-8 sm:pt-10 pb-2 sm:pb-2 max-w-7xl mx-auto px-6 lg:px-8"
      >
        <div
          class="relative overflow-hidden rounded-2xl bg-gray-900 px-6 py-16 shadow-xl sm:px-10 sm:py-20 md:px-12 lg:px-20"
        >
          <img
            class="absolute inset-0 h-full w-full object-cover brightness-90 saturate-100"
            src="/img/dashboard/truck.jpg"
            alt="Camión en carretera"
            loading="lazy"
          />
          <div class="absolute inset-0 bg-gray-900/60 mix-blend-multiply"></div>
          <div class="relative mx-auto max-w-2xl text-center">
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white">
              Llevamos tu carga a todo Chile
            </h1>
            <p class="mt-6 text-base sm:text-lg leading-7 sm:leading-8 text-gray-300">
              Con más de 25 años de experiencia, Transportes SCAR ofrece soluciones de
              transporte de carga seguras, eficientes y sostenibles.
            </p>
            <div class="mt-10 flex justify-center gap-x-6">
              <!-- Botón 1: Contratar Servicio (formulario de contacto) -->
              <a
                href="#contacto"
                class="rounded-md bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500"
              >
                Contratar Servicio
              </a>
              <!-- Botón 2: Arrendar Máquina de Construcción (catálogo) -->
              <Link
                :href="route('catalogo')"
                class="text-sm font-semibold leading-6 text-white"
              >
                Arrendar Máquina de Construcción <span aria-hidden="true">→</span>
              </Link>
            </div>
          </div>
        </div>
      </section>
  
      <!-- PANORAMA LOGÍSTICO (muy cerca del Hero) -->
      <section id="panorama-logistico" class="bg-white py-2">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
          <div class="mb-4 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Panorama Logístico
            </h2>
            <p class="mt-2 text-lg text-gray-600">
              Factores clave que impactan el transporte de carga en Chile, desde la
              economía hasta la sostenibilidad.
            </p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
              v-for="(item, index) in panoramaItems"
              :key="index"
              class="bg-gray-100 p-6 rounded-lg shadow-md hover:bg-gray-200 transition"
            >
              <h3 class="text-lg font-semibold text-gray-900">{{ item.title }}</h3>
              <p class="mt-4 text-gray-600">{{ item.description }}</p>
              <a
                :href="item.link"
                target="_blank"
                rel="noopener"
                class="inline-block mt-4 text-indigo-600 font-semibold hover:underline text-sm"
              >
                Ver más
              </a>
            </div>
          </div>
        </div>
      </section>
  
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
  
      <!-- SOBRE NOSOTROS (centrado) -->
      <section id="sobre-nosotros" class="bg-gray-100 py-12 text-center">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            Sobre Nosotros
          </h2>
          <p class="mt-6 text-lg text-gray-700">
            Fundada en 2005, Transportes SCAR se ha consolidado en el mercado chileno
            gracias a su compromiso con la seguridad, la eficiencia y la sostenibilidad.
            Nuestra misión es proporcionar soluciones logísticas innovadoras y
            responsables, apoyadas en tecnología avanzada y una cultura de mejora
            continua que garantiza el cumplimiento normativo y la satisfacción de
            nuestros clientes.
          </p>
        </div>
      </section>
  
      <!-- SERVICIOS (centrado) -->
      <section id="servicios" class="bg-white py-12 text-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
          <div class="mx-auto max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Nuestros Servicios
            </h2>
            <p class="mt-4 text-lg text-gray-600">
              Soluciones logísticas adaptadas a las necesidades de cada cliente, basadas
              en experiencia y tecnología.
            </p>
          </div>
          <div class="mt-12 grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-2">
            <div v-for="(item, i) in services" :key="i" class="relative pl-16">
              <div
                class="absolute left-0 top-0 flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600"
              >
                <component :is="item.icon" class="h-6 w-6 text-white" aria-hidden="true" />
              </div>
              <h3 class="text-lg font-semibold text-gray-900">{{ item.name }}</h3>
              <p class="mt-2 text-base text-gray-600">{{ item.description }}</p>
            </div>
          </div>
        </div>
      </section>
  
      <!-- COMPROMISO Y ALIANZAS -->
      <section id="compromiso" class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
          <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Compromiso y Alianzas
            </h2>
            <p class="mt-4 text-lg text-gray-600">
              En Transportes SCAR trabajamos junto a clientes e instituciones estratégicas
              para garantizar auditorías rigurosas, mejorar continuamente nuestros
              procesos y promover la capacitación continua de nuestro personal.
            </p>
          </div>
          <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
              <img
                src="/img/dashboard/achs.png"
                alt="ACHS"
                class="mx-auto h-12 mb-4"
                loading="lazy"
              />
              <h3 class="text-lg font-semibold text-indigo-600">ACHS Virtual</h3>
              <p class="mt-2 text-gray-600 text-sm">
                Plataforma de capacitación que fortalece la seguridad laboral.
              </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
              <img
                src="/img/dashboard/subcontralaley.png"
                alt="Subcontralaley"
                class="mx-auto h-12 mb-4"
                loading="lazy"
              />
              <h3 class="text-lg font-semibold text-indigo-600">Subcontralaley</h3>
              <p class="mt-2 text-gray-600 text-sm">
                Sistema de control para garantizar el cumplimiento normativo.
              </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
              <img
                src="/img/dashboard/achs-gestion.png"
                alt="ACHS Gestión"
                class="mx-auto h-12 mb-4"
                loading="lazy"
              />
              <h3 class="text-lg font-semibold text-indigo-600">ACHS Gestión</h3>
              <p class="mt-2 text-gray-600 text-sm">
                Herramienta avanzada para la gestión en seguridad y salud laboral.
              </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
              <img
                src="/img/dashboard/maquinaria.png"
                alt="Empresas de Transporte de Carga y Arriendo de Maquinarias"
                class="mx-auto h-12 mb-4"
                loading="lazy"
              />
              <h3 class="text-lg font-semibold text-indigo-600">
                Transporte y Maquinarias
              </h3>
              <p class="mt-2 text-gray-600 text-sm">
                Forjamos alianzas con empresas de transporte y arriendo de maquinaria,
                brindando servicios integrales y eficientes.
              </p>
            </div>
          </div>
        </div>
      </section>
  
      <!-- STATS -->
      <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl text-center">
            <p class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Confiado por cientos de clientes en todo Chile
            </p>
            <p class="mt-4 text-lg text-gray-700">
              El mercado del transporte de carga en Chile es cada vez más costoso y crece a
              un 5.61% anual. Sin embargo, en Transportes SCAR ofrecemos soluciones
              competitivas, reduciendo costos y asegurando tiempos de entrega óptimos.
            </p>
          </div>
          <dl
            class="mt-10 grid grid-cols-1 gap-x-8 gap-y-10 text-gray-900 sm:grid-cols-2 lg:grid-cols-4"
          >
            <div
              v-for="stat in stats"
              :key="stat.id"
              class="flex flex-col gap-y-3 border-l border-gray-300 pl-6"
            >
              <dt class="text-sm font-semibold">{{ stat.name }}</dt>
              <dd class="order-first text-3xl font-bold tracking-tight">
                {{ stat.value }}
              </dd>
            </div>
          </dl>
        </div>
      </section>
  
      <!-- CTA SECTION -->
      <section
        class="relative isolate mt-16 px-6 py-24 sm:py-32 lg:px-8 bg-gray-900"
      >
        <svg
          class="absolute inset-0 -z-10 w-full h-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
          aria-hidden="true"
        >
          <defs>
            <pattern
              id="1d4240dd-898f-445f-932d-e2872fd12de3"
              width="200"
              height="200"
              x="50%"
              y="0"
              patternUnits="userSpaceOnUse"
            >
              <path d="M.5 200V.5H200" fill="none" />
            </pattern>
          </defs>
          <svg x="50%" y="0" class="overflow-visible fill-gray-800/20">
            <path
              d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
              stroke-width="0"
            />
          </svg>
          <rect
            width="100%"
            height="100%"
            stroke-width="0"
            fill="url(#1d4240dd-898f-445f-932d-e2872fd12de3)"
          />
        </svg>
        <div
          class="absolute inset-x-0 top-10 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
          aria-hidden="true"
        >
          <div
            class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
            style="
              clip-path: polygon(
                73.6% 51.7%,
                91.7% 11.8%,
                100% 46.4%,
                97.4% 82.2%,
                92.5% 84.9%,
                75.7% 64%,
                55.3% 47.5%,
                46.5% 49.4%,
                45% 62.9%,
                50.3% 87.2%,
                21.3% 64.1%,
                0.1% 100%,
                5.4% 51.1%,
                21.4% 63.9%,
                58.9% 0.2%,
                73.6% 51.7%
              );
            "
          ></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl">
            Transportes SCAR: Liderando el transporte de carga en Chile
          </h2>
          <p class="mx-auto mt-6 max-w-xl text-lg text-gray-300">
            Con inversiones en tecnología avanzada y una estrategia de mejora continua,
            optimizamos procesos, reducimos costos operativos y garantizamos entregas
            puntuales con la máxima seguridad.
          </p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <!-- Botón 1: Alianza Transportes (formulario de contacto) -->
            <a
              href="#contacto"
              class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100
                     focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
            >
              Alianza Transportes
            </a>
            <!-- Botón 2: Conduce con Nosotros (registro) -->
            <Link
              :href="route('register')"
              class="text-sm font-semibold text-white"
            >
              Conduce con Nosotros <span aria-hidden="true">→</span>
            </Link>
          </div>
        </div>
      </section>
  
      <!-- FOOTER (solo Instagram y X) -->
      <footer id="contacto" class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="border-t border-gray-900/10 py-12 md:flex md:items-center md:justify-between">
          <div class="flex justify-center gap-x-6 md:order-2">
            <a
              v-for="item in footerSocial"
              :key="item.name"
              :href="item.href"
              class="text-gray-400 hover:text-gray-300"
            >
              <span class="sr-only">{{ item.name }}</span>
              <component :is="item.icon" aria-hidden="true" class="h-6 w-6" />
            </a>
          </div>
          <p class="mt-8 text-center text-sm text-gray-400 md:order-1 md:mt-0">
            &copy; 2024 Transportes SCAR. Todos los derechos reservados.
          </p>
        </div>
      </footer>
    </div>
  </template>
  
  <script setup>
  import { Head, Link } from '@inertiajs/vue3'
  import { ref } from 'vue'
  import { Dialog, DialogPanel } from '@headlessui/vue'
  import {
    ArrowPathIcon,
    Bars3Icon,
    CloudArrowUpIcon,
    FingerPrintIcon,
    LockClosedIcon,
    XMarkIcon,
  } from '@heroicons/vue/24/outline'
  
  // Estado del menú móvil
  const mobileMenuOpen = ref(false)
  
  // Navegación principal
  const navigation = [
    { name: 'Inicio', href: '#inicio' },
    { name: 'Sobre Nosotros', href: '#sobre-nosotros' },
    { name: 'Servicios', href: '#servicios' },
    { name: 'Compromiso', href: '#compromiso' },
    { name: 'Contacto', href: '#contacto' },
  ]
  
  // Datos para la sección Panorama Logístico
  const panoramaItems = [
    {
      title: 'Economía y Logística Nacional',
      description:
        'Las fluctuaciones en el precio del combustible y los costos logísticos demandan estrategias eficientes en un mercado altamente competitivo.',
      link: 'https://www.bcentral.cl/web/banco-central/series-estadisticas',
    },
    {
      title: 'Normas y Cumplimiento',
      description:
        'Garantizamos el estricto cumplimiento de las regulaciones del transporte de carga mediante auditorías y controles internos rigurosos.',
      link: 'https://www.subcontrataley.cl',
    },
    {
      title: 'Sostenibilidad y Medio Ambiente',
      description:
        'Implementamos iniciativas verdes para reducir la huella de carbono y promover un futuro sostenible en el transporte.',
      link: 'https://mma.gob.cl',
    },
  ]
  
  // Servicios ofrecidos
  const services = [
    {
      name: 'Cobertura Nacional',
      description:
        'Operamos de norte a sur de Chile, asegurando rutas seguras y eficientes en todo el territorio.',
      icon: CloudArrowUpIcon,
    },
    {
      name: 'Seguridad Operativa',
      description:
        'Contamos con controles estrictos y auditorías regulares para garantizar la seguridad en cada viaje.',
      icon: LockClosedIcon,
    },
    {
      name: 'Innovación Tecnológica',
      description:
        'Adoptamos sistemas digitales avanzados para optimizar procesos, gestionar fletes y mejorar la transparencia.',
      icon: ArrowPathIcon,
    },
    {
      name: 'Relaciones de Confianza',
      description:
        'Colaboramos con empresas e instituciones líderes para mantener estándares de excelencia en el sector.',
      icon: FingerPrintIcon,
    },
  ]
  
  // Estadísticas
  const stats = [
    { id: 1, name: 'Valor de Mercado', value: 'USD 20.13B' },
    { id: 2, name: 'Crecimiento Anual', value: '5.61%' },
    { id: 3, name: 'Costos Optimizados', value: 'Competitivos' },
    { id: 4, name: 'Entrega', value: 'Tiempos Óptimos' },
  ]
  
  // Iconos para redes sociales: Instagram y X
  const InstagramIcon = {
    template: `
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5A4.25 4.25 0 0020.5 16.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.25 6a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
      </svg>
    `,
  }
  
  const XIcon = {
    template: `
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 10.586l4.95-4.95a1 1 0 011.414 1.414L13.414 12l4.95 4.95a1 1 0 01-1.414 1.414L12 13.414l-4.95 4.95a1 1 0 01-1.414-1.414L10.586 12l-4.95-4.95a1 1 0 011.414-1.414L12 10.586z"/>
      </svg>
    `,
  }
  
  const footerSocial = [
    { name: 'Instagram', href: 'https://www.instagram.com/transportesscar', icon: InstagramIcon },
    { name: 'X', href: 'https://x.com/transportesscar', icon: XIcon },
  ]
  
  // Props de Jetstream
  defineProps({
    canLogin: { type: Boolean },
    canRegister: { type: Boolean },
    laravelVersion: { type: String, required: true },
    phpVersion: { type: String, required: true },
  })
  </script>
  