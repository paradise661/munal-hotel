@section('seo')
    @include('frontend.seo', [
    'name' => $course_page->seo_title ?? '',
    'title' => $course_page->seo_title ?? $course_page->title,
    'description' => $course_page->meta_description ?? '',
    'keyword' => $course_page->meta_keywords ?? '',
    'schema' => $course_page->seo_schema ?? '',
    'created_at' => $course_page->created_at,
    'updated_at' => $course_page->updated_at,
])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section id="booking-hero" class="relative h-[400px] flex items-center overflow-hidden mt-20">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/d89ae1751a-3f6999cd3e06559f4354.png" alt="luxury hotel reception desk with concierge, elegant lobby, booking counter" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
            </div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                <div class="flex items-center space-x-2 text-white/80 mb-4">
                    <a href="{{ route('frontend.home') }}" class="hover:text-luxury-gold transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                        <span class="text-white">Book Now</span>
                        </div>
                            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-4">
                Reserve Your <span class="text-luxury-gold">Stay</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl">
                Experience luxury and comfort at Luxoria Hotel
            </p>
        </div>
    </section>
@endsection