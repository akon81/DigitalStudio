<section class="relative">
    <div id="kontakt" class="max-w-4xl px-8 py-16 mx-auto lg:px-12 2xl:px-0">
        <div class="flex flex-col gap-12">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold lg:text-4xl xl:text-5xl text-balance">
                    Porozmawiajmy o Twoim projekcie
                </h2>
                <p class="mt-4 text-base lg:text-lg text-neutral-600 dark:text-neutral-400 text-balance">
                    Masz pomysł? Chętnie go wysłucham i razem zastanowimy się nad najlepszym rozwiązaniem
                </p>
            </div>
         
            <div class="space-y-6">
                <!-- Flash Messages -->
                @if (session()->has('success'))
                    <div class="p-4 mb-6 text-green-800 border border-green-300 rounded-2xl bg-green-50 dark:bg-green-900/20 dark:border-green-800 dark:text-green-200">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="p-4 mb-6 text-red-800 border border-red-300 rounded-2xl bg-red-50 dark:bg-red-900/20 dark:border-red-800 dark:text-red-200">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    </div>
                @endif

                <form wire:submit="submit" class="flex flex-col gap-6">
                    <!-- Imię i nazwisko -->
                    <div>
                        <label for="contactName" class="block mb-2 font-medium text-neutral-700 dark:text-neutral-200">
                            Imię i nazwisko <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contactName" 
                            wire:model="name"
                            placeholder="Jan Kowalski"
                            class="w-full px-6 py-4 border border-neutral-300 dark:border-neutral-700 rounded-full bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 placeholder:text-neutral-400 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 @error('name') border-red-500 @enderror"
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="contactEmail" class="block mb-2 font-medium text-neutral-700 dark:text-neutral-200">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="contactEmail" 
                            wire:model="email"
                            placeholder="jan.kowalski@example.com"
                            class="w-full px-6 py-4 border border-neutral-300 dark:border-neutral-700 rounded-full bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 placeholder:text-neutral-400 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 @error('email') border-red-500 @enderror"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Telefon -->
                    <div>
                        <label for="contactPhone" class="block mb-2 font-medium text-neutral-700 dark:text-neutral-200">
                            Telefon
                        </label>
                        <input 
                            type="tel" 
                            id="contactPhone" 
                            wire:model="phone"
                            placeholder="+48 123 456 789"
                            class="w-full px-6 py-4 border border-neutral-300 dark:border-neutral-700 rounded-full bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 placeholder:text-neutral-400 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 @error('phone') border-red-500 @enderror"
                        >
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Temat -->
                    <div>
                        <label for="contactSubject" class="block mb-2 font-medium text-neutral-700 dark:text-neutral-200">
                            Temat <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contactSubject" 
                            wire:model="subject"
                            placeholder="Temat wiadomości"
                            class="w-full px-6 py-4 border border-neutral-300 dark:border-neutral-700 rounded-full bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 placeholder:text-neutral-400 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 @error('subject') border-red-500 @enderror"
                        >
                        @error('subject')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Wiadomość -->
                    <div>
                        <label for="contactMessage" class="block mb-2 font-medium text-neutral-700 dark:text-neutral-200">
                            Wiadomość <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="contactMessage" 
                            wire:model="message"
                            rows="6"
                            placeholder="Wiadomość..."
                            class="w-full px-6 py-4 border border-neutral-300 dark:border-neutral-700 rounded-3xl bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 placeholder:text-neutral-400 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 resize-none @error('message') border-red-500 @enderror"
                        ></textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Polityka prywatności -->
                    <div class="flex items-start gap-3">
                        <input 
                            type="checkbox" 
                            id="contactPrivacy" 
                            wire:model="privacy"
                            class="w-5 h-5 mt-1 text-blue-600 border-neutral-300 dark:border-neutral-700 rounded focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 bg-white dark:bg-neutral-900 @error('privacy') border-red-500 @enderror"
                        >
                        <label for="contactPrivacy" class="text-sm text-neutral-600 dark:text-neutral-400">
                            Akceptuję 
                            <a href="{{ route('privacy-policy') }}" class="text-blue-600 dark:text-blue-400 hover:underline">politykę prywatności</a> 
                            i wyrażam zgodę na przetwarzanie moich danych osobowych 
                            <span class="text-red-500">*</span>
                        </label>
                    </div>
                    @error('privacy')
                        <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror

                    <!-- Przycisk Submit -->
                    <div class="flex md:justify-center">
                        <button 
                            type="submit"
                            class="w-full md:w-auto px-8 py-4 font-semibold text-white transition-all bg-blue-500 rounded-full hover:bg-blue-600 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30 disabled:opacity-50 disabled:cursor-not-allowed"
                            wire:loading.attr="disabled"
                        >
                            <span wire:loading.remove>Wyślij wiadomość</span>
                            <span wire:loading>Wysyłanie...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>