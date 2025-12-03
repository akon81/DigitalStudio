@props(['cases'])

<div x-data="{
    currentSlideIndex: 1,
    slides: {{ count($cases) }},
    containerHeight: 0,
    touchStartX: 0,
    touchEndX: 0,
    autoplayIntervalTime: 5000,
    isPaused: false,
    autoplayInterval: null,
    init() {
        this.$nextTick(() => {
            this.updateHeight();
            this.$watch('currentSlideIndex', () => this.$nextTick(() => this.updateHeight()));
            // Also update on window resize
            window.addEventListener('resize', () => this.$nextTick(() => this.updateHeight()));
            // Ensure images are loaded before measuring height
            const images = this.$el.querySelectorAll('img');
            images.forEach(img => {
                if (img.complete) {
                    this.$nextTick(() => this.updateHeight());
                } else {
                    img.addEventListener('load', () => this.$nextTick(() => this.updateHeight()));
                }
            });
        });
        this.autoplay();
    },
    updateHeight() {
        const refName = 'slide-' + this.currentSlideIndex;
        const el = this.$refs[refName];
        if (el) {
            this.containerHeight = el.offsetHeight;
        }
    },
    handleTouchStart(e) {
        this.touchStartX = e.touches[0].clientX;
    },
    handleTouchEnd(e) {
        this.touchEndX = e.changedTouches[0].clientX;
        this.handleSwipe();
    },
    handleSwipe() {
        const swipeThreshold = 50;
        const diff = this.touchStartX - this.touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - next slide
                this.next();
            } else {
                // Swipe right - previous slide
                this.previous();
            }
            this.setAutoplayInterval(this.autoplayIntervalTime);
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
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (!this.isPaused) {
                this.next();
            }
        }, this.autoplayIntervalTime);
    },
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval);
        this.autoplayIntervalTime = newIntervalTime;
        this.autoplay();
    },
}" class="relative w-full max-w-4xl md:max-w-5xl mx-auto px-4 sm:px-6">


    <!-- Previous button (hidden on small screens) -->
    <button 
        type="button" 
        class="absolute left-0 top-1/2 z-20 hidden md:flex rounded-full -translate-y-1/2 -translate-x-1/2 items-center justify-center bg-white/80 dark:bg-neutral-800/80 p-3 ml-4 text-neutral-900 dark:text-white transition hover:bg-white dark:hover:bg-neutral-800 shadow-lg focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30" 
        aria-label="previous slide" 
        x-on:click="previous(); setAutoplayInterval(autoplayIntervalTime)"
    >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="w-6 h-6" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Next button (hidden on small screens) -->
    <button 
        type="button" 
        class="absolute right-0 top-1/2 z-20 hidden md:flex rounded-full -translate-y-1/2 translate-x-1/2 items-center justify-center bg-white/80 dark:bg-neutral-800/80 p-3 mr-4 text-neutral-900 dark:text-white transition hover:bg-white dark:hover:bg-neutral-800 shadow-lg focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30" 
        aria-label="next slide" 
        x-on:click="next(); setAutoplayInterval(autoplayIntervalTime)"
    >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="w-6 h-6" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>
   
    <!-- Slides -->
    <div 
        class="relative w-full min-h-128 md:min-h-128" 
        x-bind:style="{ height: containerHeight + 'px' }"
        @touchstart="handleTouchStart($event)"
        @touchend="handleTouchEnd($event)"
    >
        {{ $slot }}
    </div>
    
    <!-- Pause/Play Button -->
    <button 
        type="button" 
        class="absolute bottom-5 right-5 z-20 rounded-full text-neutral-600 dark:text-neutral-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0" 
        aria-label="pause carousel" 
        x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" 
        x-bind:aria-pressed="isPaused"
    >
        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd"></path>
        </svg>
        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd"></path>
        </svg>
    </button>
    
    <!-- Indicators -->
    <div class="mt-14 flex justify-center gap-3 rounded-full bg-white/75 dark:bg-neutral-800/75 px-4 py-2" role="group" aria-label="slides">
        @for ($i = 1; $i <= count($cases); $i++)
            <button 
                class="w-3 h-3 rounded-full transition-all duration-300"
                x-on:click="currentSlideIndex = {{ $i }}; setAutoplayInterval(autoplayIntervalTime)" 
                x-bind:class="currentSlideIndex === {{ $i }} ? 'bg-blue-500 w-8' : 'bg-neutral-400 dark:bg-neutral-500 hover:bg-neutral-600 dark:hover:bg-neutral-400'" 
                aria-label="slide {{ $i }}"
            ></button>
        @endfor
    </div>
</div>
