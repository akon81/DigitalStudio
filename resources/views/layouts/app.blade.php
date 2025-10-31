<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @stack('head')
</head>
<body>
    @yield('content')
    @livewireScripts
            <!-- Scroll to Top Arrow -->
            <button id="scrollToTopBtn" type="button"
                class="hidden fixed bottom-6 right-6 z-50 bg-gray-900 text-white rounded-full p-3 shadow-lg transition-opacity duration-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                aria-label="Przewiń do góry">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                </svg>
            </button>
            <script>
                // Show/hide scroll-to-top button
                const scrollBtn = document.getElementById('scrollToTopBtn');
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 200) {
                        scrollBtn.classList.remove('hidden');
                    } else {
                        scrollBtn.classList.add('hidden');
                    }
                });
                // Scroll to top on click
                scrollBtn.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            </script>
</body>
</html>
