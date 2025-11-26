@props([
    'icon' => null,
    'title' => '',
    'description' => '',
    'bg' => 'bg-blue-500',
    'hover' => 'bg-blue-600',
])

<div class="text-center">
    <div class="mx-auto w-16 h-16 flex items-center justify-center {{ $bg }} hover:{{ $hover }} text-white rounded-full shadow-md">
        @if ($icon)
            <x-dynamic-component :component="$icon" class="w-8 h-8" />
        @endif
    </div>
    <h3 class="mt-6 text-xl font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-3 text-gray-600 text-sm leading-relaxed">{{ $description }}</p>
</div>
