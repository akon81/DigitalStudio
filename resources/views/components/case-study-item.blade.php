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
    <div class="grid md:grid-cols-[400px_1fr] lg:grid-cols-[480px_1fr] xl:grid-cols-[560px_1fr] gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center">
        
        <div class="{{ $reverse ? 'md:order-2' : '' }}">
            <span class="text-sm sm:text-base lg:text-lg font-semibold {{ $colors['label'] }} uppercase tracking-wide">{{ $label }}</span>
            <h3 class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-bold text-neutral-900 dark:text-white mt-2">{{ $title }}</h3>

            <div class="mt-4 sm:mt-6 lg:mt-8 space-y-4 sm:space-y-6 lg:space-y-8">
                <div class="flex gap-3 sm:gap-4 lg:gap-5">
                    <div class="p-2.5 sm:p-3 lg:p-4 {{ $colors['bg'] }} {{ $colors['text'] }} rounded-xl shrink-0">
                        <x-heroicon-o-light-bulb class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7"/>
                    </div>
                    <div class="min-w-0">
                        <h4 class="font-semibold text-neutral-800 dark:text-neutral-200 text-sm sm:text-base lg:text-lg">Wyjściowy cel</h4>
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm lg:text-base">
                            {{ $goal }}
                        </p>
                    </div>
                </div>

                <div class="flex gap-3 sm:gap-4 lg:gap-5">
                    <div class="p-2.5 sm:p-3 lg:p-4 {{ $colors['bg'] }} {{ $colors['text'] }} rounded-xl shrink-0">
                        <x-heroicon-o-cog-6-tooth class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7"/>
                    </div>
                    <div class="min-w-0">
                        <h4 class="font-semibold text-neutral-800 dark:text-neutral-200 text-sm sm:text-base lg:text-lg">Proces</h4>
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm lg:text-base">
                            {{ $process }}
                        </p>
                    </div>
                </div>

                <div class="flex gap-3 sm:gap-4 lg:gap-5">
                    <div class="p-2.5 sm:p-3 lg:p-4 {{ $colors['bg'] }} {{ $colors['text'] }} rounded-xl shrink-0">
                        <x-heroicon-o-check-circle class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7"/>
                    </div>
                    <div class="min-w-0">
                        <h4 class="font-semibold text-neutral-800 dark:text-neutral-200 text-sm sm:text-base lg:text-lg">Efekt</h4>
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm lg:text-base">
                            {{ $result }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative {{ $reverse ? 'md:order-1' : '' }} min-w-0">
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-full h-auto object-cover">
            </div>
        </div>

    </div>
</div>
