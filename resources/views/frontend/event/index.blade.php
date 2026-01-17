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
<section id="hero-about" class="relative h-[500px] flex items-center justify-center overflow-hidden mt-20">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover"
            src="{{ asset($event_page->banner_image) }}"
            alt="luxury hotel exterior facade with grand architecture, elegant entrance, manicured gardens, golden hour lighting" />
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-6">
        <h1 class="text-5xl lg:text-6xl font-playfair font-bold mb-6">
            {{ $event_page->title ?? 'About Us' }}
        </h1>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto">
            {{ $event_page->short_description ?? 'About Us' }}
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
