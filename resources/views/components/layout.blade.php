<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased h-full">
    <div class="min-h-full">
        <x-app-ui::header />

        <div class="py-10">
            <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <x-app-ui::sidebar />

                @if ($aside ?? null)
                    <main class="lg:col-span-9 xl:col-span-6">
                        {{ $slot ?? '' }}
                    </main>

                    <aside class="hidden xl:block xl:col-span-4">
                        {{ $aside }}
                    </aside>
                @else
                    <main>
                        {{ $slot ?? '' }}
                    </main>
                @endif
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
