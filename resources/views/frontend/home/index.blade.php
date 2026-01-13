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
<section id="hero" class="relative h-[700px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover"
             src="{{ asset($sliders->image) }}"
             alt="{{ $sliders->title ?? 'Hero Image' }}">

        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-6">
        <h1 class="text-6xl lg:text-7xl font-playfair font-bold mb-6">
            {!! $sliders->title !!}
        </h1>
        <p class="text-xl mb-8 text-gray-200 max-w-2xl mx-auto">
            {!! $sliders->description !!}
        </p>
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 max-w-5xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Check In</label>
                    <input type="date"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Check Out</label>
                    <input type="date"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Guests</label>
                    <select class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white">
                        <option>1 Guest</option>
                        <option>2 Guests</option>
                        <option>3 Guests</option>
                        <option>4+ Guests</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button
                        class="w-full bg-luxury-gold text-white py-3 px-6 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
                        Search Rooms
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="welcome" class="py-20 bg-luxury-cream">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">
                    Welcome to <span class="text-luxury-gold">Luxoria</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    For over three decades, Luxoria has been synonymous with exceptional hospitality and timeless
                    elegance. Our commitment to excellence ensures that every guest experiences the pinnacle of
                    luxury accommodation.
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
                <button
                    class="bg-luxury-dark text-white px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                    Discover Our Story
                </button>
            </div>
            <div class="relative">
                <img class="w-full h-[500px] object-cover rounded-2xl shadow-2xl"
                    src="https://storage.googleapis.com/uxpilot-auth.appspot.com/089bcc67ea-1d5af4b549535dc7bebc.png"
                    alt="elegant hotel suite interior with luxury furniture, marble bathroom, city view, sophisticated design" />
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
<section id="rooms" class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">Our Signature <span
                    class="text-luxury-gold">Suites</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Each suite is meticulously designed to provide an unforgettable experience with breathtaking views
                and world-class amenities.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div id="deluxe-suite"
                class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative h-64">
                    <img class="w-full h-full object-cover"
                        src="https://storage.googleapis.com/uxpilot-auth.appspot.com/c4c415dc59-e9fab97a3d2d67cbf05d.png"
                        alt="deluxe hotel suite bedroom with king bed, modern furniture, city view, elegant lighting" />
                    <div
                        class="absolute top-4 left-4 bg-luxury-gold text-white px-3 py-1 rounded-full text-sm font-medium">
                        Most Popular
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-3">Deluxe Suite</h3>
                    <p class="text-gray-600 mb-4">Spacious suite with panoramic city views, marble bathroom, and
                        premium amenities.</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-4 text-sm text-gray-500">
                            <span><i class="fas fa-bed mr-1"></i> King Bed</span>
                            <span><i class="fas fa-users mr-1"></i> 2 Guests</span>
                            <span><i class="fas fa-expand mr-1"></i> 45m²</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-3xl font-bold text-luxury-gold">$299</span>
                            <span class="text-gray-500">/night</span>
                        </div>
                        <button
                            class="bg-luxury-dark text-white px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>

            <div id="executive-suite"
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
            </div>

            <div id="presidential-suite"
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
            </div>
        </div>
    </div>
</section>
<section id="amenities" class="py-20 bg-luxury-cream">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">World-Class <span
                    class="text-luxury-gold">Amenities</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Experience unparalleled luxury with our comprehensive range of premium facilities and services.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div id="spa-wellness" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-spa text-luxury-gold text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-luxury-dark mb-3">Spa & Wellness</h3>
                <p class="text-gray-600">Rejuvenate your senses with our award-winning spa treatments and wellness
                    programs.</p>
            </div>

            <div id="fine-dining" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-utensils text-luxury-gold text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-luxury-dark mb-3">Fine Dining</h3>
                <p class="text-gray-600">Savor exquisite cuisine crafted by world-renowned chefs in our signature
                    restaurants.</p>
            </div>

            <div id="fitness-center" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-dumbbell text-luxury-gold text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-luxury-dark mb-3">Fitness Center</h3>
                <p class="text-gray-600">State-of-the-art fitness facilities with personal training and wellness
                    programs.</p>
            </div>

            <div id="concierge" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-concierge-bell text-luxury-gold text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-luxury-dark mb-3">Concierge</h3>
                <p class="text-gray-600">24/7 personalized concierge service to cater to your every need and desire.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-playfair font-bold text-luxury-dark mb-6">What Our Guests <span
                    class="text-luxury-gold">Say</span></h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div id="testimonial-1" class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg"
                        alt="Sarah Johnson" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-luxury-dark">Sarah Johnson</h4>
                        <p class="text-gray-600">CEO, Tech Innovations</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                </div>
                <p class="text-gray-600 italic">"Absolutely exceptional service! Every detail was perfect, from the
                    stunning suite to the personalized attention from staff. Luxoria truly sets the standard for
                    luxury hospitality."</p>
            </div>

            <div id="testimonial-2" class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg"
                        alt="Michael Chen" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-luxury-dark">Michael Chen</h4>
                        <p class="text-gray-600">Investment Banker</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                </div>
                <p class="text-gray-600 italic">"The Presidential Suite exceeded all expectations. The attention to
                    detail, world-class amenities, and breathtaking views made our anniversary celebration
                    unforgettable."</p>
            </div>

            <div id="testimonial-3" class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg"
                        alt="Emma Rodriguez" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-luxury-dark">Emma Rodriguez</h4>
                        <p class="text-gray-600">Fashion Designer</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                    <i class="fas fa-star text-luxury-gold"></i>
                </div>
                <p class="text-gray-600 italic">"From the moment we arrived, we felt like royalty. The spa
                    treatments were divine, and the dining experience was simply extraordinary. We'll definitely be
                    returning!"</p>
            </div>
        </div>
    </div>
</section>
<section id="cta" class="py-20 bg-luxury-dark">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-playfair font-bold text-white mb-6">Ready for Your <span
                class="text-luxury-gold">Luxury Escape?</span></h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Book your stay today and experience the epitome of luxury hospitality at Luxoria.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button
                class="bg-luxury-gold text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors">
                Book Your Stay
            </button>
            <button
                class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-luxury-dark transition-colors">
                View All Rooms
            </button>
        </div>
    </div>
</section>
@endsection
