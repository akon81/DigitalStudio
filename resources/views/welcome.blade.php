<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <!-- Styles -->
         </head>
    <body>
  <!-- Sekcja kontaktowa -->
  <section class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4 py-2 flex flex-wrap items-center justify-between">
      <div class="flex items-center gap-6 text-gray-900 text-sm font-bold">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2 8.5C2 6.015 4.015 4 6.5 4h11A4.5 4.5 0 0 1 22 8.5v7A4.5 4.5 0 0 1 17.5 20h-11A4.5 4.5 0 0 1 2 15.5v-7Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 8l6 4 6-4"/></svg>
          <a href="mailto:kontakt@example.com" class="hover:text-blue-500 transition">kontakt@example.com</a>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5.75C3 4.784 3.784 4 4.75 4h2.086c.414 0 .789.252.936.64l1.14 2.853a1 1 0 0 1-.217 1.09l-1.13 1.13a15.978 15.978 0 0 0 6.364 6.364l1.13-1.13a1 1 0 0 1 1.09-.217l2.853 1.14c.388.147.64.522.64.936V19.25A1.75 1.75 0 0 1 19.25 21h-1.5C10.044 21 3 13.956 3 5.75v0Z"/></svg>
          <a href="tel:+48123456789" class="hover:text-blue-500 transition">+48 123 456 789</a>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <a href="https://facebook.com/example" target="_blank" class="text-gray-400 hover:text-blue-600 transition">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/></svg>
        </a>
        <a href="https://instagram.com/example" target="_blank" class="text-gray-400 hover:text-pink-500 transition">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.783 2.295 7.149 2.233 8.415 2.175 8.795 2.163 12 2.163zm0-2.163C8.741 0 8.332.012 7.052.07 5.771.128 4.507.4 3.533 1.374c-.974.974-1.246 2.242-1.308 3.608C2.175 8.415 2.163 8.795 2.163 12c0 3.205.012 3.584.07 4.85.062 1.366.334 2.633 1.308 3.608.974.974 2.242 1.246 3.608 1.308 1.266.058 1.646.07 4.85.07s3.584-.012 4.85-.07c1.366-.062 2.633-.334 3.608-1.308.974-.974 1.246-2.242 1.308-3.608.058-1.266.07-1.646.07-4.85s-.012-3.584-.07-4.85c-.062-1.366-.334-2.633-1.308-3.608-.974-.974-2.242-1.246-3.608-1.308C15.647.012 15.267 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/></svg>
        </a>
      </div>
    </div>
  </section>
       <section class="pt-6 pb-20 bg-white overflow-hidden" x-data="{ mobileNavOpen: false }">
            <div class="container mx-auto px-4">
                <div class="mb-6">
                <div class="flex items-center justify-between px-6 py-3.5 bg-white border border-gray-100 rounded-full">
                    <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto">
                        <a href="#">
                            <img src="https://static.shuffle.dev/uploads/files/10/1089a37f6a24e785e2fcb5a6cc45dc91f84be473/logos/logo-3a7c66c5df253837de5b9a844e8e3ada.png" alt=""/>
                        </a>
                        </div>
                    </div>
                    </div>
                    <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto hidden lg:block">
                        <ul class="flex items-center justify-center">
                            <li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#technologie">Strona główna</a></li>
                            <li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#technologie">O mnie</a></li>
                            <li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#portfolio">Portfolio</a></li>
                            <li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#kontakt">Kontakt</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                    <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto hidden lg:block">
                        <div class="flex flex-wrap -m-2">
                            <div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#kontakt">Skontaktuj się</a></div>
                        </div>
                        </div>
                        <div class="w-auto lg:hidden">
                        <button x-on:click="mobileNavOpen = !mobileNavOpen" class="inline-block">
                            <svg class="text-blue-500" width="45" height="45" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                            <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                <div :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}" class="hidden fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
                    <div x-on:click="mobileNavOpen = !mobileNavOpen" class="fixed inset-0 bg-gray-800 opacity-80"></div>
                    <nav class="relative z-10 px-9 pt-8 bg-white h-full overflow-y-auto">
                    <div class="flex flex-wrap justify-between h-full">
                        <div class="w-full">
                        <div class="flex items-center justify-between -m-2">
                            <div class="w-auto p-2">
                            <a class="inline-block" href="#">
                                <img src="https://static.shuffle.dev/uploads/files/10/1089a37f6a24e785e2fcb5a6cc45dc91f84be473/logos/logo-3a7c66c5df253837de5b9a844e8e3ada.png" alt=""/>
                            </a>
                            </div>
                            <div class="w-auto p-2">
                            <button x-on:click="mobileNavOpen = !mobileNavOpen" class="inline-block">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            </div>
                        </div>
                        </div>
                        <div class="flex flex-col justify-center py-8 w-full">
                        <ul>
                            <li class="mb-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#portfolio">Portfolio</a></li>
                            <li class="mb-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#technologie">Technologie</a></li>
                            <li><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#kontakt">Kontakt</a></li>
                        </ul>
                        </div>
                        <div class="flex flex-col justify-end w-full pb-8">
                        <div class="flex flex-wrap -m-2">
                            <div class="w-full p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#kontakt">Skontaktuj się</a></div>
                        </div>
                        </div>
                    </div>
                    </nav>
                </div>
                </div>
                <div class="flex flex-wrap justify-center -m-4">
                <div class="w-full md:w-1/3 p-4">
                    <img class="w-full object-cover rounded-3xl" style="height: 640px;" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800" alt=""/>
                </div>
                <div class="w-full md:flex-1 p-4">
                    <div class="relative flex flex-col justify-center items-center p-8 h-full text-center bg-white border border-gray-100 rounded-3xl">
                    <div class="absolute bottom-0 left-1/2 min-w-max transform -translate-x-1/2">
                        <div class="absolute bg-gradient-radial-white w-full h-full"></div>
                        <img src="zanrly-assets/images/headers/pattern-grid-gray.svg" alt=""/>
                    </div>
                    <div class="relative max-w-lg">
                        <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Web Developer</span>
                        <h1 class="font-heading mb-6 text-5xl text-gray-900 font-black tracking-tight">
                        <span>Tworzę nowoczesne</span>
                        <span class="text-blue-500">strony internetowe</span>
                        <span>i aplikacje</span>
                        </h1>
                        <p class="mb-8 text-xl font-bold">Specjalizuję się w budowaniu responsywnych, wydajnych rozwiązań webowych z wykorzystaniem najnowszych technologii.</p>
                        <div class="flex flex-wrap justify-center -m-2">
                        <div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#portfolio">Zobacz projekty</a></div>
                        <div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-gray-900 font-bold bg-gray-50 hover:bg-gray-200 focus:ring-4 focus:ring-gray-200 rounded-full" href="#kontakt">Kontakt</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

     <section class="py-20 bg-gray-50 overflow-hidden" id="portfolio">       
  <div class="container mx-auto px-4">
    <div class="mb-16 text-center">
      <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Moje prace</span>
      <h2 class="text-gray-900 font-black font-heading text-5xl md:text-6xl mb-6">Portfolio projektów</h2>
      <p class="text-xl text-gray-500 font-bold max-w-2xl mx-auto">Poznaj projekty, które stworzyłem dla moich klientów - od prostych stron po złożone aplikacje webowe.</p>
    </div>
    <div class="mb-12 flex flex-wrap justify-center gap-3">
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:ring-4 focus:ring-blue-200" data-category="wszystkie">Wszystkie</button>
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-white text-gray-900 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200" data-category="Strony WWW">Strony WWW</button>
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-white text-gray-900 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200" data-category="Aplikacje Web">Aplikacje Web</button>
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-white text-gray-900 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200" data-category="E-commerce">E-commerce</button>
    </div>
    <div class="flex flex-wrap -m-4" id="portfolio-grid">
  <div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" style="transition: opacity 0.3s, transform 0.3s;" data-category="Strony WWW">
        <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600" alt="Dashboard Analytics"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white bg-opacity-80 flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
              <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Dashboard Analytics</h3>
              <p class="text-gray-700 font-bold text-center">Zaawansowana platforma analityczna z real-time reporting i interaktywnymi wykresami dla firm.</p>
            </div>
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">React</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Node.js</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">MongoDB</span>
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Dashboard Analytics</h3>
            <p class="text-gray-500 font-bold mb-4">Zaawansowana platforma analityczna z real-time reporting i interaktywnymi wykresami dla firm.</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="#">
              Zobacz projekt
              <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
  <div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" style="transition: opacity 0.3s, transform 0.3s;" data-category="Strony WWW">
        <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600" alt="Strona korporacyjna"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white bg-opacity-80 flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
              <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Strona korporacyjna</h3>
              <p class="text-gray-700 font-bold text-center">Elegancka strona internetowa dla firmy konsultingowej z responsive design i płynnymi animacjami.</p>
            </div>
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">HTML5</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">CSS3</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">JavaScript</span>
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Strona korporacyjna</h3>
            <p class="text-gray-500 font-bold mb-4">Elegancka strona internetowa dla firmy konsultingowej z responsive design i płynnymi animacjami.</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="#">
              Zobacz projekt
              <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
  <div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" style="transition: opacity 0.3s, transform 0.3s;" data-category="Aplikacje Web">
        <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600" alt="Sklep online"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white bg-opacity-80 flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
              <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Sklep online</h3>
              <p class="text-gray-700 font-bold text-center">Nowoczesny sklep e-commerce z systemem płatności, zarządzaniem produktami i panelem admina.</p>
            </div>
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Vue.js</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Laravel</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Stripe</span>
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Sklep online</h3>
            <p class="text-gray-500 font-bold mb-4">Nowoczesny sklep e-commerce z systemem płatności, zarządzaniem produktami i panelem admina.</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="#">
              Zobacz projekt
              <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
  <div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" style="transition: opacity 0.3s, transform 0.3s;" data-category="Aplikacje Web">
        <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600" alt="Task Manager"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white bg-opacity-80 flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
              <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Task Manager</h3>
              <p class="text-gray-700 font-bold text-center">Aplikacja do zarządzania projektami z funkcjami współpracy zespołowej i trackingiem czasu.</p>
            </div>
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Angular</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">TypeScript</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Firebase</span>
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Task Manager</h3>
            <p class="text-gray-500 font-bold mb-4">Aplikacja do zarządzania projektami z funkcjami współpracy zespołowej i trackingiem czasu.</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="#">
              Zobacz projekt
              <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
  <div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" style="transition: opacity 0.3s, transform 0.3s;" data-category="E-commerce">
        <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=600" alt="Portfolio fotografa"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white bg-opacity-80 flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
              <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Portfolio fotografa</h3>
              <p class="text-gray-700 font-bold text-center">Minimalistyczne portfolio z galerią zdjęć, lazy loading i optymalizacją pod SEO.</p>
            </div>
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Next.js</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Tailwind</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Vercel</span>
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Portfolio fotografa</h3>
            <p class="text-gray-500 font-bold mb-4">Minimalistyczne portfolio z galerią zdjęć, lazy loading i optymalizacją pod SEO.</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="#">
              Zobacz projekt
              <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
  <div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" style="transition: opacity 0.3s, transform 0.3s;" data-category="E-commerce">
        <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=600" alt="Marketplace"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white bg-opacity-80 flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
              <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Marketplace</h3>
              <p class="text-gray-700 font-bold text-center">Platforma marketplace łącząca sprzedawców i kupujących z systemem ocen i bezpiecznych płatności.</p>
            </div>
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">React</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">Express</span>
              <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">PostgreSQL</span>
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">Marketplace</h3>
            <p class="text-gray-500 font-bold mb-4">Platforma marketplace łącząca sprzedawców i kupujących z systemem ocen i bezpiecznych płatności.</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="#">
              Zobacz projekt
              <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-white overflow-hidden" id="kontakt">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <div class="mb-16 text-center">
        <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Skontaktuj się</span>
        <h2 class="text-gray-900 font-black font-heading text-5xl md:text-6xl mb-6">Porozmawiajmy o projekcie</h2>
        <p class="text-xl text-gray-500 font-bold max-w-2xl mx-auto">Masz pomysł na projekt? Wypełnij formularz, a odezwę się najszybciej jak to możliwe.</p>
      </div>
      <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8 md:p-12">
        <form action="#" method="post">
          <div class="mb-6">
            <label class="inline-block mb-2 text-gray-500 font-bold" for="contactName">Imię i nazwisko</label>
            <input class="appearance-none px-6 py-3.5 w-full text-sm text-gray-900 font-bold bg-white placeholder-gray-300 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full" id="contactName" type="text" placeholder="Jan Kowalski" required=""/>
          </div>
          <div class="mb-6">
            <label class="inline-block mb-2 text-gray-500 font-bold" for="contactEmail">Email</label>
            <input class="appearance-none px-6 py-3.5 w-full text-sm text-gray-900 font-bold bg-white placeholder-gray-300 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full" id="contactEmail" type="email" placeholder="jan@example.com" required=""/>
          </div>
          <div class="mb-6">
            <label class="inline-block mb-2 text-gray-500 font-bold" for="contactSubject">Temat</label>
            <input class="appearance-none px-6 py-3.5 w-full text-sm text-gray-900 font-bold bg-white placeholder-gray-300 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full" id="contactSubject" type="text" placeholder="Wycena strony internetowej" required=""/>
          </div>
          <div class="mb-6">
            <label class="block mb-2 text-sm text-gray-500 font-bold" for="contactMessage">Wiadomość</label>
            <textarea class="appearance-none px-6 py-5 w-full text-lg text-gray-500 font-bold bg-white placeholder-gray-300 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-3xl" id="contactMessage" rows="6" placeholder="Opisz swój projekt..." required=""></textarea>
          </div>
          <div class="mb-6 flex items-start">
            <input class="opacity-0 absolute h-6 w-6" id="contactPrivacy" type="checkbox" required=""/>
            <div class="flex flex-shrink-0 justify-center items-center w-6 h-6 mr-4 text-transparent bg-white border group-hover:border-blue-400 border-neutral-200 rounded-md">
              <svg class="hidden" width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5917 1.00833C11.5142 0.930225 11.422 0.868229 11.3205 0.825922C11.2189 0.783615 11.11 0.761833 11 0.761833C10.89 0.761833 10.7811 0.783615 10.6795 0.825922C10.578 0.868229 10.4858 0.930225 10.4083 1.00833L4.2 7.225L1.59167 4.60833C1.51123 4.53063 1.41628 4.46954 1.31224 4.42853C1.20819 4.38753 1.09709 4.36742 0.98527 4.36936C0.873453 4.37129 0.763112 4.39523 0.660546 4.43981C0.557981 4.48439 0.4652 4.54873 0.387501 4.62917C0.309803 4.7096 0.248708 4.80455 0.207704 4.9086C0.166701 5.01264 0.146592 5.12375 0.148527 5.23556C0.150461 5.34738 0.174401 5.45772 0.218979 5.56029C0.263557 5.66285 0.3279 5.75563 0.408335 5.83333L3.60834 9.03333C3.6858 9.11144 3.77797 9.17343 3.87952 9.21574C3.98107 9.25805 4.08999 9.27983 4.2 9.27983C4.31001 9.27983 4.41893 9.25805 4.52048 9.21574C4.62203 9.17343 4.7142 9.11144 4.79167 9.03333L11.5917 2.23333C11.6763 2.1553 11.7438 2.06059 11.7899 1.95517C11.8361 1.84975 11.8599 1.73592 11.8599 1.62083C11.8599 1.50575 11.8361 1.39191 11.7899 1.28649C11.7438 1.18108 11.6763 1.08637 11.5917 1.00833Z" fill="white"></path>
              </svg>
            </div>
            <label class="text-sm text-gray-900 font-bold" for="contactPrivacy">Zgadzam się na przetwarzanie moich danych osobowych zgodnie z polityką prywatności</label>
          </div>
          <div>
            <button class="inline-block px-8 py-3.5 text-lg text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" type="submit">Wyślij wiadomość</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="py-12 bg-gray-900">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap justify-between items-center pb-8 border-b border-gray-800">
      <div class="w-full md:w-auto mb-6 md:mb-0">
        <a href="#">
          <img src="https://static.shuffle.dev/uploads/files/10/1089a37f6a24e785e2fcb5a6cc45dc91f84be473/logos/logo-b444d91c9cdc57b8c93732520d59eb12.png" alt=""/>
        </a>
      </div>
      <div class="w-full md:w-auto">
        <ul class="flex flex-wrap items-center gap-6">
          <li><a class="text-sm font-bold text-gray-300 hover:text-white" href="#portfolio">Portfolio</a></li>
          <li><a class="text-sm font-bold text-gray-300 hover:text-white" href="#technologie">Technologie</a></li>
          <li><a class="text-sm font-bold text-gray-300 hover:text-white" href="#kontakt">Kontakt</a></li>
        </ul>
      </div>
    </div>
    <div class="pt-8 flex flex-wrap justify-between items-center">
      <p class="text-sm text-gray-400 font-bold">© 2024 DevPortfolio. Wszelkie prawa zastrzeżone.</p>
      <div class="flex gap-4">
        <a class="text-gray-400 hover:text-white" href="#">
          <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.167 22 16.418 22 12c0-5.523-4.477-10-10-10z"></path>
          </svg>
        </a>
        <a class="text-gray-400 hover:text-white" href="#">
          <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>

    </body>
      @livewireScripts
    </html>
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
</html>
