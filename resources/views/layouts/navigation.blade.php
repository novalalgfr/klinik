<nav x-data="{ open: false }" class="bg-white shadow-sm">
    @auth
        <!-- Vertical Navbar for Authenticated User -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="bg-white border-r border-gray-100" style="width: 16rem;">
                <div class="px-4 py-4">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center mb-4">
                        <a href="{{ url('/') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex flex-col gap-2">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="admin-link">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('jumbotron.index')" :active="request()->routeIs('jumbotron.*')" class="admin-link">
                            {{ __('Jumbotron') }}
                        </x-nav-link>
                        <x-nav-link :href="route('promo_kami.index')" :active="request()->routeIs('promo_kami.*')" class="admin-link">
                            {{ __('Promo Kami') }}
                        </x-nav-link>
                        <x-nav-link :href="route('tentang_kami_section.index')" :active="request()->routeIs('tentang_kami_section.*')" class="admin-link">
                            {{ __('Tentang Kami Section') }}
                        </x-nav-link>
                        <x-nav-link :href="route('pelayan_kami.index')" :active="request()->routeIs('pelayan_kami.*')" class="admin-link">
                            {{ __('Pelayanan Kami') }}
                        </x-nav-link>
                        <x-nav-link :href="route('tentang_kami.index')" :active="request()->routeIs('tentang_kami.*')" class="admin-link">
                            {{ __('Tentang Kami') }}
                        </x-nav-link>
                        <x-nav-link :href="route('treatment.index')" :active="request()->routeIs('treatment.*')" class="admin-link">
                            {{ __('Treatment') }}
                        </x-nav-link>
                        <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.*')" class="admin-link">
                            {{ __('Blog') }}
                        </x-nav-link>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="mt-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-[12px] text-black font-medium h-fit px-[16px] py-[8px] transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>

    @else
        <!-- Horizontal Navbar for Guest or Unauthenticated Users -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-[72px]">
                <div class="w-full flex justify-between">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url('/') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>

                    <!-- Navigation Links for Guests -->
                    <div class="hidden items-center space-x-2 sm:-my-px sm:flex">
                        <x-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
                            {{ __('Beranda') }}
                        </x-nav-link>
                        <x-nav-link :href="route('tentang-kami')" :active="request()->routeIs('tentang-kami')">
                            {{ __('Tentang Kami') }}
                        </x-nav-link>
                        <x-nav-link :href="route('treatment')" :active="request()->routeIs('treatment')">
                            {{ __('Treatment') }}
                        </x-nav-link>
                        <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
                            {{ __('Blog') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Hamburger for Mobile -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            </div>
        </div>
    @endauth
</nav>
