<nav x-data="{ open: false }" :class="{'bg-darkBlue text-white': open, 'bg-white text-gray-500 sm:bg-white': !open}" class="border-b border-gray-100 shadow-md transition-colors duration-300">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('welcome') }}">
                    <img src="{{ asset('img/logo.jpg') }}" class="block h-20 w-auto" alt="Transportes LQM">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:ml-10 sm:flex items-center">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-base font-medium hover:text-gray-900">Dashboard</a>
                    <a href="{{ route('welcome') }}" class="text-base font-medium hover:text-gray-900">Seguridad y Salud</a>
                    <a href="{{ route('welcome') }}" class="text-base font-medium hover:text-gray-900">Contratos y Anexos</a>
                    <a href="{{ route('welcome') }}" class="text-base font-medium hover:text-gray-900">Liquidaciones y Rendiciones</a>
                    <a href="{{ route('welcome') }}" class="text-base font-medium hover:text-gray-900">Mis Documentos</a>
                @else
                    <a href="{{ route('welcome') }}" class="text-base font-medium hover:text-gray-900">Trabaja con Nosotros</a>
                    <a href="{{ route('welcome') }}" class="text-base font-medium hover:text-gray-900">Contratar</a>
                @endauth
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium hover:text-gray-700 hover:border-gray-300 focus:outline-none transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.292 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Perfil') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </x-dropdown-link>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium hover:text-gray-900">Ingresar</a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm font-medium hover:text-gray-900">Registrar</a>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md bg-darkBlue text-white transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-darkBlue text-white">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Dashboard</a>
                <a href="{{ route('welcome') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Seguridad y Salud</a>
                <a href="{{ route('welcome') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Contratos y Anexos</a>
                <a href="{{ route('welcome') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Liquidaciones y Rendiciones</a>
                <a href="{{ route('welcome') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Mis Documentos</a>
            @else
                <a href="{{ route('login') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Ingresar</a>
                <a href="{{ route('register') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Registrar</a>
                <a href="{{ route('welcome') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Trabaja con Nosotros</a>
                <a href="{{ route('welcome') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-white hover:bg-gray-50 hover:text-darkBlue">Contratar</a>
            @endauth
        </div>
    </div>
</nav>
