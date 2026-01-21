@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="relative min-h-[80vh] lg:h-[700px] overflow-hidden" id="hero" style="display: contents;">
        <div class="swiper heroSwiper h-full">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide relative h-full flex items-start lg:items-center justify-center">
                        <!-- Background -->
                        <div class="absolute inset-0">
                            <img class="w-full h-full object-cover" src="{{ asset($slider->image) }}"
                                alt="{{ $slider->title ?? 'Hero Image' }}">
                            <div class="absolute inset-0 bg-black/50"></div>
                        </div>
                        <!-- Content -->
                    </div>
                @endforeach
            </div>

            <!-- Optional controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    {{-- About us section --}}
    <section class="py-20 bg-luxury-cream" id="welcome">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">
                        {{ $about_us->title ?? 'About us' }} <span class="text-luxury-gold">Munal</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        {{ $about_us->description ?? '' }}
                    </p>
                </div>
                <div class="relative">
                    <img class="w-full h-[500px] object-cover rounded-2xl shadow-2xl"
                        src="{{ asset($about_us->image_1) }}" />
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-xl shadow-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center">
                                <i class="{{ $settings['aboutus_subtitle'] }}"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-luxury-dark">24/7</div>
                                <div class="text-sm text-gray-600">Concierge Service</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Room section --}}
    <section class="py-20" id="rooms">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">{{ $settings['countries_title'] }} <span
                        class="text-luxury-gold">{{ $settings['countries_subtitle'] }}</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    {{ $settings['countries_description'] }}
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach ($rooms as $room)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow"
                        id="deluxe-suite">
                        <div class="relative h-64">
                            <img class="w-full h-full object-cover" src="{{ $room->image }}"
                                alt="deluxe hotel suite bedroom with king bed, modern furniture, city view, elegant lighting" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-playfair font-bold mb-3">
                                <a class="text-luxury-dark hover:text-luxury-gold transition-colors"
                                    href="{{ route('frontend.singleroom', $room->slug) }}">
                                    {{ $room->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{ $room->short_description }}</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    {{-- <span><i class="fas fa-bed mr-1"></i> King Bed</span> --}}
                                    <span><i class="text-luxury-gold fas fa-users mr-1"></i> {{ $room->max_guest }}
                                        Guests</span>
                                    <span><i class="text-luxury-gold fas fa-expand mr-1"></i> {{ $room->area }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                {{-- <div>
                                    <span class="text-3xl font-bold text-luxury-gold">Rs. {{ $room->price }}</span>
                                    <span class="text-gray-500">/night</span>
                                </div> --}}
                                <a class="w-full" href="{{ route('frontend.singleroom', $room->slug) }}">
                                    <button
                                        class="w-full bg-luxury-gold text-white px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                                        View Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div id="executive-suite"
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="relative h-64">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/979a13f387-fc4b035fb199d46d4739.png"
                            alt="executive hotel suite with separate living area, luxury furniture, ocean view, modern design" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-3">Executive Suite</h3>
                        <p class="text-gray-600 mb-4">Elegant suite with separate living area, private balcony, and
                            exclusive amenities.</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4 text-sm text-gray-500">
                                <span><i class="fas fa-bed mr-1"></i> King Bed</span>
                                <span><i class="fas fa-users mr-1"></i> 4 Guests</span>
                                <span><i class="fas fa-expand mr-1"></i> 65m²</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-3xl font-bold text-luxury-gold">$449</span>
                                <span class="text-gray-500">/night</span>
                            </div>
                            <button
                                class="bg-luxury-dark text-white px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div> --}}
                {{-- <div id="presidential-suite"
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="relative h-64">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/f16cf625f1-327a3f134c65f9071dd5.png"
                            alt="presidential hotel suite with luxury living room, dining area, premium furniture, panoramic windows" />
                        <div
                            class="absolute top-4 left-4 bg-luxury-dark text-white px-3 py-1 rounded-full text-sm font-medium">
                            Premium
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-3">Presidential Suite</h3>
                        <p class="text-gray-600 mb-4">Ultimate luxury with private dining, butler service, and exclusive
                            rooftop access.</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4 text-sm text-gray-500">
                                <span><i class="fas fa-bed mr-1"></i> King Bed</span>
                                <span><i class="fas fa-users mr-1"></i> 6 Guests</span>
                                <span><i class="fas fa-expand mr-1"></i> 120m²</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-3xl font-bold text-luxury-gold">$899</span>
                                <span class="text-gray-500">/night</span>
                            </div>
                            <button
                                class="bg-luxury-dark text-white px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- service section --}}
    {{-- <section id="amenities" class="py-20 bg-luxury-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">World-Class <span
                        class="text-luxury-gold">Amenities</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Experience unparalleled luxury with our comprehensive range of premium facilities and services.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($services as $service)
                    <div id="service-{{ $service->id }}"
                        class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                        <!-- Image instead of icon -->
                        <div
                            class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4 overflow-hidden">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}"
                                class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold text-luxury-dark mb-3">
                            {{ $service->title }}
                        </h3>
                        <p class="text-gray-600 line-clamp-3">
                            {!! $service->description !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    {{-- testimonail section --}}
    <section class="py-20 bg-luxury-cream" id="testimonials">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">{{ $settings['testioninal_title'] }}
                    <span class="text-luxury-gold">{{ $settings['testioninal_subtitle'] }}</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-white rounded-2xl p-8 shadow-lg" id="testimonial-{{ $testimonial->id }}">
                        <!-- Profile -->
                        <div class="flex items-center mb-6">
                            <img class="w-16 h-16 rounded-full mr-4 object-cover" src="{{ asset($testimonial->image) }}"
                                alt="{{ $testimonial->name }}">
                            <div>
                                <h4 class="font-semibold text-luxury-dark">
                                    {{ $testimonial->name }}
                                </h4>
                                <p class="text-gray-600">
                                    {{ $testimonial->position }}
                                </p>
                            </div>
                        </div>
                        <!-- Rating -->
                        <div class="flex mb-4">
                            @for ($i = 1; $i <= 5; $i++)
                                <i
                                    class="fas fa-star {{ $i <= $testimonial->rating ? 'text-luxury-gold' : 'text-luxury-gold' }}"></i>
                            @endfor
                        </div>
                        <!-- Message -->
                        <p class="text-gray-600 italic">
                            {!! $testimonial->description !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-20 bg-luxury-dark" id="cta">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-5xl font-playfair font-bold text-white mb-6">{{ $settings['universities_title'] }}<span
                    class="ml-1 text-luxury-gold">{{ $settings['universities_subtitle'] }}</span></h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ $settings['universities_description'] }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-3">
                <a class="bg-luxury-gold text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors"
                    href="{{ route('frontend.register') }}"> {{ $settings['universities_button'] }}</a>
                <a class="bg-luxury-gold text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors"
                    href="{{ route('frontend.rooms') }}"> {{ $settings['universities_link'] }}</a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".heroSwiper", {
            loop: true,
            speed: 1200,
            effect: "fade",
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
