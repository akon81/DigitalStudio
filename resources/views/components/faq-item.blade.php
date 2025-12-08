@props(['question', 'answer', 'index'])

<div class="overflow-hidden transition-all bg-white border dark:bg-neutral-900 border-neutral-200 dark:border-neutral-800 rounded-3xl hover:shadow-sm">
    <button 
        class="flex items-center justify-between w-full p-6 text-left transition-colors hover:bg-neutral-50 dark:hover:bg-neutral-800/50"
        @click="openItem === {{ $index }} ? openItem = null : openItem = {{ $index }}"
    >
        <h3 class="text-lg font-semibold text-neutral-900 dark:text-white">{{ $question }}</h3>

        <div class="flex items-center justify-center rounded-full shrink-0 w-9 h-9 bg-linear-to-br from-blue-500 to-blue-600">
            <svg x-bind:class="{ 'rotate-180': openItem === {{ $index }} }"
                 class="w-5 h-5 text-white transition-transform duration-300"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </button>

    <div 
        x-show="openItem === {{ $index }}"
        x-collapse
        class="px-6 pb-6 leading-relaxed text-neutral-700 dark:text-neutral-300"
    >
        {{ $answer }}
    </div>
</div>
