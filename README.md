# Laravel APP UI components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/masterix21/laravel-app-ui.svg?style=flat-square)](https://packagist.org/packages/masterix21/laravel-app-ui)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/masterix21/laravel-app-ui/run-tests?label=tests)](https://github.com/masterix21/laravel-app-ui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/masterix21/laravel-app-ui/Check%20&%20fix%20styling?label=code%20style)](https://github.com/masterix21/laravel-app-ui/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/masterix21/laravel-app-ui.svg?style=flat-square)](https://packagist.org/packages/masterix21/laravel-app-ui)

Laravel APP UI components

## Installation

You can install the package via composer:

```bash
composer require masterix21/laravel-app-ui
```

```bash
npm require tailwindcss
```

Update your tailwind.js with these lines:
```js
module.exports = {
    // ...
    
    variants: {
        extend: {
            padding: ['first', 'last'],
        }
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],

    // ...
}
```

And instruct your app.css to include our css like so:
```css
@import 'tailwindcss/base';
@import 'tailwindcss/components';
@import 'tailwindcss/utilities';
@import "../../vendor/masterix21/laravel-app-ui/resources/css/app-ui.css";
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Masterix21\AppUI\AppUIServiceProvider" --tag="appui-config"
```

## Usage

### Layout
```blade
<x-app-ui::layout>
    <div>Content</div>
</x-app-ui::layout>
```

### Tables
```blade
<x-app-ui::table>
    <x-slot name="columns">
        <x-app-ui::table.th>Customer</x-app-ui::table.th>
        <x-app-ui::table.th>Mobile</x-app-ui::table.th>
        <x-app-ui::table.th class="w-28" />
    </x-slot>
    
    <x-app-ui::table.tr wire:key="customers-{{ $customer->id }}">
        <x-app-ui::table.td class="space-y-1">John Doe</x-app-ui::table.td>

        <x-app-ui::table.td class="text-xs space-y-1">+39 0961 33799</x-app-ui::table.td>

        <x-app-ui::table.td class="flex space-x-3 items-center">
            <x-app-ui::table.action href="{{ route('customers.show', $customer->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </x-app-ui::table.action>

            <x-app-ui::table.action wire:click="delete({{$customer->id}})" color="red">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </x-app-ui::table.action>
        </x-app-ui::table.td>
    </x-app-ui::table.tr>
</x-app-ui::table>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Luca Longo](https://github.com/masterix21)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
