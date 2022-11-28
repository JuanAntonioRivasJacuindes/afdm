<nav x-data="{ open: false }" class="bg-primary">

    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('/') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                        {{--<img  class = "py-0 px-3" src="{{ asset('storage\img\logoswebblanco.png') }}" style="height: 100px" alt="" loading="lazy" >--}}
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Mis Cursos') }}
                    </x-jet-nav-link>

                    @hasrole('Administrator')
                    <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                        {{ __('Administración') }}
                    </x-jet-nav-link>
                    @endhasrole
                   @hasrole('Coordinator')
                   <x-jet-nav-link href="{{ route('coordination') }}" :active="request()->routeIs('coordination')">
                    {{ __('Coordinación') }}
                </x-jet-nav-link>
                   @endhasrole

                </div>
            </div>

            @if (!Auth::guest())
                <div class="hidden sm:flex sm:items-center sm:ml-6">

                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class=" block px-4 py-2 text-xs text-white">
                                    {{ __('Manage Account') }}
                                </div>

                                @hasrole('Administrator')

                                <x-jet-dropdown-link href="{{ route('admin') }}" class=" hover:text-gray-700">
                                    {{ __('Panel de Administración') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('user.billing') }}" class=" hover:text-gray-700">
                                    {{ __('Facturación') }}
                                </x-jet-dropdown-link>

                                @endhasrole

                                <x-jet-dropdown-link href="{{ route('profile.show') }}" class=" hover:text-gray-700">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>


                                <div class="border-t border-gray-700"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"  class="hover:text-gray-700">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>


            @endif



        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

        @if (!Auth::guest())

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-100">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-100">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-jet-responsive-nav-link href="{{ route('user.billing') }}" :active="request()->routeIs('user.billing')">
                        {{ __('Facturación') }}
                    </x-jet-responsive-nav-link>
                    @hasrole('Administrator')
                    <x-jet-responsive-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                        {{ __('Admin') }}
                    </x-jet-responsive-nav-link>
                    @endhasrole
                    @hasrole('Coordinator')
                    <x-jet-responsive-nav-link href="{{ route('coordination') }}" :active="request()->routeIs('coordination')">
                        {{ __('Coordinación') }}
                    </x-jet-responsive-nav-link>
                    @endhasrole
                    <!-- Account Management ... -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Mis Cursos') }}
                    </x-jet-responsive-nav-link>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>

        @endif
    </div>
    </div>
    </div>
</nav>
