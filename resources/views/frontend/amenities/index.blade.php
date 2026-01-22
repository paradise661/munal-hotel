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
    <section class="relative h-[600px] flex items-center overflow-hidden mt-20" id="amenities-hero">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset($course_page->banner_image) }}" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a class="hover:text-luxury-gold transition-colors" href="{{ route('frontend.home') }}">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white">{{ $course_page->title ?? 'About Us' }}</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
                <span class="text-luxury-gold">{{ $course_page->short_description ?? 'About Us' }}</span>
            </h1>
            <p class="text-white/90 max-w-2xl leading-relaxed">
                {!! $course_page->description ?? 'About Us' !!}
            </p>
        </div>
    </section>
    <section class="py-16" id="featured-amenities">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-luxury-dark mb-4">
                    Quality <span class="text-luxury-gold">comforts</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    The hotel’s luxury comforts ensure guests enjoy ultimate relaxation and convenience with every stay.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($amenities as $amenity)
                    <div class="relative group overflow-hidden rounded-2xl h-[300px]">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="{{ asset($amenity->image) }}" alt="{{ $amenity->title }}" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            {{-- <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mb-3">
                                <img src="" alt="">
                            </div> --}}
                            <h3 class="text-xl font-playfair font-bold mb-2">
                                {{ $amenity->title }}
                            </h3>
                            <p class="text-white/90 text-sm">
                                {!! $amenity->description !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-16" id="spa-details">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-6">
                        The place of <span class="text-luxury-gold">relaxation</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ $serenity_spa_wellness->short_description }}
                    </p>

                    <div class="space-y-4 mb-8 mt-3">
                        {!! $serenity_spa_wellness->description !!}
                    </div>

                    <a class="bg-luxury-gold text-white px-8 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition-colors"
                        href="{{ route('frontend.register') }}"> Book Us</a>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="h-64 overflow-hidden rounded-xl">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                            src="{{ asset($serenity_spa_wellness->image_1) }}" />
                    </div>
                    <div class="h-64 overflow-hidden rounded-xl">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                            src="{{ asset($serenity_spa_wellness->image_2) }}" />
                    </div>
                    <div class="h-64 overflow-hidden rounded-xl col-span-2">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                            src="{{ asset($serenity_spa_wellness->banner_image) }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-luxury-dark" id="cta-section">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-playfair font-bold text-white mb-6">
                Experience Unparalleled <span class="text-luxury-gold">Munal</span>
            </h2>
            <p class="text-xl text-white/80 mb-8">
                Book your stay today and discover why Luxoria is the pinnacle of hospitality excellence
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
                <a class="bg-luxury-gold text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition-colors"
                    href="{{ route('frontend.register') }}"> Book Your Stay</a>
                <a class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-luxury-dark transition-colors"
                    href="{{ route('frontend.contact') }}">Contact
                    Us</a>

            </div>
        </div>
    </section>
@endsection
