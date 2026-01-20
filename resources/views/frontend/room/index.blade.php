@section('seo')
    @include('frontend.seo', [
        'name' => $room_page->seo_title ?? '',
        'title' => $room_page->seo_title ?? $room_page->title,
        'description' => $room_page->meta_description ?? '',
        'keyword' => $room_page->meta_keywords ?? '',
        'schema' => $room_page->seo_schema ?? '',
        'created_at' => $room_page->created_at,
        'updated_at' => $room_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[600px] flex items-center overflow-hidden mt-20" id="amenities-hero">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset($abroaroom_paged_page->banner_image) }}" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a class="hover:text-luxury-gold transition-colors" href="{{ route('frontend.home') }}">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white">{{ $room_page->title ?? 'About Us' }}</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
                <span class="text-luxury-gold">{{ $room_page->short_description ?? 'About Us' }}</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl leading-relaxed">
                {!! $room_page->description ?? 'About Us' !!}
            </p>
        </div>
    </section>
    <section class="py-16" id="similar-rooms">
        <div class="max-w-7xl mx-auto px-6">
            {{-- <h2 class="text-3xl font-playfair font-bold text-luxury-dark text-center mb-12">Similar <span class="text-luxury-gold">Rooms</span></h2> --}}
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
                            <h3 class="text-2xl font-playfair font-bold mb-3">
                                <a class="text-luxury-dark hover:text-luxury-gold transition-colors"
                                    href="{{ route('frontend.singleroom', $room->slug) }}">
                                    {{ $room->title }}
                                </a>
                            </h3>
                            <div class="flex items-center space-x-4 text-sm text-gray-600 ">
                                <span><i class="fas fa-ruler-combined text-luxury-gold mr-1"></i>{{ $room->area }}</span>
                                <span><i class="fas fa-users text-luxury-gold mr-1"></i>{{ $room->max_guest }} guests</span>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <a class="w-full" href="{{ route('frontend.singleroom', $room->slug) }}">
                                    <button
                                        class="w-full rounded-full bg-luxury-gold text-white px-4 py-3 font-medium hover:bg-opacity-90 transition-colors">
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
