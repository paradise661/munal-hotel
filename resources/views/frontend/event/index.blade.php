@section('seo')
    @include('frontend.seo', [
        'name' => $event_page->seo_title ?? '',
        'title' => $event_page->seo_title ?? $event_page->title,
        'description' => $event_page->meta_description ?? '',
        'keyword' => $event_page->meta_keywords ?? '',
        'schema' => $event_page->seo_schema ?? '',
        'created_at' => $event_page->created_at,
        'updated_at' => $event_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section id="amenities-hero" class="relative h-[600px] flex items-center overflow-hidden mt-20">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{ asset( $event_page->banner_image) }}" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
        <div class="flex items-center space-x-2 text-white/80 mb-4">
            <a href="#" class="hover:text-luxury-gold transition-colors">Home</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-white">{{ $event_page->title ?? 'About Us' }}</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
          <span class="text-luxury-gold">{{ $event_page->short_description ?? 'About Us' }}</span>
        </h1>
        <p class="text-xl text-white/90 max-w-2xl leading-relaxed">
            {!! $event_page->description ?? 'About Us' !!}
        </p>
    </div>
</section>
    <div class="container py-5">

        <div class="row g-4">
            @foreach ($events as $event)
                @php
                    $eventDate = \Carbon\Carbon::parse($event->date);
                    $today = now()->startOfDay();
                    $isExpired = $eventDate->lt($today);
    
                    $formattedDate = $eventDate->format('d M Y');
                    $formattedTime = \Carbon\Carbon::parse($event->time)->format('h:i A');
                @endphp
    
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="event-modern-card shadow-sm">
    
                        <!-- DATE BOX -->
                        <div class="event-date-box {{ $isExpired ? 'expired-bg' : 'upcoming-bg' }}">
                            <h4>{{ $eventDate->format('d') }}</h4>
                            <span>{{ $eventDate->format('M') }}</span>
                        </div>
    
                        <!-- IMAGE -->
                        <div class="event-modern-img">
                            <img src="{{ asset($event->image) }}" alt="{{ $event->name }}">
                        </div>
    
                        <!-- CONTENT -->
                        <div class="event-modern-content">
                            <h3>{{ $event->name }}</h3>
    
                            <p class="event-short-desc">
                                {!! Str::words(strip_tags($event->description ?? ''), 20, '...') !!}
                            </p>
    
                            <ul class="event-meta">
                                <li><i class="fas fa-clock"></i> {{ $formattedTime }} onwards</li>
                                <li><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</li>
                            </ul>
    
                            <a href="{{ route('frontend.eventsingle', $event->slug) }}" class="btn btn-modern">
                                Learn More
                            </a>
                        </div>
    
                    </div>
                </div>
    
            @endforeach
        </div>
    
    </div>
    
@endsection
