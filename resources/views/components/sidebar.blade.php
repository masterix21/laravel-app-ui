<div class="hidden lg:block lg:col-span-3 xl:col-span-2">
    <nav class="sidebar sticky top-4 divide-y divide-gray-300">
        <div class="pb-8 space-y-1">
            @foreach (config('app-ui.menu') as $item)
                <x-app-ui::common.menu-link :item="$item" />
            @endforeach
        </div>
    </nav>
</div>
