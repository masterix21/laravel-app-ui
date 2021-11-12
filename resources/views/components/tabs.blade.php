@props([
    'placeholder' => 'Select a tab',
])
<nav {{ $attributes->merge(['class' => 'relative z-0 rounded-lg shadow flex divide-x divide-gray-200 overflow-hidden']) }}
     aria-label="Tabs">
    {{ $slot }}
</nav>
