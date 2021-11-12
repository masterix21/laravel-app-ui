@props([
    'odd' => false
])
<tr {{ $attributes->except('class') }}
    @class([
        'bg-white' => ! $odd,
        'bg-gray-50' => $odd,
        $attributes->get('class') => true
    ])>
    {{ $slot }}
</tr>
