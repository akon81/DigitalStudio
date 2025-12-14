<div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" data-category="{{ $category ?? '' }}" x-data="{ showDescription: false }">
    <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group h-full flex flex-col">
        <div class="relative">
            <img class="w-full h-64 object-cover" src="{{ $img }}" alt="{{ $title }}" width="600" height="400" loading="lazy"/>
            
            <!-- Mobile toggle button (visible only on small screens) -->
            <button 
                @click="showDescription = !showDescription"
                class="md:hidden absolute top-4 right-4 z-20 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition-colors"
                aria-label="Pokaż opis"
            >
                <svg x-show="!showDescription" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <svg x-show="showDescription" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            
            <!-- Hover overlay for desktop -->
            <div class="hidden md:flex absolute left-0 top-0 w-full h-full bg-white flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-80 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                <h3 class="text-gray-900 mt-10 font-black font-heading text-2xl mb-3 text-center">{{ $title }}</h3>
                <p class="text-gray-700 text-base font-bold mb-12 flex-1 mx-12 text-justify">{{ $description }}</p>
            </div>
            
            <!-- Mobile overlay (click-triggered) -->
            <div 
                x-show="showDescription"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-full"
                x-transition:enter-end="opacity-80 translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-80 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-full"
                class="md:hidden absolute left-0 top-0 w-full h-full bg-white flex flex-col justify-center items-center px-6 py-8 z-10"
                style="display: none;"
            >
                <h3 class="text-gray-900 mt-10 font-black font-heading text-2xl mb-3 text-center">{{ $title }}</h3>
                <p class="text-gray-700 text-base font-bold mb-12 flex-1 mx-12 text-justify">{{ $description }}</p>
            </div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
            <div class="mb-3 flex flex-wrap gap-2">
                @if(isset($tags) && is_array($tags))
                    @foreach($tags as $tag)
                        <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">{{ $tag }}</span>
                    @endforeach
                @endif
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3 text-center">{{ $title }}</h3>
            <p class="text-gray-500 font-bold mb-4 flex-1 mx-4">{{ $excerpt }}</p>
            @if(!empty($url))
                <a class="inline-flex text-sm md:text-base items-center text-blue-500 font-bold hover:text-blue-600" href="{{ str_starts_with($url, 'http') ? $url : 'https://' . $url }}" target="_blank" rel="noopener noreferrer">
                    Zobacz projekt
                    <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            @endif
        </div>
    </div>
</div>
