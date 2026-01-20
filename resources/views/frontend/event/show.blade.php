@section('seo')
    @include('frontend.seo', [
        'name' => $eventsingle->seo_title ?? '',
        'title' => $eventsingle->seo_title ?? $eventsingle->title,
        'description' => $eventsingle->meta_description ?? '',
        'keyword' => $eventsingle->meta_keywords ?? '',
        'schema' => $eventsingle->seo_schema ?? '',
        'created_at' => $eventsingle->created_at,
        'updated_at' => $eventsingle->updated_at,
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
            <span class="text-white">{{ $eventsingle->title ?? 'About Us' }}</span>
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
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1500">
            <div class="event-single-card shadow-sm bg-white rounded-4 p-4">

                <!-- Event Image -->
                <div class="event-single-img mb-4">
                    <img src="{{ asset($eventsingle->image) }}"
                         alt="{{ $eventsingle->name }}"
                         class="img-fluid rounded-4"
                         style="height: 380px; width: 100%; object-fit: cover;">
                </div>

                @php
                    $eventsingleDate = \Carbon\Carbon::parse($eventsingle->date);
                    $today = now()->startOfDay();
                    $isExpired = $eventsingleDate->lt($today);

                    $formattedDate = $eventsingleDate->format('d M Y');
                    $formattedTime = \Carbon\Carbon::parse($eventsingle->time)->format('h:i A');
                @endphp

                <!-- Event Info -->
                <div class="event-info-box rounded-4 shadow-sm p-4 mb-4">
                    <div class="row text-center gy-3">
                        <div class="col-6 col-md-3">
                            <i class="fas fa-calendar-alt event-info-icon"></i>
                            <p class="small mb-0">{{ $formattedDate }}</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fas fa-clock event-info-icon"></i>
                            <p class="small mb-0">{{ $formattedTime }}</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fas fa-map-marker-alt event-info-icon"></i>
                            <p class="small mb-0">{{ $eventsingle->location ?? 'N/A' }}</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fas fa-info-circle event-info-icon"></i>
                            <span class="badge status-pill {{ $isExpired ? 'expired' : 'upcoming' }}">
                                {{ $isExpired ? 'Expired' : 'Upcoming' }}
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Description -->
                <div class="event-description">
                    <p class="lead">{!! $eventsingle->description !!}</p>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1500">
            <div class="sidebar sticky-sidebar">
                <div class="recent-events-box bg-white rounded-4 shadow-sm p-4">
                    <h4 class="sidebar-title text-center mb-4" style="color: #d4af37;">Recent Events</h4>
                    <ul class="list-unstyled recent-list">
                        @foreach ($popular_events as $popular_posts)
                            <li class="recent-item d-flex mb-3">
                                <img src="{{ asset($popular_posts->image) }}"
                                     alt="{{ $popular_posts->name }}"
                                     class="rounded"
                                     style="width: 60px; height: 60px; object-fit: cover;">

                                <a href="{{ route('frontend.eventsingle', $popular_posts->slug) }}"
                                   class="recent-title ms-3">
                                   {{ $popular_posts->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    