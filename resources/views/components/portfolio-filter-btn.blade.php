@props([
    'category' => 'wszystkie',
    'active' => false,
])

<button
    class="portfolio-filter-btn {{ $active ? 'btn-animated' : 'btn-animated-gray border border-gray-100' }} px-5 py-2 md:px-6 md:py-3 text-[11px] md:text-sm font-bold rounded-full cursor-pointer focus:ring-4 focus:ring-gray-200"
    data-category="{{ $category }}"
    {{ $attributes }}
>
    <span>{{ $slot }}</span>
    <span></span>
</button>
