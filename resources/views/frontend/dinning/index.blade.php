@section('seo')
    @include('frontend.seo', [
        'name' => $dinning_page->seo_title ?? '',
        'title' => $dinning_page->seo_title ?? $dinning_page->title,
        'description' => $dinning_page->meta_description ?? '',
        'keyword' => $dinning_page->meta_keywords ?? '',
        'schema' => $dinning_page->seo_schema ?? '',
        'created_at' => $dinning_page->created_at,
        'updated_at' => $dinning_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section id="hero-about" class="relative h-[500px] flex items-center justify-center overflow-hidden mt-20">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover"
            src="{{ asset($dinning_page->banner_image) }}"
            alt="luxury hotel exterior facade with grand architecture, elegant entrance, manicured gardens, golden hour lighting" />
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-6">
        <h1 class="text-5xl lg:text-6xl font-playfair font-bold mb-6">
            {{ $dinning_page->title ?? 'About Us' }}
        </h1>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto">
            {{ $dinning_page->short_description ?? 'About Us' }}
        </p>
    </div>
</section>
<section id="dining-amenities" class="py-16 bg-luxury-cream">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                Culinary <span class="text-luxury-gold">Excellence</span>
            </h2>
            <p class="text-lg text-gray-600">Experience world-class dining at our signature restaurants</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div id="restaurant-1" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/dc39e35ff7-ee83143ea8497949b76a.png" alt="elegant fine dining restaurant interior, sophisticated table settings, ambient lighting, luxury hotel dining" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-2">Aurelius</h3>
                    <p class="text-gray-600 mb-4">Michelin-starred fine dining featuring contemporary European cuisine crafted by renowned chefs.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Open 6:00 PM - 11:00 PM</span>
                        <button class="text-luxury-gold font-semibold hover:underline">Reserve</button>
                    </div>
                </div>
            </div>

            <div id="restaurant-2" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/b6e1b75f6f-32d2005a4df7c6b38fdc.png" alt="modern rooftop bar, city skyline view, elegant cocktail lounge, contemporary design, evening atmosphere" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-2">Sky Lounge</h3>
                    <p class="text-gray-600 mb-4">Rooftop bar offering craft cocktails and panoramic city views in an sophisticated atmosphere.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Open 5:00 PM - 1:00 AM</span>
                        <button class="text-luxury-gold font-semibold hover:underline">Visit</button>
                    </div>
                </div>
            </div>

            <div id="restaurant-3" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/6ab85b4ff3-9daefc83dca1bb355920.png" alt="casual elegant cafe interior, comfortable seating, natural lighting, modern breakfast restaurant design" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-2">Garden Café</h3>
                    <p class="text-gray-600 mb-4">All-day dining featuring fresh, locally-sourced ingredients in a relaxed garden setting.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Open 6:00 AM - 10:00 PM</span>
                        <button class="text-luxury-gold font-semibold hover:underline">Menu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection