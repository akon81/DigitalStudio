@extends('layouts.app')

@section('title', 'Portfolio projektów')

@section('content')
    <section class="py-20 bg-gray-50 overflow-hidden" id="portfolio-page">       
        <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
                <h1 class="text-gray-900 font-black font-heading text-5xl md:text-6xl mb-6">Portfolio projektów</h1>
                <p class="text-xl text-gray-500 font-bold max-w-2xl mx-auto">Portfolio moich realizacji - od prostych stron po zaawansowane aplikacje webowe.</p>
            </div>

            <div class="mb-12 flex flex-wrap justify-center gap-3">
                <x-portfolio-filter-btn category="wszystkie" :active="true">Wszystkie</x-portfolio-filter-btn>
                <x-portfolio-filter-btn category="Strony WWW">Strony WWW</x-portfolio-filter-btn>
                <x-portfolio-filter-btn category="Aplikacje Web">Aplikacje Web</x-portfolio-filter-btn>
                <x-portfolio-filter-btn category="E-commerce">E-commerce</x-portfolio-filter-btn>
            </div>

            <div class="flex flex-wrap -m-4" id="portfolio-grid">
                <x-portfolio-card
                    category="Strony WWW"
                    title="Dashboard Analytics"
                    excerpt="Zaawansowana platforma analityczna z real-time reporting i interaktywnymi wykresami dla firm."
                    description="Zaawansowana platforma analityczna z real-time reporting i interaktywnymi wykresami dla firm."
                    url="#"
                    img="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600"
                    :tags="['React', 'Node.js', 'MongoDB']"
                />
                <x-portfolio-card
                    category="Strony WWW"
                    title="Strona korporacyjna"
                    excerpt="Elegancka strona internetowa dla firmy konsultingowej z responsive design i płynnymi animacjami."
                    description="Elegancka strona internetowa dla firmy konsultingowej z responsive design i płynnymi animacjami."
                    url="#"
                    img="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600"
                    :tags="['HTML5', 'CSS3', 'JavaScript']"
                />
                <x-portfolio-card
                    category="Aplikacje Web"
                    title="Sklep online"
                    excerpt="Nowoczesny sklep e-commerce z systemem płatności, zarządzaniem produktami i panelem admina."
                    description="Nowoczesny sklep e-commerce z systemem płatności, zarządzaniem produktami i panelem admina."
                    url="#"
                    img="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600"
                    :tags="['Vue.js', 'Laravel', 'Stripe']"
                />
                <x-portfolio-card
                    category="Aplikacje Web"
                    title="Task Manager"
                    excerpt="Aplikacja do zarządzania projektami z funkcjami współpracy zespołowej i trackingiem czasu."
                    description="Aplikacja do zarządzania projektami z funkcjami współpracy zespołowej i trackingiem czasu."
                    url="#"
                    img="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600"
                    :tags="['Angular', 'TypeScript', 'Firebase']"
                />
                <x-portfolio-card
                    category="E-commerce"
                    title="Portfolio fotografa"
                    excerpt="Minimalistyczne portfolio z galerią zdjęć, lazy loading i optymalizacją pod SEO."
                    description="Minimalistyczne portfolio z galerią zdjęć, lazy loading i optymalizacją pod SEO."
                    url="#"
                    img="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=600"
                    :tags="['Next.js', 'Tailwind', 'Vercel']"
                />
                <x-portfolio-card
                    category="E-commerce"
                    title="Marketplace"
                    excerpt="Platforma marketplace łącząca sprzedawców i kupujących z systemem ocen i bezpiecznych płatności."
                    description="Platforma marketplace łącząca sprzedawców i kupujących z systemem ocen i bezpiecznych płatności."
                    url="#"
                    img="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=600"
                    :tags="['React', 'Express', 'PostgreSQL']"
                />
                <x-portfolio-card
                    category="Strony WWW"
                    title="Aplikacja CRM"
                    excerpt="Profesjonalny system CRM dla zespołu sprzedaży z automatyzacją procesów i raportowaniem."
                    description="Profesjonalny system CRM dla zespołu sprzedaży z automatyzacją procesów i raportowaniem."
                    url="#"
                    img="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600"
                    :tags="['Vue.js', 'Python', 'PostgreSQL']"
                />
                <x-portfolio-card
                    category="Aplikacje Web"
                    title="Platform edukacyjna"
                    excerpt="Interaktywna platforma do nauki online z wideo, quizami i systemem progresji użytkowników."
                    description="Interaktywna platforma do nauki online z wideo, quizami i systemem progresji użytkowników."
                    url="#"
                    img="https://images.unsplash.com/photo-1516534775068-bb57e39c1a29?w=600"
                    :tags="['Next.js', 'Django', 'PostgreSQL']"
                />
                <x-portfolio-card
                    category="E-commerce"
                    title="Sklep multi-walutowy"
                    excerpt="Zaawansowany sklep internetowy obsługujący wiele walut, języków i systemów płatności."
                    description="Zaawansowany sklep internetowy obsługujący wiele walut, języków i systemów płatności."
                    url="#"
                    img="https://images.unsplash.com/photo-1556740711-9defdead0ae7?w=600"
                    :tags="['Laravel', 'Vue.js', 'Stripe']"
                />
            </div>
        </div>
    </section>
@endsection
