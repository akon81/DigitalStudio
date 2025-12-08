@php
    $caseStudies = \App\Models\Project::where('is_case_study', true)
        ->whereNotNull('published_at')
        ->orderBy('published_at', 'desc')
        ->take(10)
        ->get();
@endphp

<section class="py-10 md:py-20 bg-white dark:bg-neutral-950">
    <div class="w-full mx-auto px-6 lg:px-12 xl:px-20">
        <div class="text-center mb-20">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 dark:text-white tracking-tight">Historie projektów, które robią różnicę</h2>
            <p class="mt-4 text-base md:text-lg text-neutral-600 dark:text-neutral-400">
                Każda realizacja to inna potrzeba, inny charakter i inny cel. Moim zadaniem jest przemienić je w dopracowane, efektywne doświadczenie cyfrowe.
            </p>
        </div>

        @if($caseStudies->isNotEmpty())
            @php
                $colors = ['green', 'purple', 'orange'];
            @endphp

            <x-case-carousel :cases="range(1, $caseStudies->count())">
                @foreach($caseStudies as $index => $project)
                    @php
                        $slideNumber = $index + 1;
                        $color = $colors[$index % count($colors)];
                        $caseStudyImage = $project->getFirstMediaUrl('case_study', 'thumb') ?: $project->getFirstMediaUrl('images', 'thumb');
                    @endphp

                    <div x-show="currentSlideIndex == {{ $slideNumber }}" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="w-full"
                         x-bind:class="currentSlideIndex == {{ $slideNumber }} ? 'relative' : 'absolute inset-0'"
                         x-ref="slide-{{ $slideNumber }}"
                         x-cloak>
                        <x-case-study-item
                            id="case{{ $slideNumber }}"
                            label="{{ $project->title }}"
                            title="{{ $project->case_study_subtitle }}"
                            color="{{ $color }}"
                            goal="{{ $project->case_study_goal }}"
                            process="{{ $project->case_study_process }}"
                            result="{{ $project->case_study_result }}"
                            image="{{ $caseStudyImage }}"
                            imageAlt="{{ $project->title }}"
                        />
                    </div>
                @endforeach
            </x-case-carousel>
        @else
            <div class="text-center py-12">
                <p class="text-neutral-600 dark:text-neutral-400">Brak projektów case study do wyświetlenia.</p>
            </div>
        @endif

    </div>
</section>
