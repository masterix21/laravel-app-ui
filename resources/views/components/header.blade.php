<header class="bg-white shadow-sm lg:static lg:overflow-y-visible">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
            <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
                <div class="flex-shrink-0 flex items-center">
                    <x-app-ui::header.logo />
                </div>
            </div>
            <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                <div class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                    <x-app-ui::header.search />
                </div>
            </div>
            <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                <x-app-ui::header.notifications />
                <x-app-ui::header.user-menu />
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <nav class="lg:hidden" aria-label="Global">
        <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">
            <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
            <a href="#" aria-current="page" class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium">Home</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Popular</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Communities</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Trending</a>
        </div>
        <div class="border-t border-gray-200 pt-4">
            <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                    <div class="text-sm font-medium text-gray-500">chelseahagon@example.com</div>
                </div>
                <button type="button" class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your Profile</a>

                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>

                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign out</a>
            </div>
        </div>

        <div class="mt-6 max-w-3xl mx-auto px-4 sm:px-6">
            <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-rose-600 hover:bg-rose-700">
                New Post
            </a>

            <div class="mt-6 flex justify-center">
                <a href="#" class="text-base font-medium text-gray-900 hover:underline">
                    Go Premium
                </a>
            </div>
        </div>
    </nav>
</header>
