@props([
    'color' => 'gray',
])
<a {{ $attributes->merge(['class' => 'cursor-pointer flex-grow rounded-lg -m-3 p-3 flex items-center text-'. $color .'-200 hover:bg-'. $color .'-100 hover:text-'. $color .'-600']) }}>
    {{ $slot }}
</a>
