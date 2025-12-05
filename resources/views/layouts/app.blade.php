<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- SEO Meta Tags --}}
    <title>@yield('meta_title', config('seo.defaults.title'))</title>
    <meta name="description" content="@yield('meta_description', config('seo.defaults.description'))">
    <meta name="keywords" content="@yield('meta_keywords', config('seo.defaults.keywords'))">
    <meta name="author" content="{{ config('seo.defaults.author') }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('og_title', config('seo.defaults.title'))">
    <meta property="og:description" content="@yield('og_description', config('seo.defaults.description'))">
    <meta property="og:image" content="@yield('og_image', asset(config('seo.defaults.image')))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="@yield('og_type', config('seo.open_graph.type'))">
    <meta property="og:site_name" content="{{ config('seo.open_graph.site_name') }}">
    <meta property="og:locale" content="{{ config('seo.open_graph.locale') }}">
    
    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="{{ config('seo.twitter.card') }}">
    <meta name="twitter:site" content="{{ config('seo.twitter.site') }}">
    <meta name="twitter:title" content="@yield('twitter_title', config('seo.defaults.title'))">
    <meta name="twitter:description" content="@yield('twitter_description', config('seo.defaults.description'))">
    <meta name="twitter:image" content="@yield('twitter_image', asset(config('seo.defaults.image')))">
    
    {{-- Favicons --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    {{-- Fonts --}}
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    {{-- Styles --}}
    @vite('resources/css/app.css')
    @livewireStyles
    {!! CookieConsent::styles() !!}
    
    @stack('head')
</head>
<body>
    @include('partials.contact-top', ['settings' => app(\App\Settings\GeneralSettings::class)])
    <x-navigation />

    @yield('content')

    @include('partials.footer', ['settings' => app(\App\Settings\GeneralSettings::class)])

    <x-scrollup/>

    @vite('resources/js/app.js')
    @livewireScripts
    {!! CookieConsent::scripts() !!}
    
    {{-- Schema.org JSON-LD --}}
    @php
        $schemaOrg = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => config('seo.schema.organization.name'),
            'url' => config('seo.schema.organization.url'),
            'logo' => config('seo.schema.organization.logo'),
            'email' => config('seo.schema.organization.email'),
            'telephone' => config('seo.schema.organization.telephone'),
            'address' => config('seo.schema.organization.address'),
            'sameAs' => config('seo.schema.organization.sameAs'),
        ];
    @endphp
    
    <script type="application/ld+json">
        {!! json_encode($schemaOrg, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    
    @stack('scripts')
</body>
</html>