<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default SEO Meta Tags
    |--------------------------------------------------------------------------
    |
    | These values are used as defaults for all pages unless overridden
    | in specific controllers or views.
    |
    */

    'defaults' => [
        'title' => env('APP_NAME', 'DigitalStudio'),
        'title_suffix' => ' - ' . env('APP_NAME', 'DigitalStudio'),
        'description' => 'Tworzę profesjonalne strony internetowe i aplikacje webowe. Specjalizuję się w responsywnych rozwiązaniach z wykorzystaniem Laravel, Livewire i Tailwind CSS.',
        'keywords' => 'strony internetowe, aplikacje web, Laravel, Livewire, Tailwind CSS, web development, tworzenie stron, programista',
        'author' => 'DigitalStudio',
        'image' => '/assets/img/og-default.jpg',
        'url' => env('APP_URL', 'https://digitalstudio.com.pl'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Graph Settings
    |--------------------------------------------------------------------------
    */

    'open_graph' => [
        'site_name' => env('APP_NAME', 'DigitalStudio'),
        'type' => 'website',
        'locale' => 'pl_PL',
    ],

    /*
    |--------------------------------------------------------------------------
    | Twitter Card Settings
    |--------------------------------------------------------------------------
    */

    'twitter' => [
        'card' => 'summary_large_image',
        'site' => '@DigitalStudio', // Your Twitter handle
    ],

    /*
    |--------------------------------------------------------------------------
    | Schema.org Settings
    |--------------------------------------------------------------------------
    */

    'schema' => [
        'organization' => [
            'name' => env('APP_NAME', 'DigitalStudio'),
            'url' => env('APP_URL', 'https://digitalstudio.com.pl'),
            'logo' => env('APP_URL', 'https://digitalstudio.com.pl') . '/assets/img/ds_logo.png',
            'email' => 'kontakt@digitalstudio.com.pl',
            'telephone' => '+48 123 456 789',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'PL',
            ],
            'sameAs' => [
                'https://www.facebook.com/digitalstudio',
                'https://www.instagram.com/digitalstudio',
            ],
        ],
    ],
];
