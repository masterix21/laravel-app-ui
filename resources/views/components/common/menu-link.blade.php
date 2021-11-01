@props(['item' => []])
<div class="menu-link">
    @if (! \Illuminate\Support\Arr::has($item, 'children'))
        <a href="{{ $item['route'] ? route($item['route']) : "#" }}"
            @class([
                 "menu-link-inactive" => $item['route'] && request()->route()->named($item['route']),
                 "menu-link-active" => ! $item['route'] || ! request()->route()->named($item['route'])
            ])>
            {!! $item['icon'] !!}
            <span class="truncate">
                {{ $item['label'] }}
            </span>
        </a>
    @else
        <div class="menu-group">
            <div class="menu-group-label">
                {!! $item['icon'] !!} {{ $item['label'] }}
            </div>

            @foreach ($item['children'] as $child)
                <x-app-ui::common.menu-link :item="$child" />
            @endforeach
        </div>
    @endif
</div>
