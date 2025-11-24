@props([
    'category' => 'wszystkie',
    'active' => false,
])

<button
    class="portfolio-filter-btn px-6 py-3 text-sm font-bold rounded-full transition focus:ring-4 {{ $active ? 'bg-blue-500 text-white' : 'bg-white text-gray-900 border border-gray-100'}} hover:bg-gray-100 hover:text-gray-600 focus:ring-gray-200 "
    data-category="{{ $category }}"
    {{ $attributes }}
>
    {{ $slot }}
</button>
