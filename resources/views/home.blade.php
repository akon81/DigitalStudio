<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')

    @section('title', 'Portfolio - Moje projekty')

    @section('content')
        @include('partials.contact-top')
        @include('partials.hero-nav')
        @include('partials.portfolio')
        @include('partials.contact-form')
        @include('partials.footer')
    @endsection
        <link rel="preconnect" href="https://fonts.bunny.net">
