@section('seo')
    @include('frontend.seo', [
    'name' => $roomsingle->seo_title ?? '',
    'title' => $roomsingle->seo_title ?? $roomsingle->title,
    'description' => $roomsingle->meta_description ?? '',
    'keyword' => $roomsingle->meta_keywords ?? '',
    'schema' => $roomsingle->seo_schema ?? '',
    'created_at' => $roomsingle->created_at,
    'updated_at' => $roomsingle->updated_at,
])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[600px] flex items-end overflow-hidden mt-20" id="room-hero">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ $roomsingle->image }}"
                alt="luxury presidential suite bedroom, king size bed, elegant interior design, golden accents, floor to ceiling windows, city view, modern luxury" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 pb-16 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a class="hover:text-luxury-gold transition-colors" href="{{ route('frontend.home') }}">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a class="hover:text-luxury-gold transition-colors" href="{{ route('frontend.rooms') }}">Rooms</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white">{{ $roomsingle->title }}</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-4">
                {{ $roomsingle->title }}</span>
            </h1>
            <div class="flex flex-wrap items-center gap-6 text-white">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-ruler-combined text-luxury-gold"></i>
                    <span>{{ $roomsingle->area }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-users text-luxury-gold"></i>
                    <span> {{ $roomsingle->max_guest }} guests</span>
                </div>
                <div class="flex items-center space-x-2">
                            <i class="fas fa-smoking text-luxury-gold"></i>
                            <span>{{ $roomsingle->smoking }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-eye text-luxury-gold"></i>
                            <span>{{ $roomsingle->view }}</span>
                        </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gray-50" id="room-gallery">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Main Image -->
                <div class="lg:col-span-2 h-[420px] relative overflow-hidden rounded-2xl group">
                    <img
                        src="{{ $roomsingle->image }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Luxury room interior"
                    />
        
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
        
                    <!-- Accent Border -->
                    <div class="absolute inset-0 border border-white/20 rounded-2xl pointer-events-none"></div>
                </div>
        
                <!-- Secondary Image -->
                <div class="h-[420px] relative overflow-hidden rounded-2xl group">
                    <img
                        src="{{ $roomsingle->image_1 }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Luxury bathroom"
                    />
        
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/20"></div>
        
                    <!-- Accent Border -->
                    <div class="absolute inset-0 border border-white/20 rounded-2xl pointer-events-none"></div>
                </div>
        
            </div>
        </div>
        
    </section>
    <section class="py-16" id="room-overview">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2">
                    {!! $roomsingle->description !!}
                    <div class="mt-4">
                        {{-- <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-3">Facilities <span class="text-luxury-gold"></span></h3> --}}
                    {!! $roomsingle->facilities !!}
                </div>
                <div class="mt-4">
                        {{-- <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-3">Bathroom <span class="text-luxury-gold"></span></h3> --}}
                    {!! $roomsingle->bathroom !!}
                </div>
                </div>
                <div>
                    <div class="bg-luxury-cream rounded-2xl p-8 shadow-lg sticky top-32" id="booking-card">
                        <div class="space-y-4 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-in</label>
                                <div class="flex items-center border-2 border-gray-200 rounded-lg px-4 py-3 bg-white">
                                    <i class="fas fa-calendar text-luxury-gold mr-3"></i>
                                    <input class="outline-none w-full" type="date">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-out</label>
                                <div class="flex items-center border-2 border-gray-200 rounded-lg px-4 py-3 bg-white">
                                    <i class="fas fa-calendar text-luxury-gold mr-3"></i>
                                    <input class="outline-none w-full" type="date">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Guests</label>
                                <div class="flex items-center border-2 border-gray-200 rounded-lg px-4 py-3 bg-white">
                                    <i class="fas fa-user text-luxury-gold mr-3"></i>
                                    <select class="outline-none w-full">
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button
                            class="w-full bg-luxury-gold text-white py-4 rounded-lg font-semibold hover:bg-opacity-90 transition-colors mb-4">
                            Reserve Now
                        </button>
                        <div class="text-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-info-circle text-luxury-gold mr-1"></i>
                            Free cancellation within 24 hours
                        </div>

                        {{-- <div class="border-t border-gray-300 pt-4 space-y-3">
                                <div class="flex justify-between text-gray-700">
                                    <span>$899 x 3 nights</span>
                                    <span>$2,697</span>
                                </div>
                                <div class="flex justify-between text-gray-700">
                                    <span>Service fee</span>
                                    <span>$135</span>
                                </div>
                                <div class="flex justify-between text-gray-700">
                                    <span>Taxes</span>
                                    <span>$270</span>
                                </div>
                                <div class="border-t border-gray-300 pt-3 flex justify-between font-bold text-luxury-dark text-lg">
                                    <span>Total</span>
                                    <span>$3,102</span>
                                </div>
                            </div> --}}
                    </div>
                    {{-- <div class="bg-white rounded-2xl p-6 shadow-lg mt-6" id="contact-card">
                        <h4 class="font-semibold text-luxury-dark mb-4">Need Assistance?</h4>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-phone text-luxury-gold"></i>
                                <span class="text-gray-700">+1 (555) 123-4567</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-envelope text-luxury-gold"></i>
                                <span class="text-gray-700">reservations@luxoria.com</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 border-2 border-luxury-gold text-luxury-gold py-2 rounded-lg font-medium hover:bg-luxury-gold hover:text-white transition-colors">
                            Contact Concierge
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-16 bg-gray-50" id="room-features">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-playfair font-bold text-luxury-dark text-center mb-12">Exclusive <span
                    class="text-luxury-gold">Features</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg" id="feature-1">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-concierge-bell text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-3">Personal Butler</h3>
                    <p class="text-sm text-gray-600">Dedicated butler service available 24/7 for all your needs</p>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg" id="feature-2">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-3">Private Dining</h3>
                    <p class="text-sm text-gray-600">In-suite dining with Michelin-starred chef creations</p>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg" id="feature-3">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-car text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-3">Luxury Transport</h3>
                    <p class="text-sm text-gray-600">Complimentary airport transfers in luxury vehicles</p>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg" id="feature-4">
                    <div class="w-16 h-16 bg-luxury-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-crown text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-luxury-dark mb-3">VIP Access</h3>
                    <p class="text-sm text-gray-600">Exclusive lounge access and priority reservations</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="py-16 bg-luxury-cream" id="similar-rooms">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-playfair font-bold text-luxury-dark text-center mb-12">Similar <span
                    class="text-luxury-gold">Rooms</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($rooms as $room)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow"
                        id="room-card-1">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                                src="{{ $room->image }}"
                                alt="luxury executive suite bedroom, elegant design, king bed, modern furniture, city view, sophisticated interior" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-2">{{ $room->title }}</h3>
                            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-4">
                                <span><i
                                        class="fas fa-ruler-combined text-luxury-gold mr-1"></i>{{ $room->area }}</span>
                                <span><i class="fas fa-users text-luxury-gold mr-1"></i>{{ $room->max_guest }}
                                    guests</span>
                            </div>
                            <div class="flex items-center justify-between">
                                {{-- <div>
                                    <span class="text-2xl font-bold text-luxury-dark">Rs. {{ $room->price }}</span>
                                    <span class="text-gray-600">/night</span>
                                </div> --}}
                                <a class="w-full" href="{{ route('frontend.singleroom', $room->slug) }}">
                                    <button
                                        class="w-full bg-luxury-gold text-white px-4 py-3 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                                        View Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
