@props([
    'icon' => null,
    'title' => '',
    'description' => '',
])

<div class="text-center">
    <div class="mx-auto w-16 h-16 flex items-center justify-center bg-gradient-to-r from-blue-400 to-blue-600 text-white rounded-full shadow-md hover:scale-110 transition-transform duration-300">
        @if ($icon)
            <x-dynamic-component :component="$icon" class="w-8 h-8" />
        @endif
    </div>
    <h3 class="mt-6 text-xl font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-3 text-gray-600 text-sm leading-relaxed">{{ $description }}</p>
</div>
