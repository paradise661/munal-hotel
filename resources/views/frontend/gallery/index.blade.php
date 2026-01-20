@section('seo')
    @include('frontend.seo', [
        'name' => $gallery_page->seo_title ?? '',
        'title' => $gallery_page->seo_title ?? $gallery_page->title,
        'description' => $gallery_page->meta_description ?? '',
        'keyword' => $gallery_page->meta_keywords ?? '',
        'schema' => $gallery_page->seo_schema ?? '',
        'created_at' => $gallery_page->created_at,
        'updated_at' => $gallery_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[600px] flex items-center overflow-hidden mt-20" id="amenities-hero">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset($gallery_page->banner_image) }}" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a class="hover:text-luxury-gold transition-colors" href="#">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white">{{ $gallery_page->title ?? 'About Us' }}</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
                <span class="text-luxury-gold">{{ $gallery_page->short_description ?? 'About Us' }}</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl leading-relaxed">
                {!! $gallery_page->description ?? 'About Us' !!}
            </p>
        </div>
    </section>
    <section class="py-16" id="gallery-categories">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-luxury-dark mb-4">
                    Discover <span class="text-luxury-gold">Excellence</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Browse through our collection showcasing the finest aspects of luxury hospitality
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="filter-btn px-6 py-2 bg-luxury-gold text-white rounded-full font-medium" data-filter="all">
                    All
                </button>

                @foreach ($albums as $album)
                    <button
                        class="filter-btn px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-medium hover:bg-luxury-gold hover:text-white transition-colors"
                        data-filter="{{ $album->slug }}">
                        {{ $album->name }}
                    </button>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
                @foreach ($albums as $album)
                    @foreach ($album->galleries as $gallery)
                        <div class="gallery-item {{ $album->slug }} group cursor-pointer"
                            data-category="{{ $album->slug }}">
                            <a data-fancybox="{{ $album->slug }}" data-caption="{{ $gallery->title }}"
                                href="{{ $gallery->image }}">
                                <div class="relative overflow-hidden rounded-xl h-80">
                                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                        src="{{ $gallery->image }}" alt="{{ $gallery->title }}" />

                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>

                                    <div
                                        class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <h3 class="font-playfair font-bold text-lg mb-1">
                                            {{ $gallery->title }}
                                        </h3>
                                        <p class="text-sm text-white/80">
                                            {{ $album->name }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </section>
    <section class="py-16 bg-luxury-cream" id="featured-gallery">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                    Featured <span class="text-luxury-gold">Moments</span>
                </h2>
                <p class="text-lg text-gray-600">Capturing the essence of luxury and elegance</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <div class="space-y-6">
                    <div class="h-96 overflow-hidden rounded-2xl group cursor-pointer">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/ad0f2ecacc-7ba558b77bf49e92ef6c.png"
                            alt="luxury hotel grand lobby entrance, marble columns, crystal chandelier, elegant reception area, sophisticated interior design" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="h-48 overflow-hidden rounded-xl group cursor-pointer">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/fc662fdce6-bd4dd027f185e1d0e188.png"
                                alt="luxury hotel business center, modern workspace, conference room, professional meeting environment" />
                        </div>
                        <div class="h-48 overflow-hidden rounded-xl group cursor-pointer">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/71ca3efcb9-c55572f1a398247bb24f.png"
                                alt="luxury hotel fitness center, modern gym equipment, floor to ceiling windows, premium wellness facilities" />
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="h-48 overflow-hidden rounded-xl group cursor-pointer">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/5149130331-a058dbc0c2dc3ccf4eaf.png"
                                alt="luxury hotel garden terrace, outdoor seating area, landscaped gardens, peaceful environment" />
                        </div>
                        <div class="h-48 overflow-hidden rounded-xl group cursor-pointer">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/b0a1e5090f-dc2aa1291fe37649f77b.png"
                                alt="luxury hotel concierge desk, professional staff, elegant lobby service area, premium hospitality" />
                        </div>
                    </div>
                    <div class="h-96 overflow-hidden rounded-2xl group cursor-pointer">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/8ad2163fb0-8a4d048de2aaf7831593.png"
                            alt="luxury hotel private dining room, intimate setting, elegant table presentation, sophisticated atmosphere" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-luxury-dark" id="cta-section">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-playfair font-bold text-white mb-6">
                Create Your Own <span class="text-luxury-gold">Memories</span>
            </h2>
            <p class="text-xl text-white/80 mb-8">
                Book your stay at Luxoria and become part of our gallery of unforgettable experiences
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-luxury-gold text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition-colors">
                    Book Your Stay
                </button>
                <button
                    class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-luxury-dark transition-colors">
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;

                // active button UI
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('bg-luxury-gold', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                });

                button.classList.add('bg-luxury-gold', 'text-white');
                button.classList.remove('bg-gray-100', 'text-gray-700');

                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
