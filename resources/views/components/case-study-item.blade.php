@props(['id', 'label', 'title', 'color', 'goal', 'process', 'result', 'image', 'imageAlt', 'reverse' => false])

@php
    $colorClasses = [
        'green' => [
            'label' => 'text-green-700',
            'bg' => 'bg-green-100',
            'text' => 'text-green-600',
        ],
        'purple' => [
            'label' => 'text-purple-700',
            'bg' => 'bg-purple-100',
            'text' => 'text-purple-600',
        ],
        'orange' => [
            'label' => 'text-orange-600',
            'bg' => 'bg-orange-100',
            'text' => 'text-orange-600',
        ],
    ];
    
    $colors = $colorClasses[$color] ?? $colorClasses['green'];
@endphp

<div id="{{ $id }}">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        
        <div class="{{ $reverse ? 'md:order-2' : '' }}">
            <span class="text-sm font-semibold {{ $colors['label'] }} uppercase tracking-wide">{{ $label }}</span>
            <h3 class="text-3xl font-bold text-neutral-900 dark:text-white mt-2">{{ $title }}</h3>

            <div class="mt-6 space-y-6">
                <div class="flex gap-4">
                    <div class="p-3 {{ $colors['bg'] }} {{ $colors['text'] }} rounded-xl shrink-0">
                        <x-heroicon-o-light-bulb class="w-6 h-6"/>
                    </div>
                    <div>
                        <h4 class="font-semibold text-neutral-800 dark:text-neutral-200">Wyjściowy cel</h4>
                        <p class="text-neutral-600 dark:text-neutral-400">
                            {{ $goal }}
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="p-3 {{ $colors['bg'] }} {{ $colors['text'] }} rounded-xl shrink-0">
                        <x-heroicon-o-cog-6-tooth class="w-6 h-6"/>
                    </div>
                    <div>
                        <h4 class="font-semibold text-neutral-800 dark:text-neutral-200">Proces</h4>
                        <p class="text-neutral-600 dark:text-neutral-400">
                            {{ $process }}
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="p-3 {{ $colors['bg'] }} {{ $colors['text'] }} rounded-xl shrink-0">
                        <x-heroicon-o-check-circle class="w-6 h-6"/>
                    </div>
                    <div>
                        <h4 class="font-semibold text-neutral-800 dark:text-neutral-200">Efekt</h4>
                        <p class="text-neutral-600 dark:text-neutral-400">
                            {{ $result }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative {{ $reverse ? 'md:order-1' : '' }}">
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-full h-auto object-cover">
            </div>
        </div>

    </div>
</div>
