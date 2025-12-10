@extends('layouts.app')

@section('meta_title', $page->title . ' - DigitalStudio')
@section('meta_description', 'Informacje prawne DigitalStudio')
@section('meta_keywords', $page->slug)

@section('content')

    <section class="py-20 bg-white overflow-hidden" id="page-content">
        <div class="container mx-auto px-4">
             <div class="mb-16 text-center">
                <h1 class="text-gray-900 font-black font-heading text-4xl md:text-5xl mb-6">{{ $page->title }}</h1>
                <p class="md:text-xl text-lg text-gray-500 font-bold max-w-2xl mx-auto">Najważniejsze informacje</p>
            </div>
           
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6
                    [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:text-gray-900 [&_h2]:mt-8 [&_h2]:mb-4 [&_h2]:font-heading
                    [&_h3]:text-xl [&_h3]:font-semibold [&_h3]:text-gray-900 [&_h3]:mt-6 [&_h3]:mb-2 [&_h3]:font-heading
                    [&_p]:text-gray-700 [&_p]:leading-relaxed [&_p]:mb-4
                    [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:space-y-1 [&_ul]:my-4
                    [&_li]:text-gray-700 [&_li]:leading-relaxed
                    [&_strong]:text-gray-900 [&_strong]:font-semibold">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
