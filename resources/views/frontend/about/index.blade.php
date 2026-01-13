@section('seo')
    @include('frontend.seo', [
        'name' => $about_us->seo_title ?? '',
        'title' => $about_us->seo_title ?? $about_us->title,
        'description' => $about_us->meta_description ?? '',
        'keyword' => $about_us->meta_keywords ?? '',
        'schema' => $about_us->seo_schema ?? '',
        'created_at' => $about_us->created_at,
        'updated_at' => $about_us->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section id="hero-about" class="relative h-[500px] flex items-center justify-center overflow-hidden mt-20">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/7fc5e578e1-ab2b3369a2e5b31b82f9.png"
                alt="luxury hotel exterior facade with grand architecture, elegant entrance, manicured gardens, golden hour lighting" />
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-6">
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold mb-6">
                Our <span class="text-luxury-gold">Story</span>
            </h1>
            <p class="text-xl text-gray-200 max-w-2xl mx-auto">
                {{ $about_us->short_description }}
            </p>
        </div>
    </section>
    {{-- About us section --}}
    <section id="welcome" class="py-20 bg-luxury-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">
                        {{ $about_us->title ?? 'About us' }} <span class="text-luxury-gold">Munal</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        {!! $about_us->description !!}
                    </p>
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-luxury-gold mb-2">150+</div>
                            <div class="text-gray-600">Luxury Suites</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-luxury-gold mb-2">5★</div>
                            <div class="text-gray-600">Award Winning</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-luxury-gold mb-2">24/7</div>
                            <div class="text-gray-600">Concierge Service</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-luxury-gold mb-2">30+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.about') }}">
                        <button
                            class="bg-luxury-dark text-white px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                            Discover Our Story
                        </button></a>
                </div>
                <div class="relative">
                    <img class="w-full h-[500px] object-cover rounded-2xl shadow-2xl"
                        src="{{ asset($about_us->image_1) }}" />
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-xl shadow-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center">
                                <i class="fas fa-award text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-luxury-dark">World's Best Hotel</div>
                                <div class="text-sm text-gray-600">Travel Awards 2024</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mission-vision" class="py-20 bg-luxury-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold text-luxury-dark mb-6">Our Mission & <span
                        class="text-luxury-gold">Vision</span></h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div id="mission-card" class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-4 text-center">
                        {{ $our_mission->title }}</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        {{ $our_mission->short_description }}
                    </p>
                </div>
                <div id="vision-card" class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-4 text-center">{{ $our_vision->title }}
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        {{ $our_vision->short_description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- core value/service --}}
    <section id="values" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold text-luxury-dark mb-6">Our Core <span
                        class="text-luxury-gold">Values</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    These fundamental principles guide every aspect of our service and define who we are as a luxury
                    hospitality brand.
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
    </section>
    <section id="leadership-team" class="py-20 bg-luxury-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold text-luxury-dark mb-6">Our Leadership <span
                        class="text-luxury-gold">Team</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Meet the visionary leaders who drive our commitment to excellence and innovation in luxury hospitality.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div id="ceo-card" class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg" alt="CEO"
                        class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-luxury-dark mb-2">Alexander Sterling</h3>
                    <p class="text-luxury-gold font-medium mb-3">Chief Executive Officer</p>
                    <p class="text-gray-600 text-sm mb-4">With over 25 years in luxury hospitality, Alexander has led
                        Luxoria to become a global leader in premium accommodation.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#"
                            class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-luxury-gold hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-luxury-gold hover:text-white transition-colors">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                    </div>
                </div>

                <div id="gm-card" class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg"
                        alt="General Manager" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-luxury-dark mb-2">Victoria Chen</h3>
                    <p class="text-luxury-gold font-medium mb-3">General Manager</p>
                    <p class="text-gray-600 text-sm mb-4">Victoria oversees daily operations ensuring every guest receives
                        exceptional service and memorable experiences.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#"
                            class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-luxury-gold hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-luxury-gold hover:text-white transition-colors">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                    </div>
                </div>

                <div id="chef-card" class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-8.jpg"
                        alt="Executive Chef" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-luxury-dark mb-2">Marcus Rodriguez</h3>
                    <p class="text-luxury-gold font-medium mb-3">Executive Chef</p>
                    <p class="text-gray-600 text-sm mb-4">Marcus brings Michelin-starred expertise to create extraordinary
                        culinary experiences for our discerning guests.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#"
                            class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-luxury-gold hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-luxury-gold hover:text-white transition-colors">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="awards" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold text-luxury-dark mb-6">Awards & <span
                        class="text-luxury-gold">Recognition</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Our commitment to excellence has been recognized by prestigious hospitality organizations worldwide.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div id="award-1" class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-2">World's Best Hotel</h3>
                    <p class="text-sm text-gray-600 mb-2">Travel Awards 2024</p>
                    <p class="text-xs text-gray-500">Recognized for outstanding service and luxury amenities</p>
                </div>

                <div id="award-2" class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-2">5-Star Diamond</h3>
                    <p class="text-sm text-gray-600 mb-2">AAA Rating 2024</p>
                    <p class="text-xs text-gray-500">Highest level of luxury and service excellence</p>
                </div>

                <div id="award-3" class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-2">Excellence Award</h3>
                    <p class="text-sm text-gray-600 mb-2">Hospitality International 2023</p>
                    <p class="text-xs text-gray-500">Outstanding achievement in guest satisfaction</p>
                </div>

                <div id="award-4" class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-2">Sustainability Leader</h3>
                    <p class="text-sm text-gray-600 mb-2">Green Hotel Awards 2023</p>
                    <p class="text-xs text-gray-500">Leading environmental responsibility initiatives</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sustainability" class="py-20 bg-luxury-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-playfair font-bold text-luxury-dark mb-6">
                        Commitment to <span class="text-luxury-gold">Sustainability</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At Luxoria, we believe luxury and environmental responsibility go hand in hand. Our comprehensive
                        sustainability program encompasses energy efficiency, waste reduction, and community engagement
                        initiatives.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-leaf text-luxury-gold"></i>
                            <span class="text-gray-700">100% renewable energy sources</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-recycle text-luxury-gold"></i>
                            <span class="text-gray-700">Zero waste to landfill program</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-water text-luxury-gold"></i>
                            <span class="text-gray-700">Advanced water conservation systems</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-seedling text-luxury-gold"></i>
                            <span class="text-gray-700">Local sourcing and organic gardens</span>
                        </div>
                    </div>
                    <button
                        class="bg-luxury-dark text-white px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                        Learn More
                    </button>
                </div>
                <div class="relative">
                    <img class="w-full h-[400px] object-cover rounded-2xl shadow-2xl"
                        src="https://storage.googleapis.com/uxpilot-auth.appspot.com/49b10dc3f5-76eb0a69023e626a18f7.png"
                        alt="luxury hotel rooftop garden with solar panels, green plants, sustainable architecture, eco-friendly design" />
                </div>
            </div>
        </div>
    </section>
    <section id="cta-about" class="py-20 bg-luxury-dark">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-playfair font-bold text-white mb-6">Experience the <span
                    class="text-luxury-gold">Luxoria Difference</span></h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Join us and become part of our story. Discover why discerning travelers choose Luxoria for their most
                important moments.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-luxury-gold text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors">
                    Book Your Stay
                </button>
                <button
                    class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-luxury-dark transition-colors">
                    Contact Us
                </button>
            </div>
        </div>
    </section>
@endsection
