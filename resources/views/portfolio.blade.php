@extends('layouts.app')

@section('meta_title', 'Portfolio projektów - DigitalStudio')
@section('meta_description', 'Zobacz moje realizacje - od prostych stron po zaawansowane aplikacje webowe. Każdy projekt to unikalne rozwiązanie dopasowane do potrzeb klienta.')
@section('meta_keywords', 'portfolio, realizacje, strony internetowe, aplikacje web, projekty web development')

@section('content')
    <section class="py-20 bg-white overflow-hidden" id="portfolio-page">       
        <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
                <h1 class="text-gray-900 font-black font-heading text-4xl md:text-5xl mb-6">Portfolio projektów</h1>
                <p class="md:text-xl text-lg text-gray-500 font-bold max-w-2xl mx-auto">Portfolio moich realizacji - od prostych stron po zaawansowane aplikacje webowe.</p>
            </div>

            <div class="mb-12 flex flex-wrap justify-center gap-3">
                <x-portfolio-filter-btn category="wszystkie" :active="true">Wszystkie</x-portfolio-filter-btn>
                @foreach($categories as $category)
                    <x-portfolio-filter-btn :category="$category->name">{{ $category->name }}</x-portfolio-filter-btn>
                @endforeach
            </div>

            <div class="flex flex-wrap -m-4" id="portfolio-grid">
                @foreach($projects as $project)
                    <x-portfolio-card
                        :category="$project->category?->name ?? ''"
                        :title="$project->title"
                        :excerpt="$project->truncated_excerpt"
                        :description="$project->truncated_description"
                        :url="$project->url"
                        :img="$project->getFirstMediaUrl('images') ?: 'https://via.placeholder.com/600x400'"
                        :tags="$project->techStacks->pluck('name')->toArray()"
                    />
                @endforeach
            </div>

        </div>
    </section>
@endsection
