<section class="py-10 md:py-20 bg-gray-50 overflow-hidden" id="portfolio">
    <div class="container mx-auto px-4">
        <div class="mb-16 text-center">
            <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Przykładowe realizacje</span>
            <h2 class="text-gray-900 font-black font-heading text-3xl md:text-4xl mb-6">Portfolio projektów</h2>
            <p class="md:text-xl text-base text-gray-500 font-bold max-w-2xl mx-auto">Poznaj projekty, które stworzyłem dla moich klientów - od prostych stron po złożone aplikacje webowe.</p>
        </div>

        <div class="flex flex-wrap -m-4">
            @if($this->projects->count() > 0)
                @foreach($this->projects as $project)
                    <x-portfolio-card
                        :category="$project->category?->name ?? ''"
                        :title="$project->title"
                        :excerpt="$project->truncated_excerpt"
                        :description="$project->truncated_description"
                        :url="$project->url"
                        :img="$project->getFirstMediaUrl('images') ?: 'https://via.placeholder.com/600x400'"
                        :tags="$project->techStacks->pluck('name')->toArray()"
                        wire:key="project-{{ $project->id }}"
                    />
                @endforeach
            @else
                <div class="w-full text-center">
                    <p class="text-gray-500">Aktualnie brak projektów do wyświetlenia.</p>
                </div>
            @endif
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('portfolio') }}" class="inline-block px-8 py-4 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-600 transition focus:ring-4 focus:ring-blue-200">Pokaż wszystkie projekty</a>
        </div>
    </div>
</section>
