@extends('layouts.app')

@section('meta_title', 'Zbyt wiele zapytań - 429 | DigitalStudio')
@section('meta_description', 'Przekroczono limit zapytań. Spróbuj ponownie za chwilę.')

@section('content')
<section class="py-20 bg-gray-50 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <svg class="mx-auto h-32 w-32 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            
            <h1 class="text-gray-900 font-black font-heading text-6xl md:text-7xl mb-6">429</h1>
            <h2 class="text-gray-900 font-bold font-heading text-2xl md:text-3xl mb-4">Zbyt wiele zapytań</h2>
            <p class="text-gray-500 text-lg mb-8 max-w-xl mx-auto">
                Wysłano zbyt wiele zapytań w krótkim czasie. 
                Odczekaj chwilę i spróbuj ponownie.
            </p>
            
            <div class="mb-8">
                <div class="inline-block bg-blue-50 rounded-full px-6 py-3">
                    <p class="text-blue-700 font-semibold">Spróbuj ponownie za: <span id="countdown">60</span> sekund</p>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="window.location.reload()" class="inline-flex items-center px-8 py-4 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-600 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Spróbuj ponownie
                </button>
                <a href="{{ route('home') }}" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-bold rounded-full border-2 border-gray-200 hover:border-blue-500 hover:text-blue-500 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Strona główna
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    let seconds = 60;
    const countdownEl = document.getElementById('countdown');
    
    const timer = setInterval(() => {
        seconds--;
        if (countdownEl) {
            countdownEl.textContent = seconds;
        }
        
        if (seconds <= 0) {
            clearInterval(timer);
            window.location.reload();
        }
    }, 1000);
</script>
@endpush
@endsection
