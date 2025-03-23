<template>
  <Head>
    <title>Transportes SCAR - Tu carga, nuestra misión</title>
    <meta
      name="description"
      content="Transportes SCAR, con más de 25 años de experiencia, ofrece soluciones de transporte de carga seguras, eficientes y sostenibles en Chile."
    />
  </Head>

  <div class="bg-white">
    <!-- HEADER -->
    <header class="absolute inset-x-0 top-0 z-50">
      <nav
        class="mx-4 mt-4 flex items-center justify-between rounded-2xl bg-gray-900 p-4 shadow-lg lg:px-6 relative overflow-visible"
        aria-label="Menú principal"
      >
        <!-- Logo (alineado a la izquierda) -->
        <div class="flex items-center">
          <a href="#inicio" class="p-1" aria-label="Inicio">
            <span class="sr-only">Transportes SCAR</span>
            <!-- Ajusta el tamaño y márgenes para que sobresalga de la barra -->
            <img
              class="h-28 w-auto relative z-10 -mb-20 -mt-4"
              src="img/logoscar.png"
              alt="Logo de Transportes SCAR"
            />
          </a>
        </div>

        <!-- Botón para menú móvil -->
        <div class="flex lg:hidden">
          <button
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
            @click="mobileMenuOpen = true"
            aria-label="Abrir menú"
          >
            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
          </button>
        </div>

        <!-- Navegación (versión escritorio) -->
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

        <!-- Botones de Login/Registro (versión escritorio) -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end space-x-4" v-if="canLogin">
          <Link
            :href="route('login')"
            class="text-sm font-semibold text-white hover:text-indigo-300"
            aria-label="Ingresar"
          >
            Ingresar <span aria-hidden="true">&rarr;</span>
          </Link>
          <Link
            v-if="canRegister"
            :href="route('register')"
            class="text-sm font-semibold text-white hover:text-indigo-300"
            aria-label="Registrar"
          >
            Registrar <span aria-hidden="true">&rarr;</span>
          </Link>
        </div>
      </nav>

      <!-- MENÚ MÓVIL (Dialog) -->
<Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
  <!-- Fondo semi-transparente detrás del drawer -->
  <div class="fixed inset-0 z-40 bg-black/25" aria-hidden="true"></div>

  <!-- Panel deslizable desde el costado derecho -->
  <DialogPanel
    class="fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-gray-900 px-6 py-6 sm:ring-1 sm:ring-white/10"
  >
    <div class="flex items-center justify-between">
      <a href="#inicio" class="p-1" aria-label="Inicio">
        <span class="sr-only">Transportes SCAR</span>
        <img class="h-28 w-auto" src="img/logoscar.png" alt="Logo de Transportes SCAR" />
      </a>
      <button
        type="button"
        class="-m-2.5 rounded-md p-2.5 text-gray-400"
        @click="mobileMenuOpen = false"
        aria-label="Cerrar menú"
      >
        <XMarkIcon class="h-6 w-6" aria-hidden="true" />
      </button>
    </div>
    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-500/25">
        <!-- Enlaces de navegación -->
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

        <!-- Sección Login/Registrar -->
        <div class="py-6">
          <Link
            v-if="canLogin"
            :href="route('login')"
            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800"
            aria-label="Ingresar"
          >
            Ingresar
          </Link>
          <Link
            v-if="canRegister"
            :href="route('register')"
            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800"
            aria-label="Registrar"
          >
            Registrar
          </Link>
        </div>
      </div>
    </div>
  </DialogPanel>
</Dialog>

    </header>

    <!-- MAIN CONTENT -->
    <main>
      <!-- HERO SECTION -->
      <section id="inicio" class="pt-24 sm:pt-30 pb-16 sm:pb-2 max-w-7xl mx-auto px-6 lg:px-4">
        <div class="relative overflow-hidden rounded-2xl bg-gray-900 px-6 py-20 shadow-xl sm:px-10 sm:py-24 md:px-12 lg:px-20">
          <img
            class="absolute inset-0 h-full w-full object-cover brightness-90 saturate-100"
            src="/img/dashboard/truck.jpg"
            alt="Camión en carretera"
          />
          <div class="absolute inset-0 bg-gray-900/60 mix-blend-multiply"></div>
          <div class="relative mx-auto max-w-2xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white">
              Llevamos tu carga a todo Chile
            </h1>
            <p class="mt-6 text-base sm:text-lg leading-7 text-gray-300">
              Con más de 25 años de experiencia en transporte terrestre, Transportes SCAR garantiza seguridad, eficiencia y cumplimiento en cada ruta.
            </p>
            <div class="mt-10 flex justify-center gap-x-6">
              <a
                href="#sobre-nosotros"
                class="rounded-md bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500"
                aria-label="Conócenos"
              >
                Conócenos
              </a>
              <a
                href="#servicios"
                class="text-sm font-semibold leading-6 text-white"
                aria-label="Nuestros servicios"
              >
                Nuestros servicios <span aria-hidden="true">→</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- CLIENTES -->
      <section id="clientes" class="bg-gray-50 py-12 sm:py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
          <div class="mt-10">
            <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">
              Nuestros Clientes
            </p>
            <div class="mt-6 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/essity.svg" alt="Essity" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/prisa.png" alt="Prisa" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/fibox.png" alt="Fibox" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/geo.png" alt="Geoprospec" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/deco.png" alt="Deco Muebles" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/fruna.webp" alt="Fruna" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/falabella.png" alt="Falabella" loading="lazy" />
              </div>
              <div class="col-span-1 flex justify-center">
                <img class="max-h-16 object-contain" src="/img/dashboard/canontex.png" alt="Canontex" loading="lazy" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PANORAMA LOGÍSTICO -->
<section id="panorama-logistico" class="bg-white py-12">
  <div class="mx-auto max-w-4xl text-center">
    <p class="text-4xl font-bold tracking-tight text-gray-900">
      Panorama Logístico
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      Factores clave que impactan el transporte de carga en Chile, desde la economía hasta la sostenibilidad.
    </p>
  </div>
  <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-6 lg:px-8">
    <div
      v-for="(item, index) in panoramaItems"
      :key="index"
      class="bg-gray-100 p-6 rounded-lg shadow-md hover:bg-gray-200 transition"
    >
      <h3 class="text-lg font-semibold text-gray-900">{{ item.title }}</h3>
      <p class="mt-4 text-lg text-gray-700 text-justify">{{ item.description }}</p>
      <a
        :href="item.link"
        target="_blank"
        rel="noopener"
        class="inline-block mt-4 text-indigo-600 font-semibold hover:underline text-sm"
        aria-label="Ver más sobre {{ item.title }}"
      >
        Ver más
      </a>
    </div>
  </div>
</section>

<!-- SOBRE NOSOTROS -->
<section id="sobre-nosotros" class="bg-gray-100 py-12">
  <div class="mx-auto max-w-4xl text-center">
    <p class="text-4xl font-bold tracking-tight text-gray-900">
      Sobre Nosotros
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      Desde nuestros inicios hace más de 25 años, en TrRRansportes SCAR hemos recorrido miles de kilómetros en las rutas más exigentes de Chile, transportando cargas que requieren máxima seguridad y eficiencia. Con un equipo comprometido y tecnología de punta, hemos establecido un estándar de calidad que nos posiciona como empresa destacada en la industria.
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      Creemos en la transparencia, el compromiso y la excelencia. Nos esforzamos por ofrecer un servicio de transporte seguro, responsable y alineado con los más altos estándares laborales y medioambientales.
    </p>
  </div>
</section>

<!-- NUESTROS SERVICIOS -->
<section id="servicios" class="bg-white py-12">
  <div class="mx-auto max-w-4xl text-center">
    <p class="text-4xl font-bold tracking-tight text-gray-900">
      Nuestros Servicios
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      Nos especializamos en soluciones logísticas adaptadas a cada necesidad, basadas en experiencia, tecnología y relaciones de confianza.
    </p>
  </div>
  <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-2 max-w-7xl mx-auto px-6 lg:px-8">
    <div v-for="(item, i) in services" :key="i" class="relative pl-16">
      <div class="absolute left-0 top-0 flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600">
        <component :is="item.icon" class="h-6 w-6 text-white" aria-hidden="true" />
      </div>
      <h3 class="text-lg font-semibold text-gray-900">{{ item.name }}</h3>
      <p class="mt-2 text-lg text-gray-700 text-justify">{{ item.description }}</p>
    </div>
  </div>
</section>

<!-- COMPROMISO Y ALIANZAS (incluye Educación y Bienestar) -->
<section id="compromiso" class="bg-gray-50 py-12">
  <div class="mx-auto max-w-4xl text-center">
    <p class="text-4xl font-bold tracking-tight text-gray-900">
      Compromiso y Alianzas
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      En Transportes SCAR trabajamos junto a clientes e instituciones estratégicas para garantizar auditorías rigurosas, mejorar continuamente nuestros procesos y promover la capacitación continua de nuestro personal.
    </p>
  </div>
  <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition text-center">
      <img src="/img/dashboard/achs.png" alt="ACHS Virtual" class="mx-auto h-12 mb-4" loading="lazy" />
      <p class="text-lg font-bold text-indigo-600">ACHS Virtual</p>
      <p class="mt-2 text-sm text-gray-700 text-justify">
        Plataforma de capacitación que fortalece la seguridad laboral.
      </p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition text-center">
      <img src="/img/dashboard/subcontralaley.png" alt="Subcontralaley" class="mx-auto h-12 mb-4" loading="lazy" />
      <p class="text-lg font-bold text-indigo-600">Subcontralaley</p>
      <p class="mt-2 text-sm text-gray-700 text-justify">
        Sistema de control para garantizar el cumplimiento normativo.
      </p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition text-center">
      <img src="/img/dashboard/achs-gestion.png" alt="ACHS Gestión" class="mx-auto h-12 mb-4" loading="lazy" />
      <p class="text-lg font-bold text-indigo-600">ACHS Gestión</p>
      <p class="mt-2 text-sm text-gray-700 text-justify">
        Herramienta avanzada para la gestión en seguridad y salud laboral.
      </p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition text-center">
      <img src="/img/dashboard/maquinaria.png" alt="Transporte y Maquinarias" class="mx-auto h-12 mb-4" loading="lazy" />
      <p class="text-lg font-bold text-indigo-600">Transporte y Maquinarias</p>
      <p class="mt-2 text-sm text-gray-700 text-justify">
        Forjamos alianzas con empresas de transporte y arriendo de maquinaria, brindando servicios integrales y eficientes.
      </p>
    </div>
  </div>
  <!-- EDUCACIÓN Y BIENESTAR -->
  <div class="mt-16 max-w-4xl mx-auto text-center">
    <p class="text-4xl font-bold tracking-tight text-gray-900">
      Educación y Bienestar
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      Sabemos que el transporte seguro comienza con un equipo bien capacitado. Por eso, en Transportes SCAR ofrecemos programas de formación continua alineados con las últimas normativas, asegurando que cada miembro esté preparado para enfrentar los desafíos de la carretera.
    </p>
    <p class="mt-4 text-lg text-gray-700 text-justify">
      Promovemos una cultura de seguridad y autocuidado, fomentando el respeto, el compromiso y la mejora continua. Nos importa la gente que mueve a Chile.
    </p>
  </div>
</section>



<!-- ESTADÍSTICAS -->
<section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
          <div class="mx-auto max-w-2xl text-center">
            <p class="text-4xl font-bold tracking-tight text-gray-900">
              Confiado por cientos de clientes en todo Chile
            </p>
            <p class="mt-4 text-lg text-gray-700">
              El mercado del transporte de carga en Chile es cada vez más costoso y a la vez crece con un 5.61% de alza anual. Sin embargo, en Transportes SCAR ofrecemos soluciones competitivas, reduciendo costos y asegurando tiempos de entrega óptimos para nuestros clientes.
            </p>
          </div>
          <dl class="mt-10 mx-auto max-w-4xl grid grid-cols-1 gap-x-8 gap-y-10 text-gray-900 sm:grid-cols-2 lg:grid-cols-4">
            <div v-for="stat in stats" :key="stat.id" class="flex flex-col gap-y-3 border-l border-gray-300 pl-6">
              <dt class="text-sm font-semibold">{{ stat.name }}</dt>
              <dd class="order-first text-3xl font-bold tracking-tight">{{ stat.value }}</dd>
            </div>
          </dl>
        </div>
</section>

<!-- CTA SECTION -->
<section class="relative isolate mt-16 px-6 py-24 sm:py-32 lg:px-8 bg-gray-900">
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
          <rect width="100%" height="100%" stroke-width="0" fill="url(#1d4240dd-898f-445f-932d-e2872fd12de3)" />
        </svg>
        <div
          class="absolute inset-x-0 top-10 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
          aria-hidden="true"
        >
          <div
            class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
            style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"
          ></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-4xl font-bold tracking-tight text-white">
            Transportes SCAR: Liderando el transporte de carga en Chile
          </h2>
          <p class="mx-auto mt-6 max-w-xl text-lg text-gray-300">
            Con inversiones en tecnología avanzada y una estrategia de mejora continua, optimizamos procesos, reducimos costos operativos y garantizamos entregas puntuales con la máxima seguridad.
          </p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a
              href="#contacto"
              class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
              aria-label="Alianza Transportes"
            >
              Alianza Transportes
            </a>
            <Link
              :href="route('register')"
              class="text-sm font-semibold text-white"
              aria-label="Conduce con Nosotros"
            >
              Conduce con Nosotros <span aria-hidden="true">→</span>
            </Link>
          </div>
        </div>
</section>
</main>

<!-- FOOTER -->
<footer id="contacto" class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="border-t border-gray-900/10 py-12 md:flex md:items-center md:justify-between">
        <div class="flex justify-center gap-x-6 md:order-2">
          <a
            v-for="item in footerSocial"
            :key="item.name"
            :href="item.href"
            class="text-gray-400 hover:text-gray-300"
            aria-label="Ir a {{ item.name }}"
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
import { Dialog, DialogPanel, Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { Bars3Icon, MinusSmallIcon, PlusSmallIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import {
  ArrowPathIcon,
  CheckIcon,
  CloudArrowUpIcon,
  Cog6ToothIcon,
  FingerPrintIcon,
  LockClosedIcon,
  ServerIcon,
} from '@heroicons/vue/20/solid'

// Datos del Header
const navigation = [
  { name: 'Inicio', href: '#inicio' },
  { name: 'Sobre Nosotros', href: '#sobre-nosotros' },
  { name: 'Servicios', href: '#servicios' },
  { name: 'Clientes', href: '#clientes' },
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

// Datos para la sección Servicios
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

// Datos para la sección Estadísticas
const stats = [
  { id: 1, name: 'Valor de Mercado', value: 'USD 20.13B' },
  { id: 2, name: 'Crecimiento Anual', value: '5.61%' },
  { id: 3, name: 'Costos Optimizados', value: 'Competitivos' },
  { id: 4, name: 'Entrega', value: 'Tiempos Óptimos' },
]

// Iconos de Footer (Instagram y X)
const footerSocial = [
  {
    name: 'Instagram',
    href: 'https://www.instagram.com/transportesscar',
    icon: {
      template: `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5A4.25 4.25 0 0020.5 16.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.25 6a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/></svg>`,
    },
  },
  {
    name: 'X',
    href: 'https://x.com/transportesscar',
    icon: {
      template: `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 10.586l4.95-4.95a1 1 0 011.414 1.414L13.414 12l4.95 4.95a1 1 0 01-1.414 1.414L12 13.414l-4.95 4.95a1 1 0 01-1.414-1.414L10.586 12l-4.95-4.95a1 1 0 011.414-1.414L12 10.586z"/></svg>`,
    },
  },
]

// Flags de autenticación (propiedades que Jetstream nos provee)
defineProps({
  canLogin: { type: Boolean },
  canRegister: { type: Boolean },
  laravelVersion: { type: String, required: true },
  phpVersion: { type: String, required: true },
})

// Estado para el menú móvil
const mobileMenuOpen = ref(false)
</script>
