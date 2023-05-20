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
                            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <aside id="default-sidebar" x-bind:class="{ 'transform-none': open, '-translate-x-full': ! open }" class="pt-16 fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:translate-x-0" aria-label="Sidenav">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200">
            <ul class="space-y-2">
                <li>
                    <a href="/">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 " aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                            {{-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg> --}}
                            <i class="pt-0.5 mdi mdi-home text-gray-400 text-xl"></i>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Dashboard</span>
                        </button>
                    </a>
                </li>

                <li>
                    <a href="/">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 " aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                            {{-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg> --}}
                            <i class="pt-0.5 mdi mdi-go-kart text-gray-400 text-xl"></i>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Rides</span>
                        </button>
                    </a>
                </li>

                <li>
                    <a href="/">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 " aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                            <i class="pt-0.5 mdi mdi-silverware-variant text-gray-400 text-xl"></i>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Restaurant</span>
                        </button>
                    </a>
                </li>

                <li>
                    <a href="{{ route('vending-machine') }}" type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100" aria-controls="dropdown-vending" data-collapse-toggle="dropdown-vending">
                        <i class="pt-0.5 mdi mdi-cupboard text-gray-400 text-xl"></i>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Vending Machine</span>
                    </a>
                </li>

            </ul>
            <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200">
                <li>
                    <a href="{{ route('balance') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75  group hover:bg-gray-100">
                        <i class="pt-0.5 mdi mdi-wallet text-gray-400 text-xl"></i>
                        <span class="ml-3">Balance</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pricing') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75  group hover:bg-gray-100">
                        <i class="pt-0.5 mdi mdi-tag-text-outline text-gray-400 text-xl"></i>
                        <span class="ml-3">Pricing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('setting') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75  group hover:bg-gray-100">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                        <span class="ml-3">Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div x-show="open" class="z-30 fixed inset-0 transform transition-all" x-on:click="open = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
</header>
