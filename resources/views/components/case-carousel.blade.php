@props(['cases'])

<div x-data="{
    currentSlideIndex: 1,
    slides: {{ count($cases) }},
    containerHeight: 0,
    init() {
        this.$nextTick(() => {
            this.updateHeight();
            this.$watch('currentSlideIndex', () => this.$nextTick(() => this.updateHeight()));
            // Also update on window resize
            window.addEventListener('resize', () => this.$nextTick(() => this.updateHeight()));
        });
    },
    updateHeight() {
        const refName = 'slide-' + this.currentSlideIndex;
        const el = this.$refs[refName];
        if (el) {
            this.containerHeight = el.offsetHeight;
        }
    },
    previous() {
        if (this.currentSlideIndex > 1) {
            this.currentSlideIndex = this.currentSlideIndex - 1
        } else {
            this.currentSlideIndex = this.slides
        }
    },
    next() {
        if (this.currentSlideIndex < this.slides) {
            this.currentSlideIndex = this.currentSlideIndex + 1
        } else {
            this.currentSlideIndex = 1
        }
    },
}" class="relative w-full">

    <!-- Previous button -->
    <button 
        type="button" 
        class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/80 dark:bg-neutral-800/80 p-3 text-neutral-900 dark:text-white transition hover:bg-white dark:hover:bg-neutral-800 shadow-lg focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30" 
        aria-label="previous slide" 
        x-on:click="previous()"
    >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="w-6 h-6" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Next button -->
    <button 
        type="button" 
        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/80 dark:bg-neutral-800/80 p-3 text-neutral-900 dark:text-white transition hover:bg-white dark:hover:bg-neutral-800 shadow-lg focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30" 
        aria-label="next slide" 
        x-on:click="next()"
    >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="w-6 h-6" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>
   
    <!-- Slides -->
    <div class="relative w-full min-h-128 md:min-h-128" x-bind:style="{ height: containerHeight + 'px' }">
        {{ $slot }}
    </div>
    
    <!-- Indicators -->
    <div class="absolute bottom-8 left-1/2 z-20 flex -translate-x-1/2 gap-3 rounded-full bg-white/75 dark:bg-neutral-800/75 px-4 py-2 shadow-lg" role="group" aria-label="slides">
        @for ($i = 1; $i <= count($cases); $i++)
            <button 
                class="w-3 h-3 rounded-full transition-all duration-300"
                x-on:click="currentSlideIndex = {{ $i }}" 
                x-bind:class="currentSlideIndex === {{ $i }} ? 'bg-blue-500 w-8' : 'bg-neutral-400 dark:bg-neutral-500 hover:bg-neutral-600 dark:hover:bg-neutral-400'" 
                aria-label="slide {{ $i }}"
            ></button>
        @endfor
    </div>
</div>
