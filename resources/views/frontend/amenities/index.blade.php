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
<section id="amenities-hero" class="relative h-[600px] flex items-center overflow-hidden mt-20">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{ asset( $course_page->banner_image) }}" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
        <div class="flex items-center space-x-2 text-white/80 mb-4">
            <a href="#" class="hover:text-luxury-gold transition-colors">Home</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-white">{{ $course_page->title ?? 'About Us' }}</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
          <span class="text-luxury-gold">{{ $course_page->short_description ?? 'About Us' }}</span>
        </h1>
        <p class="text-xl text-white/90 max-w-2xl leading-relaxed">
            {!! $course_page->description ?? 'About Us' !!}
        </p>
    </div>
</section>
<section id="featured-amenities" class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-luxury-dark mb-4">
                Signature <span class="text-luxury-gold">Experiences</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Indulge in our premium amenities crafted to provide exceptional experiences for our discerning guests
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($amenities as $amenity)
                <div class="relative group overflow-hidden rounded-2xl h-[300px]">
                    <img 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="{{ asset( $amenity->image) }}"
                        alt="{{ $amenity->title }}"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mb-3">
                           <img src="" alt="">
                        </div>
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
<section id="amenities-grid" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                Complete <span class="text-luxury-gold">Amenities</span>
            </h2>
            <p class="text-lg text-gray-600">Everything you need for an exceptional stay</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($complete_amenities as $amenity)
                <div
                    class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <!-- Image -->
                    <div
                        class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4 overflow-hidden">
                        <img
                            src="{{ asset($amenity->image) }}"
                            alt="{{ $amenity->title }}"
                            class="w-10 h-10 object-contain">
                    </div>
                    <!-- Title -->
                    <h3 class="font-semibold text-luxury-dark mb-2">
                        {{ $amenity->title }}
                    </h3>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">
                        {!! $amenity->description !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="spa-details" class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-6">
                    Serenity <span class="text-luxury-gold">Spa & Wellness</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    {{ $serenity_spa_wellness->short_description }}
                </p>
                
                <div class="space-y-4 mb-8">
                    {!! $serenity_spa_wellness->description !!}
                </div>

                <button class="bg-luxury-gold text-white px-8 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
                    Book Us
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="h-64 overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="{{ asset($serenity_spa_wellness->image_1) }}" />
                </div>
                <div class="h-64 overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="{{ asset($serenity_spa_wellness->image_2) }}" />
                </div>
                <div class="h-64 overflow-hidden rounded-xl col-span-2">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="{{ asset($serenity_spa_wellness->banner_image) }}" />
                </div>
            </div>
        </div>
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
<section id="amenities-hours" class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-8">
                    Operating <span class="text-luxury-gold">Hours</span>
                </h2>
                
                <div class="space-y-6">
                    <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                        <div>
                            <h4 class="font-semibold text-luxury-dark">Serenity Spa</h4>
                            <p class="text-sm text-gray-600">Treatments & Wellness</p>
                        </div>
                        <div class="text-right">
                            <div class="text-luxury-dark font-medium">9:00 AM - 9:00 PM</div>
                            <div class="text-sm text-gray-600">Daily</div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                        <div>
                            <h4 class="font-semibold text-luxury-dark">Fitness Center</h4>
                            <p class="text-sm text-gray-600">Gym & Personal Training</p>
                        </div>
                        <div class="text-right">
                            <div class="text-luxury-dark font-medium">24 Hours</div>
                            <div class="text-sm text-gray-600">Daily</div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                        <div>
                            <h4 class="font-semibold text-luxury-dark">Infinity Pool</h4>
                            <p class="text-sm text-gray-600">Swimming & Poolside Service</p>
                        </div>
                        <div class="text-right">
                            <div class="text-luxury-dark font-medium">6:00 AM - 10:00 PM</div>
                            <div class="text-sm text-gray-600">Daily</div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                        <div>
                            <h4 class="font-semibold text-luxury-dark">Business Center</h4>
                            <p class="text-sm text-gray-600">Workspaces & Meeting Rooms</p>
                        </div>
                        <div class="text-right">
                            <div class="text-luxury-dark font-medium">24 Hours</div>
                            <div class="text-sm text-gray-600">Daily</div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <div>
                            <h4 class="font-semibold text-luxury-dark">Concierge</h4>
                            <p class="text-sm text-gray-600">Guest Services</p>
                        </div>
                        <div class="text-right">
                            <div class="text-luxury-dark font-medium">24 Hours</div>
                            <div class="text-sm text-gray-600">Daily</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact-amenities" class="bg-luxury-cream rounded-2xl p-8">
                <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-6">Plan Your Visit</h3>
                <p class="text-gray-600 mb-6">
                    Our concierge team is available to help you make the most of our amenities and plan your perfect stay.
                </p>
                
                <div class="space-y-4 mb-6">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-luxury-gold"></i>
                        <span class="text-gray-700">+1 (555) 123-4567</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-luxury-gold"></i>
                        <span class="text-gray-700">concierge@luxoria.com</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-spa text-luxury-gold"></i>
                        <span class="text-gray-700">spa@luxoria.com</span>
                    </div>
                </div>

                <button class="w-full border-2 border-luxury-gold text-luxury-gold py-3 rounded-lg font-semibold hover:bg-luxury-gold hover:text-white transition-colors">
                    Book Amenities
                </button>
            </div>
        </div>
    </div>
</section>
<section id="cta-section" class="py-20 bg-luxury-dark">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-playfair font-bold text-white mb-6">
            Experience Unparalleled <span class="text-luxury-gold">Luxury</span>
        </h2>
        <p class="text-xl text-white/80 mb-8">
            Book your stay today and discover why Luxoria is the pinnacle of hospitality excellence
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-luxury-gold text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition-colors">
                Book Your Stay
            </button>
            <button class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-luxury-dark transition-colors">
                Take a Virtual Tour
            </button>
        </div>
    </div>
</section>
@endsection
