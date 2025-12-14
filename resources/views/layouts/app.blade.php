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
    
    {{-- DNS Prefetch & Preconnect for critical resources --}}
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    
    {{-- Favicons --}}
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/favicon-96x96.png" type="image/png" sizes="96x96">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    
    {{-- Fonts with subset optimization - load asynchronously --}}
    <link rel="preload" as="style" href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap&subset=latin" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap&subset=latin" rel="stylesheet"></noscript>
    
    {{-- Styles --}}
    @vite('resources/css/app.css')
    @livewireStyles
    
    {{-- Load Cookie Consent CSS asynchronously (non-critical) --}}
    <link rel="preload" as="style" href="{{ asset('vendor/devrabiul/laravel-cookie-consent/css/style.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>{!! CookieConsent::styles() !!}</noscript>
    
    @if(config('services.google_analytics.id'))
    <!-- Google tag (gtag.js) - Deferred for performance -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '{{ config('services.google_analytics.id') }}');
      
      // Load gtag.js asynchronously after page load
      window.addEventListener('load', function() {
        var script = document.createElement('script');
        script.src = 'https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}';
        script.async = true;
        document.head.appendChild(script);
      });
    </script>
    @endif
    
    @stack('head')
</head>
<body>
    @include('partials.contact-top', ['settings' => app(\App\Settings\GeneralSettings::class)])
    <x-navigation />

    @yield('content')

    @include('partials.footer', ['settings' => app(\App\Settings\GeneralSettings::class)])

    <x-scrollup/>

    {{-- Defer non-critical scripts --}}
    @livewireScripts
    @vite('resources/js/app.js')
    <script defer>{!! CookieConsent::scripts() !!}</script>
    
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