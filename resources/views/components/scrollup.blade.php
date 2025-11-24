 <!-- Scroll to Top Arrow -->
            <button id="scrollToTopBtn" type="button"
                class="hidden fixed bottom-6 right-6 z-50 bg-gray-900 text-white cursor-pointer rounded-full p-3 shadow-lg transition-opacity duration-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                aria-label="Przewiń do góry">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                </svg>
            </button>
            <script>
                // Show/hide scroll-to-top button
                const scrollBtn = document.getElementById('scrollToTopBtn');
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 200) {
                        scrollBtn.classList.remove('hidden');
                    } else {
                        scrollBtn.classList.add('hidden');
                    }
                });
                // Scroll to top on click
                scrollBtn.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            </script>