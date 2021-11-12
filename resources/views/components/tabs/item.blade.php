@props([
    'label' => '',
    'active' => false,
])
<a {{ $attributes }}
   aria-current="page"
   @class([
        'group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center focus:z-10',
        'text-gray-900 hover:bg-gray-50' => $active,
        'text-gray-500 hover:text-gray-700' => ! $active
   ])>
    {{ $slot }}

    @if ($active)
        <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
    @endif
</a>
