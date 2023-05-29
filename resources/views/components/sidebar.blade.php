<header x-data="{ open: false }">
    <nav class="bg-white z-50 top-0 fixed w-full border-gray-200 px-4 lg:px-6 py-2.5 shadow-sm shadow-black/10">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <button @click="open = !open" x-bind:class="{ 'focus:outline-none focus:ring-2 focus:ring-gray-200 bg-gray-100': open }" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mx-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100">
                <svg x-show="open" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path></svg>
                <svg x-show="!open" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <a href="{{ route('home') }}" class="flex mr-4">
                  <img src="{{ asset('/assets/img/amusement-park.png') }}" class="mr-3 h-10" alt="FlowBite Logo" />
                </a>
              </div>
            <div x-data="{ profile_open: false }" class="relative flex items-center lg:order-2">
                <!-- Camera -->
                <button type="button" class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100">
                    <!-- Camera icon -->
                    <i class="mdi mdi-camera w-6 h-6 text-2xl lg:justify-center lg:text-center lg:items-center inline-block text-gray-500 hover:text-gray-900 hover:bg-gray-100"></i>
                </button>
                <button @click="profile_open = !profile_open" type="button"  class="flex mx-5 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div x-show="profile_open" class="absolute mt-14 right-0 top-0 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900 ">Neil sims</span>
                        {{-- <span class="block text-sm font-light text-gray-500 truncate">Saldo</span> --}}
                    </div>
                    <ul class="py-1 font-light text-gray-500" aria-labelledby="dropdown">
                        <li>
                            <a href="{{ route('setting') }}" class="block py-2 px-4 text-sm hover:bg-gray-100">My profile</a>
                        </li>
                        <li>
                            <a href="{{ route('topup') }}" class="block py-2 px-4 text-sm hover:bg-gray-100">Top Up</a>
                        </li>
                    </ul>
                    <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="block py-2 px-4 text-sm hover:bg-gray-100">Sign out</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <aside id="default-sidebar" x-bind:class="{ 'transform-none': open, '-translate-x-full': ! open }" class="pt-16 fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:translate-x-0 will-change-transform transform-gpu" aria-label="Sidenav">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200">
            <ul class="space-y-2">
                <x-navigation-links icon="mdi-home" :href="route('home')" :active="request()->routeIs('home')">
                    Dashboard
                </x-navigation-links>

                <x-navigation-links icon="mdi-go-kart" :href="route('attractions')" :active="request()->routeIs('attractions')">
                    Attractions
                </x-navigation-links>

                <x-navigation-links icon="mdi-silverware-variant" :href="route('restaurant')" :active="request()->routeIs('restaurant')">
                    Restaurant
                </x-navigation-links>

                <x-navigation-links icon="mdi-cupboard" :href="route('vending-machine')" :active="request()->routeIs('vending-machine')">
                    Vending Machine
                </x-navigation-links>

            </ul>
            <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200">
                <x-navigation-links icon="mdi-wallet" :href="route('balance')" :active="request()->routeIs('balance')">
                    Balance
                </x-navigation-links>

                <x-navigation-links icon="mdi-tag-text-outline" :href="route('pricing')" :active="request()->routeIs('pricing')">
                    Pricing
                </x-navigation-links>

                <x-navigation-links icon="mdi-cog" :href="route('setting')" :active="request()->routeIs('setting')">
                    Setting
                </x-navigation-links>
            </ul>
        </div>
    </aside>
    <div x-show="open" class="z-30 fixed inset-0 transform transition-transform min-h-screen" x-on:click="open = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
</header>
