@props(['item' => []])
<div>
    @if (! \Illuminate\Support\Arr::has($item, 'children'))
        @if (data_get($item, 'type') === "submit")
            <form method="post" action="{{ route($item['route']) }}" target="_self">
                @csrf
                <button
                    type="submit"
                    @class([
                     "menu-link" => true,
                     "menu-link-active" => $item['route'] && request()->route()->named($item['route']),
                     "menu-link-inactive" => ! $item['route'] || ! request()->route()->named($item['route'])
                ])>
                    {!! $item['icon'] !!}
                    <span class="truncate">{{ $item['label'] }}</span>
                </button>
            </form>
        @else
            <a href="{{ $item['route'] ? route($item['route']) : "#" }}"
                @class([
                     "menu-link" => true,
                     "menu-link-active" => $item['route'] && request()->route()->named($item['route']),
                     "menu-link-inactive" => ! $item['route'] || ! request()->route()->named($item['route'])
                ])>
                {!! $item['icon'] !!}
                <span class="truncate">
                    {{ $item['label'] }}
                </span>
            </a>
        @endif
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
