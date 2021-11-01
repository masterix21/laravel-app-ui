<div x-data="{ open: false }"
     @open-header-user-menu.window="open = true"
     @close-header-user-menu.window="open = false"
     @toggle-header-user-menu.window="open = ! open"
     class="flex-shrink-0 relative ml-5">
    <div>
        <button type="button"
                @click="$dispatch('toggle-header-user-menu')"
                class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </button>
    </div>

    <div class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none"
         x-show="open"
         role="menu"
         aria-orientation="vertical"
         aria-labelledby="user-menu-button"
         tabindex="-1"
         x-cloak
         x-show="open"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95">
        <!-- Active: "bg-gray-100", Not Active: "" -->
        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Your Profile</a>

        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Settings</a>

        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Sign out</a>
    </div>
</div>
