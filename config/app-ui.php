<?php

return [
    'menu' => [
        [
            'label' => 'Dashboard',
            'icon' => null,
            'route' => null,
        ], [
            'label' => 'CRM',
            'icon' => null,
            'children' => [
                [
                    'label' => 'Lead(s)',
                    'icon' => null,
                    'route' => null,
                ], [
                    'label' => 'Customers',
                    'icon' => null,
                    'route' => null,
                ],
            ],
        ], [
            'label' => 'Sales',
            'icon' => null,
            'children' => [
                [
                    'label' => 'Quotes',
                    'icon' => null,
                    'route' => null,
                ], [
                    'label' => 'Orders',
                    'icon' => null,
                    'route' => null,
                ], [
                    'label' => 'Invoices',
                    'icon' => null,
                    'route' => null,
                ],
            ],
        ],
    ],
];
