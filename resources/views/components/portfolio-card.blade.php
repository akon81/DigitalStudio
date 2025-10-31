<div class="w-full md:w-1/2 lg:w-1/3 p-4 portfolio-item" data-category="{{ $category ?? '' }}">
    <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300 relative group">
        <div class="relative">
            <img class="w-full h-64 object-cover" src="{{ $img }}" alt="{{ $title }}"/>
            <!-- Hover overlay only over image -->
            <div class="absolute left-0 top-0 w-full h-full bg-white flex flex-col justify-center items-center px-6 py-8 opacity-0 -translate-y-full group-hover:opacity-80 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">{{ $title }}</h3>
                <p class="text-gray-700 font-bold text-center">{{ $description }}</p>
            </div>
        </div>
        <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
                @if(isset($tags) && is_array($tags))
                    @foreach($tags as $tag)
                        <span class="inline-block px-3 py-1 text-xs font-bold bg-blue-100 text-blue-600 rounded-full">{{ $tag }}</span>
                    @endforeach
                @endif
            </div>
            <h3 class="text-gray-900 font-black font-heading text-2xl mb-3">{{ $title }}</h3>
            <p class="text-gray-500 font-bold mb-4">{{ $excerpt }}</p>
            <a class="inline-flex items-center text-blue-500 font-bold hover:text-blue-600" href="{{ $url }}">
                Zobacz projekt
                <svg class="ml-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
