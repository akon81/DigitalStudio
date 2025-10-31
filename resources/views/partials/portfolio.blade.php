 <section class="py-20 bg-gray-50 overflow-hidden" id="portfolio">       
  <div class="container mx-auto px-4">
    <div class="mb-16 text-center">
      <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Moje prace</span>
      <h2 class="text-gray-900 font-black font-heading text-5xl md:text-6xl mb-6">Portfolio projektów</h2>
      <p class="text-xl text-gray-500 font-bold max-w-2xl mx-auto">Poznaj projekty, które stworzyłem dla moich klientów - od prostych stron po złożone aplikacje webowe.</p>
    </div>
    <div class="mb-12 flex flex-wrap justify-center gap-3">
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:ring-4 focus:ring-blue-200" data-category="wszystkie">Wszystkie</button>
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-white text-gray-900 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200" data-category="Strony WWW">Strony WWW</button>
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-white text-gray-900 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200" data-category="Aplikacje Web">Aplikacje Web</button>
  <button class="portfolio-filter-btn px-6 py-3 text-sm font-bold bg-white text-gray-900 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200" data-category="E-commerce">E-commerce</button>
    </div>
    <div class="flex flex-wrap -m-4" id="portfolio-grid">
    <x-portfolio-card
      category="Strony WWW"
      title="Dashboard Analytics"
      excerpt="Zaawansowana platforma analityczna z real-time reporting i interaktywnymi wykresami dla firm."
      description="Zaawansowana platforma analityczna z real-time reporting i interaktywnymi wykresami dla firm."
      url="#"
      img="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600"
      :tags="['React', 'Node.js', 'MongoDB']"
    />
    <x-portfolio-card
      category="Strony WWW"
      title="Strona korporacyjna"
      excerpt="Elegancka strona internetowa dla firmy konsultingowej z responsive design i płynnymi animacjami."
      description="Elegancka strona internetowa dla firmy konsultingowej z responsive design i płynnymi animacjami."
      url="#"
      img="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600"
      :tags="['HTML5', 'CSS3', 'JavaScript']"
    />
    <x-portfolio-card
      category="Aplikacje Web"
      title="Sklep online"
      excerpt="Nowoczesny sklep e-commerce z systemem płatności, zarządzaniem produktami i panelem admina."
      description="Nowoczesny sklep e-commerce z systemem płatności, zarządzaniem produktami i panelem admina."
      url="#"
      img="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600"
      :tags="['Vue.js', 'Laravel', 'Stripe']"
    />
    <x-portfolio-card
      category="Aplikacje Web"
      title="Task Manager"
      excerpt="Aplikacja do zarządzania projektami z funkcjami współpracy zespołowej i trackingiem czasu."
      description="Aplikacja do zarządzania projektami z funkcjami współpracy zespołowej i trackingiem czasu."
      url="#"
      img="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600"
      :tags="['Angular', 'TypeScript', 'Firebase']"
    />
    <x-portfolio-card
      category="E-commerce"
      title="Portfolio fotografa"
      excerpt="Minimalistyczne portfolio z galerią zdjęć, lazy loading i optymalizacją pod SEO."
      description="Minimalistyczne portfolio z galerią zdjęć, lazy loading i optymalizacją pod SEO."
      url="#"
      img="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=600"
      :tags="['Next.js', 'Tailwind', 'Vercel']"
    />
    <x-portfolio-card
      category="E-commerce"
      title="Marketplace"
      excerpt="Platforma marketplace łącząca sprzedawców i kupujących z systemem ocen i bezpiecznych płatności."
      description="Platforma marketplace łącząca sprzedawców i kupujących z systemem ocen i bezpiecznych płatności."
      url="#"
      img="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=600"
      :tags="['React', 'Express', 'PostgreSQL']"
    />
  </div>
    </div>
  </div>
</section>