<header x-data="{ open: false }"
        @open-header-user-menu.window="open = true"
        @close-header-user-menu.window="open = false"
        @toggle-header-user-menu.window="open = ! open"
        x-on:click.away="open = false"
        class="bg-white shadow-sm lg:static lg:overflow-y-visible">
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
                <button type="button"
                        @click="$dispatch('toggle-header-user-menu')"
                        class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path x-show="! open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                <x-app-ui::header.notifications />
                <x-app-ui::header.user-menu />
            </div>
        </div>
    </div>

    <nav x-show="open" x-cloak class="lg:hidden" aria-label="Global">
        <div class="mobile-menu">
            @foreach (config('app-ui.menu') as $item)
                <x-app-ui::common.menu-link :item="$item" />
            @endforeach
        </div>
        <div class="border-t border-gray-200 pt-4">
            <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ app('gravatar')->src(auth()->user()->email) }}" alt="" />
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ auth()->user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                </div>

                <x-app-ui::header.notifications />
            </div>
            <div class="mobile-user-menu">
                @foreach (config('app-ui.user-menu') as $item)
                    <x-app-ui::common.menu-link :item="$item" />
                @endforeach
            </div>
        </div>
    </nav>
</header>
