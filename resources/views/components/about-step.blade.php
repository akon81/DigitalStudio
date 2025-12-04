@props([
    'icon' => null,
    'title' => '',
    'description' => '',
])

<div class="text-center">
    <div class="mx-auto w-12 md:w-16 h-12 md:h-16 flex items-center justify-center bg-gradient-to-r from-blue-400 to-blue-600 text-white rounded-full shadow-md hover:scale-110 transition-transform duration-300">
        @if ($icon)
            <x-dynamic-component :component="$icon" class="w-6 md:w-8 h-6 md:h-8" />
        @endif
    </div>
    <h3 class="mt-6 text-base md:text-xl font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-3 text-gray-600 text-sm leading-relaxed">{{ $description }}</p>
</div>
